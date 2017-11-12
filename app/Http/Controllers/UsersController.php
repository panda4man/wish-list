<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePasswordRequest;

class UsersController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPassword()
    {
        return view('users.update-password');
    }

    /**
     * @param CreatePasswordRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postUpdatePassword(CreatePasswordRequest $request)
    {
        $user = auth()->user();
        $user->password = bcrypt($request->get('password'));
        $user->save();

        session()->flash('flash-success', 'Created your password!');

        return redirect()->route('home');
    }
}
