<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        /*
        $user = User::query()->create([
            'name' => 'Victor',
            'email' => 'victor@gmail.com',
            'password' => '123',
        ]);

        $user->save();

        $user = User::find(1);

        dd($user);
        */

        return view("welcome");
    }
}
