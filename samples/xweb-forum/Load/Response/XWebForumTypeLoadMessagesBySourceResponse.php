<?php
/**
 * Class file for XWebForumTypeLoadMessagesBySourceResponse
 * @date 09/07/2012
 */
/**
 * Class XWebForumTypeLoadMessagesBySourceResponse
 * @date 09/07/2012
 */
class XWebForumTypeLoadMessagesBySourceResponse extends XWebForumWsdlClass
{
	/**
	 * The Message
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : unbounded
	 * @var XWebForumTypeMessage
	 */
	public $Message;
	/**
	 * Constructor
	 * @param XWebForumTypeMessage Message
	 * @return XWebForumTypeLoadMessagesBySourceResponse
	 */
	public function __construct($_Message = null)
	{
		parent::__construct(array('Message'=>$_Message));
	}
	/**
	 * Set Message
	 * @param Message Message
	 * @return Message
	 */
	public function setMessage($_Message)
	{
		return ($this->Message = $_Message);
	}
	/**
	 * Get Message
	 * @return XWebForumTypeMessage
	 */
	public function getMessage()
	{
		return $this->Message;
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