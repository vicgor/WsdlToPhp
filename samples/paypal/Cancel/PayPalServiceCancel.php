<?php
/**
 * Class file for PayPalServiceCancel
 * @date 14/07/2012
 */
/**
 * Class PayPalServiceCancel
 * @date 14/07/2012
 */
class PayPalServiceCancel extends PayPalWsdlClass
{
	/**
	 * Method to call CancelRecoup
	 * @uses PayPalWsdlClass::getSoapClient()
	 * @uses PayPalWsdlClass::setResult()
	 * @uses PayPalWsdlClass::getResult()
	 * @uses PayPalWsdlClass::saveLastError()
	 * @uses PayPalTypeCancelRecoupReq::getCancelRecoupRequest()
	 * @param PayPalTypeCancelRecoupReq CancelRecoupReq
	 * @return PayPalTypeCancelRecoupResponseType
	 */
	public function CancelRecoup(PayPalTypeCancelRecoupReq $_PayPalTypeCancelRecoupReq)
	{
		try
		{
			$this->setResult(self::getSoapClient()->CancelRecoup(array('CancelRecoupRequest'=>$_PayPalTypeCancelRecoupReq->getCancelRecoupRequest())));
		}
		catch(SoapFault $fault)
		{
			return !$this->saveLastError(__METHOD__,$fault);
		}
		return $this->getResult();
	}
	/**
	 * Method returning the result content
	 *
	 * @return PayPalTypeCancelRecoupResponseType
	 */
	public function getResult()
	{
		return parent::getResult();
	}
	/**
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>