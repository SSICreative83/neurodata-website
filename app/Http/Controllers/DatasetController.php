<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dataset;
use App\Models\DataType;

class DatasetController extends Controller
{
    public function index()
    {
        $datasets = Dataset::with('dataType')->get();
        return view('datasets.index', compact('datasets'));
    }

    public function show($id)
    {
        $dataset = Dataset::findOrFail($id);
        return view('datasets.show', compact('dataset'));
    }

    public function download($id)
    {
        $dataset = Dataset::findOrFail($id);
        return response()->download(storage_path("app/public/{$dataset->file_path}"));
    }
}
