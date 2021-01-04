<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function create() {
        return view('registration-form');
    }

    // ----------- [ Form validate ] -----------

    public function store(Request $request) {

        $request->validate(
            [
                'name'              =>      'required|string|max:50',
                'email'             =>      'required|email|unique:users,email',
                'validForm'             =>      'required|string',
                'nameRecipient'          =>      'required|max:100',
                'emailRecipient'  =>      'required|max:100',
                'message'           =>      'string'
            ]
        );

        $dataArray      =       array(
            "name"          =>          $request->name,
            "email"         =>          $request->email,
            "validForm"         =>          $request->validForm,
            "nameRecipient"       =>          $request->nameRecipient,
            "emailRecipient"      =>          $request->emailRecipient
            // "message"   =>  $request->message
        );

        $user           =       User::create($dataArray);
        if(!is_null($user)) {
            return back()->with("success", "Success! Registration completed" );
        }

        else {
            return back()->with("failed", "Alert! Failed to register");
        }

    }

    public function getData(Request $request) {
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px; padding-top:100px'>" . 'From: ' . $request->name . "</p>";
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px;'>" . 'Your email address: ' . $request->email . "</p>";
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px;'>" . 'Voucher Amount: ' . $request->validForm . "</p>";
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px;'>" . 'To: ' . $request->nameRecipient . "</p>";
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px;'>" . 'Recipient email address: ' . $request->emailRecipient . "</p>";
        echo "<p style='text-align: center; font-weight: bold; font-size: 30px;'>" . 'Message: ' . $request->message . "</p>";
    }

    public function newSubpage() {
        echo 'Sorry, this';
    }
}
