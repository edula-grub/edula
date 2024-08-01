<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="css/global.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"
    />
  </head>
  <body>
    <div class="dashboard-pengajar">
      <img
        class="dashboard-pengajar-child"
        alt=""
        src="{{asset('./img/rectangle-4.svg')}}"
      />

      <div class="dashboard-pengajar-item"></div>
      <div class="cari">Cari</div>
      <header class="navbar-main">
        <div class="navbar-background"></div>
        <div class="navbar-content">
          <div class="edu-a-parent">
            <a class="edu-a">
              <span class="ed">ed</span>u <span class="span"> </span>a
            </a>
            <a class="l">l</a>
          </div>
          <nav class="user-navigation">
            <nav class="user-navigation-menu">
              <a class="cara-kerja" id="caraKerjaText">Cara Kerja</a>
              <a class="ambil-kelas">Ambil Kelas</a>
              <a class="cek-riwayat">Cek Riwayat</a>
            </nav>
          </nav>
        </div>
        <div class="user-profile">
          <div class="user-profile-dropdown">
            <div class="user-profile-details">
              <div class="user-name">
                <a class="pengajar">Pengajar</a>
                <img
                  class="arrow-drop-down-24dp-fill0-wgh-icon"
                  alt=""
                  src="{{asset('./img/arrow-drop-down-24dp-fill0-wght400-grad0-opsz24-1.svg')}}"
                />
              </div>
            </div>
            <div class="user-avatar">
              <div class="avatar-base"></div>
              <img
                class="avatar-highlight-icon"
                loading="lazy"
                alt=""
                src="{{asset('./img/ellipse-70@2x.png')}}"
              />
            </div>
          </div>
        </div>
      </header>
      <main class="page-header">
        <section class="header-content">
          <div class="search-and-filter">
            <div class="search">
              <div class="search-child"></div>
              <div class="cari1">Cari</div>
              <img class="image-2-icon" alt="" src="{{asset('./img/image-2@2x.png" /')}}>
            </div>
            <div class="filter-dropdown">
              <div class="filter-dropdown-icon-parent" id="frameContainer">
                <div class="filter-dropdown-icon">
                  <img
                    class="image-14-icon"
                    alt=""
                    src="{{asset('./img/image-14@2x.png')}}"
                  />
                </div>
                <a class="filter">Filter</a>
              </div>
            </div>
          </div>
          <div class="page-title">
            <h1 class="permintaan-mengajar">Permintaan Mengajar</h1>
          </div>
          <div class="content">
            <div class="card-grid">
              <div class="card-pengajar-wrapper">
                <div class="card-pengajar">
                  <div class="card-backgrounds"></div>
                  <div class="card-shadows"></div>
                  <div class="card-details">
                    <div class="calculus-parent">
                      <div class="calculus">Kalkulus</div>
                      <div class="schedule-details">
                        <div class="schedule-info">
                          <div class="schedule-items">
                            <img
                              class="image-18-icon"
                              loading="lazy"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon"
                              loading="lazy"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon"
                              loading="lazy"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="schedule-time">
                          <div class="schedule-day-time">
                            <div class="senin-30-mei">Senin, 30 Mei 2025</div>
                            <div class="schedule-hours">
                              <div class="wib">18:00 - 19:00 WIB</div>
                              <div class="rp-150000">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="action-buttons">
                            <div class="lihat-selengkapnya">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-container">
                <div class="card-pengajar1">
                  <div class="card-pengajar-child"></div>
                  <div class="card-pengajar-item"></div>
                  <div class="card-pengajar-inner">
                    <div class="calculus-group">
                      <div class="calculus1">Matematika Wajib</div>
                      <div class="frame-parent">
                        <div class="frame-wrapper">
                          <div class="image-18-parent">
                            <img
                              class="image-18-icon1"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon1"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon1"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-group">
                          <div class="senin-30-mei-2025-parent">
                            <div class="senin-30-mei1">Senin, 30 Mei 2025</div>
                            <div class="wib-parent">
                              <div class="wib1">18:00 - 19:00 WIB</div>
                              <div class="rp-1500001">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper">
                            <div class="lihat-selengkapnya1">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-frame">
                <div class="card-pengajar2">
                  <div class="rectangle-div"></div>
                  <div class="card-pengajar-child1"></div>
                  <div class="frame-div">
                    <div class="calculus-container">
                      <div class="calculus2">Fisika</div>
                      <div class="frame-container">
                        <div class="frame-wrapper1">
                          <div class="image-18-group">
                            <img
                              class="image-18-icon2"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon2"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon2"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent1">
                          <div class="senin-30-mei-2025-group">
                            <div class="senin-30-mei2">Senin, 30 Mei 2025</div>
                            <div class="wib-group">
                              <div class="wib2">18:00 - 19:00 WIB</div>
                              <div class="rp-1500002">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-container">
                            <div class="lihat-selengkapnya2">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper1">
                <div class="card-pengajar3">
                  <div class="card-pengajar-child2"></div>
                  <div class="card-pengajar-child3"></div>
                  <div class="card-pengajar-inner1">
                    <div class="calculus-parent1">
                      <div class="calculus3">Biologi</div>
                      <div class="frame-parent2">
                        <div class="frame-wrapper2">
                          <div class="image-18-container">
                            <img
                              class="image-18-icon3"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon3"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon3"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent3">
                          <div class="senin-30-mei-2025-container">
                            <div class="senin-30-mei3">Senin, 30 Mei 2025</div>
                            <div class="wib-container">
                              <div class="wib3">18:00 - 19:00 WIB</div>
                              <div class="rp-1500003">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-frame">
                            <div class="lihat-selengkapnya3">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper2">
                <div class="card-pengajar4">
                  <div class="card-pengajar-child4"></div>
                  <div class="card-pengajar-child5"></div>
                  <div class="card-pengajar-inner2">
                    <div class="calculus-parent2">
                      <div class="calculus4">Sosiologi</div>
                      <div class="frame-parent4">
                        <div class="frame-wrapper3">
                          <div class="image-18-parent1">
                            <img
                              class="image-18-icon4"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon4"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon4"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent5">
                          <div class="senin-30-mei-2025-parent1">
                            <div class="senin-30-mei4">Senin, 30 Mei 2025</div>
                            <div class="wib-parent1">
                              <div class="wib4">18:00 - 19:00 WIB</div>
                              <div class="rp-1500004">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper1">
                            <div class="lihat-selengkapnya4">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper3">
                <div class="card-pengajar5">
                  <div class="card-pengajar-child6"></div>
                  <div class="card-pengajar-child7"></div>
                  <div class="card-pengajar-inner3">
                    <div class="calculus-parent3">
                      <div class="calculus5">C++</div>
                      <div class="frame-parent6">
                        <div class="frame-wrapper4">
                          <div class="image-18-parent2">
                            <img
                              class="image-18-icon5"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon5"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon5"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent7">
                          <div class="senin-30-mei-2025-parent2">
                            <div class="senin-30-mei5">Senin, 30 Mei 2025</div>
                            <div class="wib-parent2">
                              <div class="wib5">18:00 - 19:00 WIB</div>
                              <div class="rp-1500005">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper2">
                            <div class="lihat-selengkapnya5">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper4">
                <div class="card-pengajar6">
                  <div class="card-pengajar-child8"></div>
                  <div class="card-pengajar-child9"></div>
                  <div class="card-pengajar-inner4">
                    <div class="calculus-parent4">
                      <div class="calculus6">Python</div>
                      <div class="frame-parent8">
                        <div class="frame-wrapper5">
                          <div class="image-18-parent3">
                            <img
                              class="image-18-icon6"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon6"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon6"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent9">
                          <div class="senin-30-mei-2025-parent3">
                            <div class="senin-30-mei6">Senin, 30 Mei 2025</div>
                            <div class="wib-parent3">
                              <div class="wib6">18:00 - 19:00 WIB</div>
                              <div class="rp-1500006">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper3">
                            <div class="lihat-selengkapnya6">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper5">
                <div class="card-pengajar7">
                  <div class="card-pengajar-child10"></div>
                  <div class="card-pengajar-child11"></div>
                  <div class="card-pengajar-inner5">
                    <div class="calculus-parent5">
                      <div class="calculus7">Data Science</div>
                      <div class="frame-parent10">
                        <div class="frame-wrapper6">
                          <div class="image-18-parent4">
                            <img
                              class="image-18-icon7"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon7"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon7"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent11">
                          <div class="senin-30-mei-2025-parent4">
                            <div class="senin-30-mei7">Senin, 30 Mei 2025</div>
                            <div class="wib-parent4">
                              <div class="wib7">18:00 - 19:00 WIB</div>
                              <div class="rp-1500007">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper4">
                            <div class="lihat-selengkapnya7">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-pengajar-wrapper6">
                <div class="card-pengajar8">
                  <div class="card-pengajar-child12"></div>
                  <div class="card-pengajar-child13"></div>
                  <div class="card-pengajar-inner6">
                    <div class="calculus-parent6">
                      <div class="calculus8">Data Mining</div>
                      <div class="frame-parent12">
                        <div class="frame-wrapper7">
                          <div class="image-18-parent5">
                            <img
                              class="image-18-icon8"
                              alt=""
                              src="{{asset('./img/image-18@2x.png')}}"
                            />

                            <img
                              class="image-16-icon8"
                              alt=""
                              src="{{asset('./img/image-16@2x.png')}}"
                            />

                            <img
                              class="image-17-icon8"
                              alt=""
                              src="{{asset('./img/image-17@2x.png')}}"
                            />
                          </div>
                        </div>
                        <div class="frame-parent13">
                          <div class="senin-30-mei-2025-parent5">
                            <div class="senin-30-mei8">Senin, 30 Mei 2025</div>
                            <div class="wib-parent5">
                              <div class="wib8">18:00 - 19:00 WIB</div>
                              <div class="rp-1500008">Rp. 150,000</div>
                            </div>
                          </div>
                          <div class="lihat-selengkapnya-wrapper5">
                            <div class="lihat-selengkapnya8">
                              Lihat Selengkapnya &gt;&gt;
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

    <script>
      var caraKerjaText = document.getElementById("caraKerjaText");
      if (caraKerjaText) {
        caraKerjaText.addEventListener("click", function (e) {
          // Please sync "Cara Kerja - Pengajar" to the project
        });
      }

      var frameContainer = document.getElementById("frameContainer");
      if (frameContainer) {
        frameContainer.addEventListener("click", function (e) {
          // Please sync "Dashboard Dropdown - Pengajar" to the project
        });
      }
      </script>
  </body>
</html>
