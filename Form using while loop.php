 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE = edge">
 	<meta name="viewport" content="width = device-width, initial-scale=1.0">
 	<title>Form Data</title>
 </head>
 <body>

 	<form action="#">
 		
 		Year
 		<select name="" id="">
 			<?php
 			$year = 2000;
 			while ($year <= 2050) {
 				echo "<option value='$year'>$year</option>";
 				$year++;
 			}

 			?>
 			
 		</select>
 	</form>
 
 </body>
 </html>
