@extends('Template.Master')

@section('CSS')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/EdulaExport/global.css') }}" />
    <link rel="stylesheet" href="{{ url('/EdulaExport/UbahProfilPengajar.css') }}" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
@endsection

@section('content')
<div class="ubah-profil-pelajar">
    <main class="rectangle-parent51">
        <div class="frame-child100"></div>
        <div class="ubah-profil-parent">
            <b class="ubah-profil8">Ubah Profil </b>
            <div class="frame-parent82">
                <div class="personal-data-label-row-parent">
                    <div class="personal-data-label-row">
                        <img class="id-card-24dp-fill0-wght400-gra-icon2" loading="lazy" alt="" src="{{url('EdulaExport/public/id_card_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg')}}" />
                    </div>
                    <div class="data-pribadi2" onclick="render(1)">Data Pribadi</div>
                </div>
                <div class="frame-parent83">
                    <div class="password-24dp-fill0-wght400-gr-container">
                        <img class="password-24dp-fill0-wght400-gr-icon1" loading="lazy" alt="" src="{{url('EdulaExport/public/password-24dp-fill0-wght400-grad0-opsz24-1.svg')}}" />
                    </div>
                    <div class="kata-sandi1" onclick="render(2)">Kata Sandi</div>
                </div>
                <div class="frame-parent84">
                    <div class="policy-24dp-fill0-wght400-grad-container">
                        <img class="policy-24dp-fill0-wght400-grad-icon1" loading="lazy" alt="" src="{{url('EdulaExport/public/policy-24dp-fill0-wght400-grad0-opsz24-1.svg')}}" />
                    </div>
                    <a class="kebijakan1" style="text-decoration: none" onclick="render(3)">Kebijakan</a>
                </div>
            </div>
        </div>
        <div class="frame-child101"></div>

        {{-- yang bagian kanan, yang bisa diganti-ganti (form) --}}
        <div class="poinrender" id="renderpick">
        <form class="frame-parent85" method="POST" action="{{route('updateprofil')}}">
            @csrf
            <div class="frame-wrapper59">
                <div class="picture-container-parent">
                    <div class="picture-container">
                        <div class="picture-inner-container">
                            <div class="picture-holder">
                                <img class="id-card-24dp-fill0-wght400-gra-icon3" alt="" src="{{url('EdulaExport/public/id-card-24dp-fill0-wght400-grad0-opsz24-2.svg')}}" />
                            </div>
                            <b class="data-pribadi3">Data Pribadi Pengajar</b>
                        </div>
                    </div>
                    <div class="frame-child102"></div>
                </div>
            </div>
            <div class="foto-profil-group">
                <div class="alamat-email1">Foto Profil</div>
                <div class="frame-parent86">
                    <div class="frame-parent87">
                        <img class="frame-child103" loading="lazy" alt="" src="{{$datasiswa->profile}}" />
                        <div class="nama-lengkap1">Nama Lengkap</div>
                    </div>
                    <div class="edit-picture-buttons">
                        <div class="edit-picture-button-container">
                            {{-- <div class="button28">
                                <div class="ubah-foto-profil1">Ubah Foto Profil</div>
                            </div> --}}
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
                            <input class="nama-depan1" placeholder="Nama depan" value="{{$datasiswa->name}}" type="text" name="namadepan" />
                        </div>
                        {{-- <div class="fill-namabelakang1">
                            <div class="fill-namabelakang-item"></div>
                            <input class="nama-belakang1" placeholder="Nama belakang" value="" type="text" name="namabelakang"/>
                        </div> --}}
                    </div>
                    <div class="contact-input-labels">
                        <div class="alamat-email1">Alamat Email</div>
                        <div class="nomor-telepon1">Nomor Telepon</div>
                    </div>
                </div>
                <div class="contact-info-inputs">
                    <div class="fill-email5">
                        <div class="fill-email-child3"></div>
                        <input class="emailgmailcom1" placeholder="email@gmail.com" value="{{$datasiswa->email}}" type="text" name="email" />
                    </div>
                    <div class="fill-nohp1">
                        <div class="fill-nohp-item"></div>
                        <input class="input1" placeholder="+62 8123 4567 890" value="{{$datasiswa->notelp}}" type="text" name="notelp" />
                    </div>
                </div>
            </div>
            <div class="frame-parent88">
                <div class="tanggal-lahir-parent">
                    <div class="tanggal-lahir1">Tanggal Lahir</div>
                    <div class="isi-tanggal-lahir">
                        <input type="date" id="bdaymonth" name="bdaymonth" value="{{$datasiswa->tgl_lahir}}" class="input-tanggal-lahir">
                    </div>
                </div>
                <div class="jenis-kelamin-parent">
                    <div class="jenis-kelamin1">Jenis Kelamin</div>
                    <select class="form-select" name="gender" id="gender">
                        <option value="Female" {{ $datasiswa->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        <option value="Male" {{ $datasiswa->gender == 'Male' ? 'selected' : '' }}>Male</option>
                    </select>
                </div>

                <div class="save-button-container1">
                    <button class="button30" type="submit">
                        <div class="simpan1">Simpan</div>
                    </button>
                </div>
            </div>
        </form>
    </div>
{{-- kata sandi --}}

    <div id="rendersandi">
        <div class="frame-wrapper59">
            <div class="picture-container-parent">
                <div class="picture-container">
                    <div class="picture-inner-container">
                        <div class="picture-holder">
                            <img class="id-card-24dp-fill0-wght400-gra-icon3" alt="" src="{{url('EdulaExport/public/password-24dp-fill0-wght400-grad0-opsz24-1.svg')}}" />
                        </div>
                        <b class="data-pribadi3">Ubah Kata Sandi</b>
                    </div>
                </div>
                <div class="frame-child102" style="width: 70%"></div>
            </div>
        </div>
        <br>

    <form class="katasandi" method="POST" action="{{route('updatepassword')}}">
        @csrf
        <div class="">
            <div class="katasandi">
                <div class="nama-lengkap1">Kata Sandi Lama</div>
                <div class="fill-namadepan1" style="width: 60%;">
                    <div class="fill-namadepan-item"></div>
                    <input class="nama-depan1" placeholder="Kata sandi lama" type="password" name="password_lama" />
                </div>
                <br>
                <div class="nama-lengkap1">Kata Sandi Baru</div>
                <div class="fill-namabelakang1" style="width: 60%;">
                    <div class="fill-namabelakang-item"></div>
                    <input class="nama-belakang1" placeholder="Kata sandi baru" type="password" name="password_baru"/>
                </div>
                <br>
                <div class="nama-lengkap1">Konfirmasi Kata Sandi Baru</div>
                <div class="fill-namabelakang1" style="width: 60%;">
                    <div class="fill-namabelakang-item"></div>
                    <input class="nama-belakang1" placeholder="Konfirmasi kata sandi baru" type="password" name="password_baru_confirmation"/>
                </div>
                <div class="save-button-container1" style="margin: 100px 400px 0 0">
                    <button class="button30" type="submit">
                        <div class="simpan1">Simpan</div>
                    </button>
                </div>
            </div>
        </div>
    </form>
    </div>

    <div id="renderabout">
        <div class="frame-wrapper59">
            <div class="picture-container-parent">
                <div class="picture-container">
                    <div class="picture-inner-container">
                        <div class="picture-holder">
                            <img class="id-card-24dp-fill0-wght400-gra-icon3" alt="" src="{{url('EdulaExport/public/policy-24dp-fill0-wght400-grad0-opsz24-1.svg')}}" />
                        </div>
                        <b class="data-pribadi3">Kebijakan</b>
                    </div>
                </div>
                <div class="frame-child102" style="width: 70%"></div>
            </div>
        </div>
        <div class="textkebijakan" style="width: 300px; text-align: justify">
            <p style="font-size: 14px">
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, molestiae minima. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, molestiae minima. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, molestiae minima. <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, molestiae minima. <br>
            </p>
        </div>
    </div>
    </main>
</div>
@endsection

@section('JS')
<script>
    var divsandi = document.getElementById("rendersandi").innerHTML;
    var profile = document.getElementById("renderpick").innerHTML;
    var about = document.getElementById("renderabout").innerHTML;
    document.getElementById("renderabout").innerHTML = "";
    document.getElementById("rendersandi").innerHTML = "";

    function render(paramrender) {
        document.getElementById("renderpick").innerHTML = "";
        if(paramrender == 1){
            document.getElementById("renderpick").innerHTML = profile;
        } else if(paramrender == 2){
            document.getElementById("renderpick").innerHTML = divsandi;
        } else {
            document.getElementById("renderpick").innerHTML = about;
        }
    }
</script>
@endsection
