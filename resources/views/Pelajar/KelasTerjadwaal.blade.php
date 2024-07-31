<div class="col-12">
    <div class="container-fluid">
        <div class="row">
            @empty($selesai)
            @else
                @foreach ($selesai as $item)
                    <div class="col-12">
                        <div class="card mb-3">
                            <div class="row g-0 p-3">
                                <div class="col-md-2">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJO6dYQFqGX2TEJxyB-6mIfkoK0LdGLVy6ew&s"
                                        class="img-fluid rounded-start" style="height: 6rem;">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{-- judul --}}
                                            {{ $item->nama_mapel }}
                                        </h5>
                                        <p class="card-text">
                                            {{-- hari, tanggal| sabtu, 21 juni 2023 --}}
                                            @php
                                                $hari = date('l', strtotime($item->jadwal));
                                                $tanggal = date('d F Y', strtotime($item->jadwal));
                                                echo $hari . ', ' . $tanggal;
                                            @endphp
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endempty
        </div>
    </div>
</div>
