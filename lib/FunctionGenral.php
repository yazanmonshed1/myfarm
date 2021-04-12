<?php
class FunctionGenral
{
       // Function to connetct with databse.
       static public function DBConnection($sql)
       {
              define('DB_SERVER', 'localhost');
              define('DB_USERNAME', 'root');
              define('DB_PASSWORD', '');
              define('DB_DATABASE', 'residence');
              $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
              mysqli_query($db, "SET character_set_results = 'utf8'");
              mysqli_query($db, "character_set_client = 'utf8'");
              mysqli_query($db, "character_set_connection = 'utf8'");
              mysqli_query($db, "character_set_database = 'utf8'");
              mysqli_query($db, "SET NAMES utf8mb4");

              $result = mysqli_query($db, $sql);
              // Loop on the array resulte
              while ($data[] = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
              }
              array_pop($data);
              return $data;
       }

       static function saveFileToUplode($param)
       {
         
              $nameFile = time() . $param["name"];
              move_uploaded_file($param["tmp_name"], dirname(__FILE__) . "/../uploads/" . $nameFile);
              return $nameFile;
       }
       static function saveMultiFileToUplode($param)
       {
           $nameFileArray=array();
           foreach ($param as $value) {
             $nameFileArray[]= $nameFile = time() . $value["name"];
              move_uploaded_file($value["tmp_name"], dirname(__FILE__) . "/../uploads/" . $nameFile);
           }    
         return implode(",", $nameFileArray);
       }
       
       
         static function addURLToFile($nameFile)
       {
               return  "/My-home/uploads/" . $nameFile;       
       }
}
