<?php

// Class for Users table.
class Users
{

    // Function to retrieve all Users from Users table.
    public function getAllUsers($id)
    {
        $sql = "SELECT * FROM `user` WHERE user_id <> '$id'";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function to retrieve all Users from Users table.
    public function getUserById($id)
    {
        $sql = "SELECT * FROM `user` where user_id=$id";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function add Users in Users table.
    public function addUsers($param)
    {
       
       
        //encrypt password md5
        $param['register-form-password'] = md5($param['register-form-password'] . "^d!5aY=BZ4!!VR");
        //$param['status'] = 1;
        $sql = "INSERT INTO user (user_name,user_email,user_phone,user_status,user_password,user_gender)";
        $sql .= " VALUES ('" . $param['register-form-name'] . "','" . $param['register-form-email'] . "','" . $param['register-form-phone'] . "','" . $param['status'] . "','" . $param['register-form-password'] . "','" . $param['user_gender'] . "');";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function update Users by id in Users table.
    public function updateUsers($param)
    {
        $sql = "UPDATE `user` SET user_name='" . $param['register-form-name'] . "',user_email='" . $param['register-form-email'] . "',user_phone='" . $param['register-form-phone'] . "' " ;
       // $sql .=  "user_status=" . $param['status'] . " ";
        if (!empty($param['register-form-password'])) {
            //encrypt password md5
            $param['register-form-password'] = md5($param['register-form-password'] . "^d!5aY=BZ4!!VR");
            $sql .= ",user_password='" . $param['register-form-password'] . "'  ";
        }
        $sql .= " WHERE user_id=".$param['id']."; ";
     
       
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    // Function delete Users from Users table.
    public function deleteUsers($id)
    {
        $sql = "DElETE FROM `user` WHERE user_id=$id;";
        $data = FunctionGenral::DBConnection($sql);
        return $data;
    }
    public function loginUsers($email, $password)
    {
        $password = md5($password . "^d!5aY=BZ4!!VR");
        $sql = "SELECT * FROM user where user_email='$email' and user_password='$password';";
        $data = FunctionGenral::DBConnection($sql);
        if (!empty($data)) {
            //to save login in server
            $_SESSION["login"] = $data[0];
            return 1;
        }
        return $data;
    }
    //to delete login from server
    public function logout()
    {
        session_destroy();
    }
    public function checkIfUserLogin()
    {
        if (!empty($_SESSION["login"])) {
            return $_SESSION["login"];
        } else {
            return 0;
        }
    }
    public function checkEmail($email)
    {
        $sql = "SELECT * FROM `user` where user_email='$email'";
        $data = FunctionGenral::DBConnection($sql);

        if (!empty($data)) {
            return 1;
        } else {
            return "0";
        }
    }
}
