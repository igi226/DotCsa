<?php

namespace App\Http\Controllers\User\Index;

use App\Http\Controllers\Controller;
use App\Http\Requests\DotProfessionalRequest;
use App\Repository\DotProfessional\DotcsaProfessionalInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
   private $dotProfessional;

   public function __construct( DotcsaProfessionalInterface $dotcsaProfessionalInterface) {
      $this->dotProfessional = $dotcsaProfessionalInterface;
   }
   public function index() {
      $data = [
         'banner1' => DB::table('cms')->where('slug', 'we-train-you-to-be-your-own')->first(),
         'banner2' => DB::table('cms')->where('slug', 'we-train-you-to-be-your-own-banner2')->first(),
         'secondPortion' => DB::table('cms')->where('slug', 'dotcsa-has-decades-of-experience-in-government-industry')->first(),
         'thirdPortion' => DB::table('cms')->where('slug', 'dotcsa-has-access-to-dot-safety-pros-meeting-our-standards')->first(),
      ];
    return view('User.Index.index', $data);
   }

   public function aboutUs() {
    return view('User.About.about');
   }

   public function motorCarrierSupport() {
    return view('User.MotorCarrierSupport.motorCarrierSupport');
   }

   public function registerRequest( DotProfessionalRequest $request ) {
      

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
