@extends('layouts.app')

@section('title')
    Lairkhaf | Beyond the explorer of the world
@endsection

@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You'll see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>


    <!-- Main Content  -->
    <main>

        <!-- Statistik -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stat-details first">
                    <h2>20.372</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stat-details">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stat-details">
                    <h2>3.108</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stat-details last">
                    <h2>76</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>
                            Popular Destination
                        </h2>
                        <p>
                            Something that you never try
                            <br>
                            before in the world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-item row justify-content-center">
                    <!-- Item -->
                    @foreach ($items as $item)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card-item text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                <div class="item-country">{{ $item->location }}</div>
                                <div class="item-location">{{ $item->title }}</div>
                                <div class="travel-button mt-auto">
                                    <a href="{{ url('detail', $item->slug) }}" class="btn btn-item-details">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Networks -->
        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ url('frontend/images/logo partners.png') }}" alt="Partners Logo" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonial -->
        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They're Loving Us</h2>
                        <p>
                            Moment were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-testimonial-item row justify-content-center">
                    <!-- Item -->
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/Ellipse 3.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Fara Camila</h3>
                                <p class="testimonials">
                                    “ The trip was amazing and
                                    I saw something beautiful in
                                    that Island that makes me
                                    want to learn more “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-3">
                                Trip to Labuan Bajo
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/Ellipse 4.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Natasya Aurora</h3>
                                <p class="testimonials">
                                    “ I really like it when I can
                                    learn the various cultures
                                    left behind  “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-3">
                                Trip to Borobudur
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="{{ url('frontend/images/Ellipse 2.png') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Moch. Faldila</h3>
                                <p class="testimonials">
                                    “ It was glorious and I could
                                    <br>
                                    not stop to stay wohooo for
                                    <br>
                                    every single moment
                                    <br>
                                    Dankeeeee “
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-3">
                                Trip to Deratan, Bali
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
