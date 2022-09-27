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
    
    function getViewSite($modelSite, $view, $data = ""){
    
      $view = "app/templates/site/" . $modelSite . "/" . $view.".php";
      // echo $view;
      // die();
      require_once($view);
    }
  }
?>