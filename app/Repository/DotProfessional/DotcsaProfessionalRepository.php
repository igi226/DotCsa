<?php 
namespace App\Repository\DotProfessional;

use Illuminate\Support\Facades\DB;

class DotcsaProfessionalRepository implements DotcsaProfessionalInterface{

    public function imageUpload($image){
        $db_image = time() . rand(0000, 9999) . "." . $image->getClientOriginalExtension();
        $image->storeAs("public/DotProfessionalContent", $db_image);
        return $db_image;
    }

  public function storeDotProfessional( array $data) {
    
    if(isset($data['profile_doc']) && $data['profile_doc'] != null) {
        $data['profile_doc'] = $this->imageUpload($data['profile_doc']);
    }
    $data['created_at'] = date('Y-m-d');
    return DB::table('dot_professionals')->insert($data);
  }
}
?>