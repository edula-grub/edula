@extends('Template.Master')
@section('CSS')
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/RiwayatPengajar1.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
@endsection

@section('content')
<div class="riwayat-pengajar1">
      <header class="tutor-profile">
        <div class="profile-container">
          <div class="profile-content">
            <img
              class="profilepicture-icon3"
              loading="lazy"
              alt=""
              src="{{ url('EdulaExport/public/profilepicture.svg') }}"
            />

            <div class="profile-info2">
              <div class="profile-name-container-parent">
                <div class="profile-name-container">
                  <a class="budiman-h3">Budiman H</a>
                </div>
                <div class="teaching-experience">
                  <div class="experience-stars">
                    <img
                      class="experience-star-icon"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13.svg') }}"
                    />

                    <img
                      class="experience-star-icon1"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13.svg') }}"
                    />

                    <img
                      class="experience-star-icon2"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13.svg') }}"
                    />

                    <img
                      class="experience-star-icon3"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13.svg') }}"
                    />

                    <img
                      class="experience-star-icon4"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13.svg') }}"
                    />
                  </div>
                  <div class="teaching-label">
                    <div class="experience-label">(300)</div>
                  </div>
                  <div class="teaching-label1">
                    <div class="durasi-mengajar-50-container3">
                      <span>| Durasi mengajar: </span>
                      <b>50 Jam</b>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="profile-actions">
            <div class="action-buttons4">
              <div class="button7">
                <div class="ubah-profil3">Ubah Profil</div>
              </div>
              <div class="button8">
                <div class="keluar3">Keluar</div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <img
        class="riwayat-pengajar-item"
        loading="lazy"
        alt=""
        src="{{ url('EdulaExport/public/line-3.svg') }}"
      />

      <div class="navigation2">
        <div class="navbar1">
          <div class="navbar-profilriwayat3">
            <div class="deskripsi3">Deskripsi</div>
            <div class="kelas-terjadwal3">Kelas Terjadwal</div>
            <div class="kelas-selesai3">Kelas Selesai</div>
            <div class="sertifikasi3">Sertifikasi</div>
            <div class="rating-ulasan3">Rating & Ulasan</div>
          </div>
          <img
            class="navbar-item"
            loading="lazy"
            alt=""
            src="{{ url('EdulaExport/public/line-23.svg') }}"
          />
        </div>
      </div>
      <section class="page-content">
        <div class="content-header">
          <div class="header-info">
            <div class="rating-summary">
              <div class="total-rating">
                <b class="rating-value">4.0</b>
              </div>
              <div class="rating-scale">
                <div class="rating-label">
                  <div class="dari-50">dari 5.0</div>
                </div>
                <div class="summary-stars">
                  <img
                    class="summary-star-icon"
                    loading="lazy"
                    alt=""
                    src="{{ url('EdulaExport/public/star-13.svg') }}"
                  />

                  <img
                    class="summary-star-icon1"
                    loading="lazy"
                    alt=""
                    src="{{ url('EdulaExport/public/star-13.svg') }}"
                  />

                  <img
                    class="summary-star-icon2"
                    loading="lazy"
                    alt=""
                    src="{{ url('EdulaExport/public/star-13.svg') }}"
                  />

                  <img
                    class="summary-star-icon3"
                    loading="lazy"
                    alt=""
                    src="{{ url('EdulaExport/public/star-13.svg') }}"
                  />

                  <img
                    class="summary-star-icon4"
                    loading="lazy"
                    alt=""
                    src="{{ url('EdulaExport/public/star-17-1.svg') }}"
                  />
                </div>
                <div class="rating-label1">
                  <div class="rating3">300 Rating</div>
                </div>
              </div>
            </div>
          </div>
          <div class="header-separator"></div>
          <div class="review-columns-parent">
            <div class="review-columns">
              <div class="review-progress-parent">
                <div class="review-progress">5.0</div>
                <div class="review-labels">
                  <div class="progress-background-parent">
                    <div class="progress-background"></div>
                    <div class="progress-background1"></div>
                  </div>
                </div>
              </div>
              <div class="ulasan">200 Ulasan</div>
            </div>
            <div class="review-columns1">
              <div class="parent">
                <div class="div1">4.0</div>
                <div class="frame-wrapper31">
                  <div class="progress-background-group">
                    <div class="progress-background2"></div>
                    <div class="progress-background3"></div>
                  </div>
                </div>
              </div>
              <div class="ulasan1">50 Ulasan</div>
            </div>
            <div class="review-columns2">
              <div class="group">
                <div class="div2">3.0</div>
                <div class="frame-wrapper32">
                  <div class="progress-background-container">
                    <div class="progress-background4"></div>
                    <div class="progress-background5"></div>
                  </div>
                </div>
              </div>
              <div class="ulasan2">50 Ulasan</div>
            </div>
            <div class="review-count-container-parent">
              <div class="review-count-container">
                <div class="review-count-value">2.0</div>
                <div class="review-count-icon">
                  <div class="progress-background-wrapper">
                    <div class="progress-background6"></div>
                  </div>
                </div>
              </div>
              <div class="ulasan3">0 Ulasan</div>
            </div>
            <div class="review-columns3">
              <div class="frame-parent49">
                <div class="progress-placeholder-parent">
                  <div class="progress-placeholder">1.0</div>
                  <div class="progress-container">
                    <div class="progress-background-frame">
                      <div class="progress-background7"></div>
                    </div>
                  </div>
                </div>
                <div class="ulasan4">0 Ulasan</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="review-content-wrapper">
        <div class="review-content">
          <div class="review-headers">
            <div class="review-subheaders">
              <div class="review-avatars">
                <img
                  class="review-avatars-child"
                  loading="lazy"
                  alt=""
                  src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}"
                />
              </div>
              <div class="review-names">
                <div class="review-dates">
                  <b class="kucing-konheng">Kucing Konheng</b>
                  <div class="bulan-lalu">4 bulan lalu</div>
                </div>
                <div class="mata-pelajaran-container">
                  <span class="mata-pelajaran1">Mata Pelajaran : </span>
                  <span class="kalkulus1">Kalkulus</span>
                </div>
              </div>
            </div>
            <div class="review-ratings">
              <div class="review-star-containers">
                <b class="empty-stars">5.0</b>
                <div class="star-rows">
                  <div class="star-columns">
                    <img
                      class="star-columns-child"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="star-columns-item"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="star-columns-inner"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="star-icon"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="star-columns-child1"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="review-descriptions">
            <p class="lorem-ipsum-dolor1">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </section>
      <section class="review-content-container">
        <div class="review-content1">
          <div class="frame-parent50">
            <div class="frame-parent51">
              <div class="ellipse-wrapper">
                <img
                  class="ellipse-icon"
                  loading="lazy"
                  alt=""
                  src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}"
                />
              </div>
              <div class="frame-parent52">
                <div class="kucing-konheng-parent">
                  <b class="kucing-konheng1">Kucing Konheng</b>
                  <div class="bulan-lalu1">4 bulan lalu</div>
                </div>
                <div class="mata-pelajaran-container1">
                  <span class="mata-pelajaran2">Mata Pelajaran : </span>
                  <span class="kalkulus2">Kalkulus</span>
                </div>
              </div>
            </div>
            <div class="frame-wrapper33">
              <div class="container">
                <b class="b">5.0</b>
                <div class="frame-wrapper34">
                  <div class="star-parent">
                    <img
                      class="frame-child31"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child32"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child33"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child34"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child35"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lorem-ipsum-dolor-sit-amet-co-wrapper">
            <p class="lorem-ipsum-dolor2">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </section>
      <section class="review-content-frame">
        <div class="review-content2">
          <div class="frame-parent53">
            <div class="frame-parent54">
              <div class="ellipse-container">
                <img
                  class="frame-child36"
                  loading="lazy"
                  alt=""
                  src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}"
                />
              </div>
              <div class="frame-parent55">
                <div class="kucing-konheng-group">
                  <b class="kucing-konheng2">Kucing Konheng</b>
                  <div class="bulan-lalu2">4 bulan lalu</div>
                </div>
                <div class="mata-pelajaran-container2">
                  <span class="mata-pelajaran3">Mata Pelajaran : </span>
                  <span class="kalkulus3">Kalkulus</span>
                </div>
              </div>
            </div>
            <div class="frame-wrapper35">
              <div class="parent1">
                <b class="b1">5.0</b>
                <div class="frame-wrapper36">
                  <div class="star-group">
                    <img
                      class="frame-child37"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child38"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child39"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child40"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child41"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lorem-ipsum-dolor-sit-amet-co-container">
            <p class="lorem-ipsum-dolor3">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </section>
      <section class="review-content-wrapper1">
        <div class="review-content3">
          <div class="frame-parent56">
            <div class="frame-parent57">
              <div class="ellipse-frame">
                <img
                  class="frame-child42"
                  loading="lazy"
                  alt=""
                  src="{{ url('EdulaExport/public/ellipse-70@2x.png') }}"
                />
              </div>
              <div class="frame-parent58">
                <div class="kucing-konheng-container">
                  <b class="kucing-konheng3">Kucing Konheng</b>
                  <div class="bulan-lalu3">4 bulan lalu</div>
                </div>
                <div class="mata-pelajaran-container3">
                  <span class="mata-pelajaran4">Mata Pelajaran : </span>
                  <span class="kalkulus4">Kalkulus</span>
                </div>
              </div>
            </div>
            <div class="frame-wrapper37">
              <div class="parent2">
                <b class="b2">5.0</b>
                <div class="frame-wrapper38">
                  <div class="star-container">
                    <img
                      class="frame-child43"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child44"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child45"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child46"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />

                    <img
                      class="frame-child47"
                      loading="lazy"
                      alt=""
                      src="{{ url('EdulaExport/public/star-13-2.svg') }}"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="lorem-ipsum-dolor-sit-amet-co-frame">
            <p class="lorem-ipsum-dolor4">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
              enim ad minim veniam, quis nostrud exercitation ullamco laboris
              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
              reprehenderit in voluptate velit esse cillum dolore eu fugiat
              nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </div>
        </div>
      </section>
    </div>
@endsection

@section('JS')
@endsection