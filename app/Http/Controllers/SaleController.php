<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Good;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SaleController extends Controller
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
        return view('sales.index', [
            'sales' => auth()->user()->sales()->orderBy('created_at', 'DESC')->paginate(10)
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
        return view('sales.create', ['goods' => Good::get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $good = Good::findOrFail($request->good);
        $selfPrice = (double)$good->buyPrice * (double)$request->weight;
        $sum = ((double)$good->sellPrice * ((double)$request->weight) - ((double)($request->discount)));
        $sale = Sale::create([
            'user_id' => auth()->user()->id,
            'good_id' => (int)$request->good,
            'weight' => (double)$request->weight,
            'price' => (double)$good->sellPrice,
            'discount' => (double)$request->discount,
            'profit' => $sum - $selfPrice,
            'sum' => $sum,
            'comments' => $request->comments ?? '',
        ]);
        return redirect()->route('sales.index', ['sales' => Sale::get()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
    public function filter(Request $request)
    {
        $sales = Sale::get();
        
        $s = $sales->filter(
            function ($value, $key) use ($request) {
                return 
                    $value->created_at->day == (int)($request->day) &&
                    $value->created_at->month == (int)($request->month) &&
                    $value->created_at->year == (int)($request->year);
            }
        );
        return view('sales.index', [
            'sales' => $s
            ]
        );
    }
    public function filterShow()
    {
        $date = Carbon::now();
        return view('sales.filter', [
            'day' => $date->day,
            'month' => $date->month,
            'year' => $date->year,
            ]
        );    
    }
}
