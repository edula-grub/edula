Dasboard
<img src="" alt="">

<a href="">KelasTerjadwal</a>
<a href="">KelasSelesai</a>
<a href="{{ url('ReqPelajaran') }}">Request</a>
<a href="{{ url('JadiPengajar') }}">jadipengajar</a>
<a href="{{ url('UbahProfilPelajar') }}">UbahProfilPelajar</a>

<hr>
@dump(session()->all())
