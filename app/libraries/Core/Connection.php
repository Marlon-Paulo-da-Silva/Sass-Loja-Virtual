<?php
// use PDO;
// use PDOException;


class Connection {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASSWORD;
  private $db = DB_NAME;
  private $charset = DB_CHARSET;
  private static $connect = null;

  public function getConnection()
  {

    try {
      
      if(!self::$connect) {
        self::$connect = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password,[
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        ]);
      }

      // echo self::$connect;
      // die();
  
      return self::$connect;

    } catch (PDOException $th) {
      echo $th->getMessage();
    }
    
  }
}
// class Connection{
//   private $host = DB_HOST;
//   private $user = DB_USER;
//   private $password = DB_PASSWORD;
//   private $db = DB_NAME;
//   private $charset = DB_CHARSET;
//   private static $connect = null;

//   public function connect()
//   {
//     $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";
//       charset=".$this->charset;


//       // echo $connectionString;
//       // print_r($this->connect);
      
//       try {
        
//         if(!self::$connect) {
//           self::$connect = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);

//               echo self::$connect;
//               die();
//         }

//         echo self::$connect;
//         // print_r($this->connect);
//         die();
    
//         return self::$connect;
  
//       } catch (PDOException $th) {
//         echo $th->getMessage();
//       }
      
    // try {
    //   $this->connect = new \PDO($connectionString, $this->user, $this->password);
    //   $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    // } catch (\PDOException $e) {
    //   $this->connect = 'Erro de conexão';
    //   echo "Error: " . $e->getMessage();
    // }
  // }

  // public function connect(){
  //   echo $this->connect;
  //   // print_r($this->connect);
  //   die();
  //   // return $this->connect;
  // }

  
// }
// $mysq = new Connection();
// $mysq->getConnection();
// // die();
?>