<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {
        
        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade
            if (Auth::user()->is_owner()) {
                return $request->wantsJson()
                        ? response()->json(['two_factor' => false])
                        : redirect()->intended(config('fortify.owner'));
            }

            if (Auth::user()->is_customer()) {
                if ($request->session()->has('redirect')) {
                    return $request->wantsJson()
                            ? response()->json(['two_factor' => false])
                            : redirect()->intended($request->session()->get('redirect'));
                }
                return $request->wantsJson()
                        ? response()->json(['two_factor' => false])
                        : redirect()->intended('/hooooome');
            }
            // return $request->wantsJson()
            //             ? response()->json(['two_factor' => false])
            //             : redirect()->back();
            
        
    }

}