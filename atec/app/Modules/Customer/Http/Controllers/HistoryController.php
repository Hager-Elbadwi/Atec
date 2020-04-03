<?php

namespace App\Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect; 
use App\Models\History;

use Auth;
use Flash;
use Response;



class HistoryController extends Controller
{
    

    public function index()
    {
      $histories= History::all();
      
      return view('customer::pages.histories.index',compact('histories'));
       
    }
  

    public function create()
    {
       
    }


    public function store(Request $request)
    {
        // $company= Customer::create($request->validated());

        // return redirect()->route('admin.companies.index')->with('sucess','company updated');
    }


    public function show()
    {
        // $staff= Staff::where('company_id',$company->id)->get();
        // return view('admin.pages.companies.show', compact('company'));
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

   

    public function destroy($id)
    {
        $company =Customer::findOrFail($id);
        $company->delete($id);
        // return redirect(route('admin.companies.index'));
    }

    
   

}
