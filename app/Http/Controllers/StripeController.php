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

        $service1 = $request->prixAide ?? '';
        $service2 = $request->prixServiceAdministratif ?? '';
        $service3 = $request->prixServiceTransport ?? '';
        $service4 = $request->prixGestionFacile ?? '';
        
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
        
        Session::flash('success', 'Paiement effectué, bienvenue sur votre espace client!');

        if($service1 != ''){
            Session::flash('services1', 'Paiement de ' . $service1);
        }
        if($service2 != ''){
            Session::flash('services2', 'Paiement de ' . $service2);
        }
        if($service3 != ''){
            Session::flash('services3', 'Paiement de ' . $service3);
        }
        if($service4 != ''){
            Session::flash('services4', 'Paiement de ' . $service4);
        }
       
        
        
        
        return redirect()->route('home');
   
    }

}
