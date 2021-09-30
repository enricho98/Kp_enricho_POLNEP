<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\admin;
use Livewire\WithPagination;

class Animal extends Component
{

    public function render()
    {
        $users = DB::table('users')
            ->whereNotIn('utype', array("ADM", "SADM"))
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('posts', ['users' => $users]);
    }

    public function importForm()
    {
        return view('import-form');
    }
}
