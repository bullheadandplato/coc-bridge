<?php
/**
 * Created by PhpStorm.
 * User: bullhead
 * Date: 7/25/17
 * Time: 12:28 AM
 */

class PlayerModel
{
    private $name;
    private $role;
    private $expLevel;
    private $trophies;
    private $clanRank;
    private $donations;
    private $donationsReceived;

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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }

    /**
     * @return mixed
     */
    public function getExpLevel()
    {
        return $this->expLevel;
    }

    /**
     * @param mixed $expLevel
     */
    public function setExpLevel($expLevel)
    {
        $this->expLevel = $expLevel;
    }

    /**
     * @return mixed
     */
    public function getTrophies()
    {
        return $this->trophies;
    }

    /**
     * @param mixed $trophies
     */
    public function setTrophies($trophies)
    {
        $this->trophies = $trophies;
    }

    /**
     * @return mixed
     */
    public function getClanRank()
    {
        return $this->clanRank;
    }

    /**
     * @param mixed $clanRank
     */
    public function setClanRank($clanRank)
    {
        $this->clanRank = $clanRank;
    }

    /**
     * @return mixed
     */
    public function getDonations()
    {
        return $this->donations;
    }

    /**
     * @param mixed $donations
     */
    public function setDonations($donations)
    {
        $this->donations = $donations;
    }

    /**
     * @return mixed
     */
    public function getDonationsReceived()
    {
        return $this->donationsReceived;
    }

    /**
     * @param mixed $donationsReceived
     */
    public function setDonationsReceived($donationsReceived)
    {
        $this->donationsReceived = $donationsReceived;
    }


}