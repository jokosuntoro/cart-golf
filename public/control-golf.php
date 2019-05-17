<?php
require "../vendor/autoload.php";
use jokodm\Datamining\Klasifikasi\DecisionTree;  
use jokodm\Datamining\Dataset\Demo\GolfNominal;  
	  
$dataset = new GolfNominal();  
$klasifikasi = new DecisionTree();
$klasifikasi->train($dataset->getSamples(),$dataset->getTargets());

$cuaca = $_POST['cuaca'];
$temperatur = $_POST['temperatur'];
$lembab = $_POST['lembab'];
$angin = $_POST['angin'];
	  
$pred = $klasifikasi->predict([$cuaca, $temperatur, $lembab, $angin]);  
	  
if ($pred == "Main") {  
    echo "masuk ke dalam kelas <b>bermain golf</b>";  
    } else {  
    echo "masuk ke dalam kelas <b>tidak bermain golf</b>";  
	}
?>
<br>
<a href="form-golf.php">Kembali ke Index</a>


