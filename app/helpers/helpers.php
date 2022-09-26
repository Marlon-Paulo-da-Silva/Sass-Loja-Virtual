<?php
  require_once("app/helpers/uri.php");

  function base_url()
  {
    return BASE_URL;
  }

  function dep($data)
  {
    $format = print_r('<br><br><pre>');
    $format .= print_r($data);
    $format .= print_r('<pre><br><br>');

    return $format;
  }

  //Limpeza da String
  function strClean($strCadena){
    $string = preg_replace(['/\s+/','/^\s|\s$/'],[' ',''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>","",$string);
    $string = str_ireplace("</script>","",$string);
    $string = str_ireplace("<script src>","",$string);
    $string = str_ireplace("<script type=>","",$string);
    $string = str_ireplace("SELECT * FROM","",$string);
    $string = str_ireplace("DELETE FROM","",$string);
    $string = str_ireplace("INSERT INTO","",$string);
    $string = str_ireplace("SELECT COUNT(*) FROM","",$string);
    $string = str_ireplace("DROP TABLE","",$string);
    $string = str_ireplace("OR '1'='1","",$string);
    $string = str_ireplace('OR "1"="1"',"",$string);
    $string = str_ireplace('OR ´1´=´1´',"",$string);
    $string = str_ireplace("is NULL; --","",$string);
    $string = str_ireplace("in NULL; --","",$string);
    $string = str_ireplace("LIKE '","",$string);
    $string = str_ireplace('LIKE "',"",$string);
    $string = str_ireplace('LIKE ´',"",$string);
    $string = str_ireplace("OR 'a'='a","",$string);
    $string = str_ireplace('OR "a"="a',"",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("OR ´a´=´a","",$string);
    $string = str_ireplace("--","",$string);
    $string = str_ireplace("^","",$string);
    $string = str_ireplace("[","",$string);
    $string = str_ireplace("]","",$string);
    $string = str_ireplace("==","",$string);
    return $string;
  }

  //Gerar Password
  function passGenerator($length = 10){
      $pass = "";
      $longitudPass = $length;
      $cadena = "ABCDEFGHIJKLMNOPQRSYUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
      $longitudCadena = strlen($cadena);

      for ($i=1; $i <= $longitudPass; $i++) { 
          $pos = rand(0,$longitudCadena-1);
          $pass .= substr($cadena,$pos,1);
      }
      return $pass;
  }

  //Gerar Token
  function tokenGenerator(){
    $completeToken = '';
    for($count = 1; $count <= 4; $count++){
        $token = bin2hex(random_bytes(10));
        $completeToken .= $token . '-';
    }
    return trim($completeToken, '-');
  }

  //Formato para valores monetarios
  function formatMoney($quantity){
    $quantity = number_format($quantity,2,SPD,SPM);
    return $quantity;
  }
?>