<div class="row">
    <div class="col-12">
        <button class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#NewSertif">
            + Tambahkan Sertifikasi
        </button>
    </div>
    @if (!empty($sertif))
        @foreach ($sertif as $item)
            <div class="my-2 col-6">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ url('img/' . $item->image) }}" class="rounded img-fluid" alt="">
                    </div>
                    <div class="col-10">
                        <h4 class="CourseName">
                            {{ $item->nama }}
                        </h4>
                        <p class="Distributor">
                            <span class="">
                                {{ $item->level }} : {{ $item->skill }} - {{ $item->distributor }}
                            </span>
                        </p>
                        <p class="Validtime">
                            <span class="blockquote">
                                Dipublikasikan : {{ date('d F Y', strtotime($item->updated_at)) }}
                            </span>
                        </p>
                    </div>
                    <div class="offset-8 col-4">
                        <button class="btn btn-outline-dark row" type="button">
                            <span class="col-8">Lihat Detail</span>
                            <span class="col-4">

                            </span>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>

</div>

@if (!empty($sertif))
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
                    <form action="{{ route('DetailPengajar.store', $guru->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Sertifikat</label>
                            <input type="text" class="form-control" id="SertifName" aria-describedby="emailHelp"
                                name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="distributor" class="form-label">Distributor</label>
                            <input type="text" class="form-control" id="Distributor" name="distributor">
                        </div>
                        <div class="mb-3">
                            <label for="ValidTime" class="form-label">Valid Time</label>
                            <input type="date" class="form-control" id="ValidTime" name="time">
                        </div>
                        <div class="mb-3">
                            <label for="SertifImage" class="form-label">Image</label>
                            <input type="file" name="img" class="form-control" id="SertifImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif
