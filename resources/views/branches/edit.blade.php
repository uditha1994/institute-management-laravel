@extends('app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Branch</h1>
</div>

<form action="{{ route('branches.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="branch_name" class="form-label">Branch Name</label>
        <input type="text" class="form-control" id="branch_name" name="branch_name"
            value="{{ old('branch_name', $branch->branch_name) }}" required>
    </div>
    <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address"
            value="{{ old('address', $branch->address) }}" required>
    </div>
    <div class="mb-3">
        <label for="institute_inst_id" class="form-label">Institute</label>
        <select name="institute_inst_id" id="institute_inst_id" class="form-control" required>
            <option value="">Select a Institute</option>
            @foreach ($institutes as $institute)
                        <option value="{{ $institute->inst_id }} {{ old(
                    'institute_inst_id',
                    $branch->institute_inst_id
                ) == $institute->inst_id ? 'selected' : '' }}">
                            {{ $institute->inst_name }}
                        </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection