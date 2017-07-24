<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/24/17
 * Time: 10:26 PM
 */

include ('CocOperations.php');
include ('CocUtils.php');
class CocConnector implements CocOperations
{
    private $api_url="https://api.clashofclans.com/v1/clans/";


    public function listClanMembers()
    {
        $context=CocUtils::getRequestHeaders();
        $result=fopen($this->api_url.CommonConstants::OUR_CLAN_TAG,'r',false,$context);
        return $result;
    }

    public function checkMember($tag)
    {
        // TODO: Implement checkMember() method.
    }
}