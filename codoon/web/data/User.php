<?php

/**
 * Created by PhpStorm.
 * User: 52968
 * Date: 2016/12/1
 * Time: 22:12
 */
class User
{
    public $account;
    public $password;
    public $level;

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function __construct($account,$password,$level)
    {
        $this->account=$account;
        $this->password=$password;
        $this->level=$level;
    }

    /**
     * @return mixed
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @param mixed $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

}