<body>
    @for ($i = 0; $i<5; $i++)
    <div class="container mt-5">
        {{-- Row nama, bulan, dan ratingnya --}}
        <div class="row">
            <div class="bg-body-tertiary d-flex border border-primary">
                <div class="col-md-1 p-2">
                    <img src="{{ asset('img/profilPelajar.png') }}" alt="">
                </div>
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-5 text-start border border-success">
                            <strong>Afrizal Rizqi Syahputra</strong>
                        </div>

                        <div class="col-md-2 text-start border border-warning">
                            <p class="text-secondary">4 bulan lalu</p>
                        </div>

                        <div class="col-md-5 text-end border border-primary">
                            <strong>5.0</strong> ★★★★☆
                        </div>
                    </div>

                    <div class="row d-flex">
                        <div class="col-md-3 text-start text-secondary no-padding">
                            <p>Mata Pelajaran :</p>
                        </div>
                        <div class="col-md-7 text-start text-primary no-padding">
                            <p>Kalkulus</p>
                        </div>
                        <div class="review" style="font-weight: lighter; font-size: 18px;">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod assumenda cumque mollitia facilis ad sit facere porro! Aperiam cumque laudantium possimus cum modi assumenda ipsa, obcaecati libero, asperiores accusamus eaque?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
</body>
