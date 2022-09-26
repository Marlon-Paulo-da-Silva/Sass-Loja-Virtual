<?php
  //Load
  $controllerFile = "app/controllers/" . $controller .".php";
  if (file_exists($controllerFile)) {
    // echo $controllerFile;
    require_once($controllerFile);
    $controller = new $controller();

    require_once("app/libraries/Core/Connection.php");
    
    if(method_exists($controller, $method)){
      $controller->{$method}($params);
    } else {
      require_once("app/controllers/Error.php");
    }
  } else {
    require_once("app/controllers/Error.php");
  }
?>