<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisteredUser;
use App\Http\Requests\RegisteredUserRequest;
class RegisteredUserController extends Controller

{
public function register()
    {
        return view('register');
    }

public function login(Request $request)
{
    register - $request->only(['name', 'email', 'password', 'idnumber']);
    return view('login', compact('register'));
}
public function store(Request $request)
{
    $register = $request->only(['name', 'email', 'password', 'idnumber']);
    register::create($register);
    return view('stamp');
}






public function create(RegisteredUserRequest $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
 public function add()
    {
        return view('add');
    }
    

    // データ編集ページの表示
    public function edit(Request $request){
        $author = RegisteredUser::find($request->id);
        return view('edit', ['form' => $author]);
    }

    // 更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        RegisteredUser::find($request->id)->update($form);
        return redirect('/');
    }

    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $RegisteredUser = RegisteredUser::find($request->id);
        return view('delete', ['RegisteredUser' => $RegisteredUser]);
    }

    // 削除機能
    public function remove(Request $request)
    {
        RegisteredUser::find($request->id)->delete();
        return redirect('/');
    }
}
