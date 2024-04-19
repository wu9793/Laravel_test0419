<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentService;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        return $this->studentService->getAllStudents();
    }

    public function store(Request $request)
    {
        return $this->studentService->createStudent($request->all());
    }

    public function show(string $id)
    {
        return $this->studentService->getStudentById($id);
    }

    public function update(Request $request, string $id)
    {
        return $this->studentService->updateStudent($request->all(), $id);
    }

    public function destroy(string $id)
    {
        return $this->studentService->deleteStudent($id);
    }
}
