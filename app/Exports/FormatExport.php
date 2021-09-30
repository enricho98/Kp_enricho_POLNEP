<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class FormatExport implements WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */


    public function headings(): array
    {
        //Put Here Header Name That you want in your excel sheet
        return [
            'id',
            'name',
            'email',
            'email_verified_at',
            'prodi',
            'password',
            'two_factor_secret',
            'two_factor_recovery_codes',
            'remember_token',
            'created_at',
            'updated_at',
            'profile_photo_path',
            'message',
            'nim',
            'pekerjaan',
            'telepon',
            'facebook',
            'instagram'
        ];
    }
}
