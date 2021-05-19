<?php
namespace Qimen\request;

/**
 * TOP API: hu3cgwt0tc.wdt.trade.query request
 *
 * @author auto create
 * @since 1.0, 2018.03.15
 */
class WdtVipApiTradeQueryRequest
{
    /**
     * 卖家账号
     **/
    private $sid;

    /**
     * 卖家appkey
     **/
    private $appkey;

    /**
     * 开始时间
     **/
    private $startTime;

    /**
     * 结束时间
     **/
    private $endTime;

    /**
     * 页码
     **/
    private $pageNo;

    /**
     * 分页大小
     **/
    private $pageSize;

    /**
     * 原始单号
     **/
    private $tid;

    /**
     * 平台id
     **/
    private $platformId;

    /**
     * 店铺编号
     **/
    private $shopNo;

    private $apiParas = [];

    public function setSid($sid)
    {
        $this->sid = $sid;
        $this->apiParas['sid'] = $sid;
    }

    public function getSid()
    {
        return $this->sid;
    }

    public function setAppkey($appkey)
    {
        $this->appkey = $appkey;
        $this->apiParas['appkey'] = $appkey;
    }

    public function getAppkey()
    {
        return $this->appkey;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        $this->apiParas['start_time'] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        $this->apiParas['end_time'] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        $this->apiParas['page_no'] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
    }

    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        $this->apiParas['page_size'] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

    public function setTid($tid)
    {
        $this->tid = $tid;
        $this->apiParas['tid'] = $tid;
    }

    public function getTid()
    {
        return $this->tid;
    }

    public function setPlatformId($platformId)
    {
        $this->platformId = $platformId;
        $this->apiParas['platformId'] = $platformId;
    }

    public function getPlatformId()
    {
        return $this->platformId;
    }

    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        $this->apiParas['shop_no'] = $shopNo;
    }

    public function getShopNo()
    {
        return $this->shopNo;
    }

    public function getApiMethodName()
    {
        return 'wdt.vip.api.trade.query';
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->endTime, 'endTime');
        RequestCheckUtil::checkNotNull($this->pageNo, 'pageNo');
        RequestCheckUtil::checkNotNull($this->pageSize, 'pageSize');
        RequestCheckUtil::checkNotNull($this->sid, 'sid');
        RequestCheckUtil::checkNotNull($this->startTime, 'startTime');
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
