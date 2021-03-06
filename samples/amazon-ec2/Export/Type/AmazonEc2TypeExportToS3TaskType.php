<?php
/**
 * Class file for AmazonEc2TypeExportToS3TaskType
 * @date 10/07/2012
 */
/**
 * Class AmazonEc2TypeExportToS3TaskType
 * @date 10/07/2012
 */
class AmazonEc2TypeExportToS3TaskType extends AmazonEc2WsdlClass
{
	/**
	 * The diskImageFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $diskImageFormat;
	/**
	 * The containerFormat
	 * Meta informations :
	 * 	- minOccurs : 0
	 * @var string
	 */
	public $containerFormat;
	/**
	 * The s3Bucket
	 * @var string
	 */
	public $s3Bucket;
	/**
	 * The s3Prefix
	 * @var string
	 */
	public $s3Prefix;
	/**
	 * Constructor
	 * @param string diskImageFormat
	 * @param string containerFormat
	 * @param string s3Bucket
	 * @param string s3Prefix
	 * @return AmazonEc2TypeExportToS3TaskType
	 */
	public function __construct($_diskImageFormat = null,$_containerFormat = null,$_s3Bucket = null,$_s3Prefix = null)
	{
		parent::__construct(array('diskImageFormat'=>$_diskImageFormat,'containerFormat'=>$_containerFormat,'s3Bucket'=>$_s3Bucket,'s3Prefix'=>$_s3Prefix));
	}
	/**
	 * Set diskImageFormat
	 * @param string diskImageFormat
	 * @return string
	 */
	public function setDiskImageFormat($_diskImageFormat)
	{
		return ($this->diskImageFormat = $_diskImageFormat);
	}
	/**
	 * Get diskImageFormat
	 * @return string
	 */
	public function getDiskImageFormat()
	{
		return $this->diskImageFormat;
	}
	/**
	 * Set containerFormat
	 * @param string containerFormat
	 * @return string
	 */
	public function setContainerFormat($_containerFormat)
	{
		return ($this->containerFormat = $_containerFormat);
	}
	/**
	 * Get containerFormat
	 * @return string
	 */
	public function getContainerFormat()
	{
		return $this->containerFormat;
	}
	/**
	 * Set s3Bucket
	 * @param string s3Bucket
	 * @return string
	 */
	public function setS3Bucket($_s3Bucket)
	{
		return ($this->s3Bucket = $_s3Bucket);
	}
	/**
	 * Get s3Bucket
	 * @return string
	 */
	public function getS3Bucket()
	{
		return $this->s3Bucket;
	}
	/**
	 * Set s3Prefix
	 * @param string s3Prefix
	 * @return string
	 */
	public function setS3Prefix($_s3Prefix)
	{
		return ($this->s3Prefix = $_s3Prefix);
	}
	/**
	 * Get s3Prefix
	 * @return string
	 */
	public function getS3Prefix()
	{
		return $this->s3Prefix;
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