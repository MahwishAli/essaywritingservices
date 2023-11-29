@extends('layouts.web')

@section('title', 'Login')
@section('description', '')
@section('canonical', config('app.url') . Request::path())



@section('content')
<div class="bg-primary">

    <div class="container mx-auto lg:px-4 py-20 h-[40rem]">
        <div class="flex flex-col space-y-4 my-2 md:my-0 lg:flex-row mx-4">

            <div class=" w-full md:w-[60%] xl:w-[30%] mx-auto ">
                <form action="{{ route('login') }}" method="POST" class="panel bg-white bor border-success shadow-md  px-4 pt-2 pb-6 flex flex-col md:ml-auto w-full space-y-2  ">
                    @csrf
                    <div class="bg-primary py-2 px-5 rounded-t-lg">
                        <p class="text-3xl text-center text-white font-semibold">
                            {{ trans('global.login') }}
                        </p>
                    </div>
                    @if (session('success') )
                        <div class="mt-3 bg-primary border-t-4 border-green-700 rounded text-white shadow-md" role="alert">
                            <div class="py-2">
                                <p class="text-center text-white font-bold">{{ session('success') }}</p>
                            </div>
                        </div>
                    @elseif (session('error'))
                    <div class="mt-3 bg-white border-t-4 border-red-500 rounded  shadow-md" role="alert">
                        <div class="py-2">
                            <p class="text-center text-red-500  font-bold">{{ session('error') }}</p>
                        </div>
                    </div>
                    @endif
                    <div class="mb-2">
                        <input id="email" type="email"
                            class="form-input @error('email') error-field @enderror" required
                            autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" name="email"
                            value="{{ old('email', null) }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong class="text-red-400">{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="">
                        <input id="password" type="password"
                            class="form-input @error('password') error-field @enderror" required
                            autocomplete="password" autofocus placeholder="{{ trans('global.login_password') }}"
                            name="password" value="{{ old('password', null) }}">
                        @error('password')
                            <div class="invalid-feedback">Please enter your password!</div>
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember">
                                <label for="remember" class="">{{ trans('global.remember_me') }}</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-flat hover:shadow-md">
                        {{ trans('global.login') }}
                    </button>

                    <p class="text-center">
                        <span class="px-2">or continue with</span>
                    </p>

                    <div class="flex w-full space-x-1 border-2 border-black mx-auto justify-center">
                        <a href="{{ route('register') }}" style="border-color: rgba(255,169,32,1); border-width: 2px; border-style: solid;" class=" hover:shadow-lg py-3 w-1/2 border-black border-2  rounded-lg flex justify-center items-center space-x-2">
                            <img src="{{ asset('images/sign-up.png') }}" alt="google" width="20" height="20">
                            <span class="text-black">
                                Register
                            </span>
                        </a>
                        {{-- <a href="{{ url('redirect/google') }}" class="py-3 w-1/2 hover:border-primary-two border-2 border-t-purple-100 rounded-lg flex justify-center items-center space-x-2">
                            <img src="{{ asset('images/svg/google.svg') }}" alt="google" width="20" height="20">
                            <span>
                                Google
                            </span>
                        </a> --}}
                    </div>
                </form>
                <div class="bg-primary">

                        @if (Route::has('password.request'))
                            <a class="mt-1 text-white float-right hover:underline-offset-7 hover:underline" href="{{ route('password.request') }}">
                                {{ trans('global.forgot_password') }}
                            </a>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

