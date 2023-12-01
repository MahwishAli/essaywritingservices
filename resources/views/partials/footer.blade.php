{{-- <marquee id="footer-marquee" onmouseover="this.stop();" onmouseout="this.start();"><p><strong>COVID-19 Update!</strong>  Our professional writing service is available 24/7 via our website and as usual, to help you whenever/wherever you need it.</p></marquee> --}}

<footer class="container">
    <div class="row overflow-hidden mt-3">
        <div class="text-center text-md-left col-sm-6 col-lg-3">
            <div class="footer-heading">
                Useful Links
            </div>
            <div class="footer-menu-list">
                <a href="{{route('home')}}"> Home </a>
                <a href="{{route('about')}}"> About Us</a>
                <a href="{{route('order')}}"> Order Now</a>
                <a href="{{route('contact')}}"> Contact Us</a>
                <a href="{{route('plans')}}"> Pricing Plans </a>
                <a href="{{route('blogs')}}">Blogs</a>
                {{-- <a href="{{route('blogs.index')}}"> Blogs </a> --}}
            </div>
        </div>
        <div class="text-center text-md-left col-sm-6 col-lg-3">
            <div class="footer-heading">
                Policies
            </div>
            <div class="footer-menu-list">
                <a href="{{route('privacy.policy')}}">Privacy Policy</a>
                <a href="{{route('refund.policy')}}">Refund Policy</a>
                <a href="{{route('revision.policy')}}">Revision Policy</a>
                <a href="{{route('terms.and.conditions')}}">Terms and Conditions</a>
                
            </div>
        </div>
        <div class="text-center text-md-left col-sm-6 col-lg-3">
            <div class="footer-heading">
                Services
            </div>
            <div class="footer-menu-list">
                <a href="{{ route('assignment') }}">Assignment Writing</a>
                <a href="{{ route('thesis') }}">Best Thesis Writing</a>
                <a href="{{ route('coursework') }}">Coursework Writing</a>
                <a href="{{ route('dissertation') }}">Dissertation Writing</a>
                <a href="{{ route('powerpoint') }}">PowerPoint Presentation Design Services</a>
                <a href="{{ route('buy.assignment') }}">Buy Assignment </a>
            </div>
        </div>
        <div class="text-center text-md-left col-sm-6 col-lg-3">
            <div class="footer-heading">
                Contact Us
            </div>
            <div class="footer-menu-list">
                <div style="ml-2 font-size: 1.2rem;">
                    <div>
                        <a href="tel:{{ config('app.app_contact') }}">
                            {{ config('app.app_contact') }}
                        </a>
                    </div>
                    <div>
                        <a href="mailto:{{ config('app.app_email') }}">
                            {{ config('app.app_email') }}
                        </a>
                    </div>
                </div>
                <h4 class="text-light mt-4">
                    100% Secure Payment
                </h4>
                <a href="javascript:void(0)">
                    <img  src="{{ asset('imgs/transactions.png') }}" alt="">
                </a>

            </div>
        </div>
    </div>
    <div class="my-5">
        <div class="row">
            <div class="col-md-12 col-lg-4 mb-2">
                <a class="footer-lable" href="mailto:{{ config('app.app_email') }}">
                    <div class="lable-content">
                        <span class="lable-icon mr-1">
                            <i class="fa fa-envelope text-white"></i>
                        </span>
                        <span class="content">
                            {{ config('app.app_email') }}
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-lg-4 mb-2">
                <a class="footer-lable" href="tel:{{ config('app.app_contact') }}">
                    <div class="lable-content">
                        <span class="lable-icon">
                            <i class="fa fa-phone text-white"></i>
                        </span>
                        <span class="content">
                            {{ config('app.app_contact') }}
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-md-12 col-lg-4 mb-2">
                <a class="footer-lable"  href="javascript:void(Tawk_API.toggle())">
                    <div class="lable-content">
                        <span class="lable-icon">
                            <i class="fa fa-comment text-white"></i>
                        </span>
                        <span class="content">
                            Start Chat
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
<div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3_1 ht_ctc_animation no-animations" id="ht-ctc-chat" style="position: fixed; bottom: 15px; left: 15px; cursor: pointer; z-index: 99999999;">
        <div class="ht_ctc_style ht_ctc_chat_style">
            <style id="ht-ctc-s3">
                .ht-ctc:hover svg stop {
                    stop-color: #25D366;
                }

                .ht-ctc:hover .ht_ctc_padding {
                    background-color: #25D366 !important;
                    box-shadow: 0px 0px 11px rgba(0, 0, 0, .5);
                }
            </style>
            <div title="WhatsApp us" style="display:flex;justify-content:center;align-items:center;">
                <a href="https://api.whatsapp.com/send?phone=441158881209" target="_blank">
                    <div class="ctc-analytics ht_ctc_padding" style="background-color: #25D366;padding: 6px;border-radius: 50%;box-shadow: 0px 0px 11px rgba(0,0,0,.5);">
                        <svg style="pointer-events:none; display:block; height:40px; width:40px;" width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
                            <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z">
                            </path>
                            <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
                                <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
                                <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
                            </linearGradient>
                            <path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z">
                            </path>
                            <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z">
                            </path>
                            <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z">
                            </path>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </div>
</footer>
<section style="background-color: white">
    <div class="container px-4" >
        <div class="row pt-4">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <h4>DISCLAIMER</h4>
                <p class="display-5">
                    The services provided are for research and study, any other use of website content, images, or videos is strictly prohibited.
                </p>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 my-auto text-center">
                <img src="{{asset('imgs/images/cc.jpg')}}" />
            </div>
        </div>
    </div>
</section>

<section style="background-color: #f7eded">
    <div class="text-center py-3 my-auto">
        <p class="mb-0 h5 text-black">
            100% Secure Payment with: <img src="{{asset('imgs/images/payment.jpg')}}" />
        </p>
    </div>
</section>

<section style="background-color: #cd4427">
    <div class="container  mb-3" style="width: 80%">
        <div class="row pt-3">
            <div class="col-lg-4 col-md-4 col-sm-12 text-center">
                <p class="text-white"> &copy; {{ now()->year }} . All Rights Reserved</p>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-12 text-center text-sm-left">
                <ul class="row footer-copyright float-right">
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="{{route('terms.and.conditions')}}">Terms & Conditions</a></li>
                    <li><a href="{{route('privacy.policy')}}">Privacy Policy</a></li>
                    <li><a href="{{route('revision.policy')}}">Revision Policy</a></li>
                    <li><a href="{{route('refund.policy')}}">Refund Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

