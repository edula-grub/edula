@extends('Template.Master')

@section('CSS')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" />
    <style>
        /* .container {
                                                            width: 400px;
                                                            margin: 50px auto;
                                                            text-align: center;
                                                            padding: 30px;
                                                            border: 1px solid #ccc;
                                                            border-radius: 5px;
                                                        } */

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
            width: 20%;
            font-weight: 600;

        }
    </style>
@endsection

@section('content')
    <div class="container m-auto mt-2">
        <h1>Pilih Metode Pembayaran</h1>
        <form action="" method="POST">
            @csrf
            <div class="payment-methods text-center">
                <div class="payment-method d-flex align-items-center">
                    <input style="margin: 0px" type="radio" name="payment" id="bank-transfer" value="bank transfer">
                    <p style="margin: 0px;margin-bottom:3px;margin-left: 1rem;">Transfer Bank</p>
                </div>
                <div class="payment-method d-flex alignment-item-center">
                    <input style="margin: 0px" type="radio" name="payment" id="qris" value="qris">
                    <p style="margin: 0px;margin-bottom:3px;margin-left: 1rem;">QRIS</p>
                </div>
            </div>

            <div class="justify-content-center row" style="height: 60dvh">
                <iframe class="col-10" src="https://www.paper.id/blog/wp-content/uploads/2022/11/csan-qr-a.jpg"
                    title="QR Code"></iframe>
            </div>


            <div class="total">
                <p>Total: Rp 100,000</p>
            </div>
            {{-- jangan lupa di rubah --}}
            <input type="hidden" name="total" value="100000">
            <button type="submit">Bayar</button>
        </form>
    </div>
@endsection
