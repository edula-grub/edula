@extends('layouts.app')

@section('content')
    @include('components.navbar')
    <!-- Bagian content -->
    <div class="mw-100 container pt-5">
        <div class="d-flex justify-content-center my-5">
            <h1 class="fw-semibold text-primary">Cara Ambil Requestan Kelas di Edula</h1>
        </div>

        <div>
            <!-- Step 1 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara1Pengajar.png') }}" alt="">
                    </div>

                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 01</h2>
                            <p class="col-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus quidem natus nam repellendus vero molestiae velit, harum aut, laborum consequuntur amet voluptatum dolorem ad maiores maxime magni aliquam! Libero?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="my-2">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="text-end" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 02</h2>
                            <p class="col-9 offset-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus quidem natus nam repellendus vero molestiae velit, harum aut, laborum consequuntur amet voluptatum dolorem ad maiores maxime magni aliquam! Libero?</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara2Pengajar.png') }}" alt="">
                    </div>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="my-2">
                <div class="row">
                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara3Pengajar.png') }}" alt="">
                    </div>

                    <div class="col d-flex align-items-center justify-content-start">
                        <div class="text-start" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 03</h2>
                            <p class="col-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus quidem natus nam repellendus vero molestiae velit, harum aut, laborum consequuntur amet voluptatum dolorem ad maiores maxime magni aliquam! Libero?</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="my-2">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-end">
                        <div class="text-end" alt="Step">
                            <h2 class="text-primary fw-semibold">Step 04</h2>
                            <p class="col-9 offset-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum accusamus quidem natus nam repellendus vero molestiae velit, harum aut, laborum consequuntur amet voluptatum dolorem ad maiores maxime magni aliquam! Libero?</p>
                        </div>
                    </div>

                    <div class="col text-center">
                        <img src="{{ asset('./img/Cara4Pengajar.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection

