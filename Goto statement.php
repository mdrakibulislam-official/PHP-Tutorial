<?php

for ($outerCounter=1; $outerCounter <= 10; $outerCounter++) {
	echo "List: $outerCounter<br>";

	for ($innerCounter=0; $innerCounter <=15; $innerCounter++) { 
		echo "$innerCounter ";
		if ($outerCounter==3 && $innerCounter==4) {
			goto end;
		}
	}
	
	echo "<br>";
}

end:
echo "<br>Closed";

?>

