<?php


namespace App\Service;


use App\Entity\IpModel;

interface StoreDriverInterface {

    public function add(IpModel $ipModel) :int ;

    public function query(IpModel $ipModel): int;

}