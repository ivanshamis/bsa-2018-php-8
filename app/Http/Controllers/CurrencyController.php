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

    public function create()
    {
        return view('new-currency', [ 'currencies' => $this->currencies]);
    }

    public function edit(int $id)
    {
        $currency = Currency::find($id);
        return view('currency', [
            'currencies' => $this->currencies,
            'currency' => $currency
        ]);
    }

    public function delete(int $id)
    {
        Currency::destroy($id);
        return redirect()->route('currencies.index');
    }
}
