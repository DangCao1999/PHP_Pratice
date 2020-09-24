<?php 

function deleteItemWithName(array &$hs, string $name)
{
    // print("start delete");
    // print($name);
    // $keyarray = array('name'=> $name);
    // print_r($keyarray);
    $key = array_search($name, array_column($hs, 'name'));
   print($key); 
   
    if(is_null($key))
    {
        print_r($hs);
        return false;
        //not exist
    }
    else
    {   
        
        unset($hs[$key]);
        print_r($hs);
        return true;
    }
    
    
}


?>