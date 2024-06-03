@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $dataset->title }}</h1>
    <p>{{ $dataset->description }}</p>
    <p>Type: {{ $dataset->dataType->type_name }}</p>
    <a href="{{ route('datasets.download', $dataset->id) }}" class="btn btn-secondary">Download</a>
</div>
@endsection
