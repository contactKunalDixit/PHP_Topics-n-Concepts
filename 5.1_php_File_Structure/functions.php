<?php
function view($model){
    
    require("views/layout.view.php");

}

// In order to avoid coming here repeatedly to add global to the variables, we can rather state another parameter named $model(representing data that will be passed), which will be used to provide local access to variables defined in global scope.

?>