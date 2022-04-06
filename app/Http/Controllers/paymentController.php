<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\registerations;
use App\Models\User;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

class paymentController extends Controller
{

    public function index( ) {
        $payment = false;
        return view('payment', compact('payment'));
    }

    public function payment(Request $request) {
        $user = User::where('email', $request->email)->first();
        $event = events::where('event_name', $request->event)->first();
//        dd($event->event_id);

        $register = registerations::create([
            'user_id' => $user->id,
            'email' => $request->email,
            'event_id' => $request->event,
            'amount' => $event->amount,
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create(array('receipt' => $register->id, 'amount' => $register->amount*100, 'currency' => 'INR'));

        $register->rp_order_id = $order->id;
        $register->save();

        $data = array(
            'order_id' => $order['id'],
            'amount' => $register->amount*100,
            'name' => $user->name,
            'email' => $user->email,
            'contact' => $user->contact,
        );

        return redirect()->route('payment')->with('data', $data)->with('payment', true);
    }

    public function checkout(Request $request) {
        $data = $request->all();
        $register = registerations::where('rp_order_id', $data['razorpay_order_id'])->first();
        $register->payment_done = true;
        $register->rp_payment_id = $data['razorpay_payment_id'];
        $register->rp_signature = $data['razorpay_signature'];

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        try{
            $attributes = array(
                'razorpay_signature' => $data['razorpay_signature'],
                'razorpay_payment_id' => $data['razorpay_payment_id'],
                'razorpay_order_id' => $data['razorpay_order_id']
            );
            $order = $api->utility->verifyPaymentSignature($attributes);
            $success = true;
        }catch(SignatureVerificationError $e){

            $success = false;
        }
        if($success){
            $register->save();
            return view('/status', compact('success'));
        }else{

            return view('/status', compact('success'));
        }
    }

}
