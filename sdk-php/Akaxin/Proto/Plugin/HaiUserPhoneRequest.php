<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plugin/hai_user_phone.proto

namespace Akaxin\Proto\Plugin;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 *!! 这个文件需要重命名 !!
 *获取用户手机号
 *----
 *只有实名站点，才能获取此数据。
 *接口名
 *----
 * /hai/user/phone
 *错误码
 *----
 *- success
 *- error.alert
 *
 * 
 */
class HaiUserPhoneRequest extends \Google\Protobuf\Internal\Message
{
    /**
     *用户的站点ID
     *
     * 
     */
    private $site_user_id = '';

    public function __construct() {
        \GPBMetadata\Plugin\HaiUserPhone::initOnce();
        parent::__construct();
    }

    /**
     *用户的站点ID
     *
     * 
     * @return string
     */
    public function getSiteUserId()
    {
        return $this->site_user_id;
    }

    /**
     *用户的站点ID
     *
     * 
     * @param string $var
     * @return $this
     */
    public function setSiteUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->site_user_id = $var;

        return $this;
    }

}
