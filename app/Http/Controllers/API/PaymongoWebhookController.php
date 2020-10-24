<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Luigel\Paymongo\Facades\Paymongo;

class PaymongoWebhookController extends Controller
{
    public function __invoke(Request $request)
    {
        $data = Arr::get($request->all(), 'data.attributes');

        if ($data['type'] !== 'source.chargeable') {
            return response()->noContent();
        }

        $source = Arr::get($data, 'data');
        $sourceData = $source['attributes'];

        if ($sourceData['status'] === 'chargeable') {
            $payment = Paymongo::payment()->create([
                'amount' => $sourceData['amount'] / 100,
                'currency' => $sourceData['currency'],
                'description' => $sourceData['type'].' test from src ' . $source['id'],
                'source' => [
                    'id' => $source['id'],
                    'type' => $source['type'],
                ]
            ]);
        }
        return response()->noContent();
    }
}
