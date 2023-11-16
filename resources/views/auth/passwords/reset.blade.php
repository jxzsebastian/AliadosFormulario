@extends('layouts.app')
@section('title', 'Home Page')

@section('content')
<div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
        <div class="lg:w-5/12 xl:w-5/12 p-6 sm:p-12 grid place-content-center">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-semibold">
                    {{ __('Reset Password') }}
                </h1>
                <div class="card-body my-12">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="ml-3 text-sm font-bold text-gray-700 tracking-wide">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                                <button type="submit" class="btn btn-primary mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                    {{ __('Reset Password') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-1 bg-indigo-300 text-center hidden lg:flex">
            <div class="m-10 xl:m-16 w-full bg-contain bg-center bg-no-repeat grid place-content-center">
                <img src="{{asset('svg/lola.svg')}}" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
