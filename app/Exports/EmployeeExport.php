<?php

namespace App\Exports;

use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        return Employee::all('name', 'nim', 'email', 'prodi', 'message', 'pekerjaan', 'telepon', 'facebook', 'instagram');
    }
    public function headings(): array
    {
        //Put Here Header Name That you want in your excel sheet
        return [
            'Nama',
            'NIM',
            'Email',
            'Prodi',
            'Testimoni',
            'Pekerjaan',
            'Telepon',
            'Facebook',
            'Instagram'
        ];
    }
}
