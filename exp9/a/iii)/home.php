<?php
$name = $_POST['name'];
$age = $_POST['age'];

if ($age < 18) {
    echo "Hello " . $name . ", you are not authorized to visit this site.";
} else {
    echo "Welcome " . $name . " to this site.";
}
?>