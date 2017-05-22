<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{
    /**
     * Display a list of available departments.
     */
    public function index()
    {
        $departments = Department::orderBy( 'name' )->get();

        return view( 'departments.index', compact( 'departments' ) );
    }
}
