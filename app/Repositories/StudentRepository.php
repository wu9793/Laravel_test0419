<?php
namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function getAll()
    {
        return $this->student->all();
    }

    public function create(array $data)
    {
        return $this->student->create($data);
    }

    public function findById(string $id)
    {
        return $this->student->find($id);
    }

    public function update(array $data, string $id)
    {
        $student = $this->student->find($id);
        $student->update($data);
        return $student;
    }

    public function delete(string $id)
    {
        $student = $this->student->find($id);
        return $student->delete();
    }
}
