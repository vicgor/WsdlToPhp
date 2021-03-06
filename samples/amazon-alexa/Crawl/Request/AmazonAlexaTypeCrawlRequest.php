<?php
/**
 * Class file for AmazonAlexaTypeCrawlRequest
 * @date 10/07/2012
 */
/**
 * Class AmazonAlexaTypeCrawlRequest
 * @date 10/07/2012
 */
class AmazonAlexaTypeCrawlRequest extends AmazonAlexaWsdlClass
{
	/**
	 * The Security
	 * @var AmazonAlexaTypeSecurity
	 */
	public $Security;
	/**
	 * The ResponseGroup
	 * @var string
	 */
	public $ResponseGroup;
	/**
	 * The Url
	 * @var string
	 */
	public $Url;
	/**
	 * The Version
	 * @var string
	 */
	public $Version;
	/**
	 * The Start
	 * @var string
	 */
	public $Start;
	/**
	 * The Count
	 * @var string
	 */
	public $Count;
	/**
	 * The Purify
	 * @var string
	 */
	public $Purify;
	/**
	 * The ResponseCodes
	 * @var string
	 */
	public $ResponseCodes;
	/**
	 * Constructor
	 * @param AmazonAlexaTypeSecurity Security
	 * @param string ResponseGroup
	 * @param string Url
	 * @param string Version
	 * @param string Start
	 * @param string Count
	 * @param string Purify
	 * @param string ResponseCodes
	 * @return AmazonAlexaTypeCrawlRequest
	 */
	public function __construct($_Security = null,$_ResponseGroup = null,$_Url = null,$_Version = null,$_Start = null,$_Count = null,$_Purify = null,$_ResponseCodes = null)
	{
		parent::__construct(array('Security'=>$_Security,'ResponseGroup'=>$_ResponseGroup,'Url'=>$_Url,'Version'=>$_Version,'Start'=>$_Start,'Count'=>$_Count,'Purify'=>$_Purify,'ResponseCodes'=>$_ResponseCodes));
	}
	/**
	 * Set Security
	 * @param Security Security
	 * @return Security
	 */
	public function setSecurity($_Security)
	{
		return ($this->Security = $_Security);
	}
	/**
	 * Get Security
	 * @return AmazonAlexaTypeSecurity
	 */
	public function getSecurity()
	{
		return $this->Security;
	}
	/**
	 * Set ResponseGroup
	 * @param string ResponseGroup
	 * @return string
	 */
	public function setResponseGroup($_ResponseGroup)
	{
		return ($this->ResponseGroup = $_ResponseGroup);
	}
	/**
	 * Get ResponseGroup
	 * @return string
	 */
	public function getResponseGroup()
	{
		return $this->ResponseGroup;
	}
	/**
	 * Set Url
	 * @param string Url
	 * @return string
	 */
	public function setUrl($_Url)
	{
		return ($this->Url = $_Url);
	}
	/**
	 * Get Url
	 * @return string
	 */
	public function getUrl()
	{
		return $this->Url;
	}
	/**
	 * Set Version
	 * @param string Version
	 * @return string
	 */
	public function setVersion($_Version)
	{
		return ($this->Version = $_Version);
	}
	/**
	 * Get Version
	 * @return string
	 */
	public function getVersion()
	{
		return $this->Version;
	}
	/**
	 * Set Start
	 * @param string Start
	 * @return string
	 */
	public function setStart($_Start)
	{
		return ($this->Start = $_Start);
	}
	/**
	 * Get Start
	 * @return string
	 */
	public function getStart()
	{
		return $this->Start;
	}
	/**
	 * Set Count
	 * @param string Count
	 * @return string
	 */
	public function setCount($_Count)
	{
		return ($this->Count = $_Count);
	}
	/**
	 * Get Count
	 * @return string
	 */
	public function getCount()
	{
		return $this->Count;
	}
	/**
	 * Set Purify
	 * @param string Purify
	 * @return string
	 */
	public function setPurify($_Purify)
	{
		return ($this->Purify = $_Purify);
	}
	/**
	 * Get Purify
	 * @return string
	 */
	public function getPurify()
	{
		return $this->Purify;
	}
	/**
	 * Set ResponseCodes
	 * @param string ResponseCodes
	 * @return string
	 */
	public function setResponseCodes($_ResponseCodes)
	{
		return ($this->ResponseCodes = $_ResponseCodes);
	}
	/**
	 * Get ResponseCodes
	 * @return string
	 */
	public function getResponseCodes()
	{
		return $this->ResponseCodes;
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>