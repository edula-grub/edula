<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <h1 class="display-4">{{ number_format($averageRating, 1) }}</h1>
                <p class="lead">dari 5.0</p>
                <div class="stars mb-3">
                    @for ($i = 0; $i < floor($averageRating); $i++)
                        ★
                    @endfor
                    @if ($averageRating - floor($averageRating) >= 0.5)
                        ☆
                    @endif
                </div>
                <p>{{ $totalReviews - 1 }} Rating</p>
            </div>

            <div class="col-md-9">
                @foreach ([5, 4, 3, 2, 1] as $star)
                <div class="d-flex align-items-center my-3">
                    <div class="col-md-10">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: {{ ($ratingsCount[$star] / $totalReviews) * 100 }}%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">{{ $ratingsCount[$star] }} Ulasan</div>
                    </div>
                </div>
                @endforeach

                {{-- Bintang 5 --}}
                {{-- <div class="d-flex align-items-center my-3">
                    <div class="col-md-10">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 67%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">200 Ulasan</div>
                    </div>
                </div> --}}

                {{-- Bintang 4 --}}
                {{-- <div class="d-flex align-items-center my-3">
                    <div class="col-md-10">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 17%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">50 Ulasan</div>
                    </div>
                </div> --}}

                {{-- Bintang 3 --}}
                {{-- <div class="d-flex align-items-center my-3">
                    <div class="col-md-10">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 17%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">50 Ulasan</div>
                    </div>
                </div> --}}

                {{-- Bintang 2 --}}
                {{-- <div class="d-flex align-items-center my-3">
                    <div class="col-md-10 ">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 0%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">0 Ulasan</div>
                    </div>
                </div> --}}

                {{-- Bintang 1 --}}
                {{-- <div class="d-flex align-items-center my-3">
                    <div class="col-md-10">
                        <div class="w-100 mr-2">
                            <div class="progress">
                                <div class="progress-bar bg-primary" style="width: 0%;" role="progressbar"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2 text-end">
                        <div style="font-size: 14px;">0 Ulasan</div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
