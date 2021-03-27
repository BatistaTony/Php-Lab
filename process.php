<?php 


$firstN = $_GET['firstN'];
$secN = $_GET['secN'];
$opr = $_GET['operation'];


function calc($x, $y, $operation){

  if($operation !== ""){
  switch($operation){


    case 'sum': {
        return $x  + $y;
        break;
    }

    case 'subr': {
        return $x  - $y;
        break;

    }

    case 'devid': {
        return $x / $y;
        break;

    }

    case 'mult': {
      return $x * $y;
    break;

    }

    default: {
    echo  $x + " h " + $y; 
    break;
    }
  }
}
}



echo "<h1>"+  calc($firstN,$secN, $opr) +"</h1>";



?>
