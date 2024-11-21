<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\exam_has_student;
use App\Models\Student;
use Illuminate\Http\Request;

class ExamStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($examId)
    {
        $exam = Exam::find($examId);
        $assignedStudents = $exam->students;
        $availableStudents = Student::whereNotIn(
            'stu_id',
            $assignedStudents->pluck('stu_id')
        )->get();

        return view(
            'exam_students.index',
            compact('exam', 'assignedStudents', 'availableStudents')
        );
    }

    public function addStudent(Request $request, $examId)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,stu_id',
        ]);

        exam_has_student::create([
            'exam_id' => $examId,
            'stu_id' => $validated['student_id'],
        ]);

        return redirect()->route(
            'exam_students.index',
            $examId
        )->with(
                'success',
                'Student added successfully!'
            );
    }

    public function removeStudent($examId, $studentId)
    {
        exam_has_student::where('exam_id', $examId)
            ->where('stu_id', $studentId)->delete();

        return redirect()->route(
            'exam_students.index',
            $examId
        )->with(
                'success',
                'Student removed successfully!'
            );
    }
}
