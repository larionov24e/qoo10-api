<?php
/**
 * Created by PhpStorm.
 * User: egorlarionov1
 * Date: 08.05.2018
 * Time: 13:29
 */

namespace Qoo10\Api\Items;


class Goods extends Item
{
    /**
     * @param array $params
     * @return bool|string
     */
    public function setNewGoods(array $params) {
        $paramString = "SecondSubCat=string&ManufactureNo=string&BrandNo=string&ItemTitle=string&SellerCode=string&IndustrialCode=string&ProductionPlace=string&AudultYN=string&ContactTel=string&StandardImage=string&ItemDescription=string&AdditionalOption=string&ItemType=string&RetailPrice=string&ItemPrice=string&ItemQty=string&ExpireDate=string&ShippingNo=string&AvailableDateType=string&AvailableDateValue=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/SetNewGoods?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function updateGoods(array $params) {
        $paramString = "ItemCode=string&SellerID=string&SecondSubCat=string&ManufactureNo=string&BrandNo=string&ItemTitle=string&SellerCode=string&IndustrialCode=string&ProductionPlace=string&ContactTel=string&RetailPrice=string&ShippingNo=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/UpdateGoods?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function setGoodsPrice(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&ItemPrice=string&ItemQty=string&ExpireDate=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsOrderService.api/SetGoodsPrice?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function setGoodsInventory(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&ItemQty=string&ExpireDate=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsOrderService.api/SetGoodsInventory?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function editGoodsOption(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&AdditionalOption=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/EditGoodsOption?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function editGoodsMultiImage(array $params) {
        $paramString = "ItemCode=string&SellerCode=string&EnlargedImage1=string&EnlargedImage2=string&EnlargedImage3=string&EnlargedImage4=string&EnlargedImage5=string&EnlargedImage6=string&EnlargedImage7=string&EnlargedImage8=string&EnlargedImage9=string&EnlargedImage10=string&EnlargedImage11=string";

        $this->compareParams($params, $paramString);
        $address = '/GMKT.INC.Front.OpenApiService/GoodsBasicService.asmx/EditGoodsMultiImage?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function editGoodsInventory(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&ItemType=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/EditGoodsInventory?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function editGoodsImage(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&StandardImage=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/EditGoodsImage?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function editGoodsContents(array $params) {
        $paramString = "ItemCode=string&Sellercode=string&Contents=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/EditGoodsContents?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

    /**
     * @param array $params
     * @return bool|string
     */
    public function updateInventoryQtyUnit(array $params) {
        $paramString = "ItemCode=string&SellerCode=string&OptionName=string&OptionValue=string&OptionCode=string&Qty=string";

        $this->compareParams($params, $paramString);
        $address = '/gmkt.inc.front.openapiservice/GoodsBasicService.api/UpdateInventoryQtyUnit?';
        $result = $this->flowProcess($params, $address);
        return $result;
    }

}