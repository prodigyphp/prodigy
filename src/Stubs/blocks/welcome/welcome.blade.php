@php
    /**
     * This is a demo block that's intended to get you started.
     * It's written in plain CSS to avoid creating a dependency.
     * I recommend Tailwind in most other cases!
     *
     * That said, you can really edit this in the editor block.
     * Try it out!
     */
@endphp

<style>
    .page-wrapper {
        display: flex;
        width: 100%;
        min-height: 100vh;
        background-image: linear-gradient(to bottom left, #473FEB, #6F9CF8);
    }

    .svg-wrapper {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    .svg-wrapper > svg {
        min-height: 100vh;
        width: 100%;
    }

    .content-wrapper {
        position: relative;
        max-width: 400px;
        background: white;
        box-shadow 0 0 25px rgba(0, 0, 0, 0.1);
        padding: 1rem;
        border-radius: 0.5rem;
    }

    .page-title {
        font-size: 24px;
        margin-bottom: 1rem;
        font-weight: bold;
    }

    .prodigy-button {
        border-radius: 0.25rem;
        padding: 0.5rem 1rem;
        margin-right: 1rem;
        background-color: #496CEB;
        color: white;
        font-weight: bold;
    }

    .prodigy-button:hover {
        background: #4B5563;
    }

    .prodigy-link:hover {
        color: #6F9CF8;
    }
</style>

<div class="page-wrapper">
    <div class="svg-wrapper">
        <svg xmlns="http://www.w3.org/2000/svg" class="lines" xml:space="preserve" preserveAspectRatio="none" x="0"
             y="0" style="enable-background:new 0 0 573 322" version="1.1" viewBox="0 0 573 322"><style>.st0 {
                    opacity: .2;
                    fill: none;
                    stroke: #fff;
                    stroke-width: .5;
                    stroke-miterlimit: 10
                }</style>
            <path d="m171.2-8.5 96 342M180-8.5l96 342M163.6-8.5l96 342M624.8 102.3l-660.6 242M624.8 67.3l-660.6 242M624.8 32.3l-660.6 242M403.8-14.1l-96 342M395-14.1l-96 342M411.4-14.1l-96 342M-33 109l660.6 242M-33 74l660.6 242M-33 38l660.6 242"
                  class="st0"/></svg>
    </div>
    <div class="content-wrapper">
        <h3 class="page-title">{{ $title ?? '' }}</h3>
        <p style='margin-bottom:2rem;'>{{ $subtitle ?? '' }}</p>
        <p>
            <a href='{{ request()->url() }}?pro_editing=true&editor_state=pageEditor'
               class='prodigy-button'>Edit Page</a>
            <a href='https://prodigyphp.com/docs' class="prodigy-link">Read docs</a>
        </p>
    </div>
</div>