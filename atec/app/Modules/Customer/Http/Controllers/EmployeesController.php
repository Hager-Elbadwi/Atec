<?php

namespace App\Modules\Customer\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    
    public function employees()
    {
        $employees= Employee::where('user_id', auth()->id())->get();
        
        return view('customer::pages.employees', compact('employees'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);
        $data['user_id'] = auth()->id();

        Employee::create($data);

        return redirect(route('customer.employees'))->with('msg', 'Created Employee');
    }

    public function update(Request $request, Employee $employee)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $employee->update($data);
        return redirect(route('customer.employees'))->with('msg', 'Updated Employee');

    }

    
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect(route('customer.employees'))->with('msg', 'Deleted Employee');
    }
}
