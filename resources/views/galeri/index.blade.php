@extends('layouts.visitor')

@section('title', 'Galeri | VISIT-IN')

@section('content')

<section class="py-5">

    <div class="container py-5">

        <div class="text-center mb-5">

            <span
                class="text-uppercase fw-bold"
                style="
                    color:#b1844d;
                    letter-spacing:2px;
                "
            >
                Galeri
            </span>

            <h1
                class="mt-2"
                style="
                    font-family:'Playfair Display',serif;
                    color:#126d69;
                    font-size:45px;
                "
            >
                Pesona Evara Beach
            </h1>

            <p class="text-muted">
                Nikmati berbagai momen dan keindahan Evara Beach.
            </p>

        </div>


        <div class="row g-4">


            <div class="col-md-4">

                <img
                    src="{{ asset('img/pantai21.png') }}"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height:280px; object-fit:cover;"
                    alt="Evara Beach"
                >

            </div>


            <div class="col-md-4">

                <img
                    src="{{ asset('img/pantai.jpg') }}"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height:280px; object-fit:cover;"
                    alt="Pantai Evara"
                >

            </div>


            <div class="col-md-4">

                <img
                    src="{{ asset('img/pantai21.png') }}"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height:280px; object-fit:cover;"
                    alt="Pantai"
                >

            </div>


            <div class="col-md-6">

                <img
                    src="{{ asset('img/pantai.jpg') }}"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height:350px; object-fit:cover;"
                    alt="Pantai"
                >

            </div>


            <div class="col-md-6">

                <img
                    src="{{ asset('img/pantai21.png') }}"
                    class="img-fluid rounded-4 shadow-sm w-100"
                    style="height:350px; object-fit:cover;"
                    alt="Evara Beach"
                >

            </div>

        </div>

    </div>

</section>

@endsection