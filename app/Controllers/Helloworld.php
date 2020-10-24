<?php namespace App\Controllers;

class Helloworld extends BaseController{
    
    public function index($name, $npm){
        // echo $this->name;
        echo $name."<br>";
        echo $npm."<br>";
        // echo"Hello World";
    }     

    public function show(){
        echo "Muhammad Umaruddin Syam"."<br>";
        echo "1857051006";
    }
}
