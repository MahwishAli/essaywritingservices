@extends('layouts.web')

@section('title', 'Coursework Writing')
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Most Trusted & Helpful Online Coursework Writing Services UK</h3>
                <p class="text-center">
                    Coursework grades are the deciders of your academic capabilities. It doesn’t matter how lengthy the assignments and exams are; the final results decide your academic level. British students in London,  Leicester, and Liverpool must work hard and give their best in hectic assignments to earn higher grades. But not you, my friend. This is the time to stop and relax! Students in the UK must find ways that lead them to achieve greater things in life. If they stick to their challenging and time-consuming thesis, they won’t be able to find their absolute best. Do you also want an easy way out from all these hectic situations of academic thesis and dissertation writing? Then why waste time being sad and stressed out? Just hire those who are ready to listen to you and serve you anytime you want. Like our best thesis help in the UK. 
                </p>
                <p class="text-center">
                    Chill out because our coursework writers got your back. Yes! We can help you here and free you from all the lengthy assignments right now. If you haven’t heard about our leading and demanding platform, then don’t worry. Our services will speak all about our platform. You just book the order if you want to get your Coursework assignments written in just few hours.  
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Our Coursework Help London is Your Door to Come Out on Top in Exams</h3>
                <p class="mt-4">
                    Students in Coventry, Southampton and Nottingham have to update their assignment writing approach and get help from the best and finest coursework writers.  Your secret is safe with us, and we can assist you with how you can be at the top of the class. Just follow the order booking process and avail our coursework writing services in Portsmouth, Bradford and Exeter.  
                </p>
                <p class="">
                    You should be the decider of your future, and we are sure that you have great things in mind. So, why spend most of your time on these boring and time-consuming assignments? We know that you have to be the best in all the assignments of the coursework curriculum. That’s why we are offering our expert coursework writers to write all your subject assignments.   
                </p>
                <div class="">
                    <h4><strong>Share Your Assignments With Best Coursework Writers UK </strong></h4>
                    <p class="">
                        Contact us if you need coursework help right now because you must submit your assignment before the deadline and get over of the academic load. Our writers care for you. That’s why they are ready to write your assignment and lower the burden of all coursework assignments. We think that your school, college and university days must be memorable with fun activities that should be remembered for the rest of your life. So, you must not spend all your time completing your coursework assignment. You can book your order and hire us now! 
                    </p>
                    <p class="">
                        No matter if you are not from Leeds, Chester or Sheffield, our services are open in all cities of the United Kingdom. So, take a moment and share all your assignments that should be written under the limited time and let us do what we are known for.    
                    </p>
                </div>
                <div class="">
                    <h4><strong>Get Cheap & At Hand Coursework Writing Help Online Services in London, Birmingham & York</strong></h4>
                    <p class="">
                        Our coursework writers know that students can only afford pocket-friendly prices. That’s why our coursework writing services are at hand at the cheapest charges. You can avail of our special discount offers after signing in to the order platform and hiring our coursework help now.
                    </p>
                    <p class="">
                        Students of Durham, Worcester and Doncaster must be ready to get all the benefits of writing services in the town. We know how it feels to be the best in the business. Now it is your turn to be the best in the class and submit all your assignments with our 24/7  available coursework help in the United Kingdom.     
                    </p>
                    <p class="">
                        Our British writers have spent years in top educational institutions in the United Kingdom. They are the reason we have been helping students with our reliable coursework help in all the cities. So, grab this opportunity and avail the finest service of our active coursework experts now!     
                    </p>
                </div>
                <div class="">
                    <h4><strong>I Need Coursework Writer UK on Urgent Basis.</strong></h4>
                    <p class="">
                        Did you ask for our coursework expert? Here we are to resolve all your academic problems. Share with us all your assignments, projects and essays and free yourself from all the burdens. Our students have been serving students to offer them a lifestyle free from lengthy assignments. Your coursework writing projects must need sustainable solutions, and we know to save you from academic stress. 
                    </p>
                    <p class="">
                        You just have to say yes to our services and let our writers do the job. In our order booking section, you will be asked some basic information about the coursework assignments and pay the charges for the confirmation of the order. Within the shared deadline, your delivery will be submitted to your doorsteps. For an easy and quick delivery, hire our writers now!    
                    </p>
                </div>
                <div class="">
                    <h4><strong>Avail Best Coursework Writing Service UK & Resolve Your Academic Issues Instantly</strong></h4>
                    <p class="">
                        We know that students have to be quick to cover their coursework. Similarly, they must be active all the time to give their physical examinations. You must make your timetable to handle these academic activities. Otherwise, you can choose the smart way. Hiring the best writing services in the United Kingdom.  
                    </p>
                    <p class="">
                        Share all your issues with our 24/7 active chat support team, who will directly share your issues with our writers after the order booking process. You can ask anything in between the submission of your assigned task. As we respect your time and love to confirm all your queries about the services and price charges.     
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Book the Order & Get Reliable Writers, Cheap Charges & Fastest Online Coursework Help UK</h3>
                <p class="mt-4">
                    We are open to taking orders anytime you want. Just fill out the requirements, and our writers will start writing your assignment with their talented academic writing skills. We respect your response and take criticism positively. You can go and check our testimonial section, which is filled with various positive reviews from students in Glasgow, Truro and all cities in the United Kingdom.
                </p>
                <p class="">
                    How long does it take to write your lengthy coursework assignments and writing projects? It all depends on the service you want and how much time it takes. But we also welcome urgent basis orders that must be done in under a few hours. So, if you have any assignment that must be written within 24 hours, then select urgent service of coursework writing and get the delivery on time.     
                </p>
                <div class="">
                    <h4><strong>Smart & Experienced Coursework Writers At Hand in Bristol, Manchester & Belfast</strong></h4>
                    <p class="">
                        Our expert writers are the strength of our platform. Their active approach has helped us offer our services in all the cities of the United Kingdom. Your positive response about our writers has always motivated us to be the best in the town and offer all the writing services with open arms. 
                    </p>
                    <p class="">
                        It has been more than a decade in student assignment writing help, and our record of students writing assistance is increasing every day. Our writers have cracked the code for how we can help students to get free from all the hectic assignments. That is the reason our services are available worldwide. 
                    </p>
                </div>
                <div class="">
                    <h4><strong>Grab 100% Plagiarism-Free Coursework Help in the UK</strong></h4>
                    <p class="">
                        Our submitted coursework assignments and essays are drafted with great research by our writers. With their proven hands in the market, they know how important it is to produce uncopied writing material. That’s why free yourself from all doubts about our services and upload your assignment to our online order booking section.   
                    </p>
                    <p class="">
                        Your assignment is submitted after multiple research from our proofreading team. As we have a strict policy of delivering assignments with zero plagiarism. You can come here and ask for proofreading and editing of your written work. As our platform for all coursework assignments is known as the hub of all British assignments in the United Kingdom.  
                    </p>
                </div>
                <div class="">
                    <h4><strong>Seize the Opportunity of Coursework Writing Services With the Benefit of Multiple Revisions </strong></h4>
                    <p class="">
                        Your uploaded assignments are saved, and you should not need to worry about them. Our writers know how to draft your coursework project with attractive formal writing styles. Our active chat support team will inform you about the updates on your assignments. You can ask for changes and extra additions anytime you want. It means that our writing service platform is the academic help that only listens to you. So, take a moment and avail the opportunity of hiring our writers now! 
                    </p>
                </div>
                <div class="">
                    <h4><strong>Sign Up & Obtain the Advantage of Money Back Guarantee on Every Coursework Writing Assignment</strong></h4>
                    <p class="">
                        The sign-up on our website is free for all students. After the easy signup, you will be able to get all the informative notifications of our upcoming services and discount offers. We have full confidence in our writers who write your assignments by doing deep research. Our platform is open to receiving your feedback, as we accept every criticism and respect your response. We offer various benefits to our clients, and the money-back guarantee advantage is one of them. So, our online student help platform is the most reliable writing spot in the United Kingdom. 
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Talk to Us & Acquire All Coursework Writing Services at Cheap Prices</h3>
                <p class="text-center mt-4">
                    Our at-hand services are waiting for you. The active team is ready to receive your order and submit the coursework assignment on time. You can avail other services anytime you want. Just visit our services section and learn about all offered services at cheap prices. 
                </p>
                <p class="text-center mt-4">
                    It is just a game of a few seconds to hire our writers. Just book your order on our online booking areas or just leave a message on our chat support portal. Our team will reach out to you and confirm your order in a few seconds. So, say yes to our online coursework writers and book your order now! 
                </p>
            </div>    
        </div>
    </div>
</section>

@endsection