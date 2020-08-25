@extends('components.app')

@section('content')
<div class="items-center">
    <div class="w-full max-w-xs">
    <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                {{ __('E-Mail Address') }}
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3
            text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                {{ __('Password') }}
            </label>
            <input class="shadow appearance-none border @error('email') border-red-500 @enderror rounded w-full
            py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                   name="password" required autocomplete="current-password">
            @error('password')
            <p class="text-red-500 text-xs italic"><strong>{{ $message }}</strong></p>
            @enderror
        </div>
        <div class="mb-4">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold
            py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>
    </form>
    <p class="text-center text-gray-500 text-xs">
        &copy;2020 Fahad Ahmed. All rights reserved.
    </p>
</div>
</div>
@endsection
