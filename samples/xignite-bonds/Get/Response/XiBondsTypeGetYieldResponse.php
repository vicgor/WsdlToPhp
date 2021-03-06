<?php
/**
 * Class file for XiBondsTypeGetYieldResponse
 * @date 08/07/2012
 */
/**
 * Class XiBondsTypeGetYieldResponse
 * @date 08/07/2012
 */
class XiBondsTypeGetYieldResponse extends XiBondsWsdlClass
{
	/**
	 * The GetYieldResult
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var XiBondsTypeYield
	 */
	public $GetYieldResult;
	/**
	 * Constructor
	 * @param XiBondsTypeYield GetYieldResult
	 * @return XiBondsTypeGetYieldResponse
	 */
	public function __construct($_GetYieldResult = null)
	{
		parent::__construct(array('GetYieldResult'=>$_GetYieldResult));
	}
	/**
	 * Set GetYieldResult
	 * @param Yield GetYieldResult
	 * @return Yield
	 */
	public function setGetYieldResult($_GetYieldResult)
	{
		return ($this->GetYieldResult = $_GetYieldResult);
	}
	/**
	 * Get GetYieldResult
	 * @return XiBondsTypeYield
	 */
	public function getGetYieldResult()
	{
		return $this->GetYieldResult;
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