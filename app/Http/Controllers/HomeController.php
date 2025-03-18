<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function deleteRecord(Request $request)
    {
        try {
            DB::beginTransaction();
            $request = request();
            $model = 'App\Models\\' . $request->model;
            $record = $model::query()->findOrFail($request->id);
            $record->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Record Delete Successfully');
        } catch (\Throwable $e) {
            return redirect()->back()->with('error', 'Somting Wrong' . $e);
        }
    }


    public function index()
    {
        return view('admin.dashboard.index');
    }
}
