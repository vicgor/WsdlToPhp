<?php
/**
 * Class file for XiEnergyTypeHistoricalChartTypes
 * @date 08/07/2012
 */
/**
 * Class XiEnergyTypeHistoricalChartTypes
 * @date 08/07/2012
 */
class XiEnergyTypeHistoricalChartTypes extends XiEnergyWsdlClass
{
	/**
	 * Constant for value 'SingleContract'
	 * @return string 'SingleContract'
	 */
	const VALUE_SINGLECONTRACT = 'SingleContract';
	/**
	 * Constant for value 'Commodity'
	 * @return string 'Commodity'
	 */
	const VALUE_COMMODITY = 'Commodity';
	/**
	 * Constructor
	 * @return XiEnergyTypeHistoricalChartTypes
	 */
	public function __construct()
	{
		parent::__construct(array());
	}
	/**
	 * Return true if value is allowed
	 * @param string value
	 * @return bool true|false
	 */
	public static function valueIsValid($_value)
	{
		return in_array($_value,array(self::VALUE_SINGLECONTRACT,self::VALUE_COMMODITY));
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