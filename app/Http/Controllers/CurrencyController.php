<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;
use App\Http\Requests\CurrencyRequest;
use Illuminate\Database\Eloquent\Collection;

class CurrencyController extends Controller
{
    private function getAllCurrencies(): Collection
    {
        return Currency::all();
    }

    public function index()
    {
        return view('currencies-index', ['currencies' => $this->getAllCurrencies()]);
    }

    public function show(int $id)
    {
        $currency = Currency::findOrFail($id);
        return view('currencies-show', [
            'currencies' => $this->getAllCurrencies(),
            'currency' => $currency
        ]);
    }

    public function create()
    {
        return view('currencies-add', [ 'currencies' => $this->getAllCurrencies()]);
    }

    public function edit(int $id)
    {
        $currency = Currency::findOrFail($id);
        return view('currencies-edit', [
            'currencies' => $this->getAllCurrencies(),
            'currency' => $currency
        ]);
    }

    public function destroy(int $id)
    {
        $currency = Currency::findOrFail($id);
        Currency::destroy($id);
        return redirect()->route('currencies.index');
    }

    public function store(CurrencyRequest $request)
    {   
        $currency = Currency::create($request->all());
        return redirect()->route('currencies.index');
    }

    public function update(int $id, CurrencyRequest $request)
    {   
        $currency = Currency::findOrFail($id);
        $currency->fill($request->all());
        $currency->save();
        return redirect()->route('currencies.show',['id' => $currency->id]);
    }
}