<?php
/**
 * Class file for SOValidateCanadaTypeValidateCanadianMunicipalityProvince
 * @date 05/07/2012
 */
/**
 * Class SOValidateCanadaTypeValidateCanadianMunicipalityProvince
 * @date 05/07/2012
 */
class SOValidateCanadaTypeValidateCanadianMunicipalityProvince extends SOValidateCanadaWsdlClass
{
	/**
	 * The Municipality
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Municipality;
	/**
	 * The Province
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $Province;
	/**
	 * The PostalCode
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $PostalCode;
	/**
	 * The LicenseKey
	 * Meta informations :
	 * 	- minOccurs : 0
	 * 	- maxOccurs : 1
	 * @var string
	 */
	public $LicenseKey;
	/**
	 * Constructor
	 * @param string Municipality
	 * @param string Province
	 * @param string PostalCode
	 * @param string LicenseKey
	 * @return SOValidateCanadaTypeValidateCanadianMunicipalityProvince
	 */
	public function __construct($_Municipality = null,$_Province = null,$_PostalCode = null,$_LicenseKey = null)
	{
		parent::__construct(array('Municipality'=>$_Municipality,'Province'=>$_Province,'PostalCode'=>$_PostalCode,'LicenseKey'=>$_LicenseKey));
	}
	/**
	 * Set Municipality
	 * @param string Municipality
	 * @return string
	 */
	public function setMunicipality($_Municipality)
	{
		return ($this->Municipality = $_Municipality);
	}
	/**
	 * Get Municipality
	 * @return string
	 */
	public function getMunicipality()
	{
		return $this->Municipality;
	}
	/**
	 * Set Province
	 * @param string Province
	 * @return string
	 */
	public function setProvince($_Province)
	{
		return ($this->Province = $_Province);
	}
	/**
	 * Get Province
	 * @return string
	 */
	public function getProvince()
	{
		return $this->Province;
	}
	/**
	 * Set PostalCode
	 * @param string PostalCode
	 * @return string
	 */
	public function setPostalCode($_PostalCode)
	{
		return ($this->PostalCode = $_PostalCode);
	}
	/**
	 * Get PostalCode
	 * @return string
	 */
	public function getPostalCode()
	{
		return $this->PostalCode;
	}
	/**
	 * Set LicenseKey
	 * @param string LicenseKey
	 * @return string
	 */
	public function setLicenseKey($_LicenseKey)
	{
		return ($this->LicenseKey = $_LicenseKey);
	}
	/**
	 * Get LicenseKey
	 * @return string
	 */
	public function getLicenseKey()
	{
		return $this->LicenseKey;
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