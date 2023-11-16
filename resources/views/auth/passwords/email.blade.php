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

                <div class="card-body">
                    @if (session('status'))
                    <span class="flex items-center font-medium tracking-wide text-green-500 text-lg mt-1 ml-1">
                    {{ session('status') }}
                    </span>
                    @endif

                    <form method="POST" class="mx-auto max-w-xs" action="{{ route('password.email') }}">
                        @csrf

                        <div>

                            <div class="relative mt-6">
                            <label class="ml-3 text-sm font-bold text-gray-700 tracking-wide">{{ __('Email Address') }}</label>
                            <input id="email" placeholder="Correo Electronico" type="email" class="w-full px-8 py-3 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                            @enderror

                            </div>
                        </div>

                        <div class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                        <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                            <a href="{{ route('login.index') }}" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Regresar</a>
                        </p>
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
