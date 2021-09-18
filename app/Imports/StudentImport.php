<?php

namespace App\Imports;

use App\Student;
use App\user;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;

class StudentImport implements OnEachRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function onRow(Row $row)
    {
        if ($row->getIndex()!= 1) {
            $user = new User();
            $user->fullName = $row[1];

            $simple = explode(" ",$row[1]);
            if(count($simple)==1){
                $user->simpleName = $row[1];
            }else{
                $user->simpleName = $simple[0].' '.$simple[count($simple)-1];
            }
            $user->email = $row[2];
            $user->password = Hash::make($row[3]);
            $user->url = '/fixed/images/defaultProfilePicture.png';
            $user->atec_id = $row[0];
            $user->role = 6;
            $user->permissionEmail = false;

            $user->save();

            $student = new Student();
            $student->user_id = $user->id;
            $student->category = 3;
            $student->permissionPhone = false;
            $student->permissionAddress = false;

            $student->save();
        }
    }
}
