<?php


namespace App\Service;


use Dmykos\IpStoreBundle\Entity\IpModel;
use Dmykos\IpStoreBundle\StoreDriverInterface;

class DummyStoreDriver implements StoreDriverInterface
{

    public function add( IpModel $ipModel ): int {
        return 1000;
    }

    public function query( IpModel $ipModel ): int {
        return 100;
    }
}