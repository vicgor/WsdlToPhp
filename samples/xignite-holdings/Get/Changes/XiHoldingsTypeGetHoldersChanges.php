<?php
/**
 * Class file for XiHoldingsTypeGetHoldersChanges
 * @date 08/07/2012
 */
/**
 * Class XiHoldingsTypeGetHoldersChanges
 * @date 08/07/2012
 */
class XiHoldingsTypeGetHoldersChanges extends XiHoldingsWsdlClass
{
	/**
	 * The FromDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $FromDate;
	/**
	 * The ToDate
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $ToDate;
	/**
	 * Constructor
	 * @param string FromDate
	 * @param string ToDate
	 * @return XiHoldingsTypeGetHoldersChanges
	 */
	public function __construct($_FromDate = null,$_ToDate = null)
	{
		parent::__construct(array('FromDate'=>$_FromDate,'ToDate'=>$_ToDate));
	}
	/**
	 * Set FromDate
	 * @param string FromDate
	 * @return string
	 */
	public function setFromDate($_FromDate)
	{
		return ($this->FromDate = $_FromDate);
	}
	/**
	 * Get FromDate
	 * @return string
	 */
	public function getFromDate()
	{
		return $this->FromDate;
	}
	/**
	 * Set ToDate
	 * @param string ToDate
	 * @return string
	 */
	public function setToDate($_ToDate)
	{
		return ($this->ToDate = $_ToDate);
	}
	/**
	 * Get ToDate
	 * @return string
	 */
	public function getToDate()
	{
		return $this->ToDate;
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