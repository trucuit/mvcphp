<?php 
class URL
{
    public static function createLink($module, $controller, $action)
    {
        return "index.php?module=$module&controller=$controller&action=$action";
    }
}
 ?>