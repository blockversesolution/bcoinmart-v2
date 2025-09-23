<?php

namespace App\Trait;

use Illuminate\Support\Facades\Auth;

trait RequestHelperTrait
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (Auth::guard('api')->check() && Auth::guard('api')->user()->token()->name == 'Admin') {
            return auth()->guard('api')->check();
        }
    }

}
