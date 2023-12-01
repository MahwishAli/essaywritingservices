@extends('layouts.web')

@section('title', 'Thesis Writing')
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Best Thesis Writing Services UK	 - Your Secret towards Excellence</h3>
                <p class="text-center">
                    Students in the UK must find ways that lead them to achieve greater things in life. If they stick to their challenging and time-consuming thesis, they won’t be able to find their absolute best. Do you also want an easy way out from all these hectic situations of academic thesis and dissertation writing? Then why waste time being sad and stressed out? Just hire those who are ready to listen to you and serve you anytime you want. Like our best thesis help in the UK. 
                </p>
                <p class="text-center">
                    Our platform is filled with those experts that can resolve your academic assignment issues and write all your thesis papers at hand. You just need to be ready to share your assigned work with our team and get free from all academic hurdles. Hire us now and get free from all thesis writing troubles now!  
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Affordable PhD Thesis Help UK - 100% Guaranteed Academic Success</h3>
                <p class="mt-4">
                    Yes, we know that you want the cheapest thesis writers in the town. Why worry when you are at the hub of best of best thesis help in the UK? As our writers from Bristol, Leicester and Oxford are here just for you, and you can avail them any time. So, relax! And get the services of our expert thesis writers. 
                </p>
                <p class="">
                    Our thesis writing help for students in the UK has opened the door to higher marks in academics. We know that you are also aiming for good grades this year. So, why not make your life easy with the prime assistance of our writing experts and shock the world with great results? It is all about your say, so don’t miss this chance to hire the most experienced writers in the town. Visit our order booking section to find out more about our pocket-friendly charges.  
                </p>
                <div class="">
                    <h4><strong>Get Thesis Writing Help UK from Convenient Writers in the Town</strong></h4>
                    <p class="">
                        Are you one of those who don’t want to get into writing stuff that takes days, weeks and even months? If the answer is yes, then welcome to the group. Our thesis writing services are a perfect fit for you because we know that you always make smart choices for an easy way out from your academic loads. 
                    </p>
                    <p class="">
                        Our thesis help is available for those who don’t want to spend their time on long and never-ending assignments and like to enjoy other ventures of life. So, let's catch up through our online chat support team and get your thesis writing done in a few days. Just leave the text, and we will get to you instantly.    
                    </p>
                </div>
                <div class="">
                    <h4><strong>Our Thesis Writers UK Are Ready to Write For You</strong></h4>
                    <p class="">
                        Our thesis writers, cheap charges, easy order booking and at-hand services are only for you. No matter if you live in Southampton, Salford or Peterborough, our hub of excellent student assignment and thesis help, is open worldwide and in every city of the United Kingdom. 
                    </p>
                    <p class="">
                        Hey, students in Bath, Belfast, and Glasgow, don’t you want to know about our special services for students in the United Kingdom? It has been years since our services have been satisfying students of giant educational institutions in the UK. You must get our services if you want to be at the top of the race to acquire higher marks. Our bachelor's, master’s and PhD’s thesis help platform have been associated with some of the most famous institutions. That’s why you can trust our professional thesis writers, who can write your papers now! Doesn’t it look overwhelming and beneficial? Hey, let us tell you, it’s all about you and your say. So, just chill out and hire us at cheap prices. Our needed information about the assignment writers, prices, services and other various benefits is available on the website. But you can confirm the queries by just leaving a text or contacting us on our shared numbers.    
                    </p>
                </div>
                <div class="">
                    <h4><strong>24/7 Active Thesis Writing UK Service for Students in London, Liverpool & Manchester</strong></h4>
                    <p class="">
                        Our services are not just limited to some famous cities in the United Kingdom. You can contact our team from every city and every part of the world. Our team doesn’t offer limited services, as our platform is the spot for all assignments, dissertations and thesis writers. You can connect with us and ask for any writing services you want to get done on an urgent basis.  
                    </p>
                    <p class="">
                        In a successful career of more than ten years, our services are tags with 24/7 available advantage. That’s why this is an open opportunity for all students in Edinburgh, Salisbury and Bradford to avail those writers that are active all day and ready to listen to their academic problems. Call us and book your order now!    
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">We Offer Top Writers, Cheap Prices & Best Thesis Writing Services London at Hand</h3>
                <p class="mt-4">
                    Our services don’t disappoint regular clients that have faith in us. In reality, it is their trust that is helping us to keep going and opening the doors for students to their academic brilliance. We say what we offer and believe; you can test us out anytime. As our latest reviews of our clients are available on the website, read them out and make up your mind about hiring us. 
                </p>
                <p class="">
                    You don’t need to think more and come up with second thoughts about our services. Plus, you can contact us to confirm your queries. We are aware of the lengthy thesis assignments that students are assigned here in the UK. So, have a chill pill and share your thesis paper brief with our writers. Let our experts help you out without wasting your time.    
                </p>
                <div class="">
                    <h4><strong>Hire PhD Thesis Writing Services UK to Earn Higher Marks in All Subjects </strong></h4>
                    <p class="">
                        Your master’s or PhD’s degree is more important than any other thing in your academic career. That’s why it won’t be a smart move to risk your grade by just writing your own dissertations and thesis. Hiring our writers can be an excellent choice because we know how to help you earn higher marks in all subjects and reach at the top of your academic career.  
                    </p>
                    <p class="">
                        With an easy and few steps away order booking process, you can connect to your writer, who will contact you directly and point out your own inputs in the thesis. Doesn’t this sound great to you? So, our online booking portal is up there. Go and confirm your order of hiring our professional thesis writer. 
                    </p>
                </div>
                <div class="">
                    <h4><strong>Are You Ready to Get Our Thesis Writing Services UK? </strong></h4>
                    <p class="">
                        Do you still have doubts about services? If you have anything to ask, then a direct contact will work out. As our team is professional and will answer all your questions about the services, writers, delivery and benefits. Our services are only for you to come and get yourself relieved from your essays, research papers, dissertations and other assignments.  
                    </p>
                    <p class="">
                        You can take a chance on your school homework and other college assignments. But university-level dissertations and thesis can be the decider of your higher education grades; that’s why you must choose the options wisely. Our services and smart writers are not far away from you; they are waiting for your call of asking for thesis writing help in the United Kingdom. 
                    </p>
                </div>
                <div class="">
                    <h4><strong>Get a Personal Writer for Your Thesis Help</strong></h4>
                    <p class="">
                        Your wait for any reliable solution to your academic load is over now! Yes! You must avail modern solutions for your lengthy thesis pages. In our successful career, we have helped thousands of students in the United Kingdom, and now it is your turn to obtain our services.
                    </p>
                    <p class="">
                        We are offering you the opportunity to hire the best writer from our student assignment help platform in the UK. You must grab the opportunity if you want to get rid of all your university assignments right now because these chances don’t come to your doorstep every day. We know that you feel the need; the need for hiring our writing services UK. 
                    </p>
                </div>
                <div class="">
                    <h4><strong>The Proven Samples of Thesis Writers are Available on the Platform </strong></h4>
                    <p class="">
                        We don’t just offer our services without evidence. You can check the much-awaited samples of all the services. This is how we appreciate our writers and highlight their best work. Our platform is a professional website that cares for all, and every client is like family. You can also be a member of it and get your academic issues resolved.
                    </p>
                    <p class="">
                        Our team is available to listen to you and confirm your order for every assignment and thesis paper. It doesn’t matter if your thesis is in chapters or done halfway; you will only fill out the requirement and suggest us the type of services. Our writers will handle it from there.  
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Say The Name of The Services & We Will Offer Our Best Writers</h3>
                <p class="mt-4">
                    We are the leading UK assignment help that offers all writing services. Our client just needs to say the name of the services, share the short description of the assignment and leave it to our experienced writing team.
                </p>
                <p class="mt-4">
                    Visit us anytime, contact us anytime and book the order anytime. This is your platform where you can ask for every writing service at cheap prices. For further information, you can visit our services page and directly contact our team.
                </p>
                <div class="">
                    <h4><strong>Time is Ticking! Hire Us & Get Over from All Academic Loads Now!</strong></h4>
                    <p class="">
                        Don’t worry if your thesis or dissertation has to go urgently. Reach out to us by leaving a text and sharing your urgent assignment with our team. Within shared time, your assignment work will be submitted to you. So, say bye-bye to your academic stress and avail the services of the best writers in the town. 
                    </p>
                </div>
            </div>    
        </div>
    </div>
</section>

@endsection