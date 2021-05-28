<?php
    //echo 'HEllo world';

    if(isset($_GET['name'])){
        echo 'Name: '.$_GET['name'];
    }

    if(isset($_POST['name'])){
        echo 'Name: '.$_POST['name'];
    }