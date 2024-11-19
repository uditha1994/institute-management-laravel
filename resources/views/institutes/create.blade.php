@extends('app')

@section('content')

<h1>Add New Institute</h1>


<form action="{{ route('institutes.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="inst_name" class="form-lable">Institute Name</label>
        <input type="text" name="inst_name" id="inst_name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="contact_number" class="form-lable">Contact Number</label>
        <input type="text" name="contact_number" id="contact_number" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="latitude" class="form-lable">Latitude</label>
        <input type="text" name="latitude" id="latitude" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="longitude" class="form-lable">Longitude</label>
        <input type="text" name="longitude" id="longitude" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="inst_name" class="form-lable">Branch</label>
        <select name="branch_branch_id" id="branch_branch_id" class="form-control">
            @foreach ($branches as $branch)
                <option value="{{ $branch->branch_id }}">{{ $branch->branch_name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
</form>

@endsection