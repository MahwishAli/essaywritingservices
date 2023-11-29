<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Country;
use App\Deadline;
use App\EducationLevel;
use App\Fare;
use App\File;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Mail\OrderAdminMail;
use App\Mail\OrderMail;
use App\Order;
use App\PaperType;
use App\ReferenceStyle;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function index()
    {
        $paperTypes = PaperType::all();
        $subjects = Subject::all();
        $referenceStyles = ReferenceStyle::all();
        $academic_levels = AcademicLevel::orderBy('id','asc')->get();
        $deadlines = Deadline::all();
        $countries = Country::all();

        return view('pages.order', compact('paperTypes', 'subjects', 'referenceStyles', 'academic_levels', 'deadlines', 'countries'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }

    // public function thanks()
    // {
    //     return view('pages.thank-you');
    // }

    public function sendOrderMail(OrderRequest $request)
    {
        // return $request->all();

        if ($request->hasfile('emailAttachments')) {
            $fileSize = 0;
            $fileQty = 0;
            foreach ($request->file('emailAttachments') as $file) {
                $fileSize += $file->getSize();
                $fileQty = $fileQty + 1;
            }

            if ($fileQty > 10) {
                $request->session()->flash('message', 'file quantity exceeded the limit.');
                return redirect()->route('order.now');
            }

            if ($fileSize >  25000000) {
                $request->session()->flash('message', 'file size exceeded the limit.');
                return redirect()->route('order.now');
            }
        }

        $fare = Fare::where(['academic_level_id' => $request->academic_level, 'deadline_id' => $request->deadline])->firstOrFail();

        $request->merge([
            'cost_per_page' => $fare->per_page_price,
            "total_price" => ($fare->per_page_price * $request->number_of_pages),
            'academic_level' => $fare->academic_level->name,
            'deadline' => $fare->deadline->name,
        ]);

        $files = [];

        DB::beginTransaction();
            $order = Order::create($request->all());

            if ($request->hasfile('emailAttachments')) {
                foreach($request->file('emailAttachments') as $file)
                {
                    $fileName = uniqid().'_'.time().'_'.$file->getClientOriginalName();
                    $filePath = $file->storeAs( 'uploads' , $fileName, 'public');

                    array_push( $files, $filePath);

                    File::create([
                        "order_id" => $order->id,
                        "file_path" => $filePath
                    ]);
                }
            }
            // Send mail to user
            Mail::to($request->email)->send(new OrderMail($request, $files));

            // Send mail to admin
            Mail::to(env('MAIL_FROM_ADDRESS', 'info@essaywritingservices.co.uk') )->send(new OrderAdminMail($request, $files));

        DB::commit();

        return view('pages.thank-you', compact('order'))->with('success', 'Thank you for reaching out!');
    }
}
