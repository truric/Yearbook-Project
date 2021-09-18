<?php

namespace App\Exports;

use App\Professor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProfessorsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Professor::all();
    }

    public function map($professor) : array {

        return [
            $professor->user->atec_id,
            $professor->user->fullName,
            $professor->user->email

        ] ;
    }

    public function headings() : array {

        return [
            'ID',
            'Nome',
            'Email'
        ] ;

    }
}
