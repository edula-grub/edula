<nav class="navbar navbar-expand-md bg-white shadow-sm fixed-top" style="width: auto;">
    <div class="container-fluid ms-3">

        <a class="navbar-brand" href="/dashboard">
            <img src="{{ asset('./img/edulaLogo.png') }}" width="65" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/CaraKerjaPelajar') }}">Cara
                        Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/ReqPelajaran') }}">Request Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">Cek Riwayat</a>
                </li>
            </ul>


            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pelajar
                </button>
                <ul class="dropdown-menu">
                    @if (session('gurus'))
                        <li>
                            <a class="dropdown-item" href="{{ url('/DetailPengajar') }}">Pengajar</a>
                        </li>
                    @elseif (!session('gurus'))
                        <li>
                            <a class="dropdown-item" href="{{ url('/JadiPengajar') }}">Yuk Jadi Guru</a>
                        </li>
                    @endif
                </ul>
            </div>

            <div class="profile mx-3">
                @include('components.fotouser')
            </div>


        </div>
    </div>
</nav>
