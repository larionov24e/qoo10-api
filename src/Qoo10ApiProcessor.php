<?php
/**
 * Created by PhpStorm.
 * User: egorlarionov1
 * Date: 08.05.2018
 * Time: 12:52
 */

namespace Qoo10\Api;


class Qoo10ApiProcessor
{
    /**
     * Certificate
     *
     * @var string
     */
    protected $cert;

    /**
     * @param string $cert
     */
    public function setCertificate(string $cert) {
        $this->cert = $cert;
    }

    public function getCertificate() {
        return $this->cert;
    }
}