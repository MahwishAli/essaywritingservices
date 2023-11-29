<?php

namespace App\Http\Controllers\Web;

use App\Fare;
use App\Http\Controllers\Controller;
use App\Http\Requests\GuestFareRequest;
use Illuminate\Http\Request;

class FareController extends Controller
{
    public function guest(GuestFareRequest $request)
    {
        // return $request->all();
        return Fare::where(['academic_level_id' => $request->academic_level_id, 'deadline_id' => $request->deadline_id])->firstOrFail();
    
    }
}
