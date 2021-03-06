<?php
/**
 * Class file for OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType
 * @date 02/07/2012
 */
/**
 * Class OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType
 * @date 02/07/2012
 */
class OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType extends OvhWsdlClass
{
	/**
	 * The item
	 * @var OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public $item;
	/**
	 * Constructor
	 * @param OvhTypeTelephonyLineSwitchOldOfferStruct item
	 * @return OvhTypeMyArrayOfTelephonyLineSwitchOldOfferStructType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param telephonyLineSwitchOldOfferStruct item
	 * @return telephonyLineSwitchOldOfferStruct
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return OvhTypetelephonyLineSwitchOldOfferStruct
	 */
	public function getItem()
	{
		return $this->item;
	}
	/**
	 * Returns the current element
	 * @see OvhWsdlClass::current()
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function current()
	{
		return parent::current();
	}
	/**
	 * Returns the element
	 * @see OvhWsdlClass::item()
	 * @param int
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function item($_index)
	{
		return parent::item($_index);
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::first()
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function first()
	{
		return parent::first();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::last()
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function last()
	{
		return parent::last();
	}
	/**
	 * Returns the first element
	 * @see OvhWsdlClass::offsetGet()
	 * @param int
	 * @return OvhTypeTelephonyLineSwitchOldOfferStruct
	 */
	public function offsetGet($_offset)
	{
		return parent::offsetGet($_offset);
	}
	/**
	 * Returns the attribute name
	 * @return string 'item'
	 */
	public function getAttributeName()
	{
		return 'item';
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