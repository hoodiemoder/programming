<!DOCTYPE html>
<html>
<body>
<?php
echo "Hoy es ";
switch (date("l")) {
	case "Monday":
    	echo "Lunes";
        break;
    case "Tuesday":
    	echo "Martes";
        break;
    case "Thursday":
    	echo "Jueves";
        break;
    case "Friday":
    	echo "Viernes";
        break;
    case "Saturday":
    	echo "Sabado";
        break;
    case "Sunday":
    	echo "Domingo";
        break;
}
?>
</body>
</html>

