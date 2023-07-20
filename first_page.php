Please find the pair of given array in php
<?php
$array = [a,b,c,d];
$data = array();
for($i=0;$i<count($array);$i++){
	for($j=$i+1;$j<count($array);$j++){
    echo $array[$i].'+'.$array[$j].'<br>';
    	//$data[] = $array[$i].'+'.$array[$j];
    }
}

echo "<pre>";
print_r($data);
?> 
