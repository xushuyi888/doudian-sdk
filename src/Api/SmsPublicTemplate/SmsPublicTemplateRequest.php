<?php
namespace DoudianSdk\Api\SmsPublicTemplate;

//auto generated code
class SmsPublicTemplateRequest
{

	private $param;

	private $config;


	public function setParam($param)
	{
		$this->param = $param;
	}

	public function getParam()
	{
		return $this->param;
	}

	public function setConfig($config)
	{
		$this->config = $config;
	}

	public function getConfig()
	{
		return $this->config;
	}

	public function getUrlPath()
	{
		return "/sms/public/template";
	}

	public function execute($accessToken)
	{
		return \DoudianSdk\Core\DoudianOpClient::getInstance()->request($this, $accessToken);
	}

	public function __construct()
	{
		$this->config = \DoudianSdk\Core\GlobalConfig::getGlobalConfig();
	}
}
