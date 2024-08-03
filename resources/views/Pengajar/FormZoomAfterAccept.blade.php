@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap" />
    <style>
        body {
            /* font-family: Arial, sans-serif; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .search {
            display: flex;
            justify-content: center !important;
            align-content: center !important;
            align-self: center !important;
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

        .container {
            background: #fff;
            width: 820px;
            /* margin-top: 20px; */
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-height: 100vh;
        }

        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #007bff;
        }

        .form-group-inline {
            display: flex;
            justify-content: space-between;
        }

        .form-group-inline .form-group {
            flex: 1;
            margin-right: 10px;
        }

        .form-group-inline .form-group:last-child {
            margin-right: 0;
        }

        .btn-submit {
            width: 15%;
            /* float: right; */
            padding: 4px;
            background-color: #007bff;
            border: none;
            border-radius: 20px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            /* parah mirza */
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .kirim-btn {
            text-decoration: none;
            color: white;
        }

        form {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: end;
        }

        .backbuttonhore {
            border-radius: 200px !important;
            border-color: #275FCA !important;
            background-color: white !important;
            font-weight: 500 !important;
            font-family: var(--font-poppins) !important;
            color: #275FCA !important;
            width: 100px !important;
            height: 40px !important;
            margin: 0px 0 10px 40px !important;
        }

        .backbuttonhore:hover {
            color: #1b4186 !important;
            background-color: whitesmoke !important;
        }
    </style>
@endsection

@section('content')
    <div class="backbutton">
        <a class="btn btn-primary backbuttonhore" href="{{ url()->previous() }}">
            Back
        </a>
    </div>

    <h1 class="text-center mb-5">Formulir Pertemuan Online dengan Pelajar</h1>
    <div class="container mt d-flex">
        <form id="meeting-form" method="POST" action="{{ route('submitMeeting') }}">
            @csrf

            <div class="error-message" id="error-message" style="display: none; color:red;">Harap isi semua field sebelum
                mengirim.</div>
            @foreach ($data as $item)
                <input type="hidden" name="idnya" value="{{ $item->id }}">
                <?php
                $hari = date('l', strtotime($item->jadwal));
                $tanggal = date('d F Y', strtotime($item->jadwal));
                $jam_mulai = date('H:i', strtotime($item->jadwal));
                $jam_selesai = $jamselesai = date('H:i', strtotime('+1 hour', strtotime($item->jadwal)));
                ?>
                <div class="form-group">
                    <label for="topic">Topik Pertemuan</label>
                    <label for="topikValue">{{ $item->nama_mapel }}</label>
                    {{-- <input type="text" id="topic" name="topic"> --}}
                </div>
                <div class="form-group">
                    <label for="link">Tautan Pertemuan Terjadwal</label>
                    <input type="text" id="link" name="link">
                </div>
                <div class="form-group">
                    <label for="date">Hari/Tanggal</label>
                    <label for="dateValue">{{ $hari }}, {{ $tanggal }}</label>
                    {{-- <input type="date" id="date" name="date"> --}}
                </div>
                <div class="form-group-inline">
                    <div class="form-group">
                        <label for="start-time">Jam Mulai (WIB)</label>
                        <label for="startValue">{{ $jam_mulai }}</label>
                        {{-- <input type="time" id="start-time" name="start-time"> --}}
                    </div>
                    <div class="form-group">
                        <label for="end-time">Jam Selesai (WIB)</label>
                        <label for="endValue">{{ $jam_selesai }}</label>
                        {{-- <input type="time" id="end-time" name="end-time"> --}}
                    </div>
                </div>
                <button type="submit" class="btn-submit align-self-end"><a class="kirim-btn text-center"
                        href="#">Kirim</a></button>
            @endforeach
        </form>
    </div>
@endsection

@section('JS')
    <script>
        document.getElementById('meeting-form').addEventListener('submit', function(event) {
            // Prevent form submission
            event.preventDefault();

            // Get all input elements
            var inputs = document.querySelectorAll('#meeting-form input');
            var isValid = true;

            // Check each input to see if it is empty
            inputs.forEach(function(input) {
                if (input.value.trim() === '' && input.name !== 'topic' && input.name !== 'date' && input
                    .name !== 'start_time' && input.name !== 'end_time') {
                    isValid = false;
                }
            });

            // Show or hide error message based on validation
            var errorMessage = document.getElementById('error-message');
            if (isValid) {
                errorMessage.style.display = 'none';
                // Form is valid; you can submit it or perform other actions here
                this.submit(); // Submit form
            } else {
                errorMessage.style.display = 'block';
            }
        });
    </script>
@endsection
