@extends('layouts.visitor')

@section('title', 'Tentang Evara Beach | VISIT-IN')

@section('content')

<section class="py-5">

    <div class="container py-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">

                <span class="text-uppercase fw-bold"
                      style="color:#b1844d; letter-spacing:2px;">
                    Tentang Destinasi
                </span>

                <h1
                    class="mt-3 mb-4"
                    style="
                        font-family:'Playfair Display',serif;
                        color:#126d69;
                        font-size:48px;
                    "
                >
                    Evara Beach
                </h1>

                <p
                    style="
                        color:#607674;
                        line-height:1.9;
                        font-size:16px;
                    "
                >
                    Evara Beach merupakan destinasi wisata pantai
                    yang menawarkan suasana laut yang tenang,
                    hamparan pasir, udara yang segar, serta
                    pemandangan alam yang cocok untuk bersantai
                    bersama keluarga maupun orang terdekat.
                </p>

                <p
                    style="
                        color:#607674;
                        line-height:1.9;
                        font-size:16px;
                    "
                >
                    Keindahan pantai, suasana tropis, dan panorama
                    laut menjadi daya tarik utama Evara Beach.
                    Melalui VISIT-IN, setiap kunjungan dapat
                    dicatat secara lebih mudah dan terstruktur.
                </p>

            </div>


            <div class="col-lg-6">

                <img
                    src="{{ asset('img/pantai21.png') }}"
                    class="img-fluid rounded-4 shadow"
                    alt="Evara Beach"
                >

            </div>

        </div>

    </div>

</section>

@endsection