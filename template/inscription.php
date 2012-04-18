<?php

require_once "../database.php";
require_once '../class/User.php';

if(isset($_POST["operation"])){
    session_start();
    connect();
    if($_POST["operation"]=="inscrire"){
        inscrire();
    }else if($_POST["operation"]=="login"){
        echo login();
    }else if($_POST["operation"]=="logout"){
        logout();
    }else if($_POST["operation"]=="verify"){
        echo verify();
    }
}



function inscrire(){
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $password=md5($password);
    $role=$_POST["role"];
    $sql="insert into member(username, password, email, role) values ('".$username."', '".$password."', '".$email."', ".$role.");";
    mysql_query($sql);
    $uid=mysql_insert_id();
    $currentUser = new User();
    $currentUser->setId($uid);
    $currentUser->setUsername($username);
    $currentUser->setRole($role);
    $_SESSION["currentUser"]=$currentUser;
}

function login(){
    $username=$_POST["username"];
    $password=$_POST["password"];
    $sql = "select * from member where username='".$username."' and password='".md5($password)."';";
    $resultat=mysql_query($sql);
    if(!$resultat){
        return false;
    }else{
        $row=mysql_fetch_assoc($resultat);
        if($row["id"]<=0){
           return false;
        }else{
            $currentUser=new User();
            $currentUser->setId($row["id"]);
            $currentUser->setRole($row["role"]);
            $currentUser->setUsername($row["username"]);
            $_SESSION["currentUser"]=$currentUser;
            return true;
        }
    }
}

function logout(){
    unset ($_SESSION["currentUser"]);
    session_destroy();
}

function verify(){
    if(isset ($_POST["username"])){
        $sql = "select count(*) from member where username='".$_POST["username"]."';";
    }else if(isset ($_POST["email"])){
        $sql = "select count(*) from member where email='".$_POST["email"]."';";
    }
    $result=mysql_query($sql);
    $row=mysql_fetch_row($result);
    if($row[0]<=0){
        return false;
    }else{
        return true;
    }
}

?>
