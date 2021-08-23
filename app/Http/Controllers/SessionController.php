<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionController extends Controller {
    
    public function create() {
        return view('project.login');
    }

    public function store() {
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'El correo o contraseña es incorrecto, verifique la informacion e intente de nuevo.'
            ]);
        }
        return redirect()->to('/');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->to('/');
    }
}
