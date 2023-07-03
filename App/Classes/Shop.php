<?php

namespace App\Classes;

class Shop
{
    public $market;
    public $branch;
    public $manager;

    public function setMarket($market)
    {
        $this->market = $market;
        return $this;
    }

    public function setBranch($branch)
    {
        $this->branch = $branch;
        return $this;
    }

    public function setManager($manager)
    {
        $this->manager = $manager;
        return $this;
    }

    public function getMarket()
    {
        return $this->market;
    }

    public function getBranch()
    {
        return $this->branch;
    }

    public function getManager()
    {
        return $this->manager;
    }
}
