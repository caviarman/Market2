<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('goods.index', ['goods' => Good::get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $good = Good::create([
            'name' => $request->name,
            'sellPrice' => (double)$request->sellPrice,
            'buyPrice' => (double)$request->buyPrice,
            'profit' => (double)$request->profit,
            'measure' => $request->measure,
            'comments' => $request->comments ?? '',
        ]);
        return redirect()->route('goods.index', ['goods' => Good::get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function show(Good $good)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $good = Good::find($id);
        return view('goods.edit', [
            'good' => $good
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $good = Good::find($id)->update($request->all());
        
        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Good  $good
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Good::find($id)->delete();
        return redirect()->route('goods.index');
    }
}
