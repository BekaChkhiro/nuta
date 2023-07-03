<?php

namespace App\Controllers;

use App\Classes\Shop;

class ShopController
{
    public function Shop()
    {
        $shop =  new Shop;
        $shop->setMarket('market')->setBranch('ergneti')->setManager('vaja');
        return 'Market: ' . $shop->getMarket() . '<br> Branch: ' . $shop->getBranch() . '<br> Manager: ' . $shop->getManager();
    }
}
