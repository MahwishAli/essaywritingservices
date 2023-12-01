@extends('layouts.web')

@section('title', 'Dissertation Writing')
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Get Quality & Well Researched Work at Cheap Dissertation Writing Services UK</h3>
                <p class="text-center">
                    How much time does it take to write an authentic and well-researched dissertation for a master’s or PhD dissertation? What if we say that your research papers for MBA can be written in a few days? Yes! Everything is possible at dissertation writing services London. Why don’t you find it out by sharing your assigned work at our dissertation help writing service and hire our expert dissertation writers?
                </p>
                <p class="text-center">
                    If you are a smarty and know how to get rid of a thesis and dissertation, then you must have heard about our best dissertation writing services in the United Kingdom. Our writer experts serving students in Birmingham, Manchester and all cities of Great Britain can handle all your dissertations and deliver you the assigned work on time at the shared deadline. This advantageous service of fast dissertation writers must excite you to get our services right now!   
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Say Hello to Our Cheap Dissertation Help UK & Kick Off Your Successful Academic Journey</h3>
                <p class="mt-4">
                    Why to worry when you are at the most affordable and friendly dissertation help writing service in the United Kingdom? Our dissertation experts and active chat support team welcome you to share all your academic writing problems and get them resolved on time and at cheap prices. No matter how long the dissertation is and how long the world counts you are assigned. With low and fixed prices, we offer our top dissertation writers along with a hundred percent plagiarism-free benefits.   
                </p>
                <p class="">
                    You must get our services if the time of your dissertation is going to hit the deadline. Our diligent team working in various cities of the United Kingdom is ready to help you achieve A grade marks. Students in Bristol, Leicester and Oxford must obtain these services and get themselves free from lengthy dissertation writing loads.    
                </p>
                <p class="">
                    Our smart dissertation writers are here to write your papers within the shared deadline. It means no need to take the stress, and it is time to hire one of the best dissertation making companies in the United Kingdom.     
                </p>
                <div class="">
                    <h4><strong>Avail Top Notch Dissertation Writers in UK under Pocket-Friendly Prices</strong></h4>
                    <p class="">
                        We know that students can’t trust inexperienced and mediocre writers to write their research papers and dissertations. But our MBA and PhD writing service is packed with those writers who have spent years serving the students of the UK. That’s why you can trust us and hire our dissertation writers, who can be your academic friends. 
                    </p>
                    <p class="">
                        In this fast-pacing time, you should not miss the opportunity of hiring the best and most proven dissertation experts who can write your whole assignment and thesis reports. Don’t worry; your secret is safe with us. You just need to share your assigned document with our team and fill out the requirement; we will take that from there and submit the dissertation on time.   
                    </p>
                </div>
                <div class="">
                    <h4><strong>Buy Dissertation Writing Service UK & Prove Your Academic Excellence</strong></h4>
                    <p class="">
                        MBA and PhD students must leave their mark in order to prove themselves. The best thing you can do is to be at the top of your academic class and show the world that you are the best. We know your dream to be the best is just a few steps away, and we can assist you in how to be the highlight of your classroom. 
                    </p>
                    <p class="">
                        All students know that academic grades matter, and for PhD students, grades are deciders for future upcoming opportunities. That's why we are calling the students in Norwich, Leeds and Chester to come here and get their dissertations written now! Our writers are active 24/7 in writing all assignments and dissertations of all subjects and expertise. So, this is your chance, dear friend, and talk to us now!     
                    </p>
                </div>
                <div class="">
                    <h4><strong>Your Assigned Work is the First Priority of Our Dissertation Experts UK</strong></h4>
                    <p class="">
                        Visit our online order booking section and find out all about our charges. Otherwise, our website will directly lead you to our team, which is open to discuss and confirm all your queries. Your dissertation papers can be challenging, but it is a piece of cake for our expert writers, who are admired by hundreds of students in the United Kingdom.
                    </p>
                    <p class="">
                        One of the reasons for our overnight success in offering students help with the diligent work of our writers, who have served for more than a decade. As there is a writer waiting for you to write your world and get you free from all the struggles and hurdles in writing your dissertations.    
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Is There Any Most Reliable & At Hand Dissertation Help Near Me?</h3>
                <p class="mt-4">
                    Did you ask for our smart, creative and affordable writers? Yes! Our services are here for you to come and get our services in writing your dissertations in all subjects and courses. Just share the type of service you want at our online order booking section and wait till the given deadline. Our most reliable team will deliver your work without asking for extra time. 
                </p>
                <p class="">
                    Our professional team is the reason that we have managed a hold in the United Kingdom. The offered services don’t involve any hidden charges policy, and our every work is proofread and edited by our experts before the submissions. So, relax! And hire us now!     
                </p>
                <div class="">
                    <h4><strong>Get Special Discount Deals with Every Medical Dissertation Writing Services</strong></h4>
                    <p class="">
                        Our online student help website is a platform of benefits where every student can get their homework, assignment, thesis paper and dissertation done at cheap prices. Visit daily and earn discount deals. Our services don’t include extra charges for revision, and other asked additions along with the assigned dissertations. As it is all about your chosen services and selected word count. 

                    </p>
                    <p class="">
                        The tagged charges with the services are attached with special discount deals. So, you must choose them without having a second thought, as the prices are cheap and the services are over the top. Medical students know how hard their dissertations can be. But from our experience, it is just a game of a few days. So, assign us and get your medical dissertation crafted with great research and correct formation. Our expert writers are the strength of our platform. Their active approach has helped us offer our services in all the cities of the United Kingdom. Your positive response about our writers has always motivated us to be the best in the town and offer all the writing services with open arms.  
                    </p>
                </div>
                <div class="">
                    <h4><strong>Finance, Marketing, Law & Business Dissertation Writing Help UK At Hand</strong></h4>
                    <p class="">
                        Students spend weeks and even months writing their dissertations. It takes restless days and nights for them to deliver their dissertations on the submission date. We know that you don’t want to spend your whole time on these stressful dissertations and want a simple working idea.    
                    </p>
                    <p class="">
                        Hey, smart students in Portsmouth, Norwich and Lancaster, we know that you are facing various problems in writing your finance and law dissertations. Why are you not taking help from the best in the business? Yes! Our dissertation writing assistance is in your hometown, and now you can avail our writing services at pocket-friendly prices. So, rejoice in happiness and reach out to us right now! 
                    </p>
                </div>
                <div class="">
                    <h4><strong>Mathematics, Commerce & Nursing Dissertation Help UK at Your Doorstep</strong></h4>
                    <p class="">
                        Which is the most challenging dissertation in PhDs? According to academic writing experts, mathematics, finance, and nursing dissertations are very hard to crack. That’s the reason it takes a month to submit the papers. In most cases, students ask for extra time. But at our online dissertation service, there is no need to request for extra time. You have to book the order and wait for the shared deadline to arrive. Our special service of dissertation writing in the United Kingdom has helped many students in the successful reign of more than a decade. Our platform is only for you to come and hire our master writers in the UK.  
                    </p>
                </div>
                <div class="">
                    <h4><strong>Case Study, Narrative & Scientific Research Dissertation Help in UK</strong></h4>
                    <p class="">
                        We accept every type of dissertation and are open to revising our submitted material multiple times. You can also take benefit from our money-back guarantee services. All these advantages are just for the students of the UK. They need to get themselves out of all lengthy assignments, theses and dissertations. So, upload the brief of your dissertation and get the writing services now!  
                    </p>
                </div>
                <div class="">
                    <h4><strong>School Homework, Collage Assignment & University Dissertation Help in UK</strong></h4>
                    <p class="">
                        Our writing services don’t have boundaries and limitations. With an easy order booking process, you can obtain our services in every part of the United Kingdom. No matter if it’s school homework, college assignments or university dissertations. Just speak the name of the services, choose the word count, pay the charges and wait for the submission date of the order.   
                    </p>
                </div>
                <div class="">
                    <h4><strong>Reliable MBA & PhD Dissertation Writing Services UK</strong></h4>
                    <p class="">
                        Students must have heard about our convenient and fast writing services in the UK. If you want to learn about all our assignment services, then visit our service. Otherwise, connect with our team through online chat support or contact us on our phone numbers shared on the website.  
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Sign in & Be a Premium Member of Our Top Dissertation Writing Company, Worldwide</h3>
                <p class="text-center mt-4">
                    Our sign-up process is free for all students. You don’t need to search around to find a dissertation writer because our services are just one click away, and your order of dissertation writing will be booked in just a few seconds. Save your time and be our member. After free sign-up on our platform, you will be able to get notifications of our upcoming writing services and special discount offers. So, this opportunity should not be missed; Sign in and hire our services and get your dissertation paper at hand. 
                </p>
            </div>    
        </div>
    </div>
</section>
@endsection