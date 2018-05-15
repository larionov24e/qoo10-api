<?php

namespace Qoo10\Api;


class Qoo10CertGenerator
{

    const API_URL = "http://api.qoo10.sg";

    /**
     * @param string $key
     * @param int $user_id
     * @param string $password
     * @return string
     * @throws \Exception
     */
    public static function certGenerate(string $key, int $user_id, string $password) :string {

        if(!$key || !$user_id || !$password) {
            throw new \Exception('Missing data');
        }

        $query = sprintf('/GMKT.INC.Front.OpenApiService/Certification.api/CreateCertificationKey?key=%s&user_id=%d&pwd=%s', $key, $user_id, $password);
        $data = file_get_contents(self::API_URL . $query);

        //TODO need to return cert value
        return $data;
    }

}