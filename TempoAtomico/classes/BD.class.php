<?php

class BD {
    //put your code here
    private static $conn;
    public static function getConn(){
        if(is_null(self::$conn)){
            self::$conn = new PDO(DSN, USER, PASS);
        }
        return self::$conn;
    }
    
}
