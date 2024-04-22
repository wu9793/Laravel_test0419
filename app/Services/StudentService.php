<?php
namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{
    protected $studentRepo;

    public function __construct(StudentRepository $studentRepo)
    {
        $this->studentRepo = $studentRepo;
    }

    public function getAllStudents()
    {
        return $this->studentRepo->getAll();
    }

    public function createStudent(array $data)
    {
        return $this->studentRepo->create($data);
    }

    public function getStudentById(string $id)
    {
        return $this->studentRepo->findById($id);
    }

    public function updateStudent(array $data, string $id)
    {
        $student = $this->studentRepo->findById($id);
        $student->update($data);
        return $student;
    }

    public function deleteStudent(string $id)
    {
        $student = $this->studentRepo->findById($id);
        return $student->delete();
    }
}
