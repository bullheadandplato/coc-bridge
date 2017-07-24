<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/25/17
 * Time: 12:25 AM
 */

class ClanDataModel
{
    private $name;
    private $description;
    private $badgeUrl;
    private $clanLevel;
    private $clanPoints;
    private $requiredTrophies;
    private $warFrequency;
    private $warWinStreak;
    private $warLosses;
    private $warWins;
    private $noMembers;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getBadgeUrl()
    {
        return $this->badgeUrl;
    }

    /**
     * @param mixed $badgeUrl
     */
    public function setBadgeUrl($badgeUrl)
    {
        $this->badgeUrl = $badgeUrl;
    }

    /**
     * @return mixed
     */
    public function getClanLevel()
    {
        return $this->clanLevel;
    }

    /**
     * @param mixed $clanLevel
     */
    public function setClanLevel($clanLevel)
    {
        $this->clanLevel = $clanLevel;
    }

    /**
     * @return mixed
     */
    public function getClanPoints()
    {
        return $this->clanPoints;
    }

    /**
     * @param mixed $clanPoints
     */
    public function setClanPoints($clanPoints)
    {
        $this->clanPoints = $clanPoints;
    }

    /**
     * @return mixed
     */
    public function getRequiredTrophies()
    {
        return $this->requiredTrophies;
    }

    /**
     * @param mixed $requiredTrophies
     */
    public function setRequiredTrophies($requiredTrophies)
    {
        $this->requiredTrophies = $requiredTrophies;
    }

    /**
     * @return mixed
     */
    public function getWarFrequency()
    {
        return $this->warFrequency;
    }

    /**
     * @param mixed $warFrequency
     */
    public function setWarFrequency($warFrequency)
    {
        $this->warFrequency = $warFrequency;
    }

    /**
     * @return mixed
     */
    public function getWarWinStreak()
    {
        return $this->warWinStreak;
    }

    /**
     * @param mixed $warWinStreak
     */
    public function setWarWinStreak($warWinStreak)
    {
        $this->warWinStreak = $warWinStreak;
    }

    /**
     * @return mixed
     */
    public function getWarLosses()
    {
        return $this->warLosses;
    }

    /**
     * @param mixed $warLosses
     */
    public function setWarLosses($warLosses)
    {
        $this->warLosses = $warLosses;
    }

    /**
     * @return mixed
     */
    public function getWarWins()
    {
        return $this->warWins;
    }

    /**
     * @param mixed $warWins
     */
    public function setWarWins($warWins)
    {
        $this->warWins = $warWins;
    }

    /**
     * @return mixed
     */
    public function getNoMembers()
    {
        return $this->noMembers;
    }

    /**
     * @param mixed $noMembers
     */
    public function setNoMembers($noMembers)
    {
        $this->noMembers = $noMembers;
    }




}