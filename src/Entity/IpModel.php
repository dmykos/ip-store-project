<?php


namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class IpModel
{

    /**
     * @Assert\NotBlank
     * @Assert\Ip
     */
    public $ip;

    /**
     * @return mixed
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * @param mixed $ip
     */
    public function setIp( $ip ): void {
        $this->ip = $ip;
    }
}