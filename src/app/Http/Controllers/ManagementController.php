<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Management;
use Illuminate\Support\Facades\Auth;

class ManagementController extends Controller
{
    public function stamp(Request $request)
    {
        return view('stamp');
    }

    public function login(Request $request)
    {
    
    $stamp = $request->only(['name', 'email', 'password', 'id']);
    return view('login', compact('stamp'));

    if (Auth::attempt($stamp)); {
            $request->session()->regenerate();
            return redirect()->route('login');
    }

        return redirect()->register();}
    
    public function store(Request $request)
    {
    $stamp = $request->only(['name', 'email', 'password', 'idnumber']);
    Management::create($Management);
    return view('Register');
    }







public function index()
{
    $Managements = Management::all();
    return view('index', ['Managements' => $Managements]);
}
public function add(){
    return view('add');
}
public function create(Request $request){
    $form = $request->all();
    Management::create($form);
    return redirect('/startwork');
}
public function index1(){
    $Managements = Management::all();
    return view('index', ['Managements' => $Managements]);
}
public function edit(Request $request){
    $Management = Management::find($request->id);
    return view('edit', ['form' => $Management]);
}
public function update(Request $request)
{
    $form = $request->all();
    unset($form['_token']);
    Management::find($request->id)->update($form);
    return redirect('/');

}
}