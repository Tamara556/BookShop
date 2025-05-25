<?php

echo "<pre>";
print_r($_POST);

echo "</pre>";

if (!empty($_POST['firstName'])) {
    echo "username submited<br>";
} else {
    echo "username is not submited";
}

if (!empty($_POST['lastName'])) {
    echo "lastname submited<br>";
} else {
    echo "lastname is not submited";
}

