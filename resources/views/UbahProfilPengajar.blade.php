@extends('Template.Master')
@section('CSS')
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/UbahProfilPengajar.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
@endsection

@section('content')

<div class="ubah-profil-pengajar">
    <main class="main-container2">
      <div class="main-container-child"></div>
      <div class="profile-container1">
        <h1 class="ubah-profil5">Ubah Profil</h1>
        <div class="data-container">
          <div class="credentials-container">
            <div class="credentials-icons-container">
              <img
                class="id-card-24dp-fill0-wght400-gra-icon"
                loading="lazy"
                alt=""
                src="./public/id-card-24dp-fill0-wght400-grad0-opsz24-1.svg"
              />
            </div>
            <div class="data-pribadi">Data Pribadi</div>
          </div>
          <div class="credentials-container1">
            <div class="password-24dp-fill0-wght400-gr-wrapper">
              <img
                class="password-24dp-fill0-wght400-gr-icon"
                loading="lazy"
                alt=""
                src="./public/password-24dp-fill0-wght400-grad0-opsz24-1.svg"
              />
            </div>
            <div class="kata-sandi">Kata Sandi</div>
          </div>
          <div class="credentials-container2">
            <div class="policy-24dp-fill0-wght400-grad-wrapper">
              <img
                class="policy-24dp-fill0-wght400-grad-icon"
                loading="lazy"
                alt=""
                src="./public/policy-24dp-fill0-wght400-grad0-opsz24-1.svg"
              />
            </div>
            <a class="kebijakan">Kebijakan</a>
          </div>
        </div>
      </div>
      <div class="main-container-item"></div>
      <form class="frame-form">
        <div class="photo-container-wrapper">
          <div class="photo-container">
            <div class="photo-container-inner">
              <div class="frame-parent67">
                <div class="id-card-24dp-fill0-wght400-gra-wrapper">
                  <img
                    class="id-card-24dp-fill0-wght400-gra-icon1"
                    alt=""
                    src="./public/id-card-24dp-fill0-wght400-grad0-opsz24-2.svg"
                  />
                </div>
                <b class="data-pribadi1">Data Pribadi</b>
              </div>
            </div>
            <div class="photo-container-child"></div>
          </div>
        </div>
        <div class="foto-profil-parent">
          <div class="foto-profil">Foto Profil</div>
          <div class="full-name-container">
            <div class="name-fields-container">
              <img
                class="name-fields-container-child"
                loading="lazy"
                alt=""
                src="./public/group-146.svg"
              />

              <div class="nama-lengkap">Nama Lengkap</div>
            </div>
            <div class="photo-buttons-container">
              <div class="button-group">
                <div class="button11">
                  <div class="ubah-foto-profil">Ubah Foto Profil</div>
                </div>
                <div class="button12">
                  <div class="hapus-foto-profil">Hapus Foto Profil</div>
                </div>
              </div>
            </div>
          </div>
          <div class="name-input-fields-parent">
            <div class="name-input-fields">
              <div class="fill-namadepan">
                <div class="fill-namadepan-child"></div>
                <input
                  class="nama-depan"
                  placeholder="Nama depan"
                  type="text"
                />
              </div>
              <div class="fill-namabelakang">
                <div class="fill-namabelakang-child"></div>
                <input
                  class="nama-belakang"
                  placeholder="Nama belakang"
                  type="text"
                />
              </div>
            </div>
            <div class="contact-labels">
              <div class="alamat-email">Alamat Email</div>
              <div class="nomor-telepon">Nomor Telepon</div>
            </div>
          </div>
          <div class="contact-input-fields">
            <div class="fill-email">
              <div class="fill-email-child"></div>
              <input
                class="emailgmailcom"
                placeholder="email@gmail.com"
                type="text"
              />
            </div>
            <div class="fill-nohp">
              <div class="fill-nohp-child"></div>
              <input
                class="input"
                placeholder="+62 8123 4567 890"
                type="text"
              />
            </div>
          </div>
        </div>
        <div class="birth-date-container-parent">
          <div class="birth-date-container">
            <div class="tanggal-lahir">Tanggal Lahir</div>
            <div class="date-dropdown-fields">
              <div class="fill-email1">
                <div class="fill-email-item"></div>
                <div class="tanggal1">Tanggal</div>
                <img
                  class="arrow-drop-down-24dp-fill0-wgh-icon"
                  alt=""
                  src="./public/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1.svg"
                />
              </div>
              <div class="fill-email2">
                <div class="fill-email-inner"></div>
                <div class="bulan1">Bulan</div>
                <img
                  class="arrow-drop-down-24dp-fill0-wgh-icon1"
                  alt=""
                  src="./public/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1.svg"
                />
              </div>
              <div class="fill-email3">
                <div class="fill-email-child1"></div>
                <div class="tahun1">Tahun</div>
                <img
                  class="arrow-drop-down-24dp-fill0-wgh-icon2"
                  alt=""
                  src="./public/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1.svg"
                />
              </div>
            </div>
          </div>
          <div class="gender-container">
            <div class="jenis-kelamin">Jenis Kelamin</div>
            <div class="fill-email4">
              <div class="fill-email-child2"></div>
              <div class="pilih-satu">Pilih satu</div>
              <img
                class="arrow-drop-down-24dp-fill0-wgh-icon3"
                alt=""
                src="./public/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1-3.svg"
              />
            </div>
          </div>
          <div class="save-button-container">
            <button class="button13">
              <div class="simpan">Simpan</div>
            </button>
          </div>
        </div>
      </form>
    </main>
  </div>

@endsection


@section('JS')

@endsection