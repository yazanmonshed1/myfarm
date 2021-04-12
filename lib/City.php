<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of City
 *
 * @author test
 */
class City {
    
        // Function to retrieve all city from category table.
    public function getAllCity()
    {
        $sql = "SELECT * FROM `city`";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function add city in city table.
    public function addCity($nameCity)
    {
        $sql = "INSERT INTO `city` (`city_name`) VALUES ('$nameCity');";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function update city by id in city table.
    public function updateCity($id, $nameCity)
    {
        $sql = "UPDATE `city` SET city_name='$nameCity' WHERE city_id=$id; ;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function delete city from city table.
    public function deleteCity($id)
    {
        $sql = "DElETE FROM `city` WHERE city_id=$id;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
      public function getCityById($id)
    {
        $sql = "SELECT * FROM city where city_id=$id";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    
    //put your code here
}
