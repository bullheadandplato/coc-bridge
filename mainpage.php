<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/24/17
 * Time: 11:15 PM
 */
include ('backend/CocConnector.php');
$coc=new CocConnector();
echo "main paged loaded";
$result= $coc->listClanMembers();
echo $result;