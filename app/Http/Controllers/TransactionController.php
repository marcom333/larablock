<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$datos = Transaction::where("user_id", auth()->user()->id)->paginate();
        return view("t.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $input = $request->validate([
            "texto"=>"required",
        ]);
        $input["user_id"] = auth()->user()->id;
        $transaction = Transaction::create($input);
        return $transaction;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view("t.js");
    }

}
