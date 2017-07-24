<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/24/17
 * Time: 11:03 PM
 */
include('CommonConstants.php');
class CocUtils
{
    public static function getRequestHeaders(){
        $context = stream_context_create(array(
            'http' => array(
                'method:'=>"GET",
                'header' => "Accept: application/json\r\n authorization: Bearer " .CommonConstants::KEY_TOKEN,
            ),
        ));
        return $context;
    }

}