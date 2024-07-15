<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container-fluid ms-3">

      <a class="navbar-brand" href="#">
        <img src="{{ asset('./img/edulaLogo.png') }}" width="65" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-2" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Cara Kerja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Request Kelas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cek Riwayat</a>
          </li>
        </ul>

        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pelajar
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Pengajar</a></li>
            </ul>
        </div>

        <div class="profile mx-3">
            <img src="{{ asset('./img/fotoProfil.jpg') }}" class="rounded-circle object-fit" width="65" height="65" alt="">
        </div>

        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
      </div>
    </div>
</nav>
