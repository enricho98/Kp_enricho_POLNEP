<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Imports\EmployeeImport;
use App\Exports\AdminExport;
use App\Exports\FormatExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SadminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sadmin = DB::table('users')->whereNotIn('id', array(82))
            ->orderBy('updated_at', 'asc')
            ->get();

        return view('sadmin', ['sadmin' => $sadmin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nim' => 'required',
            'prodi' => 'required',
            'password' => 'required',
            'utype' => 'required'


        ]);

        $sadmin = Employee::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'nim' => $request->nim,
            'prodi' => $request->prodi,
            'password' => Hash::make($request['password']),
            'utype' => $request->utype,


        ]);

        return response()->json(['code' => 200, 'success' => 'Data Berhasil di Tambahkan', 'berhasil' => 'Berhasil di Ubah', 'data' => $sadmin], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sadmin = Employee::find($id);

        return response()->json($sadmin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        return redirect()->route('sadmin')->with('success', 'Data berhasil di Import');
    }
    public function exportexcel()
    {
        return Excel::download(new AdminExport,  'data-mahasiswa ' . date("d-m-Y (H:i)") . '.xlsx');
    }

    public function exportformat()
    {
        return Excel::download(new FormatExport, 'Format Import.xlsx');
    }

    public function delete($id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('sadmin')->with('success', 'Data berhasil di Hapus');
    }

    public function importForm()
    {
        return view('import_form');
    }
}
