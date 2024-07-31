@extends('Template.Master')

@section('CSS')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manjari:wght@700&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers Quarrel:wght@400&display=swap"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito Sans:wght@400;600;700&display=swap"/>
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
        padding-right: 40px; /* Adjust to accommodate the icon */
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 50px; /* Rounded corners */
        font-size: 16px;
        outline: none;
    }

    .search-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #aaa; /* Optional: change color to fit your design */
    }

    .container {
        background: #fff;
        width: 820px;
        /* margin-top: 20px; */
        padding: 20px;
        border-radius:20px;
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
    }
    .btn-submit:hover {
        background-color: #0056b3;
    }
    .kirim-btn{
        text-decoration: none;
        color: white;
    }

    form{
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: end;
    }
</style>

@endsection

@section('content')
<div class="search m-auto d-flex align-self-center">
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Cari">
        <span class="search-icon">&#128269;</span>
    </div>
    <div class="dropdown">
        <img src="" alt="" sizes="" srcset="">
        <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 20px; width: 100px">
            Filter
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">SD</a></li>
          <li><a class="dropdown-item" href="#">SMP</a></li>
          <li><a class="dropdown-item" href="#">SMA</a></li>
          <li><a class="dropdown-item" href="#">Kuliah</a></li>
          <li><a class="dropdown-item" href="#">Umum</a></li>
        </ul>
    </div>
</div>
<h1 class="text-center mt-4 mb-3">Formulir Pertemuan Online dengan Pelajar</h1>
<div class="container mt d-flex">
    <form id="meeting-form" action="#">
        <div class="error-message" id="error-message" style="display: none; color:red;">Harap isi semua field sebelum mengirim.</div>
        <div class="form-group">
            <label for="topic">Topik Pertemuan</label>
            <input type="text" id="topic" name="topic">
        </div>
        <div class="form-group">
            <label for="link">Tautan Pertemuan Terjadwal</label>
            <input type="text" id="link" name="link">
        </div>
        <div class="form-group">
            <label for="date">Hari/Tanggal</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="form-group-inline">
            <div class="form-group">
                <label for="start-time">Jam Mulai (WIB)</label>
                <input type="time" id="start-time" name="start-time">
            </div>
            <div class="form-group">
                <label for="end-time">Jam Selesai (WIB)</label>
                <input type="time" id="end-time" name="end-time">
            </div>
        </div>
        <button type="submit" class="btn-submit align-self-end"><a class="kirim-btn text-center" href="#">Kirim</a></button>
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
            if (input.value.trim() === '') {
                isValid = false;
            }
        });

        // Show or hide error message based on validation
        var errorMessage = document.getElementById('error-message');
        if (isValid) {
            errorMessage.style.display = 'none';
            // Form is valid; you can submit it or perform other actions here
            alert('Formulir berhasil dikirim!');
        } else {
            errorMessage.style.display = 'block';
        }
    });
</script>
@endsection
