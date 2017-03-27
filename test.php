<?php
class Test{
//    function __construct()
//    {
//        parent::__construct();
//    }

    function retain_key_shuffle(array &$arr){
        if (!empty($arr)) {
            $key = array_keys($arr);
            shuffle($key);
            foreach ($key as $value) {
                $arr2[$value] = $arr[$value];
            }
            $arr = $arr2;
        }
    }

}





