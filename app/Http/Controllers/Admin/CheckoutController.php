<?php

namespace App\Http\Controllers\Admin;

use App\Models\Checkout;
use App\Mail\Checkout\Paid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function update(Request $request,Checkout $checkout)
    {
        $checkout->is_paid=true;
        $checkout->save();

        //send mail to user
        Mail::to($checkout->User->email)->send(new Paid($checkout));

        $request->session()->flash('success',"Checkout with ID {$checkout->id} has been update!");
        return redirect(route('admin.dashboard'));
    }
}
