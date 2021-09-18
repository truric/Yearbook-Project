<?php

namespace App\Exports;

use App\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StudentExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Student::all();
    }

    public function map($student) : array
    {

        return [
            $student->user->atec_id,
            $student->user->fullName,
            $student->user->email,
            $student->group==null?'':$student->group->name,
            $student->parish==null?'':$student->parish->name,

        ];
    }

    public function headings() : array {

        return [
            'ID',
            'Nome',
            'Email',
            'turma',
            'Freguesia',
//            'Categoria'
        ] ;

    }

}
