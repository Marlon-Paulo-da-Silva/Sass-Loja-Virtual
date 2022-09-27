<?php
  class Views
  {
    function getView($controller, $view, $data = ""){
      $controller = get_class($controller);
      if($controller == "Home"){
        $view = "app/views/".$view.".php";
      } else {
        $view = "app/views/".$controller."/".$view.".php";
      }
      require_once($view);
    }
    
    function getViewAdmin($controller, $view, $data = ""){
      $controller = get_class($controller);
      if($controller == "Home"){
        $view = "app/views/".$view.".php";
      } else {
        $view = "app/views/".$controller."/".$view.".php";
      }
      require_once($view);
    }
    
    function getViewStore($controller, $view, $data = ""){
      $controller = get_class($controller);
      if($controller == "Home"){
        // $view = "app/templates/store/".$view.".php";
        $view = "app/templates/store/index.php";
      } else {
        $view = "app/views/".$controller."/".$view.".php";
      }
      require_once($view);
    }
  }
?>