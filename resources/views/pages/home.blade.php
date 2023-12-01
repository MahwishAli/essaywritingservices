@extends('layouts.web')

@section('title', '#1 Cheap Essay Writing Services in UK - Genuine Essays')
@section('description', 'Ace Essay Writing Services London, UK Providing Best Solution to the University Students. Get Cheap Essay Writing Service in UK From Perfect Essay Writers')
@section('canonical', config('app.app_url')  )

@section('content')
    {{-- Hero Section --}}
    <section class="bg-light hero">
        <div class="container pt-3">
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
                                                          <!--<img class="d-block mx-2 mb-lg-0 " src="{{asset('imgs/reviewsbank.png')}}" width="70" height="25" alt="Essay Writing Service">-->
                          <!--<div class="d-flex col-sm-1 justify-content-start justify-content-md-start mb-5 flex-lg-row pt-4 ">-->

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
    {{-- How it works Section --}}
    <section class="mt-2">
        <div class="container py-5 hand-bg-img">
            <div class="row">
                <div class="col-sm-12 col-xl-8">
                    <h2 class="h2 text-white">
                        Get Your Essays from the Top Essay Writer UK Team who are the Masters of their Craft
                    </h2>
                    <ul class="ul">
                        <li>
                            <p class="li_p">
                                Many times when you’re looking to seek professional help, it becomes difficult to decide who you should consult for assistance. Since, writing an A-grade essay requires expertise on the subject, a knack for writing and exceptional style to win the grades, students shouldn’t take the burden on themselves. 
                            </p>
                        </li>
                        <li>
                            <p class="li_p">
                                Here at Essay Writing Services, we have a top-notch team of writers who can assist you in writing excellent essays regardless of the subject. Not only they can assist but can also help you in editing your essays. Whether you want to take help from Professors, Business Experts or Writers, you can contact our team without any hassles and pursue your academic journey with shining grades. 
                            </p>
                        </li>
                        <li>
                            <p class="li_p">
                                Apart from the prolific essay writers, our cheap reliable essay writing service UK also guarantees Quality and research-driven submissions. From brainstorming ideas to generating craft based on your requirements, you can get in touch with our team to have a seamless experience and get away with the academic load that’s causing sleepless nights and trouble.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    
    {{-- How Much Will it Cost Section --}}
    <section class="mt-2 section5 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                    <img src="{{ asset('imgs/images/part.png') }}" alt="Essay Writing Service" class="w-100" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 text-center text-sm-left px-5">
                    <h3 class="h2 py-3 main-heading text-primary-color text-center">
                        How Much Will it Cost if I Hire You to “Write My Essay UK?”
                    </h3>
                    <p class="text-dark-gray mb-3">
                        Our service charges start as low as £4/page. The pricing exceeds as per the requirements and the complexity of the subjects but no matter how extended the requirements are, our pricing will always remain affordable for students. That’s because we understand how tough it’s for students to take out a budget to hire cheap UK essay writers. Some writers are way too expensive while others who are budget-friendly don't seem to provide Quality services. So, it becomes hard to find a balance between both. 
                    </p>
                    <p class="text-dark-gray mb-3 ">
                        But don’t you worry, you can trust our Essay Writing Services as we have been in this field for more than 5 years and are helping students grow by eliminating academic chaos from their lives. Our academic help is both cost-effective and tailored to the requirements you wish to have in your papers. 
                    </p>
                    <ul class="list-styled ml-4">
                        <li><strong>100% Satisfaction Guaranteed</strong></li>
                        <li><strong>Research & Quality-Driven</strong></li>
                        <li><strong>Prompt Customer Support</strong></li>
                        <li><strong>Niche Experts</strong></li>
                    </ul>
                    <div class="text-center py-4">
                        <a href="{{ route('order') }}" class="btn btn-primary bgcolor borderbtn1 pl-4 pr-4">
                        Order Now
                    </a>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary bgcolor borderbtn2 pl-4 pr-4 ml-lg-5">
                        Live Chat
                    </a>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    
    {{-- We offer Section --}}
    <section class="text-center mt-2 py-5 bg-white">
        <div class="container mt-5 mb-5">
            <h4 class="pb-5 main-heading text-center">Cheapest Pricing Packages</h4>
            <div class="row">
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">2:2 STANDARD</h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 4</strong></li>
                            <li>10 DAYS <strong>£ 8</strong></li>
                            <li>6 DAYS <strong>£ 12</strong></li>
                            <li>3 DAYS <strong>£ 18</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 22</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4 ">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">2:1 STANDARD</h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 5</strong></li>
                            <li>10 DAYS <strong>£ 9</strong></li>
                            <li>6 DAYS <strong>£ 13</strong></li>
                            <li>3 DAYS <strong>£ 19</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 23</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 px-5 px-md-2 col-lg-4">
                    <div class="pricingTable  mx-auto">
                        <div class="pricingTable-header">
                            <h4 class="title">FIRST <strong>CLASS</strong></h4>
                        </div>
                        <ul class="pricing-content my-5">
                            <li>20 DAYS & ABOVE <strong>£ 6</strong></li>
                            <li>10 DAYS <strong>£ 10</strong></li>
                            <li>6 DAYS <strong>£ 14</strong></li>
                            <li>3 DAYS <strong>£ 20</strong></li>
                            <li>WITHIN 24 HOURS <strong>£ 24</strong></li>
                        </ul>
                        <div class="pricingTable-signup">
                            <a class="bgcolor borderbtn2" href="{{ route('order') }}">Order Now</a>
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
    {{-- Types of Services Section --}}
    <section class="mt-2 py-5 bg-light-gray mt-1">
        <div class="container mt-5 mb-5">
            <div class="text-center">
                <h3 class="main-heading">Custom Essay Writing Service UK - Get All Types of Paper from One Platform</h3>
                <p>
                    Although we provide all kinds of cheap essay UK but we aren’t limited to it. In case, you need any other services from our platform, we are here to provide cheap essay help 24/7 and also these services: 
                </p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 p-3 border-sm-bottom-none border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Assignments</h4>
                        <p class="services-paragraph">
                            Do you feel that you need professional assistance when it comes to assignments? We have top-rated assignment writers in our team who can help you in meeting the requirements set by your institutions.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Coursework</h4>
                        <p class="services-paragraph">
                            We understand how challenging it’s for British students to handle their academic tasks on time. At the same time, the need for perfection can add more to the chaos. That’s why our coursework help is tailored to address your needs. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Report Writing</h4>
                        <p class="services-paragraph">
                            Do you find it a bit difficult to create reports that fully meet the set requirements? No more worries as our team can mark it done for you. And that too with excellence. From researching to formatting, we make sure not a single aspect remains neglected. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Dissertations</h4>
                        <p class="services-paragraph">
                            Get the entire dissertation regardless of its topic, size, and deadline at a cheap cost. Whether you’re struggling to write a single chapter or looking for assistance to make your dissertation perfect, our writers can make it work for you. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Essay Editing</h4>
                        <p class="services-paragraph">
                            Have you written the essay yourself but are not sure about its quality? Leave that on us. Our cheapest essay writing UK is always open to receiving your drafts to turn them into a paper that speaks a ton about your writing and researching skills. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary border-bottom-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Coursework Writing</h4>
                        <p class="services-paragraph">
                            Other than essay writing help, we also provide coursework writing services to make sure you stay on top of every assignment and don’t compromise on your grades. From writing coursework from scratch to delivering custom papers, we help you stand ahead in your academics. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary-last border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">University Essay </h4>
                        <p class="services-paragraph">
                            Get all types of university essay help from top-rated British essay writers. No matter the complexity of your essay, we have a proficient and experienced team that is well-versed in delivering out-of-the-box services.
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3 border-bottom-primary-last border-right-primary">
                    <div class="service-panel">
                        <h4 class="service-heading">Research Paper Writing</h4>
                        <p class="services-paragraph">
                            How long does it take to craft a research paper that sets you apart from other students? Days or Week? How about taking help from experts who can manage your research paper in a day and that too with excellent writing, structuring, and formatting? We are only an order away. 
                        </p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 p-3">
                    <div class="service-panel">
                        <h4 class="service-heading">Literature Review</h4>
                        <p class="services-paragraph">
                            Our literature review writing service in London makes your academics easy. Be it chronological, theoretical, or methodological, our writers can deliver with 100% confidentiality, quality, and assistance 24/7.
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
    {{-- Time to Relieve Section --}}
    <section class="mt-2 section5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 text-center text-sm-left">
                    <h3 class="h2 pt-5 main-heading text-primary-color">
                        Time to Wave Goodbye to Stress with Our Cheap Essay Help London
                    </h3>
                    <p class="text-dark-gray mb-3">
                        Do you know any essay writing websites that guarantee quality services at cheap rates? No? That’s what we cater to.
                    </p>
                    <p class="text-dark-gray mb-3">
                        We are a team of the best essay writers in UK who have only one mission in life and that’s to empower students without being a burden on their pockets. No matter which region you belong to in London, Manchester, Cambridge, Oxford, Southampton, Birmingham, Durham, Edinburgh, Glasgow, Bristol, Liverpool, Leeds or any other in the UK, our cheap writing help is open to help you anytime.
                    </p>
                    <p class="text-dark-gray mb-3">
                        The best part is that we not only give cheap services but are also open to receiving urgent essay writing services requests to rescue you in the nick of time. From writing an essay from scratch to making it unique to your requirements, we ensure you get more than you expect from us. Still struggling or afraid to face the challenges? Connect with us today!
                    </p>
                    <a href="{{ route('order') }}" class="btn btn-primary bgcolor borderbtn1 pl-4 pr-4">
                        Order Now
                    </a>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary bgcolor borderbtn2 pl-4 pr-4 ml-lg-5">
                        Live Chat
                    </a>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                    <img src="{{ asset('imgs/images/part.png') }}" alt="Essay Writing Service" class="w-100" />
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
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 my-auto">
                    <img src="{{ asset('imgs/images/part.png') }}" alt="Essay Writing Service" class="w-100" />
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 text-left text-sm-left px-5">
                    <h3 class="h2 py-3 main-heading text-primary-color">
                        One of the Top UK Essay Writing Companies Who Delivers Premium Human Written Content
                    </h3>
                    <p class="text-dark-gray mb-3 text-center">
                        While other companies use AI tools to generate essays, we are pioneers in writing craft that meets your requirements. Instead of taking help from bots, we believe in researching and writing content that includes creative ideas and elements to set you apart from other students. Taking help from our best essay writers in the UK won't only give you an edge in your essays but will also let you shine among your peers. 
                    </p>
                    <p class="text-dark-gray mb-3 text-center">
                        Additionally, automated content doesn’t assure success and unique factors in an essay so instead of believing in what machines are generating, take help from the prolific writers who can deliver results without the help of tools. And the best part is we have field experts in our team so no matter on which subject you seek help, our services will always be value-driven to your career. Along with the quality, affordable pricing is a bonus. So, what’s the wait for? 
                    </p>
                    <div class="text-center py-4">
                        <a href="{{ route('order') }}" class="btn btn-primary bgcolor borderbtn1 pl-4 pr-4">
                        Order Now
                    </a>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn btn-primary bgcolor borderbtn2 pl-4 pr-4 ml-lg-5">
                        Live Chat
                    </a>
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
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Custom Essay Writing Service UK by the Best Essay Writers</h3>
                    <p class="text-center">Getting your paper done by the best essay writers in the UK is no longer an unachievable task as we bring them to your service via our platform. Our writers write your essays exactly to the standard you need in terms of requirements, grades, and complexity. If you’re tired of rejection, missed deadlines, and eleventh-hour submissions, we know how to get it all sorted.</p>
                    <p class="text-center">Not only this, our customer assistance services are available round the clock. So, no worries if you wake up in the middle of the night dreading submissions or fear of missing the deadline, we are only an order away from you. Our affordable essay writing services are available in London, Manchester, Cambridge, Durham and any other region in the UK. Let’s get started!</p>

                    <h2 class="mt-4 main-heading text-center text-primary-color">Our Remarkable Stats</h2>
                    <div class="row remarkable mt-4 ">
                        <div class="col-md-3 ">
                            <p class="counter">10,000+</p>
                            <p class="heading">Essays Delivered</p>
                        </div>
                        <div class="col-md-3">
                            <p class="counter">25+</p>
                            <p class="heading">Team of Expert Writers</p>
                        </div>
                        <div class="col-md-3">
                            <p class="counter">96%</p>
                            <p class="heading">Success Ratio</p>
                        </div>
                        <div class="col-md-3">
                            <p class="counter">5555+</p>
                            <p class="heading">Happy Clients</p>
                        </div>
                    </div>
                    
                    <p class="text-center support mt-4 ">24/7 Support Services</p>
                    <p class="text-center urgent">Submissions in 24 Hours for Urgent Essays</p>

                </div>
                
            </div>
        </div>
    </section>
     {{-- img divider --}}
     <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Testinomial Section --}}
    <section class="mt-2 section5">
        <div class="container-fluid px-3 px-sm-5 text-center">
            <h4 class="main-heading text-white mb-5">Our Happy Customers</h4>
            <div class="owl-carousel owl-theme">
                <div class="item first prev">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t3.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            I hire them for my university essays and I must say that they exceeded my expectations. One thing I like about them is that their services aren’t over-priced. Going to come here again.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Adam</b><br />London
                        </h6>
                    </div>
                </div>
                <div class="item show">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t2.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            I was afraid to work with them first but when I received my order, I was surprised. They weren’t only responsive throughout the time but also make sure that the essays are perfect.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Mariah</b><br />
                            Bristol
                        </h6>
                    </div>
                </div>
                <div class="item next">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t4.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            Best writing support at best prices. Highly recommend it to students especially if you are looking for cheap essay help and quality work together. 
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Samantha</b><br />UK
                        </h6>
                    </div>
                </div>
                <div class="item last">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t1.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            Outstanding Service! Provided everything on time. I was impressed by their analysis and summary writing skills. I also want to highlight their prompt customer support services who tackled my queries pretty well. Not only are they perfect for cheap essay help but you can also pursue them for other writing work. Overall Great Experience!
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Sofia</b><br />Birmingham
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    <section class="mapSection bg-light py-5">
        <h3 class="pt-5 main-heading text-center ">
            UK Based Essay Writing Services but aren’t Limited to Writing, <br>Get Proofreading & Editing Services Too
        </h3>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12 pt-4">
                    <p class="text-dark-gray">
                        So your concern is that you have written the essay yourself but you aren’t sure whether you should submit or not? You want someone to proofread with an eagle’s eye? Then don't worry as our team of editors and proofreaders can assist you in this. Send us your draft and we can suggest to you how to enhance it to get closer to remarkable grades. 
                    </p>
                    <p class="text-dark-gray">
                        Committing to excellence, our writers can work on all topics including Finance, Medical, History, Law, Business or Research Papers. So, whether you want editing services or want us to write from scratch, feel free to reach out and you will be amazed to the core, that’s our guarantee. 
                    </p>
                </div>
                <div class="col-lg-6 col-sm-12 p-0">
                    <img class="img-fluid map" src="{{ asset('imgs/images/mapings.png') }}">
                </div>
            </div>
        </div>
    </section>
    {{-- section cheap essay help --}}
       {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    <section class="mt-2 section5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-5 px-5">
                    <h3 class="h2 py-3 main-heading text-center text-primary-color">Cheap Essay Help UK for Thriving Grades & Performance Beyond Expectations </h3>
                    <p class="text-center">
                        As a student, you have only one dream which is to shine in your academics by winning grades. It gives you confidence among your fellows and also inspiration to achieve more in your career. Moreover, you can keep your head high with an impressive performance graph. But what’s stopping you from chasing this dream? Is it your tight budget?
                    </p>
                    <p class="text-center">
                        If that’s the case then you don’t need to have wrinkles on your head because we are here to sort it out. Our UK based cheap essay writing caters to this specific problem by offering cheap writing help in all types of services. You can talk to our best essay writers in UK and get a tailored approach on your requirements. From brainstorming ideas to refining your draft we give you timely support to seek academic excellence and reach new heights of exploration. 
                    </p>
                    <p class="text-center">
                        So, now it's your time to join other students in London who have already unlocked the door to success with our affordable services. No matter, if  the essay is complex or you require assistance in any specific field, feel free to reach out and you will be receiving the best support and cheap essay help from our platform. 
                    </p>
                </div>    
            </div>
        </div>
    </section>

    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    <section class="mt-2 section5">
        <div class="container-fluid px-3 px-sm-5 text-center">
            <h4 class="main-heading text-white mb-5">Meet Our Stupendous Essay Writers</h4>
            <div class="owl-carousel owl-theme">
                <div class="item first prev">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t3.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            Amy C has been working with us for the past 5 years. She’s a senior editor and proofreader and possesses her expertise in Literature, Journalism and Sports. What makes her remarkable is her writing style and unique ideas that help students stand tall among the rest. Her essays never bounce and she’s used to delivering work as soon as possible even if assigned in urgent deadlines. Apart from writing, she has an infinite love and passion to help students grow, which has also helped her make a bright profile among other best essay writers in UK.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Amy C.</b><br />
                        </h6>
                    </div>
                </div>
                <div class="item show">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t2.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            When it comes to academic specialists, no one can put Heba behind. She’s an exceptional academic coach with a PhD from the London School of Economics and an MA from Leeds University. She holds her expertise in writing proposals, report writing, essays and academic content development. Along with her strong academic profile, she has also served as an Academic Trainer and possesses all the expertise that’s required in her field. With her strong portfolio, she’s ready to assist students in writing their first draft on subjects like Literature, Education, Linguistics, Media, Technology and Social Causes.
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Heba S.</b><br />
                            
                        </h6>
                    </div>
                </div>
                <div class="item next">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t4.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            <i class="fa fa-quote-left"></i>
                            Mr Alan is from Corby, UK. He’s the top essay writer UK who has won a number of accolades for his prestigious writing. His unique factor is that his ideas are quite different from others and have helped students score exceptional grades in their essays. He writes from a unique perspective that no one can think about. There are a number of publications under his name, the most prominent one is on Law. 
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Duc Vu Alan</b><br />
                        </h6>
                    </div>
                </div>
                <div class="item last">
                    <div class="card border-0 py-3 px-4">
                        <div class="row justify-content-center">
                            <img src="{{asset('imgs/images/t1.jpg')}}" class="img-fluid profile-pic mb-4 mt-3" />
                        </div>
                        <p class="content mx-2">
                            Kimberley also known as Kim is an experienced writer, editor and proofreader. Her expertise is that she can write on various topics showing a different perspective on each one. Depending on client preferences she can follow various styles or tones in her content. Her strong work ethic differentiates her from the rest. She is unbeatable when it comes to writing academic essays. 
                        </p>
                        <div class="row mx-auto mb-3">
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                            <i class="fa fa-star fa-2x"></i>
                        </div>
                        <h6 class="mb-3 mt-2">
                            <b class="testimo-title">Kimberley W.</b><br />
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Free Features Section --}}
    <section class="mt-2 section4 bg-light">
        <div class="container text-center">
            <h4 class="pb-2 main-heading text-center">Free Features</h4>
            <div class="row my-5 pr-1" style="overflow: hidden">
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Title Page</b></p>
                            <p>£ 05 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Summary</b></p>
                            <p>£ 15 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 my col-xl-3 my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Bibliography</b></p>
                            <p>£ 10 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Formatting</b></p>
                            <p>£ 10 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-xl my-3">
                    <div class="free-feature-wrap" class="mx-auto">
                        <div class="free-feature">
                            <div class="cir"></div>
                            <p class="box"><b>Modifications</b></p>
                            <p>£ 30 <b class="free-feature-btn">FREE</b></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center features">
                <h4>Get all these features for<del> 65.95 </del> <b>FREE</b></h4>
                <a href="{{route('order')}}" class="borderbtn1 btn-primary case-upper text-center px-5 mx-2 mb-2 mb-lg-0">
                    Get A+ Paper Now
                </a>
            </div>
        </div>
    </section>
    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- Sample Papers Section --}}
    <section class="mt-2 section5">
        <h4 class="pb-3 main-heading text-center text-white">Sample of Our Papers</h4>
        <div class="boxx">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">
                            <div class="title">
                                <h4>Assignment</h4>
                            </div>
                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Strategic change management
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Management</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">24</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>Harvard</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/strategic-change-management.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn2">
                                Order Now
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">
                            <!-- <i class="fa fa-instagram fa-3x" aria-hidden="true"></i> -->

                            <div class="title">
                                <h4>Assignment</h4>
                            </div>

                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Home-Made Food Business
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Business Plan</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">9</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>APA</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/business-plans.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn">
                                Order Now
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-4 mx-auto mb-4">
                        <div class="rotated"></div>
                        <div class="box-part text-center">

                            <div class="title">
                                <h4>Assignment</h4>
                            </div>

                            <div class="text">
                                <table class="w-100">
                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Title:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">
                                                Hotel Room Technologies
                                            </p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Discipline:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Tourism and Hotel</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Academic level:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">Master's</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p class="tdp">Pages:</p>
                                        </td>
                                        <td class="td2">
                                            <p class="tdp">32</p>
                                        </td>
                                    </tr>

                                    <tr class="tr">
                                        <td class="td1">
                                            <p>Format:</p>
                                        </td>
                                        <td class="td2">
                                            <p>Harvard</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <a href="{{asset('free-samples/tourism-and-Hotel-Room-Technologies.docx')}}" class="btn btn-primary bgcolor tbtn borderbtn1">
                                Download Sample
                            </a>
                            <a href="{{ route('order') }}" class="btn btn-primary bgcolor tbtn borderbtn2">
                                Order Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="text-center features">
                    <a href="{{route('samples')}}" class="borderbtn1 btn-primary case-upper text-center px-5 mx-2 mb-2 mb-lg-0">
                        View All Samples
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- img divider --}}
    <div class="img-divider">
        <img src="{{ asset('imgs/section-img-1.png') }}" height="100" alt="Essay Writing Service">
    </div>
    {{-- FAQ --}}
    <section class="section4" id="faq">
        <h4 class="faqSectionh4 h3 main-heading text-center text-white">FAQs</h4>
        <div class="container pb-4">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            We work specifically to your requirements and deliver
                            genuine essay writing services. Our team put the best
                            efforts into research, formatting, and writing. That's
                            why we have a high ratio of returning customers.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapse10">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapse10">
                                How do you assure quality in your essay writing UK cheap?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse10" class="panel-collapse collapse">
                        <div class="panel-body">
                            We work specifically to your requirements and deliver genuine essay writing services. Our team put the best efforts into research, formatting, and writing. That’s why we have a high ratio of returning customers.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTen">Do you give refunds if I’m not satisfied with the essays?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTen" class="panel-collapse collapse">
                        <div class="panel-body">
                            We put our heart and sweat into delivering outstanding UK essay writing. And usually, we don’t receive complaints regarding our orders. But still, if you aren’t satisfied with the paper our team can revise it for you. Refunds are only possible in case of plagiarized work (that doesn’t happen at all).
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseEleven">Can you write my essay for me cheap?

                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseEleven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Yes, we can. Our charges are lower than the other essay writing companies UK which makes us a go-to choice for students or anyone who can’t afford top-rated professional essay writers UK. We are one of the few websites that’s known for providing cheap essay writing help online. 
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseTwo">Do you provide 24 hour essay writing services?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            We usually take two days or three to complete your orders. But if you need urgent essay help, we are ready to serve you. We charge a bit extra for urgent orders so it’s best to let us know before three days of submission to save yourself from the additional amount. 
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseThree">Who will work on my essays?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            We have a team of British essay writers, American writers, editors, proofreaders, and top essay writer UK. All orders are assigned according to the expertise of writers to make sure there’s no room left for mistakes. 
                        </div>
                    </div>
                </div>

                <div class="panel panel-default" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle collapsed text-primary-color" data-toggle="collapse"
                                data-parent="#accordion" href="#collapseSeven">Will you keep my identity confidential?
                                <span class="float-right d-none d-md-block">
                                    <i class="fa fa-plus"></i>
                                </span>

                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Yes, absolutely! Your information remains with us only. We don’t even share it with the writers. It’s only in our records. We process the information to writers that’s required for the work only. 
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
    <div class="bg-white py-5 mt-2">
        <div class="container">
            <h4 class="text-center h2 main-heading">
                Available 24/7 to Assist Your Cheap Essay Writing Queries
            </h4>
            <p class="text-center">
                Now, what’s the hurdle in your academic success? Start Right Now!
            </p>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        const fares = @json($fares);

$(".get-fare").change(function() {
    const academic_level    = $('#academic_level').val();
    const deadline          = $('#deadline').val();
    const no_of_pages       = $('#no_of_pages').val() == null ? 1 : $('#no_of_pages').val();
    fares.forEach(fare => {
        if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
            $('#cost-per-page').html(fare.per_page_price);
            $('#total-cost').html(fare.per_page_price * no_of_pages);
        }
    });
});
    </script>
@endsection
