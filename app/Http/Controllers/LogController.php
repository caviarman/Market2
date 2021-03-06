<?php

namespace App\Http\Controllers;

use App\Log;
use App\Category;
use Illuminate\Http\Request;

class LogController extends Controller
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
        return view('logs.index', [
            'logs' => auth()->user()->logs()->orderBy('created_at', 'DESC')->paginate(10)
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('logs.create', ['categories' => Category::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $log = Log::create([
            'user_id' => auth()->user()->id,
            'category_id' => (int)$request->category,
            'operation' => $request->operation,
            'product' => $request->product ?? '',
            'price' => (double)$request->price,
            'comments' => $request->comments ?? '',
        ]);
        return redirect()->route('logs.index', ['logs' => Log::get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function show(Log $log)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $log = Log::find($id);
        return view('logs.edit', [
            'log' => $log,
            'categories' => Category::get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $log = Log::find($id)->update($request->all());
        
        return redirect()->route('logs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Log  $log
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Log::find($id)->delete();
        return redirect()->route('logs.index');
    }
}
