<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;
// use Datatables;

class CrudController extends Controller
{
    public function index()
    {
        $data = Company::orderBy('id', 'desc')->paginate();

        return response()->json($data);
    }

    public function store(Request $request)
    {

        $companyId = $request->id;

        $company   = Company::updateOrCreate(
            [
                'id' => $companyId
            ],
            [
                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address
            ]
        );

        return Response()->json($company);
    }

    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $company = Company::where($where)->first();

        return Response()->json($company);
    }

    public function destroy(Request $request)
    {
        $company = Company::where('id', $request->id)->delete();

        return Response()->json($company);
    }
}
