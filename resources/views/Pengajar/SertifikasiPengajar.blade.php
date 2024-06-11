<div class="row">
    <div class="col-12">
        <button class="btn btn-primary col-12">
            + Tambahkan Sertifikasi
        </button>
    </div>

    {{-- loop --}}
    @for ($i = 0; $i < 10; $i++)
        <div class="my-2 col-6">
            <div class="row">
                <div class="col-2">
                    <img src="http://127.0.0.1:8000/EdulaExport/public/rectangle-96@2x.png" class="rounded img-fluid"
                        alt="">
                </div>
                <div class="col-10">
                    <h4 class="CourseName">
                        Machine Learning Specialization
                    </h4>
                    <p class="Distributor">
                        <span class="">
                            Coursera - Andrew Ng
                        </span>
                    </p>
                    <p class="Validtime">
                        <span class="blockquote">
                            Dipublikasikan 23 Mei 2025
                        </span>
                    </p>
                </div>
                <div class="offset-8 col-4">
                    <button class="btn btn-outline-dark row" type="button">
                        <span class="col-8">Lihat Detail</span>
                        <span class="col-4">
                            {{-- <img class="img-fluid" loading="lazy" alt=""
                            src="{{ url('/EdulaExport/public/image-21@2x.png') }}"> --}}
                        </span>
                    </button>
                </div>
            </div>
        </div>
    @endfor
</div>
