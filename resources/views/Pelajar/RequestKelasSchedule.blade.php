@extends('Template.Master')

@section('CSS')
    <style>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>body {
            /* font-family: Arial, sans-serif; */
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .header h1 {
            margin: 0;
            color: #1A73E8;
        }

        .header p {
            margin-top: 10px;
            margin-bottom: 10%;
            color: #666;
        }

        .container {
            background: #fff;
            max-height: 100vh;
            /* margin-top: 30vh; */
        }

        .back-button {
            background-color: #E6E8E7;
            border: none;
            border-radius: 15px;
            padding: 10px;
            color: #989898;
            cursor: pointer;
            font-weight: 500;
        }

        .back-button:hover,
        .select-button:hover {
            background-color: #999;
            color: white;
            font-weight: 500;
        }
    </style>
    {{-- <link rel="stylesheet" href="{{ url('/calendar/styles.css') }}"> --}}
    <style>
        /* body {
                                                                                                            font-family: Arial, sans-serif;
                                                                                                            background-color: #f4f4f4;
                                                                                                            display: flex;
                                                                                                            justify-content: center;
                                                                                                            align-items: center;
                                                                                                            height: 100vh;
                                                                                                            margin: 0;
                                                                                                        } */

        .containerkecil {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* max-width: 400px; */
            text-align: center;
        }

        .header h1 {
            margin: 0;
            color: #1A73E8;
        }

        .header p {
            color: #666;
        }

        .back-button,
        .select-button {
            background-color: #ccc;
            border: none;
            border-radius: 5px;
            padding: 10px;
            color: white;
            cursor: pointer;
        }

        .back-button:hover,
        .select-button:hover {
            background-color: #999;
        }

        .calendar {
            margin-top: 20px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .calendar-header button {
            background: none;
            border: none;
            font-size: 20px;
            cursor: pointer;
        }

        .days,
        .dates {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
        }

        .days div {
            font-weight: bold;
        }

        .dates button {
            background-color: #1A73E8;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
        }

        .dates button.selected {
            background-color: #F7C948;
        }

        .time {
            margin-top: 20px;
        }

        .time select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5 d-flex justify-content-center">
                <div class="header">
                    <h1>Pilih Jadwal Lesmu</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in imperdiet erat. Maecenas ut
                        nisi tellus.</p>
                    <button class="back-button">Kembali</button>
                </div>
            </div>
            {{-- Init untuk kalender nanti --}}
            <div class="col-md-7 ">

                <div class="containerkecil">
                    <div class="calendar">
                        <div class="calendar-header">
                            <button id="prevMonth">❮</button>
                            <div id="monthYear"></div>
                            <button id="nextMonth">❯</button>
                        </div>
                        <div class="days">
                            <div>Min</div>
                            <div>Sen</div>
                            <div>Sel</div>
                            <div>Rab</div>
                            <div>Kam</div>
                            <div>Jum</div>
                            <div>Sab</div>
                        </div>
                        <div class="dates" id="dates"></div>
                    </div>
                    <div class="time">
                        <h2>Waktu</h2>
                        <select id="timeSelect">
                            <option value="06:00-07:00">06:00 - 07:00</option>
                            <option value="07:00-08:00">07:00 - 08:00</option>
                            <option value="08:00-09:00">08:00 - 09:00</option>
                            <option value="09:00-10:00">09:00 - 10:00</option>
                            <option value="10:00-11:00">10:00 - 11:00</option>
                            <option value="11:00-12:00">11:00 - 12:00</option>
                            <option value="12:00-13:00">12:00 - 13:00</option>
                            <option value="13:00-14:00">13:00 - 14:00</option>
                            <option value="14:00-15:00">14:00 - 15:00</option>
                            <option value="15:00-16:00">15:00 - 16:00</option>
                            <option value="16:00-17:00">16:00 - 17:00</option>
                            <option value="17:00-18:00">17:00 - 18:00</option>
                            <option value="18:00-19:00">18:00 - 19:00</option>
                            <option value="19:00-20:00">19:00 - 20:00</option>
                            <option value="20:00-21:00">20:00 - 21:00</option>
                            <option value="21:00-22:00">21:00 - 22:00</option>
                        </select>
                    </div>

                    <div class="mt-1 col-3 offset-9">
                        <button class="col-12 btn btn-warning select-button">Pilih</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('JS')
    <script src="{{ url('/calendar/script.js') }}"></script>
@endsection
