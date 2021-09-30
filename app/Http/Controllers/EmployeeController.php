<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use App\Exports\FormatExport;
use Illuminate\Database\DBAL\TimestampType;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function index()
    {
        $posts = DB::table('users')->whereNotIn('id', array(82))
            ->orderBy('updated_at', 'asc')
            ->get();

        return view('posts', ['posts' => $posts]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'password' => 'required',


        ]);

        $post = Employee::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'password' => Hash::make($request['password']),


        ]);

        return response()->json(['code' => 200, 'success' => 'Data Berhasil di Tambahkan', 'berhasil' => 'Berhasil di Ubah', 'data' => $post], 200);
    }


    public function show($id)
    {
        $post = Employee::find($id);

        return response()->json($post);
    }


    public function destroy($id)
    {
        $post = Employee::find($id)->delete();

        return response()->json(['success' => 'Post Deleted successfully']);
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namafile);
        Excel::import(new EmployeeImport, \public_path('/EmployeeData/' . $namafile));
        return redirect()->route('posts')->with('success', 'Data berhasil di Import');
    }

    public function exportexcel()
    {
        return Excel::download(new EmployeeExport, 'data-mahasiswa ' . date("d-m-Y (H:i)") . '.xlsx');
    }

    public function exportformat()
    {
        return Excel::download(new FormatExport, 'Format Import.xlsx');
    }

    public function delete($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('posts')->with('success', 'Data berhasil di Hapus');
    }

    public function importForm()
    {
        return view('import-form');
    }
}
