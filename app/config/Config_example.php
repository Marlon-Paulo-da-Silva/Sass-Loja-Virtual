<?php
  // define("BASE_URL", "http://localhost/CRUD-OrientadoAObjetos-PHP/");
  // const BASE_URL = "http://localhost/CRUD-OrientadoAObjetos-PHP/";

  $base = new URI();
  $base =  $base->base();
  
  define("BASE_URL", $base);
  
  // Zona horária
  date_default_timezone_set('America/Sao_Paulo');
  
  // Dados para conectar base de dados
  const DB_HOST = "localhost";
  const DB_NAME = "";
  const DB_USER = "";
  const DB_PASSWORD = "";
  const DB_CHARSET = "utf8";

  //Delimitadores decimal e milhar exem. 24.000,00
  const SPD = ",";
  const SPM = ".";

  //Simbolo da moeda
  const SMONEY = "R$";

?>