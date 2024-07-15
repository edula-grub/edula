<div class="row">
    <div class="col-12">
        <button class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#NewSertif">
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


{{-- modal add new sertifikat --}}
<div class="modal fade" id="NewSertif" tabindex="-1" aria-labelledby="NewSertifLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="NewSertifLabel">
                    Tambahkan Sertifikat
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="SertifName" class="form-label">Nama Sertifikat</label>
                        <input type="text" class="form-control" id="SertifName" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="Distributor" class="form-label">Distributor</label>
                        <input type="text" class="form-control" id="Distributor">
                    </div>
                    <div class="mb-3">
                        <label for="ValidTime" class="form-label">Valid Time</label>
                        <input type="date" class="form-control" id="ValidTime">
                    </div>
                    <div class="mb-3">
                        <label for="SertifImage" class="form-label">Image</label>
                        <input type="file" class="form-control" id="SertifImage">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
