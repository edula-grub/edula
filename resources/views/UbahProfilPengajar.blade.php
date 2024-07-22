<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Profil</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/EdulaExport/UbahProfilPengajar.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Data Pribadi</a>
                    <a class="nav-link" id="v-pills-password-tab" data-toggle="pill" href="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false">Kata Sandi</a>
                    <a class="nav-link" id="v-pills-policy-tab" data-toggle="pill" href="#v-pills-policy" role="tab" aria-controls="v-pills-policy" aria-selected="false">Kebijakan</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h3>Data Pribadi</h3>
                        <div class="form-group text-center">
                            <img src="profile.jpg" class="rounded-circle" alt="Foto Profil" width="100">
                            <div>
                                <button class="btn btn-outline-secondary btn-sm">Ubah Foto Profil</button>
                                <button class="btn btn-outline-secondary btn-sm">Hapus Foto Profil</button>
                            </div>
                        </div>
                        <form>
                            <div class="form-group">
                                <label for="namaDepan">Nama Lengkap</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control" id="namaDepan" placeholder="Nama depan">
                                    </div>
                                    <div class="col">
                                        <input type="text" class="form-control" id="namaBelakang" placeholder="Nama belakang">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Alamat Email</label>
                                <input type="email" class="form-control" id="email" placeholder="email@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="nomorTelepon">Nomor Telepon</label>
                                <input type="tel" class="form-control" id="nomorTelepon" placeholder="+62 8123 4567 890">
                            </div>
                            <div class="form-group">
                                <label for="tanggalLahir">Tanggal Lahir</label>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" id="tanggal">
                                            <option>Tanggal</option>
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="bulan">
                                            <option>Bulan</option>
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" id="tahun">
                                            <option>Tahun</option>
                                            <!-- Add options here -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenisKelamin">Jenis Kelamin</label>
                                <select class="form-control" id="jenisKelamin">
                                    <option>Pilih satu</option>
                                    <!-- Add options here -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    <!-- Additional tabs content can go here -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
