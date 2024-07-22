<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/UbahProfilPelajar.css') }}" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
  </head>
  <body>
    <div class="ubah-profil-pelajar">
      <main class="rectangle-parent51">
        <div class="frame-child100"></div>
        <div class="ubah-profil-parent">
          <b class="ubah-profil8">Ubah Profil</b>
          <div class="frame-parent82">
            <div class="personal-data-label-row-parent">
              <div class="personal-data-label-row">
                <img
                  class="id-card-24dp-fill0-wght400-gra-icon2"
                  loading="lazy"
                  alt=""
                  src="{{url('EdulaExport/public/id-card-24dp-fill0-wght400-grad0-opsz24-1.svg')}}"
                />
              </div>
              <div class="data-pribadi2">Data Pribadi</div>
            </div>
            <div class="frame-parent83">
              <div class="password-24dp-fill0-wght400-gr-container">
                <img
                  class="password-24dp-fill0-wght400-gr-icon1"
                  loading="lazy"
                  alt=""
                  src="{{url('EdulaExport/public/password-24dp-fill0-wght400-grad0-opsz24-1.svg')}}"
                />
              </div>
              <div class="kata-sandi1">Kata Sandi</div>
            </div>
            <div class="frame-parent84">
              <div class="policy-24dp-fill0-wght400-grad-container">
                <img
                  class="policy-24dp-fill0-wght400-grad-icon1"
                  loading="lazy"
                  alt=""
                  src="{{url('EdulaExport/public/policy-24dp-fill0-wght400-grad0-opsz24-1.svg')}}"
                />
              </div>
              <a class="kebijakan1">Kebijakan</a>
            </div>
          </div>
        </div>
        <div class="frame-child101"></div>
        <form class="frame-parent85">
          <div class="frame-wrapper59">
            <div class="picture-container-parent">
              <div class="picture-container">
                <div class="picture-inner-container">
                  <div class="picture-holder">
                    <img
                      class="id-card-24dp-fill0-wght400-gra-icon3"
                      alt=""
                      src="{{url('EdulaExport/public/id-card-24dp-fill0-wght400-grad0-opsz24-2.svg')}}"
                    />
                  </div>
                  <b class="data-pribadi3">Data Pribadi Pelajar</b>
                </div>
              </div>
              <div class="frame-child102"></div>
            </div>
          </div>
          <div class="foto-profil-group">
            <a class="foto-profil1">Foto Profil</a>
            <div class="frame-parent86">
              <div class="frame-parent87">
                <img
                  class="frame-child103"
                  loading="lazy"
                  alt=""
                  src="./public/group-1461.svg"
                />

                <div class="nama-lengkap1">Nama Lengkap</div>
              </div>
              <div class="edit-picture-buttons">
                <div class="edit-picture-button-container">
                  <div class="button28">
                    <div class="ubah-foto-profil1">Ubah Foto Profil</div>
                  </div>
                  <div class="button29">
                    <div class="hapus-foto-profil1">Hapus Foto Profil</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="contact-info-labels-parent">
              <div class="contact-info-labels">
                <div class="fill-namadepan1">
                  <div class="fill-namadepan-item"></div>
                  <input
                    class="nama-depan1"
                    placeholder="Nama depan"
                    type="text"
                  />
                </div>
                <div class="fill-namabelakang1">
                  <div class="fill-namabelakang-item"></div>
                  <input
                    class="nama-belakang1"
                    placeholder="Nama belakang"
                    type="text"
                  />
                </div>
              </div>
              <div class="contact-input-labels">
                <div class="alamat-email1">Alamat Email</div>
                <div class="nomor-telepon1">Nomor Telepon</div>
              </div>
            </div>
            <div class="contact-info-inputs">
              <div class="fill-email5">
                <div class="fill-email-child3"></div>
                <input
                  class="emailgmailcom1"
                  placeholder="email@gmail.com"
                  type="text"
                />
              </div>
              <div class="fill-nohp1">
                <div class="fill-nohp-item"></div>
                <input
                  class="input1"
                  placeholder="+62 8123 4567 890"
                  type="text"
                />
              </div>
            </div>
          </div>
          <div class="frame-parent88">
            <div class="tanggal-lahir-parent">
              <div class="tanggal-lahir1">Tanggal Lahir</div>
              <div class="isi-tanggal-lahir">
                <input type="date" id="bdaymonth" name="bdaymonth" class="input-tanggal-lahir">
              </div>

            </div>
            {{-- <div class="jenis-kelamin-parent">
              <div class="jenis-kelamin1">Jenis Kelamin</div>
              <div class="fill-email9">
                <div class="fill-email-child7"></div>
                <div class="pilih-satu1">Pilih satu</div>
                <img
                  class="arrow-drop-down-24dp-fill0-wgh-icon7"
                  alt=""
                  src="url{{('EdulaExport/public/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1-3.svg')}}"
                />
              </div>
            </div> --}}

            <div class="jenis-kelamin-parent">
                <div class="jenis-kelamin1">Jenis Kelamin</div>
                <div class="dropdown">
                    <div class="dropdown-button pilih-satu5" id="dropdownButton">
                        Pilih satu
                    </div>
                    <div class="dropdown-content" id="dropdownContent">
                        <div onclick="selectOption('Female')">Female</div>
                        <div onclick="selectOption('Male')">Male</div>
                    </div>
                </div>
            </div>

            <div class="save-button-container1">
              <button class="button30">
                <div class="simpan1">Simpan</div>
              </button>
            </div>
          </div>
        </form>
      </main>
    </div>



    <script>
        document.getElementById('dropdownButton').addEventListener('click', function() {
            var content = document.getElementById('dropdownContent');
            content.style.display = content.style.display === 'block' ? 'none' : 'block';
        });

        function selectOption(value) {
            document.getElementById('dropdownButton').textContent = value;
            document.getElementById('dropdownContent').style.display = 'none';
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown-button')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
  </body>
</html>
