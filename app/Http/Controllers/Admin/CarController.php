<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends BaseAdminController
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($search = $request->query('q')) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('specs', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        $cars = $query->latest()->paginate(12)->withQueryString();

        return view('admin.cars.index', compact('cars'));
    }

    public function create()
    {
        return view('admin.cars.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'specs' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = Storage::disk('public')->putFile('cars', $request->file('image'));
        }

        $data['status'] = $request->boolean('status');

        Car::create($data);

        return redirect()->route('admin.cars.index')->with('success', 'Data mobil berhasil disimpan.');
    }

    public function edit(Car $car)
    {
        return view('admin.cars.edit', compact('car'));
    }

    public function update(Request $request, Car $car)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'specs' => 'nullable|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($car->image) {
                Storage::disk('public')->delete($car->image);
            }
            $data['image'] = Storage::disk('public')->putFile('cars', $request->file('image'));
        }

        $data['status'] = $request->boolean('status');
        $car->update($data);

        return redirect()->route('admin.cars.index')->with('success', 'Data mobil berhasil diperbarui.');
    }

    public function destroy(Car $car)
    {
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }

        $car->delete();

        return redirect()->route('admin.cars.index')->with('success', 'Data mobil berhasil dihapus.');
    }
}
