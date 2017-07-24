<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/24/17
 * Time: 11:15 PM
 */
include ('backend/CocConnector.php');
$coc=new CocConnector();
$result= $coc->listClanMembers();
echo stream_get_contents($result);