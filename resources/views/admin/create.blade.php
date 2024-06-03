@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload Dataset</h1>
    <form action="{{ route('admin.datasets.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" name="file" id="file" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="data_type_id">Data Type</label>
            <select name="data_type_id" id="data_type_id" class="form-control" required>
                @foreach ($dataTypes as $dataType)
                    <option value="{{ $dataType->id }}">{{ $dataType->type_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
