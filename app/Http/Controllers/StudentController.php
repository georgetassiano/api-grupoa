<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use App\Services\StudentServiceInterface;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    private $service;

    public function __construct(StudentServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource with paginate.
     *
     * @return \App\Http\Resources\StudentResource
     */
    public function index(Request $request)
    {
        $limit = $request->input('limit', null);
        $dataStudents = $this->service->paginate($limit);
        return StudentResource::collection($dataStudents);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \App\Http\Resources\StudentResource
     */
    public function store(StoreStudentRequest $request)
    {
        $dataValidated = $request->validated();
        $new_data = $this->service->create($dataValidated);
        return new StudentResource($new_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \App\Http\Resources\StudentResource
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \App\Http\Resources\StudentResource
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $dataValidated = $request->validated();
        $updated_data = $this->service->update($dataValidated, $student->id);
        return new StudentResource($updated_data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \App\Http\Resources\StudentResource
     */
    public function destroy(Student $student)
    {
        $this->service->delete($student->id);
        return new StudentResource($student);
    }
}
