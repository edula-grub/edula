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

        /* .back-button:hover,
                                                                                                            .select-button:hover {
                                                                                                                background-color: #999;
                                                                                                                color: white;
                                                                                                                font-weight: 500;
                                                                                                            } */
    </style>
    {{-- <link rel="stylesheet" href="{{ url('/calendar/styles.css') }}"> --}}
    <style>
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

        /*.back-button,
                                                                                                         .select-button {
                                                                                                                    background-color: #ccc;
                                                                                                                    border: none;
                                                                                                                    border-radius: 5px;
                                                                                                                    padding: 10px;
                                                                                                                    color: white;
                                                                                                                    cursor: pointer;
                                                                                                                } */

        /*.back-button:hover,
                                                                                                     .select-button:hover {
                                                                                                                        background-color: #;
                                                                                                                    } */

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

        .error-message {
            display: none;
            color: red;
            margin-top: 10px;
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
                    <a href="{{ route('BuatPenajuan') }}" class="back-button">Kembali</a>
                </div>
            </div>
            {{-- Init untuk kalender nanti --}}
            <div class="col-md-7 ">

                <div class="containerkecil">
                    <div class="calendar">
                        <div class="calendar-header">
                            <button id="prevMonth">back</button>
                            <div id="monthYear"></div>
                            <button id="nextMonth">next</button>
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
                            <option value="" disabled selected>Pilih Waktu</option>
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
                    <div class="error-message" id="errorMessage">Harap isi tanggal dan waktu.</div>
                    {{-- input hidden --}}
                    {{-- <input type="text" name="selectedDate" id="selectedDate"> --}}
                    <div class="mt-1 col-3 offset-9">
                        <button class="col-12 btn btn-warning select-button">Pilih</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div style="display: none;">
        <form method="POST">
            @csrf
            <input type="text" name="tanggal" id="covertanggalselected">
            <input type="text" name="jam" id="coverwaktuinput">
            <input type="text" name="s" value="1">
            <button type="submit" id="subs">kirim</button>
        </form>
    </div>
@endsection

@section('JS')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const datesContainer = document.getElementById('dates');
            const monthYearDisplay = document.getElementById('monthYear');
            const prevMonthButton = document.getElementById('prevMonth');
            const nextMonthButton = document.getElementById('nextMonth');
            const timeSelect = document.getElementById('timeSelect');
            const selectButton = document.querySelector('.select-button');
            const errorMessage = document.getElementById('errorMessage');

            let currentDate = new Date();
            let selectedDate = null;
            let selectedTime = timeSelect.value;

            function renderCalendar() {
                const year = currentDate.getFullYear();
                const month = currentDate.getMonth();
                const firstDay = new Date(year, month, 1).getDay();
                const lastDate = new Date(year, month + 1, 0).getDate();

                monthYearDisplay.textContent =
                    `${currentDate.toLocaleString('default', { month: 'long' })} ${year}`;
                datesContainer.innerHTML = '';

                for (let i = 0; i < firstDay; i++) {
                    datesContainer.innerHTML += `<div></div>`;
                }

                for (let date = 1; date <= lastDate; date++) {
                    const dateButton = document.createElement('button');
                    dateButton.textContent = date;
                    dateButton.addEventListener('click', () => {
                        if (selectedDate) {
                            selectedDate.classList.remove('selected');
                        }
                        selectedDate = dateButton;
                        dateButton.classList.add('selected');
                    });
                    datesContainer.appendChild(dateButton);
                }
            }

            prevMonthButton.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() - 1);
                renderCalendar();
            });

            nextMonthButton.addEventListener('click', () => {
                currentDate.setMonth(currentDate.getMonth() + 1);
                renderCalendar();
            });

            timeSelect.addEventListener('change', (e) => {
                selectedTime = e.target.value;
            });

            selectButton.addEventListener('click', () => {
                if (!selectedDate || !selectedTime) {
                    errorMessage.style.display = 'block';
                } else {
                    errorMessage.style.display = 'none';
                    const selectedDateValue =
                        `${selectedDate.textContent} ${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;
                    console.log(`Selected Date: ${selectedDateValue}`);
                    console.log(`Selected Time: ${selectedTime}`);

                    document.getElementById('covertanggalselected').value = selectedDateValue;
                    document.getElementById('coverwaktuinput').value = selectedTime;
                    document.getElementById('subs').click();
                }
            });

            renderCalendar();
        });
    </script>
@endsection
