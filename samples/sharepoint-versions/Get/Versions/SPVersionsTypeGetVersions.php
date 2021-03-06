<?php
/**
 * Class file for SPVersionsTypeGetVersions
 * @date 06/07/2012
 */
/**
 * Class SPVersionsTypeGetVersions
 * @date 06/07/2012
 */
class SPVersionsTypeGetVersions extends SPVersionsWsdlClass
{
	/**
	 * The fileName
	 * @var string
	 */
	public $fileName;
	/**
	 * Constructor
	 * @param string fileName
	 * @return SPVersionsTypeGetVersions
	 */
	public function __construct($_fileName = null)
	{
		parent::__construct(array('fileName'=>$_fileName));
	}
	/**
	 * Set fileName
	 * @param string fileName
	 * @return string
	 */
	public function setFileName($_fileName)
	{
		return ($this->fileName = $_fileName);
	}
	/**
	 * Get fileName
	 * @return string
	 */
	public function getFileName()
	{
		return $this->fileName;
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