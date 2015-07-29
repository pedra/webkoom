<?php

list($usec, $sec) = explode(' ', microtime());
$script_start = (float) $sec + (float) $usec;
 
/* SEU CÓDIGO PHP */
$a='';
for($i=0;$i<10000;$i++)$a.='Linha de teste, apenas para teste, e serio, e so um teste<br>';
echo $a;

list($usec, $sec) = explode(' ', microtime());
$script_end = (float) $sec + (float) $usec;
$elapsed_time = round($script_end - $script_start, 5);


echo 'Elapsed time: ', $elapsed_time, ' secs. Memory usage: ', round(((memory_get_peak_usage(true) / 1024) / 1024), 2), 'Mb';
?>