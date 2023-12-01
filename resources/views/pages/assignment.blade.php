@extends('layouts.web')

@section('title', 'Assignment Writing')
@section('description', '')
@section('canonical', config('app.app_url'))

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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Secure Your Academic Career With Our Cheap Assignment Writing Service UK</h3>
                    <p class="text-center">
                        Your school, college, or university assignment can be challenging. That’s why you must come up with great ideas to get them done on time. We know that you want to get rid of all your difficult assignments, and we got an ultimate solution for them. A simple way out that is available at hand and can help you anytime you want!
                    </p>
                    <p class="text-center">
                        Have you heard about the best and most experienced assignment writers in the UK? Yes! That is us. Hey, students of London, Liverpool, and Bristol, don’t you want to know the secret of earning higher marks in class and securing your academic career?  
                    </p>
                    <p class="text-center">
                        Welcome to the finest student help platforms that listen to you and offer writers that can write your assignment in hours. You don’t need to search around or ask someone to write your assignment. Just leave a text and book the order and be tension free from all lengthy assignments in the United Kingdom.  
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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Grab On Time Pocket-Friendly Assignment Help London &   Earn Best Grades</h3>
                    <ul class="list-styled ml-4">
                        <li><h5>Need essay samples? Call us now! </h5></li>
                        <li><h5>Is your assignment challenging? Call us now! </h5></li>
                        <li><h5>Need all assignment writing assistance? Call us now! </h5></li>
                    </ul>
                    <p class="mt-4">
                        What is an on-time delivery? You just need to try out our cheap assignment writing service and wait till the deadline. On-time delivery is the innovation of our online hub of student help, where we submit the assignment of the student at the shared time and without delays. 
                    </p>
                    <p class="">
                        A trusted student’s help platform always cares about its clients, and our writers care about your academic future. That’s why we are open to offer the services of our experts in Coventry, Birmingham and all top cities of the United Kingdom.  
                    </p>
                    <p class="">
                        Let’s build trust and help you to be the best in the class. Our cheap services of our master assignment writers are just a few steps away. So, let us be your academic assignment friend and handle all your assignments. Hire us to earn discount writing deals now!  
                    </p>
                    <div class="">
                        <h4><strong>Meet Our Professional Assignment Writers UK & Resolve Your Academic Problems</strong></h4>
                        <p class="">
                            Have you become sick of all your lengthy assignments? So, why don’t you use your smart instincts and shock the world right now? Yes! Hiring an active team of the best assignment writers in Southampton, Derby, and Cambridge can grant you the wish of being the best in the class. 
                        </p>
                        <p class="">
                            You just need to feel the need and hire those who are one click away and affordable for all the students in the United Kingdom. Our assignment writing service is available worldwide and has been showcasing the life of popular schools, colleges and universities in well-known countries. We don’t take your whole time. You just have to say yes to our waving call and book your order now!   
                        </p>
                    </div>
                    <div class="">
                        <h4><strong>We Are Available 24/7 for Your Assignment Writing Help in London, Oxford & Nottingham.</strong></h4>
                        <p class="">
                            Yes! We are at hand all day long. We have been working with a diligent team of writers and a professional team of online chat support experts. No matter if you are from York, Sheffield or Chester, our special editors and proofreaders and assignment writers are available for all students. 
                        </p>
                        <p class="">
                            Doesn’t it look overwhelming and beneficial? Hey, let us tell you, it’s all about you and your say. So, just chill out and hire us at cheap prices. Our needed information about the assignment writers, prices, services and other various benefits is available on the website. But you can confirm the queries by just leaving a text or contacting us on our shared numbers.    
                        </p>
                    </div>
                    <div class="">
                        <h4><strong>Talk to us & Get School, College & University Assignment Help Anytime, Anywhere</strong></h4>
                        <p class="">
                            Your dream of achieving great grades is just one step away. We have samples to show you the finest work of our experienced writers, who have been serving the students for more than decades. No matter if you want assignment writing service for your school, college and university projects. We have a smart team of writers that will handle all your homework, essays, thesis and other lengthy and time-consuming assignments. 
                        </p>
                        <p class="">
                            Your days of academic writing struggle are over. That’s why this is the right time to enjoy the moment and book your order by hiring our expert writers. Hey, students in St Albans, Edinburgh and Hereford, visit our order confirmation section and find out the exciting writing services deals.    
                        </p>
                        <p class="">
                            If you have any assignment that takes too much time and you want to get it written by someone experienced. Then talk to us and share the document; we will handle it all. Just fill in all the requirements for the confirmation of the order and be our most awaited and premium client.    
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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Welcome to the Locale of All Assignment Help Experts UK</h3>
                    <p class="mt-4">
                        You are at the right spot where acquiring every assignment is available at hand. This is the prime hub of creative, smart, diligent and experienced writers. Our trained team is open to taking your urgent offers. With our assignment in few hours’ service, you can book the writing services on the urgent delivery bases. 
                    </p>
                    <p class="">
                        With the easy delivery process, you can confirm all your questions by just connecting with our online chat support team. You just need to leave a message, and our team will get to you. Our British writers serving in the United Kingdom just need your waving signal of order booking, and you are good to go. We understand that you don’t want to spend your whole day writing a stressful assignment and risk your career. That’s why our services are here for you to get free from all your academic loads.   
                    </p>
                    <div class="">
                        <h4><strong>Hire Our Expert for the HND Assignment Help London</strong></h4>
                        <p class="">
                            Marketing and business students have to go into deep research and then come up with great ideas to write their assignments. It takes many weeks for them to submit their assignments. HND assignments can be the toughest for students who just want an easy way out. That’s why availing our services is going to be your smartest move to date. You must get your assignment done from those who have brave writers who mastered the art of assignment writing. Just like our experienced specialists that are at your doorstep and just one click away! 
                        </p>
                    </div>
                    <div class="">
                        <h4><strong>Why Do You Need Our assignment help UK Cheap Services Now?</strong></h4>
                        <p class="">
                            Your academic load will keep increasing at every stage of your life.  You may get used to your current writing assignments but can’t be ready for the upcoming challenges. At this time of the struggle, you need a friend that could help you out in this. When fresh and inexperienced students write the assignment on their own, the risk of grammatical and punctuation mistakes increases. That’s why our dear fellows, this is the right time to break the ice and avail the writing services from our experts. 
                        </p>
                    </div>
                    <div class="">
                        <h4><strong>Book Your Order at Best of Best assignment help London.</strong></h4>
                        <p class="">
                            Every student has the dream of acquiring higher marks and getting A-plus grades in every assignment. Hey, dear young daydreamer, we got some special news for you! We can help you out to be the most intelligent person in your class. Get your assignment written, proofread and edited by our writers and live your dream. You can book the order from any part of the world. Just say the words:  “I need writing services” at our online chat support, and our team will get to you. 
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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Hire Us & Open the Door of Business, Finance, law, nursing assignment writing service UK</h3>
                    <p class="mt-4">
                        You are at our online writing help, and there isn’t any assignment that can’t be written on our platform. So, visit our order booking section, fill out the requirements, pay the cheap prices and wait for the delivery at the shared deadline. We are open taking orders related to your marketing, business, finance, law and nursing assignments. With years of experience in the market, we know what students in the United Kingdom want. So, say the word, and we are here for assistance anytime and anywhere. 
                    </p>
                    <div class="">
                        <h4><strong>Our Best Assignment Help in UK is Your Passage to Higher Academic Marks</strong></h4>
                        <p class="">
                            Want to be the most admiring person in your classroom and need an opportunity to uplift your academic grades? Then you have got the magic stick of the miracles in your hands. So, wave it and see the magic. Our writers will show you how they can use their knowledge and skills to get you free from all your hectic academic assignments. Not just that, there is much more waiting for you on our platform. As our services are free from hidden charges and delivery delays. Join our platform of assignment writers in the UK and hire the best writing services now! 
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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Contact Us If You Need Any Help with Assignments in the United Kingdom</h3>
                    <p class="mt-4">
                        Our writers can be hired after the confirmation of the order. You can book the order online on the website, chat portal and through direct call. Our contact numbers are shared on the website, and our 24/7 chat support team is available to confirm your query related to our writers and offered services. So, this is your chance; take it and avail the fastest writing services in the United Kingdom.  
                    </p>
                </div>    
            </div>
        </div>
    </section>
@endsection