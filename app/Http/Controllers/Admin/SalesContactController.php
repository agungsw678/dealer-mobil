<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SalesContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SalesContactController extends BaseAdminController
{
    public function index(Request $request)
    {
        $query = SalesContact::query();

        if ($search = $request->query('q')) {
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('whatsapp', 'like', "%{$search}%");
        }

        $contacts = $query->latest()->paginate(10)->withQueryString();

        return view('admin.sales.index', compact('contacts'));
    }

    public function create()
    {
        return view('admin.sales.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:50',
            'photo' => 'nullable|image|max:2048',
            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = Storage::disk('public')->putFile('sales', $request->file('photo'));
        }

        $data['social_links'] = [
            'facebook' => $data['facebook'] ?? null,
            'instagram' => $data['instagram'] ?? null,
        ];

        unset($data['facebook'], $data['instagram']);
        $data['status'] = $request->boolean('status');
        SalesContact::create($data);

        return redirect()->route('admin.sales.index')->with('success', 'Kontak sales berhasil ditambahkan.');
    }

    public function edit(SalesContact $contact)
    {
        return view('admin.sales.edit', compact('contact'));
    }

    public function update(Request $request, SalesContact $contact)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp' => 'required|string|max:50',
            'photo' => 'nullable|image|max:2048',
            'website' => 'nullable|url|max:255',
            'facebook' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'status' => 'nullable|boolean',
        ]);

        if ($request->hasFile('photo')) {
            if ($contact->photo) {
                Storage::disk('public')->delete($contact->photo);
            }
            $data['photo'] = Storage::disk('public')->putFile('sales', $request->file('photo'));
        }

        $data['social_links'] = [
            'facebook' => $data['facebook'] ?? null,
            'instagram' => $data['instagram'] ?? null,
        ];

        unset($data['facebook'], $data['instagram']);
        $data['status'] = $request->boolean('status');
        $contact->update($data);

        return redirect()->route('admin.sales.index')->with('success', 'Kontak sales berhasil diperbarui.');
    }

    public function destroy(SalesContact $contact)
    {
        if ($contact->photo) {
            Storage::disk('public')->delete($contact->photo);
        }

        $contact->delete();

        return redirect()->route('admin.sales.index')->with('success', 'Kontak sales berhasil dihapus.');
    }
}
