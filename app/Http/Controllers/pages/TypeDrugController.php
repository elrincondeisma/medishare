<?php

namespace App\Http\Controllers\pages;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeDrug;
class TypeDrugController extends Controller
{
    //
    public function index(){
        $types = TypeDrug::all();
        return view('pages.types_drugs', compact('types'));
    }

    public function store(Request $request){
        $type = TypeDrug::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('pages-types_drugs');
    }
    public function edit($id){
        $type = TypeDrug::find($id);
        return view('pages.types_drugs_edit', compact('type'));
    }
    public function update(Request $request){
        $type = TypeDrug::updateOrCreate(['id' => $request->id], [
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('pages-types_drugs');
    }
}
