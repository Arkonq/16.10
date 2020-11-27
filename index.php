<?php

require_once 'classes/Tag.php';

class One {
    static $name = 'John';

    function name(){
        return self::$name;
    }

}
echo (new One)->name();