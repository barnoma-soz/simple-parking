<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarStoreRequest;
use App\Http\Resources\CarResource;
use App\Models\Car;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->paginate(10);

        return inertia('Cars/Index', [
            'cars' => CarResource::collection($cars),
        ]);
    }

    public function create()
    {
        return inertia('Cars/Create');
    }

    public function store(CarStoreRequest $request)
    {
        Car::create($request->validated());

        return redirect('/')->with('success', 'Запись успешно добавлена');
    }
}
