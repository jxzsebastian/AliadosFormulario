@extends('layouts.app')
@section('title', 'Reinicio de Contraseña')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mt-12 flex flex-col items-center">
                <h1 class="text-2xl xl:text-3xl font-semibold">
                    {{ __('Confirm Password') }}
                </h1>

                <div class="card-body">
                    {{ __('Please confirm your password before continuing.') }}

                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
