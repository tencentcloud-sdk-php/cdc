<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusterOrders请求参数结构体
 *
 * @method array getDedicatedClusterIds() 获取按照专用集群id过滤
 * @method void setDedicatedClusterIds(array $DedicatedClusterIds) 设置按照专用集群id过滤
 * @method string getDedicatedClusterOrderIds() 获取按照专用集群订单id过滤
 * @method void setDedicatedClusterOrderIds(string $DedicatedClusterOrderIds) 设置按照专用集群订单id过滤
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method string getStatus() 获取订单状态为过滤条件：PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED  OFFLINE
 * @method void setStatus(string $Status) 设置订单状态为过滤条件：PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED  OFFLINE
 * @method string getActionType() 获取订单类型为过滤条件：CREATE  EXTEND
 * @method void setActionType(string $ActionType) 设置订单类型为过滤条件：CREATE  EXTEND
 * @method array getOrderTypes() 获取订单类型列表
 * @method void setOrderTypes(array $OrderTypes) 设置订单类型列表
 */
class DescribeDedicatedClusterOrdersRequest extends AbstractModel
{
    /**
     * @var array 按照专用集群id过滤
     */
    public $DedicatedClusterIds;

    /**
     * @var string 按照专用集群订单id过滤
     */
    public $DedicatedClusterOrderIds;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @var string 订单状态为过滤条件：PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED  OFFLINE
     */
    public $Status;

    /**
     * @var string 订单类型为过滤条件：CREATE  EXTEND
     */
    public $ActionType;

    /**
     * @var array 订单类型列表
     */
    public $OrderTypes;

    /**
     * @param array $DedicatedClusterIds 按照专用集群id过滤
     * @param string $DedicatedClusterOrderIds 按照专用集群订单id过滤
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param string $Status 订单状态为过滤条件：PENDING INCONSTRUCTION DELIVERING DELIVERED EXPIRED CANCELLED  OFFLINE
     * @param string $ActionType 订单类型为过滤条件：CREATE  EXTEND
     * @param array $OrderTypes 订单类型列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DedicatedClusterIds",$param) and $param["DedicatedClusterIds"] !== null) {
            $this->DedicatedClusterIds = $param["DedicatedClusterIds"];
        }

        if (array_key_exists("DedicatedClusterOrderIds",$param) and $param["DedicatedClusterOrderIds"] !== null) {
            $this->DedicatedClusterOrderIds = $param["DedicatedClusterOrderIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("OrderTypes",$param) and $param["OrderTypes"] !== null) {
            $this->OrderTypes = $param["OrderTypes"];
        }
    }
}
