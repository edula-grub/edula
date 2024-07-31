<nav class="navbar navbar-expand-md bg-white shadow-sm fixed-top" style="width: auto;">
    <div class="container-fluid ms-3">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('./img/edulaLogo.png') }}" width="65" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-2" id="navbarSupportedContent">

            {{-- if session("siswa")-> --}}

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @if (session('siswa'))
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cara Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ReqPelajaran">Request Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Dasboard">Cek Riwayat</a>
                    </li>
                @endif
                @if (session('gurus'))
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Cara Kerja Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ambil Kelas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cek Riwayat</a>
                    </li>
                @endif

            </ul>


            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pelajar
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Pengajar</a></li>
                    {{-- if gurus --}}
                    @if (session('gurus'))
                        <li><a class="dropdown-item" href="/JadiPengajar">Pengajar</a></li>
                    @else
                        <li><a class="dropdown-item btn btn-primary" href="/JadiPengajar">Yuk Jadi Guru</a></li>
                    @endif
                </ul>
            </div>

            <div class="profile mx-3">
                <img src="{{ asset('./img/fotoProfil.jpg') }}" class="rounded-circle object-fit" width="65"
                    height="65" alt="">
            </div>


        </div>
    </div>
</nav>
