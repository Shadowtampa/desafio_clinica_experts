<?php

namespace App\Http\Controllers;

use App\Models\UserSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserSocialController extends Controller
{
    public function index()
    {
        return UserSocial::all();
    }
    public function store(Request $request)
    {
        UserSocial::create($request->all());
    }
    public function show($id)
    {
        return UserSocial::FindOrFail($id);
    }

    public function update(Request $request, $id)
    {
        UserSocial::FindOrFail($id)->update($request->all());

    }

    public function destroy($id)
    {
        UserSocial::destroy($id);
    }

    // public function get_current_user_socials($id){
    //     //implementação estática: mudar para dinâmica quando for criado o sistema de login
    //     $id_usuario_logado = 1;
    //     $social_links =  DB::table('user_socials')->where('id_user', $id_usuario_logado)->get();
        
    // }
}
