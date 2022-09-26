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
  }
?>