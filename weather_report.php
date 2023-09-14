<!-- Task 5: Weather Report -->

<?php

$temperature = 10;

switch ($temperature) {
  case 0 <= $temperature && $temperature < 10:
    echo "It's freezing!";
    break;
  case 10 <= $temperature && $temperature < 20:
    echo "It's cool.";
    break;
  case 30 <= $temperature && $temperature < 30:
    echo "It's warm.";
    break;
  case 40 <= $temperature:
    echo "It's hot!";
    break;
}

?>