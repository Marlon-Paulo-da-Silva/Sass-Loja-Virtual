<?php
class Products extends Controllers {

  public function __construct()
  {
    parent::__construct();
  }

  public function products(){
    $data['tag_page'] = "Home";
    $data['page_title'] = "Página principal";
    $data['page_name'] = "home";
    $data['page_content'] = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting";
    $this->views->getView($this, "home", $data);
  }

}
?>