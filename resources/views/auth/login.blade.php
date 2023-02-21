@extends('prodigy::auth.layout')

@section('seotitle')
    Login
@endsection

@section('head')
    <style>{!! file_get_contents($cssPath) !!}</style>
@endsection

@section('content')
    <div class="pro-max-w-xl">
        <form method="POST" action="{{ route('prodigy.login') }}">
            @csrf

            <input type="hidden" name="remember" value="true">
            <x-prodigy::editor.h2>Log in</x-prodigy::editor.h2>

            <div>
                @if ($errors->any())
                    <div class="pro-font-medium pro-text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="pro-mt-3 pro-list-disc pro-list-inside pro-text-sm pro-text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>


            <x-prodigy::editor.input
                    id="email"
                    placeholder="Email Address"
                    class="block w-full pro-mb-4"
                    type="email"
                    name="email"
                    :value="old('email')" required></x-prodigy::editor.input>


            <x-prodigy::editor.input id="password"
                                     class="block w-full pro-mb-4"
                                     type="password"
                                     name="password"
                                     placeholder="Password"
                                     required></x-prodigy::editor.input>


            <button type="submit"
                    class="pro-bg-blue-600 pro-text-white pro-mb-8 pro-font-bold pro-px-2 pro-py-2 pro-rounded-md hover:pro-ring-2 hover:pro-ring-blue-300">
                {{ __('Log In') }}
            </button>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="text-md text-gray-400 hover:text-gray-900 dark:hover:text-white"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection