@extends('app')

@section('content')
<div class="container mt-5">
    <h2>Edit Institute</h2>

    <form action="{{ route('institutes.update', $institute->inst_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="inst_name" class="form-label">Institute Name</label>
            <input type="text" class="form-control" id="inst_name" name="inst_name" value="{{ $institute->inst_name }}"
                required>
        </div>
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <textarea class="form-control" id="location" name="location" rows="3"
                required>{{ $institute->location }}</textarea>
        </div>
        <div class="mb-3">
            <label for="contact_number" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number"
                value="{{ $institute->contact_number }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('institutes.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection