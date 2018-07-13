<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class CurrencyController extends Controller
{
    private $currencies;

    public function __construct() {
        $this->currencies = Currency::all()->toArray();
    }

    public function index()
    {
        return view('currencies', ['currencies' => $this->currencies]);
    }

    public function show(int $id)
    {
        $currency = Currency::find($id);
        return view('currency', [
            'currencies' => $this->currencies,
            'currency' => $currency
        ]);
    }

    public function add()
    {
        return view('currency-add', [ 'currencies' => $this->currencies]);
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        return view('currency-edit', [
            'currencies' => $this->currencies,
            'currency' => $currency
        ]);
    }

    public function delete(int $id)
    {
        Currency::destroy($id);
        return redirect()->route('currencies.index');
    }

    public function store(Request $request)
    {   
        $currency = Currency::create($request->all());
        return redirect()->route('currencies.show',['id' => $currency->id]);
    }

    public function update(int $id, Request $request)
    {   
        $currency = Currency::find($id);
        $currency->fill($request->all());
        $currency->save();
        return redirect()->route('currencies.show',['id' => $currency->id]);
    }
}
