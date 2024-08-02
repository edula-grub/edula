<div class="col-12">
    <div class="container-fluid">
        <div class="row">
            @if (empty($tidakselesai))
                <p>Tidak ada data yang tersedia.</p>
            @else
                @foreach ($tidakselesai as $item)
                    @if ($item->status)
                        <div class="kotak d-flex justify-content-center align-items-center" style="height: 150px;">
                            <div class="kotakimg col-md-1 offer-1 justify-content-center align-items-center mb-5">
                                <img src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}"
                                    style="width: 75px; height: 75px;" class="" alt="">
                            </div>
                            <div class="kotakisi col-md-9 px-2">
                                <h5>{{ $item->nama_mapel }}</h5>
                                <p>
                                    @php
                                        $hari = date('l', strtotime($item->jadwal));
                                        $tanggal = date('d F Y', strtotime($item->jadwal));
                                        echo $hari . ', ' . $tanggal;
                                    @endphp
                                </p>
                            </div>
                            <div class="kotakbutton col-md-2">
                                <a href="/Rom?s={{ $item->id }}" class="statusbutton">{{ $item->status }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
