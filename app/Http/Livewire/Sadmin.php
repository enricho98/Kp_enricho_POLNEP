<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Hash;

class Sadmin extends Component
{
    public function render()
    {
        $sadmin = DB::table('users')
            ->whereNotIn('utype', array("SADM"))
            ->orderBy('updated_at', 'desc')
            ->get();
        return view('sadmin', ['sadmin' => $sadmin]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'password' => 'required',


        ]);

        $post = Sadmin::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'password' => Hash::make($request['password']),


        ]);

        return response()->json(['code' => 200, 'success' => 'Data Berhasil di Tambahkan', 'berhasil' => 'Berhasil di Ubah', 'data' => $post], 200);
    }


    public function show($id)
    {
        $post = Sadmin::find($id);

        return response()->json($post);
    }


    public function destroy($id)
    {
        $post = Sadmin::find($id)->delete();

        return response()->json(['success' => 'Post Deleted successfully']);
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');
        $namafile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namafile);
        Excel::import(new EmployeeImport, \public_path('/EmployeeData/' . $namafile));
        return redirect()->route('sadmin')->with('success', 'Data berhasil di Import');
    }
    public function exportexcel()
    {
        return Excel::download(new EmployeeExport, 'data-mahasiswa.xlsx');
    }

    public function delete($id)
    {
        $data = Sadmin::find($id);
        $data->delete();
        return redirect()->route('sadmin')->with('success', 'Data berhasil di Hapus');
    }

    public function importForm()
    {
        return view('import_form');
    }
}
