<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShowController extends Controller
{
	public function index()
	{

		$users = DB::table('users')
			->whereNotIn('utype', array('ADM', 'SDM','SADM'))
			->orderBy('updated_at', 'desc')
			->whereNotNull('message')
			->get();


		return view('welcome', ['users' => $users]);
	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

		// mengambil data dari table pegawai sesuai pencarian data
		$users = DB::table('users')
			->whereNotNull('message')
			->where(function($query) use ($cari) {
				$query->where('name', 'LIKE', '%'.$cari.'%')
					->orWhere('nim', 'LIKE', '%'.$cari.'%');
			})
			
			->whereNotIn('utype', array('ADM', 'SDM','SADM'))
			->orderBy('updated_at', 'desc')

			->paginate(10);

		// mengirim data pegawai ke view index
		return view('welcome', ['users' => $users]);
	}
}
