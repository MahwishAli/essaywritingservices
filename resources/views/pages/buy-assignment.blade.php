@extends('layouts.web')

@section('title', 'Buy Assignment')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path() )

@section('content')

<section class="bg-light hero" >
    <div class="container">
        {{-- <h1><strong>Assignment Writing</strong></h1> --}}
        <div class="row">
            <div class="col-md-6 my-auto text-center text-md-left">
                <div class="ml-md-4 mt-5 mt-sm-0">
                    <h1 class="text-primary-color">
                        Grade-Winning Cheap Essay Writing Service UK - Starting from £4 Only <br />
                    </h1>
                    <h4 class="text-dark font-weight-normal mt-2 mb-2">
                        How dreadful it’s to wake up with urgent submission deadlines, stress and no affordable help in the last hours? That’s where we come to the rescue. Our cheap essay writing service UK helps you relieve the burden with praise-worthy essays that your professors will love. Get started today!
                    </h4>
                    <div class="d-flex flex-column flex-lg-row pt-4">
                        <a href="{{route('order')}}" class="borderbtn1 btn-primary case-upper text-center mx-2 mb-2 mb-lg-0">
                            Order Now
                        </a>
                        <a href="javascript:void(Tawk_API.toggle())" class="borderbtn2 btn-outline case-upper text-center mb-2 mb-lg-0">
                            Live chat
                        </a>
                        </div>

                        <div class="d-flex col-sm-1  justify-content-md-start mb-5 flex-lg-row pt-4 ">
                        <div class="d-flex flex-column text-black">
                            <a href="#" >
                            <img class="d-block mx-4 mb-lg-0 " src="{{asset('imgs/reviewsbank.png')}}" width="70" height="40"  alt="Essay Writing Service"></a>
                            <div>
                                <span class="">4.9</span>
                                <div class="d-inline">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                            <div class="d-flex flex-column">
                            <img class="d-block mx-2 mb-2 mb-lg-0" src="{{asset('imgs/images/l1.jpg')}}" width="130" alt="Essay Writing Service">
                            <div>
                                <span class="">4.9</span>
                                <div class="d-inline">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="ml-3 d-flex flex-column">
                            <img class="d-block mb-2 mb-lg-0" src="{{asset('imgs/images/l2.jpg')}}" width="140" alt="Essay Writing Service">
                            <div>
                                <span class="">4.9</span>
                                <div class="d-inline">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>

                        </div>
                </div>
            </div>
            <div class="col-md-6 my-auto hero-bg-img">
                <div class="flat-form">
                    <div class="flat-heading">Calculate <strong>Your Price</strong></div>
                    <div class="flat-body">
                        <form action="#">
                            <div class="form-group">
                                <select class="form-control submit-control @error('paper_type') is-valid @enderror"
                                    data-value="{{ $data ?? '' ? $data->value : old('paper_type') }}"
                                    name="paper_type">
                                    <option selected disabled hidden>Select Paper Type</option>
                                    @foreach ($paperTypes as $paperType)
                                        <option value="{{ $paperType->name }}">
                                            {{ $paperType->name ?? '-' }}</option>
                                    @endforeach
                                </select>
                                @error('paper_type')
                                    <div style="color:rgb(252, 10, 10);">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group clearfix">
                                <select
                                    class="get-fare form-control mine-control @error('academic_level') is-valid @enderror"
                                    id="academic_level"
                                    data-value="{{ $data ?? '' ? $data->value : old('academic_level') }}"
                                    name="academic_level">
                                    <option selected disabled hidden>Select Academic Level</option>
                                    @foreach ($academic_levels as $academic_level)
                                        <option value="{{ $academic_level->id }}">
                                            {{ $academic_level->name }}</option>
                                    @endforeach
                                </select>
                                @error('academic_level')
                                    <div style="color:rgb(248, 12, 12);">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="get-fare form-control @error('deadline') is-valid @enderror"
                                    id="deadline"
                                    data-value="{{ $data ?? '' ? $data->value : old('deadline') }}" name="deadline">
                                    <option selected disabled hidden>Select Deadline</option>
                                    @foreach ($deadlines as $deadline)
                                        <option value="{{ $deadline->id }}">
                                            {{ $deadline->name .
                                                ' / ' .
                                                \Carbon\Carbon::now()->addDays($deadline->duration_in_days)->format('D, M j') }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('deadline')
                                    <div style="color:rgb(252, 7, 7);">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select class="get-fare form-control @error('number_of_pages') is-valid @enderror"
                                    name="number_of_pages"
                                    data-value="{{ $data ?? '' ? $data->value : old('number_of_pages') }}"
                                    id="no_of_pages">
                                    <option value="1" selected="selected" disabled="disabled" hidden>Select
                                        Number of Pages
                                    </option>
                                    @for ($p = 1; $p <= 200; $p++)
                                        <option value="{{ $p }}"> {{ $p * 250 }} Words -
                                            {{ $p }} Pages</option>
                                    @endfor
                                </select>
                                @error('number_of_pages')
                                    <div style="color:rgb(252, 11, 11);">{{ $message }}</div>
                                @enderror
                            </div>
                            <h4 class="text-center panel-heading"
                                style="background-color: rgb(252,252, 253, 0.7); border-radius: 4px;">Total Amount: £
                                <span id="total-cost">0</span></h4>
                            <div class="text-center my-3">
                                <a href="{{ route('order') }}" class="btn-primary case-upper mx-2 mb-2 mb-lg-0">
                                    Place Order
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
{{-- img divider --}}
<div class="img-divider">
    <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
</div>
{{-- Trust Section --}}
<section class="mt-2 text-center py-5 bg-white">
    <h4 class="pb-5 main-heading">Trusted By Students of:</h4>
    <div class="trusted">
        <img src="{{ asset('imgs/images/l3.jpg') }}" alt="Essay Writing Service">
        <img src="{{ asset('imgs/images/l4.jpg') }}" alt="Essay Writing Service">
        <img src="{{ asset('imgs/images/l5.jpg') }}" alt="Essay Writing Service">
        <img src="{{ asset('imgs/images/l6.jpg') }}" alt="Essay Writing Service">
        <img src="{{ asset('imgs/images/l7.jpg') }}" alt="Essay Writing Service">
        <img src="{{ asset('imgs/images/l8.jpg') }}" alt="Essay Writing Service">
    </div>
</section>

{{-- img divider --}}
<div class="img-divider">
    <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
</div>
<section class="mt-2 section5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 px-5">
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Buy Assignment Online in UK From the Masters of Academic Writing</h3>
                <p class="text-center">
                    The stress due to your boring and lengthy assignments is not going to end unless you find the best solution for it. What? You don’t know an easy way out! Relax; we are here for you to offer those services you have been waiting for a long time.  
                </p>
                <p class="text-center">
                    Hey! Have you ever heard about our assignment paper buy online service in the United Kingdom? Yes! This platform is the hub of opportunities to be at the top of the class and the spot for ultimate solutions for lengthy assignments!     
                </p>
                <p class="text-center">
                    How to hire us? Leave a message to our online chat support, contact us on the shared numbers, or directly book the order on our order booking section. Otherwise, our team is here to help you out with every issue regarding your school, college, and university assignments. So, just be the smarty one and hire us now!   
                </p>
            </div>    
        </div>
    </div>
</section>

{{-- img divider --}}
<div class="img-divider">
    <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
</div>
<section class="mt-2 section5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 px-5">
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Hey You! Lower Your Academic Loads & Buy Assignment Service from UK Writing Experts</h3>
                <p class="mt-4">
                    We call for smart, intelligent, and energetic students in London, Bristol, and Oxford to come here and avail our services. There are many reasons that reveal why you need our services. But the most important thing is your time which should not be compromised at any stage. We know that students must show their absolute best to be the highlight of the class. That’s why you shouldn’t spend your whole time writing hectic assignments.   
                </p>
                <p class="">
                    Availing of our services and hiring our writers is the best you can do if you have many things to do in your life. As it is all about freeing yourself from all the stressful situations due to academic loads. So, what are you waiting for? We are also available in Nottingham, Birmingham, and York.    
                </p>
                <div class="">
                    <h4><strong>Come to Our Platform & Buy School Assignments Writers at Cheap Prices. </strong></h4>
                    <p class="">
                        Every assignment and homework can be written on our platform in the United Kingdom. Just say the services, and we will offer you experienced writers that have proven themselves in the market. Obtain writing services for those who have been serving school students for more than ten years. This makes us one of the top student assignment helpers in the United Kingdom. So why to miss this chance to hire the best of the best in Salford, Peterborough, and Chichester? This platform is for you to come and get the finest assignment writing services.  
                    </p>
                </div>
                <div class="">
                    <h4><strong>Buy College Assignments & Grab the Higher Marks in Every Subject </strong></h4>
                    <p class="">
                        Don’t you miss your exciting and energetic college days? We know that you want to go back in time far away for homework, daily assignments, and weekly writing projects. That’s why you must feel the need for services that are just a few steps and one text away.  
 
                    </p>
                    <p class="">
                        Students are always in search of the best resource to resolve their academic problems. But you should choose those who have trusted connections with thousands of students in the United Kingdom. Don’t miss the at-hand services and get your assignment written by our expert writers now!     
                    </p>
                </div>
                <div class="">
                    <h4><strong>BUY University MBA & PhD Assignments & From Professional UK Writers</strong></h4>
                    <p class="">
                        Our writers are professional and can offer their best work to you to achieve A-plus in every subject. Similarly, they have been associated with the leading institutions in Glasgow, Durham, and all famous cities of the United Kingdom. It means you can trust us and let us help you to be the highlight of your class. In your university life, you must avail those services that save your time and help you to prepare yourself for annual examinations. That’s why share all your assignments with us and get them all written under the shared deadlines.  
                    </p>
                </div>
            </div>    
        </div>
    </div>
</section>

{{-- img divider --}}
<div class="img-divider">
    <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
</div>
<section class="mt-2 section5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 px-5">
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Buy Cheap Assignment UK That Offers the Best Writers, On-Time Delivery & Money Back Guarantee Advantage </h3>
                <p class="mt-4">
                    Our platform won’t charge you more than others. As our services are less expensive and every service comes with special discounts and benefits. Go and visit our order booking section to learn more about our prices and advantageous benefits. We know how to take care of our valuable clients; that’s why all services are at hand and don’t require extra time or delays in the submission. Hire us because there are many benefits waiting for you at our finest assignment writing services in the United Kingdom.  
                </p>
                <div class="">
                    <h4><strong>Pay the Pocket-Friendly Prices & Buy Assignment UK Services Now </strong></h4>
                    <p class="">
                        What is great about our on-time UK writing services? At our platform, it is all about your say, and we respect your time here. That’s why our offered services are tagged with affordable and cheap prices. You are free to read out the latest positive reviews of our premier clients about our services.   
                    </p>
                    <p class="">
                        You don’t need to pay more to be our premier client. Just sign in for free and avail of our services. Our proven assistance doesn’t end in the United Kingdom. It has been more than a decade since we have been offering our services in the UK. Now we are available to students worldwide. So, reach out to us and get the service now!   
                    </p>
                </div>
                <div class="">
                    <h4><strong>Tell Us How You Want It & Buy Custom Assignment Anytime, Anywhere</strong></h4>
                    <p class="">
                        Our writers are ready to listen to you. Just share the brief of the assignment and speak with our team about the format and length of the assignment. Our writers will take it from there and will submit your custom assignment at the share deadline. We are open to multiple revisions, and you can ask for the changes anytime, anywhere.     
                    </p>
                </div>
                <div class="">
                    <h4><strong>Save Your Money & Pay Less than Others</strong></h4>
                    <p class="">
                        We have made our services the cheapest in the town. Our writers are affordable for all students in the United Kingdom. So, relax and select your intended service that is just one click away from you. Samples of the finest work of our expert writers are displayed on the website. Check them out and order your assignment writing services.    
                    </p>
                </div>
            </div>    
        </div>
    </div>
</section>

{{-- img divider --}}
<div class="img-divider">
    <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
</div>
<section class="mt-2 section5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 px-5">
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Talk to Us, Select the Service, Order Assignment & Buy Assignment at hand in just a Few Hours!</h3>
                <p class="text-center mt-4">
                    Our order booking is easy and just takes a few seconds. You just have to fill out the section and pay the cheap prices. You are free to contact us and hire our services anytime you want. As our team is available 24/7 in the United Kingdom and all over the world. So, let's connect and make your life free from academic loads in the UK. 
                </p>
            </div>    
        </div>
    </div>
</section>
@endsection
