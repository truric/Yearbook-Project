<?php

namespace App\Imports;

use App\Professor;
use App\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
//use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;

use Maatwebsite\Excel\Row;
use Maatwebsite\Excel\Concerns\OnEachRow;




class ProfessorImport implements OnEachRow
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
            $user->permissionEmail = false;
            $user->role = 4;
            $user->save();

            $professor = new Professor();
            $professor->user_id = $user->id;
            $professor->save();

        }
    }
}
