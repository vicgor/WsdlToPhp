<?php
/**
 * Class file for AmazonQueueServiceTypeCreateQueueResult
 * @date 10/07/2012
 */
/**
 * Class AmazonQueueServiceTypeCreateQueueResult
 * @date 10/07/2012
 */
class AmazonQueueServiceTypeCreateQueueResult extends AmazonQueueServiceWsdlClass
{
	/**
	 * The QueueUrl
	 * @var anyURI
	 */
	public $QueueUrl;
	/**
	 * Constructor
	 * @param anyURI QueueUrl
	 * @return AmazonQueueServiceTypeCreateQueueResult
	 */
	public function __construct($_QueueUrl = null)
	{
		parent::__construct(array('QueueUrl'=>$_QueueUrl));
	}
	/**
	 * Set QueueUrl
	 * @param anyURI QueueUrl
	 * @return anyURI
	 */
	public function setQueueUrl($_QueueUrl)
	{
		return ($this->QueueUrl = $_QueueUrl);
	}
	/**
	 * Get QueueUrl
	 * @return anyURI
	 */
	public function getQueueUrl()
	{
		return $this->QueueUrl;
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