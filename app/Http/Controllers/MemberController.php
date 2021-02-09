<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $dbMembre = Member::all();
        return view("welcome", compact('dbMembre'));
    }

    public function create(){
        return view("pages.create");
    }
    
    public function femme(){
        $dbMembre = Member::all();
        return view("pages.femme", compact('dbMembre'));
    }

    
    public function homme(){
        $dbMembre = Member::all();
        return view("pages.homme", compact ('dbMembre'));
    }
    // store
    public function store(Request $request){
        
        $newEntry = new Member;
        $newEntry->nom = $request->nom;
        $newEntry->age = $request->age;
        $newEntry->genre = $request->genre;
        $newEntry-> save();
        
        return redirect()->back();
    }
    // destroy
    public function destroy($id){
    
        $destroy = Member::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
}
