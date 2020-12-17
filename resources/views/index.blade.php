@extends('layouts.app')

@section('content')

    <div class="section-6">
        <div class="w-layout-grid grid-10">
            <div class="intro-wrap">
                <div class="div-block-82">
                    <h1 class="heading-38">
                        Hi 👋🏾, I am <a href="{{url('about')}}" class="link-11"> Prince 🤴🏾.</a>
                    </h1>
                </div>
                <h1 class="heading-28">
                    I <a href="{{url('/#section9')}}" class="link-2"> design, </a>
                    <a href="{{url('/#section9')}}" class="link-3"> develop </a> &amp;
                    <a href="{{url('/#section9')}}" class="link-4"> analyze</a>
                    information systems for humans.
                </h1>
                <div class="div-block-31">
                    <div class="paragraph-9 paragraph-normal">
                        I am a software engineer based in Accra, Ghana with 8 years professional experience in software engineering, web and mobile application development, information systems, and systems analysis and design. <br /> <br /> I am very passionate and dedicated to work to continuously develop, implement and adopt new technologies to maximize development efficiency and produce innovative software products to solve most of the world's problems.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h1 class="heading-30">MOST RECENT WORKS</h1>
    </div>
    <section id="section9" class="section-9">
        <a href="#" class="link-block-19 w-inline-block">
            <img src="{{asset('assets/images/works-pockt.webp')}}" width="2500" alt="works-vlm-pockt" />
        </a>
        <a href="#" class="link-block-20 w-inline-block">
            <img src="{{asset('assets/images/works-vlm.webp')}}" width="2500" alt="works-vlm-image" />
        </a>
        <a href="#" class="link-block-21 w-inline-block">
            <img src="{{asset('assets/images/works-chenchen.webp')}}" width="2500" alt="works-chenchen-image" />
        </a>
        <a href="#" class="link-block-21 w-inline-block">
            <img src="{{asset('assets/images/works-lnr.webp')}}" width="2500" alt="works-local-news-reader-image" />
        </a>
        <a href="#" class="link-block-21 w-inline-block">
            <img src="{{asset('assets/images/works-preble.webp')}}" width="2500" alt="works-preble-image" />
        </a>
    </section>

    @endsection