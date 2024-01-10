<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Manufacturer;

class CarController extends Controller
{
    public function index()
    {
        if (request('manufacturer_id') == null) {
            $cars = Car::all();
        } else {
            $cars = Car::where('manufacturer_id', request('manufacturer_id'))->get();
        }

        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('All Manufacurers', '');
        return view('cars.index', compact('cars', 'manufacturers'));
    }

    public function create()
    {
        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('Select Manufacurer', '');
        return view('cars.create', compact('manufacturers'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'email' => 'required | email',
            'company_id' => 'required | exists:manufacturers,id'
        ]);

        $car = new Car([
            'model' => $request->get('model'),
            'year' => $request->get('year'),
            'email' => $request->get('email'),
            'manufacturer_id' => $request->get('company_id')
        ]);

        //dd($request->all());

        $car->save();
        return redirect('/cars')->with('success', 'Car saved!');
        
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit', compact('car'));
    }
}
