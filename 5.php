<?php 
function generate($jumlah) {
  	$key = 'abcefghijklmnopqrstuvwxyz1234567890';

	for( $a=$jumlah;$a>0;$a--)
    {
    	  echo substr(str_shuffle($key), 0, 4)."-".
    	  	   substr(str_shuffle($key), 0, 4)."-".
    	  	   substr(str_shuffle($key), 0, 4)."-".
    	  	   substr(str_shuffle($key), 0, 4). "<br>"; 
    }
}

generate(3);

?>