<?php
/**
 * Created by PhpStorm.
 * User: egorlarionov1
 * Date: 08.05.2018
 * Time: 13:28
 */

namespace Qoo10\Api\Items;


use Qoo10\Api\Qoo10ApiProcessor;

class Item
{
    const API_URL = 'http://api.qoo10.sg';

    /**
     * @var Qoo10ApiProcessor
     */
    protected $processor;

    /**
     * @var
     */
    protected $params;

    /**
     * Item constructor.
     * @param Qoo10ApiProcessor $processor
     */
    public function __construct(Qoo10ApiProcessor $processor) {
        $this->processor = $processor;
    }

    /**
     * @param string $key
     * @param string $value
     * @throws \Exception
     */
    public function setParam(string $key, string $value) {
        if(array_key_exists($key, $this->params)) {
            throw new \Exception('Key is exist');
        }

        if(is_array($value)) {
            throw new \Exception('Cannot set array');
        }

        $this->params[$key] = $value;
    }


    protected function clearParams() {
        $this->params = [];
    }

    /**
     * @param array $params
     * @return array
     */
    protected function convertParams2String(array $params) {
        $paramResult = [];

        foreach ($params as $key => $param) {
            $paramResult[] = sprintf('%s=%s', $key, $param);
        }

        $paramResult[] = 'key=' . $this->processor->getCertificate();

        return explode('&', $paramResult);
    }

    /**
     * @param array $params
     * @param string $query
     * @return string
     */
    protected function prepareQuery(array $params , string $query) {
        return sprintf($query . '%s', $this->convertParams2String($params));
    }

    /**
     * @param string $query
     * @return bool|string
     */
    protected function exec(string $query) {
        return file_get_contents(self::API_URL . $query);
    }

    /**
     * @param array $params
     * @param string $queryString
     * @return bool|string
     */
    protected function flowProcess(array $params, string $queryString) {
        $query = $this->prepareQuery($params, $queryString);
        $result = $this->exec($query);

        $this->clearParams();

        return $result;
    }

    /**
     * @param array $params
     * @param string $needParams
     * @throws \Exception
     */
    protected function compareParams(array $params, string $needParams) {
        $arrParams = [];
        $paramsExp = explode('&', $needParams);

        foreach ($paramsExp as $item) {
            list($key, $type) = explode('=', $item);

            $arrParams[] = $key;
        }

        foreach ($params as $key => $param) {
            if(!in_array($key, $arrParams)) {
                throw new \Exception('Wrong param');
            }
        }
    }
}