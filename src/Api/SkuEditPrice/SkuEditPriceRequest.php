<?php
namespace DoudianSdk\Api\SkuEditPrice;

//auto generated code
class SkuEditPriceRequest
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
		return "/sku/editPrice";
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
