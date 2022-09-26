<?php
class Products extends Controllers {

  public function __construct()
  {
    parent::__construct();
  }

  public function products(){
    $data['tag_page'] = "Produtos";
    $data['page_title'] = "Produtos à venda";
    $data['page_name'] = "Produtos";
    $this->views->getView($this, "products", $data);
  }

}
?>