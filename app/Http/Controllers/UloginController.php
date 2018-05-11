<?php

namespace App\Http\Controllers;

use App\User;
use Auth;
use Hash;
use Illuminate\Http\Request;
use Redirect;

class UloginController extends Controller
{
    public function login(Request $request)
    {
        // Get information about user.
        $data = file_get_contents('http://ulogin.ru/token.php?token='.$request->get('token').'&host='.$_SERVER['HTTP_HOST']);
        $user = json_decode($data, true);

        // Check exist email.
        if (isset($user['email']) && !empty($user['email'])) {
            // Find user in DB.
            $userData = User::where('email', $user['email'])->first();

            // Check exist user.
            if ($userData) {
                // Check user status.
                if ($userData->status) {
                    // Make login user.
                    Auth::loginUsingId($userData->id, true);

                } else {
                    // Wrong status.
                    \Session::flash('error_message', trans('interface.AccountNotActive'));
                }

                return Redirect::back();
            } else {
                // Make registration new user.

                // Create new user in DB.
                $newUser = User::create([
                    //'nik' => $user['nickname'],
                    'name' => $user['first_name'] . ' ' . $user['last_name'],
                    //'country' => $user['country'],
                    'email' => $user['email'],
                    'password' => Hash::make(str_random(8)),
                   // 'role' => 'user',
                    //'status' => true,
                    //'ip' => $request->ip()
                ]);

                // Make login user.
                Auth::loginUsingId($newUser->id, true);

                \Session::flash('ok_message', trans('interface.ActivatedSuccess'));

                return Redirect::back();
            }
        }

        \Session::flash('error_message', $user['first_name'].' '.$data);

        return Redirect::back();
    }
}
