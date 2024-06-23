<?php
if (isset($_POST['submit'])) {
    $gov = $_POST['gov'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    echo 'gov is: '. $gov; echo '<br/>';
    echo 'city is  : '. $city; echo '<br/>';
    echo 'state is   : '. $state; echo '<br/>';
}