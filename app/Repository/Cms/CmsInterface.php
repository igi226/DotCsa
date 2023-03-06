<?php
namespace App\Repository\Cms;

interface CmsInterface {
    public function getHomePage();
    public function getAboutPage();
    public function getMotorCareerPage();
    
    public function getCms($slug);
    public function updateCms(array $data, $slug);
}
?>