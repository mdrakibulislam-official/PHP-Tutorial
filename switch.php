<?php

$mark = 9;

switch ($mark) {
	case 1:
	case 2:
	case 3:
		echo "The grade is: F";
		break;

	case 4:
		echo "The grade is: C";
		break;
	case 5:
		echo "The grade is: B";
		break;
	case 6:
		echo "The grade is: A-";
		break;
	case 7:
		echo "The grade is: A";
		break;
	case 8:
	case 9:
	case 10:
		echo "The grade is: A+";
		break;
	
	default:
		echo "Out of Bound.";
		break;
}

?>

