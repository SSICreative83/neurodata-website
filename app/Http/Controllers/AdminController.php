<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataType;
use App\Models\Dataset;

class AdminController extends Controller
{
    public function create()
    {
        $dataTypes = DataType::all();
        return view('admin.create', compact('dataTypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file' => 'required|file',
            'data_type_id' => 'required|exists:data_types,id',
        ]);

        $path = $request->file('file')->store('datasets', 'public');

        Dataset::create([
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $path,
            'data_type_id' => $request->data_type_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('datasets.index')->with('success', 'Dataset uploaded successfully.');
    }
}
