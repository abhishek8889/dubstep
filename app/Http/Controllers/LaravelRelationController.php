<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LaravelRelation\EmployeesModel;

class LaravelRelationController extends Controller
{
    public function index(){
        // $employee = EmployeesModel::limit(10)->get();
        // dd($employee);
        try{
            $model = EmployeesModel::findOrFail(1224515415);
        }catch(\Exception $e){
            return $e->getMessage();
        }
     
    }
}
