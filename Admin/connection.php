<?php

class Connection{

    public function dbConnect(){
        return new PDO("mysql:host=localhost; dbname=sopranos", "root", null);
}


}


?>