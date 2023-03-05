<?php

  class Dbh {
      protected function connect(){
          try{
              $host_name = 'db5011275894.hosting-data.io';
              $database = 'dbs9520221';
              $user_name = 'dbu5446742';
              $password = '118G-T0Ur1966*';
              $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
              return $dbh;
          }
          catch(PDOException $e){
              print "Error!: " . $e->getMessage() . "<br/>";
              die();
          }
      }
  }