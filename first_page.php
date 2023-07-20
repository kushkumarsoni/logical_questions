1.) Please find the pair of given array in php
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

2.) Please print this pattern using php
<?php
function printPattern($rows)
{
    $currentChar = 'A';
    
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces for the left-aligned pyramid
        for ($space = 1; $space <= ($rows - $i); $space++) {
            echo ' ';
        }
        
        // Print characters in each row
        for ($j = 1; $j <= $i; $j++) {
            echo $currentChar . ' ';
            $currentChar++;
        }
        
        echo "<br/>"; // Move to the next line after each row is printed
    }
}

printPattern(5);
?> 
