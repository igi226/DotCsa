<?php

namespace App\Http\Controllers\User\Index;

use App\Http\Controllers\Controller;
use App\Repository\DotProfessional\DotcsaProfessionalInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   private $dotProfessional;

   public function __construct( DotcsaProfessionalInterface $dotcsaProfessionalInterface) {
      $this->dotProfessional = $dotcsaProfessionalInterface;
   }
   public function index() {
    return view('User.Index.index');
   }

   public function aboutUs() {
    return view('User.About.about');
   }

   public function motorCarrierSupport() {
    return view('User.MotorCarrierSupport.motorCarrierSupport');
   }

   public function registerRequest( Request $request ) {
      $request->validate([
         'name' => 'required|string',
         'contact_number' => 'required|numeric',
         'email' => 'required|email',
         'address' => 'required|string',
         'city' => 'required|string',
         'state' => 'required|string',
         'zipcode' => 'required|string',
      ]);

      $data = $request->only('name', 'contact_number','email','address','city','state','zipcode','profile_doc');

      if($this->dotProfessional->storeDotProfessional($data)){
         return back()->with('msg', 'Registration request successfully sent to the authority.');
      }else{
         return back()->with('msg', 'Some error occur try again!');
      }
   }

   public function fieldTrainingEvents() {
      return view('User.FieldTrainingEvent.fieldTrainingEvents');
   }

   public function insuranceAgencies() {
      return view('User.InsuranceAgency.insuranceAgencies');
      
   }

   public function expertWitness() {
      return view('User.ExpertWitness.expertWitness');
      
   }
}
