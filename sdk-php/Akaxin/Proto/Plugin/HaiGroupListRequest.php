<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_group_list.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *获取群组列表
 *----
 *接口名
 *----
 * /hai/group/list
 *错误码
 *----
 *- success
 *- error.alert
 *
 * 
 */
class HaiGroupListRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *第几页
     *
     * 
     */
    private $page_number = 0;
    /**
     *每页的条数，默认100
     *
     * 
     */
    private $page_size = 0;

    public function __construct() {
        \GPBMetadata\Plugin\HaiGroupList::initOnce();
        parent::__construct();
    }

    /**
     *第几页
     *
     * 
     * @return int
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     *第几页
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPageNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_number = $var;

        return $this;
    }

    /**
     *每页的条数，默认100
     *
     * 
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     *每页的条数，默认100
     *
     * 
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

}

