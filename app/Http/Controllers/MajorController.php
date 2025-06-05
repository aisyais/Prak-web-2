<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        $majors = Majors::all();
        return view('majors.index', compact('majors'));
    }

    public function create()
    {
        return view('majors.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:majors,code',
            'description' => 'nullable|string',
        ]);

        Majors::create($validated);
        return redirect()->route('majors.index')->with('success', 'Major created successfully.');
    }

    public function show($id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.detail', compact('major'));
    }

    public function edit($id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.update', compact('major'));
    }

    public function update(Request $request, $id)
    {
        $major = Majors::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:majors,code,' . $major->id,
            'description' => 'nullable|string',
        ]);

        $major->update($validated);
        return redirect()->route('majors.index')->with('success', 'Major updated successfully.');
    }

    public function destroy($id)
    {
        $major = Majors::findOrFail($id);
        $major->delete();
        return redirect()->route('majors.index')->with('success', 'Major deleted successfully.');
    }
}
