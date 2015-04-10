<?php

$array = Array ( 
        0 => Array ( "product_id" => 33 , "amount" => 1 ) ,
        1 => Array ( "product_id" => 34  , "amount" => 3 ) ,
        2 => Array ( "product_id" => 10  , "amount" => 1 )
         );

         foreach ($array as $item){
         	echo "<pre>";
         	print_r($item);
         	echo "</pre>";

         	echo $item['product_id'], "\t\t", $item['amount'];
         }

echo "======================";

         echo "<pre>" ;
echo "Product ID\tAmount";
array_map(function ($var) {
    echo "\n", $var['product_id'], "\t\t", $var['amount'];
}, $array);