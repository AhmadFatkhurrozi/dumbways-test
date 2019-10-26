<?php 
function check()
{
	$key = ['dumb', 'ways', 'the','best'];
	$word = 'dumbways';

	for($i=0; $i<count($key); $i++)
	{
		if (preg_match("/".$key[$i]."/", $word, $check)) 
	    {
	        echo $check[0].'=> true <br>';
	    }else{
	    	echo $key[$i].'=> false <br>';
	    }
	}
}

check();

?>