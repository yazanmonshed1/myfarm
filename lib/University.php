<?php


class University {
    //put your code here
    
    // Function to retrieve all University from University table.
    public function getAllUniversity()
    {
        $sql = "SELECT * FROM university";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function add University ib university table.
    public function addUniversity($city_id,$nameUniversity)
    {
        $sql = "INSERT INTO university (city_id,university_name) VALUES ('$city_id','$nameUniversity');";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function update University by id in university table.
    public function updateUniversity($city_id,$nameUniversity, $id)
    {
        $sql = "UPDATE university SET university_name='$nameUniversity' ,city_id='$city_id' WHERE university_id=$id; ;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function delete University from university table.
    public function deleteUniversity($id)
    {
        $sql = "DElETE FROM `university` WHERE university_id=$id;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    public function getUniversityById($id)
    {
        $sql = "SELECT * FROM university where university_id=$id";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    public function getUniversityByCityId($id)
    {
        $sql = "SELECT * FROM university where city_id=$id";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    
    
}
