<?php
/**
 * @link http://www.lacew.com/
 * @copyright Copyright (c) 2015 Centrenda IT LLC
 * @license http://www.lacew.com/license/
 * @date: 2017/12/25 16:00
 */

class DescribeEndpointRequest extends RpcAcsRequest
{
    function __construct($id, $serviceCode, $endPointType) {
        parent::__construct(LOCATION_SERVICE_PRODUCT_NAME, LOCATION_SERVICE_VERSION, LOCATION_SERVICE_DESCRIBE_ENDPOINT_ACTION);

        $this->queryParameters["Id"] = $id;
        $this->queryParameters["ServiceCode"] = $serviceCode;
        $this->queryParameters["Type"] = $endPointType;
        $this->setRegionId(LOCATION_SERVICE_REGION);

        $this->setAcceptFormat("JSON");
    }
}