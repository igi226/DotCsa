<?php

namespace App\Http\Controllers\Admin\DotProfessional;

use App\Http\Controllers\Controller;
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
        //
    }

   
    public function store(Request $request)
    {
        //
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
        //
    }
}
