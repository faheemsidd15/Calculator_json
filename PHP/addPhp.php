<?php
/**
 * Created by PhpStorm.
 * User: faheemsiddiqui
 * Date: 6/17/17
 * Time: 9:53 PM
 */

header('Content-type: text/javascript');

$json = array(

    'success' => false,
    'result' => 0
);


if(isset($_POST['first'], $_POST['second'])){

    $first = (int)$_POST['first'];
    $second = (int)$_POST['second'];

    $json['success']    = true;
    $json['result']     = $first + $second;


}

echo json_encode($json);

?>