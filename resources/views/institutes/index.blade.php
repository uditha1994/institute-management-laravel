@extends('app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-3">
        <h2>Institutes</h2>
        <a href="{{ route('institutes.create') }}" class="btn btn-primary">Add New Institute</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Location</th>
                <th>Contact Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($institutes as $institute)
                <tr>
                    <td>{{ $institute->id }}</td>
                    <td>{{ $institute->inst_name }}</td>
                    <td>{{ $institute->location }}</td>
                    <td>{{ $institute->contact_number }}</td>
                    <td>
                        <a href="{{ route('institutes.edit', $institute->inst_id) }}"
                            class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('institutes.destroy', $institute->inst_id) }}" method="POST"
                            style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection