<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller{

    public function index(){
        $users = User::where("tenant_id", auth()->user()->tenant_id)->paginate(20);//->toSql();
        return view("user.index", ["users"=>$users]);
    }

    public function create(){
        return view("user.create",["user"=>new User]);
    }

    public function store(Request $request){
        $input = $request->validate([
            //"campo"=>"tipo_validacion",
            "name"=>"required",
            "password"=>"required",
            "email"=>"required|email|unique:users,email",
        ]);
        $input["password"] = Hash::make($input["password"]);
        $input["tenant_id"] = auth()->user()->tenant_id;
        $user = User::create($input);
        return redirect("user");
    }

    public function edit(User $user){
        return view("user.update",["user"=>$user]);
    }

    public function update(Request $request, User $user){
        $input = $request->validate([
            //"campo"=>"tipo_validacion",
            "name"=>"required",
            "password"=>"nullable",
            "email"=>"required|email|unique:users,email,$user->id",
        ]);
        if($input["password"]){
            $input["password"] = Hash::make($input["password"]);
        }
        else{
            unset($input["password"]);
        }
        $user->update($input);
        return redirect("user");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect("user");
    }

    public function show(User $user){
        return view("user.show", ["user"=>$user]);
    }
    
}
