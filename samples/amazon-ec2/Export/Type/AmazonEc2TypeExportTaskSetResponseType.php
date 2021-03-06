<?php
/**
 * Class file for AmazonEc2TypeExportTaskSetResponseType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeExportTaskSetResponseType
 * @date 10/07/2012
 */
class AmazonEc2TypeExportTaskSetResponseType extends AmazonEc2WsdlClass
{
	/**
	 * The item
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var AmazonEc2TypeExportTaskResponseType
	 */
	public $item;
	/**
	 * Constructor
	 * @param AmazonEc2TypeExportTaskResponseType item
	 * @return AmazonEc2TypeExportTaskSetResponseType
	 */
	public function __construct($_item = null)
	{
		parent::__construct(array('item'=>$_item));
	}
	/**
	 * Set item
	 * @param ExportTaskResponseType item
	 * @return ExportTaskResponseType
	 */
	public function setItem($_item)
	{
		return ($this->item = $_item);
	}
	/**
	 * Get item
	 * @return AmazonEc2TypeExportTaskResponseType
	 */
	public function getItem()
	{
		return $this->item;
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