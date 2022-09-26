<?php
  class homeModel extends Mysql
  {
    public function __construct()
    {
      parent::__construct();
    }

    

    // public function teste(){
    //   echo "MODEL funções teste";
    // }

    // public function setUser(string $name, string $email){

    //   $query_insert = "INSERT INTO users (username, email) VALUES (?, ?)";
    //   $arrData = array($name, $email);
    //   $request_insert = $this->insert($query_insert, $arrData);

    //   return $request_insert;
    // }

    // public function getUser($id){

    //   $sql = "SELECT username, email FROM users WHERE id = {$id}";
    //   $request = $this->select($sql);

    //   return $request;
    // }

    // public function getUsers(){

    //   $sql = "SELECT username, email FROM users LIMIT 10";
    //   $request = $this->select_all($sql);

    //   return $request;
    // }
    
    // public function updateUser(int $id, string $name, string $email){
      
    //   $sql = "UPDATE users SET username = ?, email = ? WHERE id = {$id}";
    //   $arrData = array($name, $email);
    //   $request = $this->update($sql, $arrData);
      
    //   return $request;
    // }
  
    // public function delUser(int $id){

    //   $sql = "DELETE FROM users WHERE id = {$id}";
    //   $request = $this->delete($sql);

    //   return $request;
    // }
  }
?>