<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkCard(){
        return response()->json([
            'success' => true,
            'data' => [],
            'message' => 'Your card has been'
        ]);
    }

    public function payment(Request $request){
        try {
            $orderId = $request->get('orderId');
            if(is_null($orderId)){
                throw  new \Exception('The order not found');
            }
            Order::where('id', $orderId)->update([
                'pay_status' => Order::STATUS_PAY
            ]);
            return response()->json([
                'success' => true,
                'data' => [],
                'message' => 'Successful payment'
            ]);
        }
        catch (\Exception $e){
            return response()->json([
                'success' => false,
                'data' => [],
                'message' => 'Failed to payment order'
            ], 500);
        }
    }
    //
}
