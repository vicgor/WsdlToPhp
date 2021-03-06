<?php
/**
 * Class file for GGAdwordsTypeRejectedErrorReason
 * @date 03/07/2012
 */
/**
 * Class GGAdwordsTypeRejectedErrorReason
 * @date 03/07/2012
 */
class GGAdwordsTypeRejectedErrorReason extends GGAdwordsWsdlClass
{
	/**
	 * Constant for value 'UNKNOWN_VALUE'
	 * Meta informations :
	 * 	- documentation : Unknown value encountered
	 * @return string 'UNKNOWN_VALUE'
	 */
	const VALUE_UNKNOWN_VALUE = 'UNKNOWN_VALUE';
	/**
	 * Constructor
	 * @return GGAdwordsTypeRejectedErrorReason
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
		return in_array($_value,array(self::VALUE_UNKNOWN_VALUE));
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