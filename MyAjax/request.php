<?php
    header('Content-type: text/olain; charset= UTF-8');
    if(isset($_POST['userid']) && isset($_POST['passward'])){
        $id = $_POST['userid'];
        $pas = $_POST['userid'];
        $str = "AJAX REQUEST SUCCESS\nuserid:".$id."\npassward:".$pas."\n";
        $result = nl2dr($str);
        echo = nl2br($str);
    } else {
        echo 'FAIL TO AJAX REQUEST';
    }
?>