<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Payments\Thawani;
use Auth;
use Exception;
use Session;

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
                    'unit_amount' => 100 * 1000,
                    'quantity' => 2,
                ],
            ],
            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),

        ];
        try {
            $session_id = $client->createCheckoutSession($data);
            // dd($session_id);

            $payment = Payment::forceCreate([
                'user_id' => Auth::id(),
                'reference_id' => $session_id,
                'amount' =>  100,
                'status' => 'pending',
                'gateway' => 'thawani',
            ]);

            Session::put('payment_id', $payment->id);

            Session::put('session_id', $session_id);


            return redirect()->away($client->getPayUrl($session_id));
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
