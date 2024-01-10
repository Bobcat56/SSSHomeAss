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
        $car = new Car();
        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('Select Manufacurer', '');
        return view('cars.create', compact('manufacturers', 'car'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required | email',
            'manufacturer_id' => 'required | exists:manufacturers,id'
        ]);

        $car = new Car([
            'model' => $request->get('model'),
            'year' => $request->get('year'),
            'salesperson_email' => $request->get('salesperson_email'),
            'manufacturer_id' => $request->get('manufacturer_id')
        ]);
        //dd($request->all());
        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Car has been added');
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {

        $manufacturers = Manufacturer::orderBy('name')->pluck('name', 'id')->prepend('Select Manufacurer', '');
        $car = Car::find($id);

        return view('cars.edit', compact('car', 'manufacturers'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'model' => 'required',
            'year' => 'required',
            'salesperson_email' => 'required | email',
            'manufacturer_id' => 'required | exists:manufacturers,id'
        ]);

        $car = Car::find($id);
        $car->update($request->all());

        return redirect()->route('cars.index')->with('success', 'Car has been updated');
    }
}
