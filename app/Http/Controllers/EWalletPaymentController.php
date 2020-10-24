<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Luigel\Paymongo\Facades\Paymongo;

class EWalletPaymentController extends Controller
{
    public function pay(Request $request)
    {
        $source = Paymongo::source()->create([
            'type' => $request->type,
            'amount' => $request->amount,
            'currency' => 'PHP',
            'redirect' => [
                'success' => route('dashboard', ['success' => true]),
                'failed' => route('dashboard', ['success' => false])
            ],
            'billing' => [
                'address' => $request->address,
                'name' => $request->user()->name,
                'email' => $request->user()->email,
            ]
        ]);

        Log::info('src id '. $source->id);
        return Inertia::location($source->getRedirect()['checkout_url']);
    }
}
