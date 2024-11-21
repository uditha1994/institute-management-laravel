@extends('app')

@section('content')
<div class="container mt-5">
    <h2>Edit Exam</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('exams.update', $exam->exam_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="exam_name" class="form-label">Exam Name</label>
            <input type="text" class="form-control" id="exam_name" name="exam_name"
                value="{{ old('exam_name', $exam->exam_name) }}">
        </div>

        <div class="mb-3">
            <label for="exam_date" class="form-label">Exam Date</label>
            <input type="date" class="form-control" id="exam_date" name="exam_date"
                value="{{ old('exam_date', $exam->exam_date) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection