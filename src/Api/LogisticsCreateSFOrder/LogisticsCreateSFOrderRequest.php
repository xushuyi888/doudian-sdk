<?php
namespace DoudianSdk\Api\LogisticsCreateSFOrder;

//auto generated code
class LogisticsCreateSFOrderRequest
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
		return "/logistics/createSFOrder";
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
