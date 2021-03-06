<?php
/**
 * Class file for XiRatesTypeGetRateDescriptionResponse
 * @date 08/07/2012
 */
/**
 * Class XiRatesTypeGetRateDescriptionResponse
 * @date 08/07/2012
 */
class XiRatesTypeGetRateDescriptionResponse extends XiRatesWsdlClass
{
	/**
	 * The GetRateDescriptionResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiRatesTypeRateDescription
	 */
	public $GetRateDescriptionResult;
	/**
	 * Constructor
	 * @param XiRatesTypeRateDescription GetRateDescriptionResult
	 * @return XiRatesTypeGetRateDescriptionResponse
	 */
	public function __construct($_GetRateDescriptionResult = null)
	{
		parent::__construct(array('GetRateDescriptionResult'=>$_GetRateDescriptionResult));
	}
	/**
	 * Set GetRateDescriptionResult
	 * @param RateDescription GetRateDescriptionResult
	 * @return RateDescription
	 */
	public function setGetRateDescriptionResult($_GetRateDescriptionResult)
	{
		return ($this->GetRateDescriptionResult = $_GetRateDescriptionResult);
	}
	/**
	 * Get GetRateDescriptionResult
	 * @return XiRatesTypeRateDescription
	 */
	public function getGetRateDescriptionResult()
	{
		return $this->GetRateDescriptionResult;
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