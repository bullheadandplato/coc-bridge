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
$val=json_decode($result);

echo stream_get_contents($result);