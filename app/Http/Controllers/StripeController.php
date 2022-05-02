<?php

namespace App\Http\Controllers;

use Stripe;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StripeController extends Controller
{
   
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 550 * 100,
                "currency" => "eur",
                "source" => $request->stripeToken,
                "description" => "Paiement sur la plateforme Help'me"
        ]);

        $user = User::create([
            'name' => $request->email,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
        
        return redirect()->route('home');
   
        Session::flash('success', 'Paiement effectué, bienvenue sur votre espace client!');
    }

}
