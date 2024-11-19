<?php
/**
Plik testowy
 */
if(!empty($_SERVER)){
  //echo "</br></br>\n\nrecieved _SERVER ";
  //print_r($_SERVER);
} else {
  //echo "</br></br>\n\nEmpty _REQUEST";
}

if(empty($_REQUEST['items'])){
  echo "Brak danych";
  exit;
}

$usr = $_REQUEST['usr'];
$pass = $_REQUEST['pass'];
$tab_name = $_REQUEST['tab_name'];
$last_changed = $_REQUEST['last_changed'];
$new_changed = $_REQUEST['new_changed'];

switch ($usr) {
  case 'test1':
    if($pass <> 'pass1'){
      echo '403 - test1';
      exit;
    } 
    break;
  default:
    echo '403 - unknown user';
    exit;
    break;
}

$fields = [];
$serv_tab_name = '';
switch ($tab_name) {
  case 'zkp_badanie':
    $serv_tab_name = 'eff_zkp_badanie';  
    $tab_key = 'id_badanie';
    $fields[] = 'id_badanie';
    $fields[] = 'id_parametr';
    $fields[] = 'dzien';
    $fields[] = 'wartosc';
    $fields[] = 'korekty';
    $fields[] = 'CREATED';
    $fields[] = 'OWNER';
    $fields[] = 'LASTUPDATED';
    $fields[] = 'EDITOR';
    break;
  case 'zkp_parametr':
    $serv_tab_name = 'eff_zkp_parametr'; 
    $tab_key = 'id_parametr'; 
    $fields[] = 'id_parametr';
    $fields[] = 'cr';
    $fields[] = 'proces';
    $fields[] = 'wanna';
    $fields[] = 'skladnik';
    $fields[] = 'norma';
    $fields[] = 'jm';
    $fields[] = 'zmiana';
    $fields[] = 'typ';
    $fields[] = 'mi';
    $fields[] = 'ma';
    $fields[] = 'CREATED';
    $fields[] = 'OWNER';
    $fields[] = 'LASTUPDATED';
    $fields[] = 'EDITOR';
    $fields[] = 'LP';
    $fields[] = 'color';
    $fields[] = 'aktywny';
    $fields[] = 'aktywacja';
    $fields[] = 'deaktywacja';
    $fields[] = 'opis_pl';
    $fields[] = 'opis_eng';
    break;
  default:
    break;
}

if($serv_tab_name == '') {
    echo 'Brak dostępu do tablicy '.$tab_name;
    exit;
}

$items = json_decode($_REQUEST['items'],true);

// print_r($items);

if (!empty($items['item']))
{
  $lista = $items['item'];

  /**
   * Address of SQL server.
   */
  define('DATABASE_HOST','sql.effector2.nazwa.pl');

  /**
   * User to log in to SQL server.
   */
  define('DATABASE_USER','effector2_9');

  /**
   * User password to authorize SQL server.
   */
  define('DATABASE_PASSWORD','SQL56Epesi!');

  /**
   * Database to use.
   */
  define('DATABASE_NAME','effector2_9');

  /**
   * Database driver.
   */
  define('DATABASE_DRIVER','mysqli');


  $conn_string = "mysql:host=".DATABASE_HOST
    .";dbname=".DATABASE_NAME; 

  $conn = new PDO($conn_string,DATABASE_USER,DATABASE_PASSWORD);

  try {
    //$conn->beginTransaction();
    
    foreach($lista as $item){
      $head_list = '';
      $data_list = '';
      $update_list = '';
      $id_key = '';
      
      if(empty($item[$tab_key])){
        echo 'Brak klucza';
        $conn->rollback();
        exit;
      }
      // print_r($item);
      $id_key = $item[$tab_key];

      $last_itm_exist = false;
      
      $data = [];
      $data[] = $id_key;
      $sql = 'SELECT '.$tab_key.' FROM '.$serv_tab_name.' WHERE '.$tab_key.' = ? ' ;
      
      $sth = $conn->prepare($sql);
      $sth->execute($data); 
      $red = $sth->fetchAll();
      foreach ($red as $row) 
      {
        $last_itm_exist = true;
      }

      $head_list = '';
      $data_list = '';
      $data = [];
      foreach ($fields as $field){
        
        if(isset($item[strtolower($field)])){
          $value = $item[strtolower($field)];
        } else {
          echo 'Brak pola '.strtolower($field);
          print_r($item);
          $value = '';
          exit;          
        }
        $data[]=$value;
        if(!empty($head_list)){
          $head_list .= ', ';
        } 
        $head_list .= $field;
        if(!empty($data_list)){
          $data_list .= ', ';
        } 
        $data_list .= '?';
        
        if(!empty($update_list)){
          $update_list .= ', ';
        } else {
          $update_list .= ' SET ';
        }
        $update_list .= ' '.$field.' = ? ';
      }
      
      if(!empty($last_itm_exist)){
        $sql = 'UPDATE '.$serv_tab_name.' '.$update_list;
        $sql .= ' WHERE '.$tab_key.' = ? ' ;
        $data[] = $id_key;
        
        $conn->prepare($sql)->execute($data);
        //$ct = $conn->rowCount();
        //echo 'Zmodyfikowane wiersze: '.$ct;
      }else{

        $sql = 'INSERT INTO '.$serv_tab_name.' ('.$head_list.') values ('.$data_list.') ';

        $sth = $conn->prepare($sql);
        $stat = $sth->execute($data);
        
        if (empty($stat)){
          print_r($sth->errorInfo());
          print_r($sth->debugDumpParams());
        }
        
      }
      //echo $sql;
      //print_r($data);
    }
    //$conn->commit();
  }catch (Exception $e){
     // $conn->rollback();
      throw $e;
  }
  echo 'OK';
} else {
  echo 'Empty $items[items]';
  print_r($items);
}