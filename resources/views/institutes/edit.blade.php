@extends('app')

@section('content')

<div class="container mt-4">
    <h1>Edit Institute</h1>
    <form action="{{ route('institutes.update', $institute->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="inst_name" class="form-lable">Institute Name</label>
            <input type="text" class="form-control" id="inst_name" name="inst_name" value="{{ $institute->inst_name }}">
        </div>
    </form>
</div>

@endsection