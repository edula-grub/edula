<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biderlist;

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
}
