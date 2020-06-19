<?php
$url= !empty($_GET['url'])? $_GET['url'] : 'home/home' ;
$arrUrl = explode("/", $url);
$controller =$arrUrl[0];
$metodo = $arrUrl[0];
$params = "";
if(!empty($arrUrl[1])){
    if($arrUrl[1] !=""){
        $metodo = $arrUrl[1];
    }
}
if(!empty($arrUrl[2])){
    if ($arrUrl[2] != ""){
      /*for para poder recorrer las pociciones de los parametoros */
      for ($i=2; $i < count($arrUrl); $i++){
          $params .= $arrUrl[$i].',';
      }
      $params = trim($params, ",");
       }
}
echo "<br>";
echo "controlador: ".$controller;
echo "<br>";
echo "metodo: ".$metodo;
echo "<br>";
echo "parametros: ".$params;
?>