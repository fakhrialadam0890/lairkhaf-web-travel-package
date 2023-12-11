@extends('layouts.success')

@section('title')
    Success Booking
@endsection

@section('content')
    <!-- Main Content -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ url('frontend/images/ic_success.png') }}" alt="Success">
                <h1>Yay! Success</h1>
                <p>We've sent you email for trip instruction
                    <br>please read it as well</p>
                    <a href="{{ url('/') }}" class="btn btn-homepage mt-2 px-4">
                        Home Page
                    </a>
            </div>
        </div>
    </main>
@endsection
