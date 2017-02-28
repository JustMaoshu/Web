<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/3
 * Time: 0:13
 */
class SportsInfo
{
    private $updateTime;
    private $numOfStep;
    private $burn;
    private $percent;
    private $bmi;

    public function __construct($updateTime, $numOfStep, $burn, $percent, $bmi)
    {
        $this->updateTime = $updateTime;
        $this->numOfStep = $numOfStep;
        $this->burn = $burn;
        $this->percent = $percent;
        $this->bmi = $bmi;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }

    /**
     * @param mixed $updateTime
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
     * @return mixed
     */
    public function getNumOfStep()
    {
        return $this->numOfStep;
    }

    /**
     * @param mixed $numOfStep
     */
    public function setNumOfStep($numOfStep)
    {
        $this->numOfStep = $numOfStep;
    }

    /**
     * @return mixed
     */
    public function getBurn()
    {
        return $this->burn;
    }

    /**
     * @param mixed $burn
     */
    public function setBurn($burn)
    {
        $this->burn = $burn;
    }

    /**
     * @return mixed
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * @param mixed $percent
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
    }

    /**
     * @return mixed
     */
    public function getBmi()
    {
        return $this->bmi;
    }

    /**
     * @param mixed $bmi
     */
    public function setBmi($bmi)
    {
        $this->bmi = $bmi;
    }

}