<?php

$name = "md. rakibul islam";
$new_name = ucwords($name);

echo "$name"."<br>"." $new_name";
printf("<br>");
printf("Hi %s",ucwords($name));

$first_name = "md. rakibul";
$last_name = "islam";

$html_block = "<div> 
               <h1>%s</h1>
               <h2>%s</h2>
               </div>";
printf($html_block, ucwords($first_name), ucwords($last_name));
printf("[%'*10s]",$last_name);
?>
