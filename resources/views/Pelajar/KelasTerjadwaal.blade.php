<div class="col-12">
    <div class="container-fluid">
        <div class="row">
            @if (empty($tidakselesai))
                <p>Tidak ada data yang tersedia.</p>
            @else
                @foreach ($tidakselesai as $item)
                    @if ($item->status)
                        <div class="kotak" style="background-color: #F0F0F0">
                            <div class="kotakimg">
                                <img src="{{ url('/img/Icon_Mapel_1.png') }}" class="img-fluid" alt="">
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
                        {{-- <div class="kotak d-flex justify-content-center align-items-center"
                            style="height: 150px; background-color: #F0F0F0">
                            <div class="kotakimg col-md-1 offer-1 justify-content-center align-items-center mb-5">
                                <img src="{{ url('/img/Icon_Mapel_1.png') }}" class="img-fluid" alt="">
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
                        </div> --}}
                    @endif
                @endforeach
            @endif
        </div>
    </div>
</div>
