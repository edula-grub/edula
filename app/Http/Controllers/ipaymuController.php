<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biderlist;
use Illuminate\Support\Facades\Http;

class ipaymuController extends Controller
{
    public function pembayaran(){
        $order = Biderlist::all()->first();

        $array = array(
            'name' => 'Buyer',
            'phone' => '081999501092',
            'email' => 'buyer@mail.com','
            amount' => '10000',
            'notifyUrl' => 'https://mywebsite.com',
                'expired' => '24',
                'expiredType' => 'hours',
                'comments' => 'Catatan',
                'referenceId' => '1',
                'paymentMethod' => 'va',
                'paymentChannel' => 'bri',
                'product[]' => 'produk 1',
                'qty[]' => '1',
                'price[]' => '10000',
                'weight[]' => '1',
                'width[]' => '1',
                'height[]' => '1',
                'length[]' => '1',
                'deliveryArea' => '76111',
                'deliveryAddress' => 'Denpasar');

        $data = http_build_query($array);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://sandbox.ipaymu.com/api/v2/payment/direct',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => 'a',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'signature: [object Object]',
            'va: 1179000899',
            'timestamp: 20191209155701'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
    }

    protected $apiUrl = 'https://sandbox.ipaymu.com/api/v2/payment';
    protected $apiKey = 'SANDBOXF2550ABD-B370-44A8-9482-87E8AC6EFCC3'; // Ganti dengan API key Anda
    protected $va = '0000002149408183'; // Ganti dengan Virtual Account Anda
    protected $urlCallback = 'http://127.0.0.1:8000/ReqKelasPayment/Payment/qris/callback'; // Ganti dengan URL callback Anda

    public function initiateQrisPayment(Request $request)
    {
        $requestData = [
            'product' => ['Test Product'],
            'qty' => [1],
            'price' => [10000],
            'returnUrl' => $this->urlCallback,
            'cancelUrl' => $this->urlCallback,
            'notifyUrl' => $this->urlCallback,
            'buyerName' => 'John Doe',
            'buyerEmail' => 'john.doe@example.com',
            'buyerPhone' => '08123456789',
            'paymentMethod' => 'qris' // Menentukan metode pembayaran QRIS
        ];

        $body = json_encode($requestData);
        $timestamp = date('YmdHis');
        $signature = hash_hmac('sha256', $this->va . $body . $timestamp, $this->apiKey);

        $response = Http::withHeaders([
            'va' => $this->va,
            'signature' => $signature,
            'timestamp' => $timestamp
        ])->post($this->apiUrl, $requestData);

        if ($response->successful()) {
            $result = $response->json();
            return view('Pelajar.RequestKelasPayment', ['qrisUrl' => $result['url']]);
        } else {
            return response()->json(['message' => 'Payment initiation failed'], 500);
        }
    }

    public function qrisPaymentCallback(Request $request)
    {
        // Anda bisa mengelola logika untuk callback pembayaran di sini
        // Misalnya memverifikasi pembayaran dan memperbarui status pesanan

        $transactionId = $request->input('transactionId');
        $status = $request->input('status');

        if ($status == 'berhasil') {
            // Update status order di database atau tindakan lain yang diperlukan
            return response()->json(['message' => 'Payment successful'], 200);
        } else {
            return response()->json(['message' => 'Payment failed'], 400);
        }
    }
}
