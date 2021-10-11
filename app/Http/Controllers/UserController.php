<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(Request $request)
    {
        User::create($request->all());
    }

    public function show($id)
    {
        return User::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
        User::FindOrFail($id)->update($request->all());
    }

    public function destroy($id)
    {
        User::destroy($id);
    }
}
