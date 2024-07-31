@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* .container {
                                                                                                width: 400px;
                                                                                                margin: 50px auto;
                                                                                                text-align: center;
                                                                                                padding: 30px;
                                                                                                border: 1px solid #ccc;
                                                                                                border-radius: 5px;
                                                                                            } */
        .hidden {
            display: none;
        }

        .container {
            margin-top: 20px;
            background: #fff;
            width: 700px;
            margin-top: 20px;
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 24px;
            /* margin-bottom: 20px; */
            color: #275FCA;
        }

        h2 {
            color: #275FCA;
        }

        .payment-methods {
            display: flex;
            align-items: center;
            /* Aligns items vertically */
            padding: 5px;
            cursor: pointer;
        }

        .payment-method {
            display: flex;
            align-items: center;
            cursor: pointer;
            margin-right: 15%;
        }

        .payment-method input[type="radio"] {
            margin-right: 10px;
        }

        .payment-method p {
            /* font-weight: regular; */
            display: inline;
            color: #275FCA;
            font-weight: normal;
        }

        .total {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            color: #275FCA;
        }

        button {
            background-color: #FDBA13;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            display: block;
            width: 40%;
            font-weight: 600;

        }
    </style>
@endsection

@section('content')
    <div class="container m-auto" style="margin-top:20dvh !important;">
        <h1>Pilih Metode Pembayaran</h1>
        <form action="" method="POST">
            @csrf
            <div class="payment-methods text-center">
                <div class="payment-method d-flex align-items-center">
                    <input style="margin: 0px" type="radio" name="payment" id="bank-transfer" value="bank transfer"
                        onclick="togglePaymentMethod()">
                    <p style="margin: 0px;margin-bottom:3px;margin-left: 1rem;">Transfer Bank</p>
                </div>
                <div class="payment-method d-flex alignment-item-center">
                    <input style="margin: 0px" type="radio" name="payment" id="qris" value="qris"
                        onclick="togglePaymentMethod()">
                    <p style="margin: 0px;margin-bottom:3px;margin-left: 1rem;">QRIS</p>
                </div>
            </div>

            <div id="bank-options" class="hidden">
                <h2>Pilih Bank</h2>
                <select name="bank" class="form-control" onchange="showAccountNumber()" style="color:#275FCA;">
                    <option value="" style="color:#275FCA;">--Pilih Bank--</option>
                    <option value="bca" style="color:#275FCA;">BCA</option>
                    <option value="bni" style="color:#275FCA;">BNI</option>
                    <option value="bri" style="color:#275FCA;">BRI</option>
                    <option value="mandiri" style="color:#275FCA;">Mandiri</option>
                </select>
                <div class="mt-3">
                    <label for="account-number" style="color:#275FCA;">Nomor Rekening</label>
                    <input type="text" id="account-number" class="form-control" style="color:#275FCA;" readonly>
                </div>
            </div>

            <div id="qris">
                <div class="justify-content-center row hidden" style="height: 60dvh" id="qris-iframe">
                    <iframe class="col-10" src="https://www.paper.id/blog/wp-content/uploads/2022/11/csan-qr-a.jpg"
                        title="QR Code"></iframe>
                </div>
            </div>

            <div class="total">
                <p>Total: Rp 100,000</p>
            </div>
            {{-- jangan lupa di rubah --}}
            <input type="hidden" name="total" value="100000">
            <button type="submit" id="bayar-button" disabled>Bayar</button>
        </form>
    </div>
@endsection

@section('JS')
    <script>
        function togglePaymentMethod() {
            const bankTransfer = document.getElementById('bank-transfer');
            const qris = document.getElementById('qris');
            const bankOptions = document.getElementById('bank-options');
            const qrisIframe = document.getElementById('qris-iframe');
            const bayarButton = document.getElementById('bayar-button');

            if (bankTransfer.checked) {
                bankOptions.classList.remove('hidden');
                qrisIframe.classList.add('hidden');
            } else if (qris.checked) {
                bankOptions.classList.add('hidden');
                qrisIframe.classList.remove('hidden');
            }
            bayarButton.disabled = false;
            bayarButton.innerText = "Bayar";
        }

        function showAccountNumber() {
            const bankSelect = document.querySelector('select[name="bank"]');
            const accountNumberInput = document.getElementById('account-number');
            const accountNumbers = {
                bca: '1234567890',
                bni: '0987654321',
                bri: '1122334455',
                mandiri: '5566778899'
            };

            const selectedBank = bankSelect.value;
            if (selectedBank) {
                accountNumberInput.value = accountNumbers[selectedBank];
            } else {
                accountNumberInput.value = '';
            }
        }

        document.querySelectorAll('input[name="payment"]').forEach(radio => {
            radio.addEventListener('change', togglePaymentMethod);
        });

        const bayarButton = document.getElementById('bayar-button');
        bayarButton.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah form submit langsung

            if (bayarButton.innerText === "Bayar") {
                bayarButton.innerText = "Konfirmasi Pembayaran";
                bayarButton.disabled = true;

                setTimeout(function() {
                    bayarButton.disabled = false;
                }, 5000); // Mengaktifkan kembali tombol setelah 5 detik
            } else if (bayarButton.innerText === "Konfirmasi Pembayaran") {
                // Logic for form submission or further steps can be added here
                alert("ngelinknya masi gagal");
            }
        });
    </script>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
