<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\Payments\Thawani;
use Exception;




class PaymentsController extends Controller
{
    public function create()
    {
        $client = new Thawani(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
            'test',
        );
        $data = [
            //'client_reference_id' => $data['client_reference_id'],
            'client_reference_id' => 'Test Payment 1',
            'mode' => 'payment',

            'products' => [
                [
                    //'name' => $data['product_name'],
                    //'unit_amount' => $data['unit_amount'],
                    //'quantity' => $data['quantity'],
                    'name' => 'Test Product',
                    'unit_amount' => 100,
                    'quantity' => 1,
                ],
            ],
            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),

        ];
        try {
            $session_id = $client->createCheckoutSession($data);
            // dd($session_id);
            return redirect()->away($client->getPayUrl($session_id));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
