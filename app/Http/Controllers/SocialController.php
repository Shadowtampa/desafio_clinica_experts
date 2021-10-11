<?php

namespace App\Http\Controllers;

use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        return Social::all();
    }

    public function store(Request $request)
    {
        Social::create($request->all());
    }

    public function show($id)
    {
        return Social::FindOrFail($id);
    }

    public function update(Request $request, $id)   
    {
        
        Social::FindOrFail($id)->update($request->all());
    }

    public function destroy($id)
    {
        Social::destroy($id);
    }
}
