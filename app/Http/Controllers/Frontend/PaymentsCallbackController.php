<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Services\Payments\Thawani;
use Exception;
use Session;

class PaymentsCallbackController extends Controller
{
    public function success()
    {
        $payment_id = Session::get('payment_id');

        $session_id = Session::get('session_id');

        if (!$payment_id && !$session_id) {
            abort(404);
        }

        $payment = Payment::findOrFail($payment_id);

        if ($payment->reference_id !== $session_id) {
            abort(404);
        }

        $client = new Thawani(
            config('services.thawani.secret_key'),
            config('services.thawani.publishable_key'),
            'test',
        );
        try {
            $response = $client->getCheckoutSession($session_id);

            if ($response['data']['payment_status'] == 'paid') {

                $payment->status = 'paid';

                $payment->data = $response;

                $payment->save();

                dd('success');
                // return redirect()->route('profile')->with('success', 'Payment success');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }

    public function cancel()
    {
        $payment_id = Session::get('payment_id');

        $session_id = Session::get('session_id');

        if (!$payment_id && !$session_id) {
            abort(404);
        }

        $payment = Payment::findOrFail($payment_id);

        if ($payment->reference_id !== $session_id) {
            abort(404);
        }

        $payment->status = 'failed';
        $payment->save();
        dd('failed');

        // return redirect()->route('home')->with('error', 'Payment failed Contact Support');
    }
}
