<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoController extends BaseAdminController
{
    public function index(Request $request)
    {
        $query = Promo::query();

        if ($search = $request->query('q')) {
            $query->where('nama_mobil', 'like', "%{$search}%")
                ->orWhere('deskripsi', 'like', "%{$search}%");
        }

        $promos = $query->latest()->paginate(10)->withQueryString();

        return view('admin.promos.index', compact('promos'));
    }

    public function create()
    {
        return view('admin.promos.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'kredit' => 'nullable|numeric|min:0',
            'cicilan' => 'nullable|numeric|min:0',
            'gambar' => 'nullable|image|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = Storage::disk('public')->putFile('promos', $request->file('gambar'));
        }

        Promo::create($data);

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    public function edit(Promo $promo)
    {
        return view('admin.promos.edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        $data = $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'harga' => 'required|numeric|min:0',
            'kredit' => 'nullable|numeric|min:0',
            'cicilan' => 'nullable|numeric|min:0',
            'gambar' => 'nullable|image|max:2048',
            'deskripsi' => 'nullable|string',
        ]);

        if ($request->hasFile('gambar')) {
            if ($promo->gambar) {
                Storage::disk('public')->delete($promo->gambar);
            }
            $data['gambar'] = Storage::disk('public')->putFile('promos', $request->file('gambar'));
        }

        $promo->update($data);

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil diperbarui.');
    }

    public function destroy(Promo $promo)
    {
        if ($promo->gambar) {
            Storage::disk('public')->delete($promo->gambar);
        }

        $promo->delete();

        return redirect()->route('admin.promos.index')->with('success', 'Promo berhasil dihapus.');
    }
}