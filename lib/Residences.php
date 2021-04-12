<?php


class Residences {
    
    
    // Function to retrieve all Residences from Residences table.
    public function getAllResidences()
    {
        $sql = "SELECT * FROM `residences`";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function to retrieve all Residences from Residences table.
    public function getResidencesById($id)
    {
        $sql = "SELECT * FROM `residences` where residences_id=$id";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
      // Function to retrieve all Residences from Residences table By User Id.
       public function getResidencesByUserId($UserId)
    {
        $sql = "SELECT * FROM `residences` where user_id='$UserId'";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function add Residences in Residences table.
    public function addResidences($param)
    {
        $sql = "INSERT INTO `residences` (user_id, residences_name, residences_image, residences_desc, university_id, residences_number,residences_gender ,city_id)";
        $sql .= " VALUES ('" . $param['user_id'] . "','" . $param['residences_name'] . "','" . $param['residences_image'] . "','" . $param['residences_desc'] . "','" . $param['university_id'] . "','" . $param['residences_number'] . "','" . $param['residences_gender'] . "','" . $param['city_id'] . "');";
       
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    public function getResidencesFilter($param, $returnCount=0)
    {  
        
          if($returnCount ==0){   
            $sql = "SELECT b.* FROM `residences` b where residences_image !=''";      
          }else{
            $sql = "SELECT count(*) as countRow FROM `residences` b where residences_image !=''"; 
          }
          if(!empty($param["university_id"])){
          $sql .=" and  b.university_id=".$param["university_id"];   
           }
          if(!empty($param["city_id"])){
          $sql .=" and  b.city_id=".$param["city_id"];   
           }
          if(!empty($param["residences_gender"])){
          $sql .=" and  b.residences_gender=".$param["residences_gender"];   
           }
         if($returnCount ==0){
          $page= ($param["page"]-1)* $param["limit"];               
           $sql .=" order by "." residences_entry_data "."desc " ; 
           $sql .=" limit ".$page.", ".$param["limit"] ; 
          
           }
         
        $data = FunctionGenral::DBConnection($sql);
         if($returnCount ==0){
             $CityObj= new City();
        $UniversityObj= new University();
            foreach ($data as $key => $value) {
             $data[$key]["university"]= $UniversityObj->getUniversityById($value["university_id"])[0]["university_name"];  
             $data[$key]["city"]= $CityObj->getCityById($value["city_id"])[0]["city_name"];
             $residences_imageArray= explode(",", $value["residences_image"]);
             $data[$key]["ImageCount"]= count($residences_imageArray);
                foreach ($residences_imageArray as $val) {
                  $data[$key]["ImageURL"][] = FunctionGenral::addURLToFile($val);
                }   
            }   
         }
        
        
        return $data;
    }
    
    // Function update Residences by id in Residences table.
    public function updateResidences($param)
    {
        $sql = "UPDATE `residences` SET  residences_name='" . $param['residences_name'] . "',residences_image='" . $param['residences_image'] . "',residences_desc='" . $param['residences_desc'] . "',";
        $sql .=  "university_id='" . $param['university_id'] . "' ,residences_number='" . $param['residences_number'] . "',residences_gender='" . $param['residences_gender'] . "' ,city_id='" . $param['city_id'] . "' WHERE residences_id=".$param['id'].";  ";
        
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function delete Residences from Residences table.
    public function deleteResidencess($id)
    {
        $sql = "DElETE FROM `residences` WHERE residences_id=$id;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    
    public function getResidenceslimit($param)
    {         
            $sql = "SELECT * FROM `residences`";      
          $param["page"]= ($param["page"]-1)* $param["limit"];               
           $sql .=" order by "." residences_entry_data "."desc " ; 
           $sql .="limit ".$param["page"].", ".$param["limit"] ; 
          
        $data = FunctionGenral::DBConnection($sql);
        $CityObj= new City();
        $UniversityObj= new University();
        
        foreach ($data as $key => $value) {
         $data[$key]["university"]= $UniversityObj->getUniversityById($value["university_id"])[0]["university_name"];  
         $data[$key]["city"]= $CityObj->getCityById($value["city_id"])[0]["city_name"];
         $residences_imageArray= explode(",", $value["residences_image"]);
         $data[$key]["ImageCount"]= count($residences_imageArray);
            foreach ($residences_imageArray as $val) {
              $data[$key]["ImageURL"][] = FunctionGenral::addURLToFile($val);
            }   
        }

        return $data;
    }
    
    

    
}