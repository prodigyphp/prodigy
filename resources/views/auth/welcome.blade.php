@extends('prodigy::auth.layout')

@section('seotitle')
    Welcome to Prodigy
@endsection

@section('head')
    <style>{!! file_get_contents($cssPath) !!}</style>
    @livewireStyles
    @livewireScripts
@endsection

@section('content')
    <div class="pro-relative pro-max-w-xl pro-bg-white pro-shadow-xl pro-p-4 lg:pro-p-12 lg:pro-rounded-lg">
        <svg class="pro-w-20 pro-left-[50%] pro-translate-x-[-50%] pro-top-[-1.2rem] pro-absolute"
             style="filter: drop-shadow(0px 5px 5px rgb(52 35 179 / 0.15));" xmlns="http://www.w3.org/2000/svg"
             xml:space="preserve" x="0" y="0" style="enable-background:new 0 0 63 63" version="1.1" viewBox="0 0 63 63"><style>.st1 {
                    fill: #596aff
                }

                .st2 {
                    fill: #473feb
                }</style>
            <linearGradient id="SVGID_1_" x1="50.733" x2="12.267" y1="-1.813" y2="64.813"
                            gradientUnits="userSpaceOnUse">
                <stop offset="0" style="stop-color:#fff"/>
                <stop offset="1" style="stop-color:#fff"/>
            </linearGradient>
            <path d="M50.5 63h-38C5.6 63 0 57.4 0 50.5v-38C0 5.6 5.6 0 12.5 0h38.1C57.4 0 63 5.6 63 12.5v38.1C63 57.4 57.4 63 50.5 63z"
                  style="fill:url(#SVGID_1_)"/>
            <path d="m31.5 39.3 16.6-6.1c.6-.2 1-.7 1.2-1.3L51 26l-19.5 7.1v6.2l12.1-4.4-12.1 4.4zM33 24.4v5l20.1-7.3c.6-.2 1-.7 1.2-1.3L56 15l-21.9 8c-.7.2-1.1.8-1.1 1.4zM33 48l9.6-3.5c.6-.2 1-.7 1.2-1.3l1.6-5.9L34 41.5c-.6.2-1 .8-1 1.5v5z"
                  class="st1"/>
            <path d="m31.5 39.3-16.6-6.1c-.6-.2-1-.7-1.2-1.3L12 26.1l19.5 7.1v6.1l-12.1-4.4 12.1 4.4zM30 24.4v5L9.9 22.1c-.6-.2-1-.7-1.2-1.3L7 15l21.9 8c.7.2 1.1.8 1.1 1.4zM30 48l-9.6-3.5c-.6-.2-1-.7-1.2-1.3l-1.6-5.9L29 41.5c.6.2 1.1.8 1.1 1.5v5z"
                  class="st2"/></svg>

        <div class="pro-prose" style="margin-top:45px;    max-height: 330px;">
            <livewire:prodigy-page/>
        </div>
    </div>
@endsection