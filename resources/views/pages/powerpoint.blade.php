@extends('layouts.web')

@section('title', 'Powerpoint Design Writing')
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Welcome to Creative Hub of Attractive PowerPoint Presentation Design Services UK</h3>
                <p class="text-center">
                    Looking for the best PowerPoint presentation designer in town? Have you heard about the best corporate presentation design agency in Great Britain? Yes! We are talking about a service that charges less than others and offers the most creative and attractive samples at hand.
                </p>
                <p class="text-center">
                    You shouldn’t be worried about your presentation when you have the key to open the door of the expert designers in the United Kingdom. Our PowerPoint presentation services in Bristol, Leicester, and Oxford have lined the best of the best designers only for you.    
                </p>
                <p class="text-center">
                    Visit our order booking section now and hire someone who knows how to help you win the jackpot with the most professional corporate presentation. Welcome to at-hand and cheap PowerPoint design services. We are just one click away!    
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Presentation Design Agency UK - A Perfect Choice for Corporate Professionals</h3>
                <p class="mt-4">
                    Your presentation day is just not a normal day at the office. It is the day of making a statement and stealing the show. We know what you are looking for. Let our team help you be the best version of yourself, and have a blast on your presentation day.   
                </p>
                <p class="">
                    Our on-service and freelance PowerPoint designer UK are lined up to offer you their services. No matter if you want any college project or corporate presentation, just select the service and get the delivery on the shared deadline. Your presentation day is the decider of your hold in the office. That’s why you must be ready for it and impress the surrounding with confidence and our delivered compelling presentation slides. So, don’t leave our platform without our obtaining our professional PowerPoint presentation services in the United Kingdom.    
                </p>
                <div class="">
                    <h4><strong>Get 10 Minutes Presentation from a Cheap PowerPoint designer UK</strong></h4>
                    <p class="">
                        How much do you need to be the highlight of the day?  Your presentation must be showcased with attractive elements, and our team knows how to design your presentation slides. Share your ideas and requirements with our team, and we will come up with some of the best copies from our list of stimulating and completing PowerPoint samples. 
                    </p>
                    <p class="">
                        No matter if your presentation is longer than ten minutes or shorter than three minutes. Share details and leave it to our designer to come up with unique and colourful additions. After the confirmation of the order, you are free to suggest other changes during the process of the presentation design. So, come to our website and get your presentation according to your requirements at pocket-friendly prices.    
                    </p>
                </div>
                <div class="">
                    <h4><strong>Talk to Us & Get Custom Made PowerPoint Copy at Most Trusted Presentation Design Agency London, Leeds & Birmingham</strong></h4>
                    <p class="">
                        Our platform is for you to impress your team members and show them your creative side. Our services have helped many corporates who want to start their professional career on a higher note. This is your time to be the one who works with style and is Mr. Perfect of the workplace. 
                    </p>
                    <p class="">
                        We know that you are the most hardworking employee of the company. But something is missing! Yes, you must show your creative side at the conference.  Our designers will help you present the best corporate slides that clearly explain your vision and points about the subject and discussion. So, are you ready to hire our presentation designers in the United Kingdom?     
                    </p>
                </div>
                <div class="">
                    <h4><strong>Group Project Collage PowerPoint Presentation Services at Hand</strong></h4>
                    <p class="">
                        Students don’t have time to design their project presentation that fills all the requirements asked by the professors. That’s why they must get our excellent presentation services, along with all our assignment writing services in the UK. We offer our designers to design your presentation at hand. 
                    </p>
                    <p class="">
                        Share the file that has to be converted into a presentation, or just upload the brief of the presentation assignment. As we also offer presentation writing services that come along with other top-rated services in the United Kingdom at cheap prices.     
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Buy Professional Presentations From the Best PowerPoint Design Company</h3>
                <p class="mt-4">
                    Our team is packed with proven professionals who are ready to offer their helping hand in producing fascinating presentations. You can get our PowerPoint copies by just contacting us through our online chat support. We are here to offer those samples that will lead you to higher positions at your workplace. As you need just one chance in the meeting to reach the top. So, let us help you out with it. 
                </p>
                <div class="">
                    <h4><strong>Ted, Conference & Business Presentation Design Services</strong></h4>
                    <p class="">
                        We know that you are preparing for something big; that’s why we are offering our experienced designers to make it easy for you.  Our team have served professionals from unicorn organisations that also avail services for their conferences and business meetings. Our services are available anytime you want, and you should hire us now!  
                    </p>
                </div>
                <div class="">
                    <h4><strong>Hire Our PowerPoint Presentation Designers for School Projects Slides & Business Investment pitches</strong></h4>
                    <p class="">
                        It is just a game of a few seconds of booking your order. From school group projects to business investment pitches, we got your back in every professional venture of your life. So, why to stress out yourself and miss out on the opportunity of hiring us and coming up with the most attractive presentation during the meeting?     
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
                <h3 class="h2 py-3 main-heading text-center text-primary-color">Did You Check the artistic & innovative Samples of our PowerPoint Design Firm in the United Kingdom?</h3>
                <p class=" mt-4">
                    If you have missed our demanding samples, you must check them out now. Just like everything has a price, in the same way, every design has uniqueness. So, now it’s up to you how you take advantage of our offered services of top presentation designers in Bradford, Chester and all the cities of the United Kingdom. 
                </p>
                <div class="">
                    <h4><strong>How to Hire United Kingdom PowerPoint Design Experts?</strong></h4>
                    <p class="">
                        You don’t need to fill out a lengthy process to hire our PowerPoint presentation writers and designers. Just visit the order booking section and fill out the blank portion with the needed information about the service. Otherwise, you can have direct contact with us through our 24/7 active chat support team or call us on our shared number on the website.  
                    </p>
                    <p class="">
                        This service of presentation design is for those who need a chance to show their capabilities in their class or meeting rooms. No matter if you don’t know the formation or the needed information about the presentation, just share the overview and brief and get the delivery at the shared deadline. So, contact us and hire our presentation designers now!  
                    </p>
                </div>
            </div>    
        </div>
    </div>
</section>

@endsection