@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Datasets</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datasets as $dataset)
                <tr>
                    <td>{{ $dataset->title }}</td>
                    <td>{{ $dataset->description }}</td>
                    <td>{{ $dataset->dataType->type_name }}</td>
                    <td>
                        <a href="{{ route('datasets.show', $dataset->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('datasets.download', $dataset->id) }}" class="btn btn-secondary">Download</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
