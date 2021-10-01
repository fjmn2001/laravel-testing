<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProfileUploadController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'photo' => 'required'
        ]);

        $request->file('photo')->store('profiles');

        return redirect('profile');
    }
}
