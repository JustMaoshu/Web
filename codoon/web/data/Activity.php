<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/3
 * Time: 14:06
 */
class Activity
{
    protected $id;
    protected $name;
    protected $time;
    protected $place;
    protected $num;
    protected $detail;

    /**
     * Activity constructor.
     * @param $id
     * @param $name
     * @param $time
     * @param $place
     * @param $num
     * @param $detail
     */
    public function __construct($id, $name, $time, $place, $num, $detail)
    {
        $this->id = $id;
        $this->name = $name;
        $this->time = $time;
        $this->place = $place;
        $this->num = $num;
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place)
    {
        $this->place = $place;
    }

    /**
     * @return mixed
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * @param mixed $num
     */
    public function setNum($num)
    {
        $this->num = $num;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail)
    {
        $this->detial = $detail;
    }


}