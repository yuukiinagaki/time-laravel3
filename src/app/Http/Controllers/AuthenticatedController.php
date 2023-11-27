<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authenticated;

class AuthenticatedController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function stamp(Request $request)
    {
    $login = $request->only(['email', 'password', ]);
    return view('stamp', compact('Authenticated'));
    Authenticated::create($Authenticated);
    }
    public function store(Request $request)
    {
        $Authenticated = $request->only(['email', 'password', ]);
    return view('stamp');
    }
    public function index1()
    {
        return view('index1');
    }
}

