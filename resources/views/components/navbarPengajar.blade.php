<nav class="navbar navbar-expand-md bg-white shadow-sm fixed-top" style="width: auto;">
    <div class="container-fluid ms-3">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('./img/edulaLogo.png') }}" width="65" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/CaraKerjaPengajar') }}">Cara
                        Kerja</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/AmbilKelas') }}">Ambil Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/DetailPengajar') }}">Cek Riwayat</a>
                </li>
            </ul>


            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Pengajar
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ url('/dashboard') }}">Pelajar </a>
                    </li>
                </ul>
            </div>

            <div class="profile mx-3">
                @include('components.fotouser')
            </div>


        </div>
    </div>
</nav>
