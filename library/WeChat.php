<?php
/**
 * 微信
 */
namespace library;

class WeChat
{
    protected $_token = null;

    public function __construct($tk)
    {
        $this->_token = $tk;
    }

    /**
     * 验证token
     */
    public function valid()
    {
        $echoStr = I('param.echostr');
        //valid signature , option
        if ($this->checkSignature()) {
            echo $echoStr;
        }
    }

    /**
     * 响应消息
     */
    public function responseMsg()
    {
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
        //extract post data
        if (!empty($postStr)) {
            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
            if (!empty($keyword)) {
                $msgType = "text";
                $contentStr = "Welcome to wechat world!";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            } else {
                echo "Input something...";
            }
        } else {
            echo "";
            exit;
        }
    }

    /**
     * 检查签名
     * @return bool
     */
    private function checkSignature()
    {
        $signature = I('param.signature');//$_GET["signature"];
        $timestamp = I('param.timestamp');//$_GET["timestamp"];
        $nonce = I('param.nonce');//$_GET["nonce"];
        $token = $this->_token;
        $tmpArr = array($token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode($tmpArr);
        $tmpStr = sha1($tmpStr);
        if ($tmpStr == $signature) {
            return true;
        } else {
            return false;
        }
    }
}
