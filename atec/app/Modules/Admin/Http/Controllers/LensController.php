<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Models\Lens;

class LensController extends Controller
{
    
    public function index()
    {
        $lenses = Lens::active()->available()->paginate(20);

        return view('admin::pages.lenses.index', compact('lenses'));
    }

    public function create()
    {
        return view( 'admin::pages.lenses.create' );
    }

    public function store(Request $request)
    {
        Lens::updateOrCreate([ 'name' => request('name') ]);
        
        return redirect()->route('admin.lenses.index')->with('msg', 'Lens Created');
    }

    public function edit(Lens $lense)
    {
        return view( 'admin::pages.lenses.edit', compact('lense') );
    }

    
    public function update(Request $request, Lens $lense)
    {
        $data = $request->validate(['name' => 'required']);
        $lense->update( $data );

        return redirect()->route('admin.lenses.index')->with('msg', 'Lens Updated');
    }

    public function destroy(Lens $lense)
    {

        if($lense->deleted_at == null){

            $lense->delete();
            return back()->with('msg', 'Lens Deleted');
        }

        $lense->restore();
        return redirect()->route('admin.lenses.index')->with('msg', 'Lens Recover');
    }
    
    public function trash()
    {
        $lenses = Lens::onlyTrashed()->paginate(20);

        return view('admin::pages.lenses.trash', compact('lenses'));
    }
}
