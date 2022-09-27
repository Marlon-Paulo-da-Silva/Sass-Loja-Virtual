<?php
  //Load
  
  $controller = ucwords($controller);
  $module = ucwords($module);
  $method = ucwords($method);

  echo $module;
  echo "<br>";
  echo $controller;
  echo "<br>";
  echo $method;
  echo "<br>";
  echo $params;
  echo "<br>";
  print_r($arrUrl);
  echo "<br>";
  // die();

  if($controller == "sistema"){
    echo "sistema";
    $controller = "System";
    // if(){

    // }
    $controllerFile = "app/controllers/" . $controller ."/" . $method .".php";
    die();
  }

  $controllerFile = "app/controllers/". $module . "/" . $controller .".php";

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