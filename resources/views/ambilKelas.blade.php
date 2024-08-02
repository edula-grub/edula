@extends('Template.Master')

@section('CSS')
    <style>
        .poppins-thin {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: normal;
        }

        .poppins-extralight {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: normal;
        }

        .poppins-light {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
        }

        .poppins-regular {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .poppins-medium {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: normal;
        }

        .poppins-semibold {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: normal;
        }

        .poppins-bold {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .poppins-extrabold {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: normal;
        }

        .poppins-black {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: normal;
        }

        .poppins-thin-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 100;
            font-style: italic;
        }

        .poppins-extralight-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 200;
            font-style: italic;
        }

        .poppins-light-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: italic;
        }

        .poppins-regular-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 400;
            font-style: italic;
        }

        .poppins-medium-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            font-style: italic;
        }

        .poppins-semibold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-style: italic;
        }

        .poppins-bold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-style: italic;
        }

        .poppins-extrabold-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 800;
            font-style: italic;
        }

        .poppins-black-italic {
            font-family: "Poppins", sans-serif;
            font-weight: 900;
            font-style: italic;
        }

        .search {
            display: flex;
            justify-content: center !important;
            align-content: center !important;
            align-self: center !important;
            /* margin-top: 100px; */

        }

        .search-container {
            position: relative;
            width: 100%;
            max-width: 600px;
        }

        #search-input {
            width: 100%;
            padding: 10px 20px;
            padding-right: 40px;
            /* Adjust to accommodate the icon */
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 50px;
            /* Rounded corners */
            font-size: 16px;
            outline: none;
        }

        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #aaa;
            /* Optional: change color to fit your design */
        }
    </style>
@endsection

@section('content')
    @include('components.navbarPengajar')
    <div class="search m-auto d-flex align-self-center mt-5">
        <div class="search-container" style="margin-top: 4rem;">
            <input type="text" id="search-input" placeholder="Cari" onkeyup="searchBidrequests()">
            <span class="search-icon">&#128269;</span>
        </div>
    </div>
    <div class="container .poppins-regular" style="margin-top: 2rem;">
        <div class="">
            <div class="row">
                <h1 class="justify-content-center align-items-center mt-1" style="text-align: center">Permintaan Mengajar
                </h1>
            </div>
            <div class="row justify-content-center my-4" id="search-results">
                @foreach ($kelas as $key => $item)
                    @php
                        $hari = date('l', strtotime($item->jadwal));
                        $tanggal = date('d F Y', strtotime($item->jadwal));
                        $jam_mulai = date('H:i', strtotime($item->jadwal));
                        $jam_selesai = date('H:i', strtotime($item->jadwal));
                    @endphp
                    <div class="col-4 mt-4 result-item">
                        <div class="card" style="background: #f0f0f0; border-radius: 20px;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_mapel }}</h5>
                                <div class="container d-flex align-items-center">
                                    <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            fill="currentColor" class="bi bi-calendar3 col-md-3 justify-content-start"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                            <path
                                                d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                        </svg>
                                        <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">
                                            {{ $hari }}, {{ $tanggal }}
                                        </p>
                                    </div>
                                </div>
                                <div class="container d-flex align-items-center">
                                    <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="50"
                                            fill="currentColor" class="bi bi-alarm col-md-3 justify-content-start"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
                                            <path
                                                d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
                                        </svg>
                                        <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">
                                            {{ $jam_mulai }} - {{ $jam_selesai }}
                                        </p>
                                    </div>
                                </div>
                                <div class="container d-flex align-items-center">
                                    <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="75" height="50"
                                            fill="currentColor" class="bi bi-cash-coin col-md-3 justify-content-start"
                                            viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                            <path
                                                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                            <path
                                                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                        </svg>
                                        <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">
                                            Rp. {{ $item->harga_bider_terpilih }}
                                        </p>
                                    </div>
                                </div>
                                <p class="text-end my-2">
                                    <a href="/Rom?s={{ $item->id }}" class="card-link text-align-end">Lihat
                                        selengkapnya</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@section('JS')
    <script>
        function searchBidrequests() {
            var query = $('#search-input').val();

            $.ajax({
                url: '{{ route('search') }}',
                type: 'GET',
                data: {
                    query: query
                },
                success: function(response) {
                    var searchResults = $('#search-results');
                    searchResults.empty();

                    response.forEach(function(item) {
                        var hari = new Date(item.jadwal).toLocaleString('en-us', {
                            weekday: 'long'
                        });
                        var tanggal = new Date(item.jadwal).toLocaleString('en-us', {
                            month: 'long',
                            day: 'numeric',
                            year: 'numeric'
                        });
                        var jam_mulai = new Date(item.jadwal).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });
                        var jam_selesai = new Date(item.jadwal).toLocaleTimeString([], {
                            hour: '2-digit',
                            minute: '2-digit'
                        });

                        var card = `
                            <div class="col-4 mt-4 result-item">
                                <div class="card" style="background: #f0f0f0; border-radius: 20px;">
                                    <div class="card-body">
                                        <h5 class="card-title">${item.nama_mapel}</h5>
                                        <div class="container d-flex align-items-center">
                                            <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-calendar3 col-md-3 justify-content-start" viewBox="0 0 16 16">
                                                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857z" />
                                                    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2m3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                                </svg>
                                                <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">${hari}, ${tanggal}</p>
                                            </div>
                                        </div>
                                        <div class="container d-flex align-items-center">
                                            <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="50" fill="currentColor" class="bi bi-alarm col-md-3 justify-content-start" viewBox="0 0 16 16">
                                                    <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9z" />
                                                    <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1zm1.038 3.018a6 6 0 0 1 .924 0 6 6 0 1 1-.924 0M0 3.5c0 .753.333 1.429.86 1.887A8.04 8.04 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5M13.5 1c-.753 0-1.429.333-1.887.86a8.04 8.04 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1" />
                                                </svg>
                                                <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">${jam_mulai} - ${jam_selesai}</p>
                                            </div>
                                        </div>
                                        <div class="container d-flex align-items-center">
                                            <div class="row d-flex my-2" style="width:-webkit-fill-available;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="50" fill="currentColor" class="bi bi-cash-coin col-md-3 justify-content-start" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
                                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
                                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
                                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
                                                </svg>
                                                <p class="mb-2 col-md-9 align-items-center d-flex align-items-center text-start">Rp. ${item.harga_bider_terpilih}</p>
                                            </div>
                                        </div>
                                        <p class="text-end my-2">
                                            <a href="/Rom?s=${item.id}" class="card-link text-align-end">Lihat selengkapnya</a>
                                        </p>
                                    </div>
                                </div>
                            </div>`;
                        searchResults.append(card);
                    });
                }
            });
        }

        $(document).ready(function() {
            $('#search-input').on('input', function() {
                searchBidrequests();
            });
        });
    </script>
@endsection
