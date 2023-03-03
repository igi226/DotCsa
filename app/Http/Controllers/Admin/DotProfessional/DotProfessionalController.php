<?php

namespace App\Http\Controllers\Admin\DotProfessional;

use App\Http\Controllers\Controller;
use App\Http\Requests\DotProfessionalRequest;
use App\Repository\DotProfessional\DotcsaProfessionalInterface;
use Illuminate\Http\Request;

class DotProfessionalController extends Controller
{
    private $dotProfessionals;

    public function __construct( DotcsaProfessionalInterface $dotcsaProfessionalInterface){
        $this->dotProfessionals = $dotcsaProfessionalInterface;
    }
    public function index()
    {
        $data['dotProfessionals'] = $this->dotProfessionals->getDotProfessionals();
        return view('Admin.DOTProfessionals.index', $data);
    }

   
    public function create()
    {
       return view('Admin.DotProfessionals.create');
    }

   
    public function store(DotProfessionalRequest $request)
    {
      $data = $request->only('name', 'contact_number','email','address','city','state','zipcode','profile_doc');
      if($this->dotProfessionals->storeDotProfessional($data)){
        return redirect()->route('dot-professionals.index')->with('msg', 'Registration done successfully.');
     }else{
        return back()->with('msg', 'Some error occur try again!');
     }
    }
    
    
    public function show($id)
    {
        //
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
        if($this->dotProfessionals->deleteDotProfessionals($id)){
            return back()->with('msg', 'The request has been deleted successfully');
        }else{
            return back()->with('msg', 'Some error occur, try again');
        }
    }
}
