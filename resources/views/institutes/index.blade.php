@extends('app')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h1>Institutes</h1>
    <a href="{{ route('institutes.create') }}" class="btn btn-primary">Add Institute</a>
</div>

<table>
    <thead></thead>
    </thead>
    <th>ID</th>
    <th>Name</th>
    <th>Location</th>
    <th>Contact Number</th>
    <!-- <th>Branch</th> -->
    <th>Action</th>
    </thead>
    <tbody>
        @foreach ($institutes as $institute)
                <tr>
                    <td>{{$institute->inst_id}}</td>
                    <td>{{$institute->inst_name}}</td>
                    <td>{{$institute->location}}</td>
                    <td>{{$institute->contact_number}}</td>
                    <!-- <td>{{$institute->branch->branch_name}}</td> -->
                    <td>
                        <a href="{{ route(
                'institutes.show',
                $institute->inst_id
            ) }}" class="btn btn-sm btn-info">View</a>
                        <a href="{{ route(
                'institutes.edit',
                $institute->inst_id
            ) }}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{ route(
                'institutes.destroy',
                $institute->inst_id
            ) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
        @endforeach
    </tbody>
</table>
@endsection