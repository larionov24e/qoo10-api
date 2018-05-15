<?php
/**
 * Created by PhpStorm.
 * User: egorlarionov1
 * Date: 09.05.2018
 * Time: 17:23
 */

namespace Qoo10\Api\Items;


class Order extends Item
{
    /**
     * @param array $params
     * @return bool|string
     */
    public function getShippingInfo_v2(array $params) {
        $paramString = "ShippingStat=string&Search_Condition=string&search_Sdate=string&search_Edate=string";

        $this->compareParams($params, $paramString);
        $queryString = '/gmkt.inc.front.openapiservice/ShippingBasicService.api/GetShippingInfo_v2?';
        $query = $this->prepareQuery($params, $queryString);
        $result = $this->exec($query);

        $this->clearParams();
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function getShippingInfo(array $params) {
        $paramString = "ShippingStat=string&search_Sdate=string&search_Edate=string";

        $this->compareParams($params, $paramString);
        $queryString = '/gmkt.inc.front.openapiservice/ShippingBasicService.api/GetShippingInfo?';
        $query = $this->prepareQuery($params, $queryString);
        $result = $this->exec($query);

        $this->clearParams();
        return $result;
    }
}