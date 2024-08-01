<div class="col-12">
    <div class="container-fluid">
        <div class="row">
            @if (empty($tidakselesai))
                <p>Tidak ada data yang tersedia.</p>
            @else
                @foreach ($tidakselesai as $item)
                    @if ($item->status)
                        <div class="kotak">
                            <div class="kotakimg">
                                <img src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}" alt="">
                            </div>
                            <div class="kotakisi">
                                <h5>{{ $item->nama_mapel }}</h5>
                                <p>
                                    @php
                                        $hari = date('l', strtotime($item->jadwal));
                                        $tanggal = date('d F Y', strtotime($item->jadwal));
                                        echo $hari . ', ' . $tanggal;
                                    @endphp
                                </p>
                            </div>
                            <div class="kotakbutton">
                                <a href="/Rom?s={{ $item->id }}" class="statusbutton">{{ $item->status }}</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
