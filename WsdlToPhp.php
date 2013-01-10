<?php
/**
 * File for class WsdlToPhp
 * @package WsdlToPhp
 * @deprecated In favor to WsdlToPhpGenerator file
 * @date 25/06/2012
 */
/**
 * Class WsdlToPhp
 * @package WsdlToPhp
 * @deprecated In favor to WsdlToPhpGenerator class
 * @date 25/06/2012
 */
class WsdlToPhp extends SoapClient
{
	/**
	 * Set categorization of classes based on the end of the name of the struct or the function
	 * The category set the tree folders
	 * @var int
	 */
	const OPT_CAT_END_NAME = 0;
	/**
	 * Set categorization of classes based on the start of the name of the struct or the function
	 * The category set the tree folders
	 * @var int
	 */
	const OPT_CAT_START_NAME = 1;
	/**
	 * Set uncategorization of classes
	 * All files are put in the same folder
	 * @var int
	 */
	const OPT_CAT_NONE_NAME = 2;
	/**
	 * Index to set categorization when calling the constructor
	 * @var string
	 */
	const OPT_CAT_KEY = 'option_category_key';
	/**
	 * Set subcategorization of classes based on the end of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_SUB_CAT_END_NAME = 0;
	/**
	 * Set subcategorization of classes based on the start of the name of the struct or the function
	 * The catagory set the tree folders
	 * @var int
	 */
	const OPT_SUB_CAT_START_NAME = 1;
	/**
	 * Set uncategorization of classes
	 * All files are put in the same folder
	 * @var int
	 */
	const OPT_SUB_CAT_NONE_NAME = 2;
	/**
	 * Index to set subcategorization when calling the constructor
	 * @var string
	 */
	const OPT_SUB_CAT_KEY = 'option_sub_category_key';
	/**
	 * Set gathering mode of mtehod per class based on the end of the name of the operation
	 * @var int
	 */
	const OPT_GATH_METH_END_NAME = 0;
	/**
	 * Set gathering mode of mtehod per class based on the start of the name of the operation
	 * @var int
	 */
	const OPT_GATH_METH_START_NAME = 1;
	/**
	 * Index to set gathering methods when calling the constructor
	 * @var string
	 */
	const OPT_GATH_METH_KEY = 'option_gather_methods_key';
	/**
	 * Index to set gathering methods when calling the constructor
	 * @var string
	 */
	const OPT_SEND_PARAM_AS_ARRAY_KEY = 'option_send_param_as_array_key';
	/**
	 * Index to enable/disable autoload file generation
	 * @var string
	 */
	const OPT_GEN_AUTOLOAD_KEY = 'option_generate_autaload_file_key';
	/**
	 * Index to enable/disable autoload file generation
	 * @var string
	 */
	const OPT_GEN_WSDL_CLASS_KEY = 'option_generate_wsdl_class_key';
	/**
	 * Index to enable/disable encapsulation of response or not in the response object
	 * @var string
	 */
	const OPT_RESPONSE_AS_WSDL_OBJECT_KEY = 'option_response_as_wsdl_object_key';
	/**
	 * Index to enable/disable encapsulation of request in array with 'parameters' as main index
	 * @var string
	 */
	const OPT_SEND_PARAMETERS_AS_ARRAY_KEY = 'option_send_parameters_as_array_key';
	/**
	 * Index to set string that points bases classes from which some classes inherits
	 * @var string
	 */
	const OPT_INHERITS_FROM_IDENTIFIER_KEY = 'option_inherits_from_identifier_key';
	/**
	 * Index to set the generation of contants names based on the enumeration name with an incremental value
	 * @var string
	 */
	const OPT_GENERIC_CONSTANTS_NAMES_KEY = 'option_generic_constants_names_key';
	/**
	 * Index to enable/disable tutorial file generation
	 * @var string
	 */
	const OPT_GEN_TUTORIAL_KEY = 'option_generate_tutorial_file_key';
	/**
	 * Structs array
	 * @var array
	 */
	private $structs;
	/**
	 * Functions arrays
	 * @var array
	 */
	private $functions;
	/**
	 * Wsdl lists
	 * @var array
	 */
	private $wsdls;
	/**
	 * Option to categorize classes
	 * @var int
	 */
	private $optionCategory;
	/**
	 * Option to subcategorize classes
	 * @var int
	 */
	private $optionSubCategory;
	/**
	 * Option to define how to gather methods by classes
	 * @var int
	 */
	private $optionGatherMethods;
	/**
	 * Option to set that parameters to soap call must be contained by an array where indexex are the parameters name
	 * @var bool
	 */
	private $optionSendArrayAsParameter;
	/**
	 * Option to enabled/disable autoload file generation
	 * @var bool
	 */
	private $optionGenerateAutoloadFile;
	/**
	 * Option to enabled/disable wsdl class file generation
	 * @var bool
	 */
	private $optionGenerateWsdlClassFile;
	/**
	 * Option to enable/disable encapsulation of response or not in the response class
	 * @var bool
	 */
	private $optionResponseAsWsdlObject;
	/**
	 * Option to enable/disable encapsulation of request in array with 'parameters' as main index
	 * @var bool
	 */
	private $optionSendParametersAsArray;
	/**
	 * Option to set string that points bases classes from which some classes inherits
	 * @var string
	 */
	private $optionInheritsClassIdentifier;
	/**
	 * Option to set set the generation of contants names based on the enumeration name with an incremental value
	 * @var string
	 */
	private $optionGenericConstantsNames;
	/**
	 * Option to enabled/disable tutorial file generation
	 * @var bool
	 */
	private $optionGenerateTutorialFile;
	/**
	 * Constructor
	 * @uses SoapClient::__construct()
	 * @uses WsdlToPhp::setStructs()
	 * @uses WsdlToPhp::setFunctions()
	 * @uses WsdlToPhp::setWsdls()
	 * @uses WsdlToPhp::addWsdl()
	 * @uses WsdlToPhp::setOptionCategory()
	 * @uses WsdlToPhp::setOptionGenerateAutoloadFile()
	 * @uses WsdlToPhp::setOptionGenerateTutorialFile()
	 * @uses WsdlToPhp::setOptionSubCategory()
	 * @uses WsdlToPhp::setOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhp::setOptionGatherMethods()
	 * @uses WsdlToPhp::setOptionSendArrayAsParameter()
	 * @uses WsdlToPhp::setOptionResponseAsWsdlObject()
	 * @uses WsdlToPhp::setOptionGenericConstantsNames()
	 * @uses WsdlToPhp::setOptionInheritsClassIdentifier()
	 * @uses WsdlToPhp::setOptionSendParametersAsArray()
	 * @uses WsdlToPhp::OPT_CAT_KEY
	 * @uses WsdlToPhp::OPT_CAT_START_NAME
	 * @uses WsdlToPhp::OPT_GEN_AUTOLOAD_KEY
	 * @uses WsdlToPhp::OPT_GEN_TUTORIAL_KEY
	 * @uses WsdlToPhp::OPT_SUB_CAT_KEY
	 * @uses WsdlToPhp::OPT_SUB_CAT_START_NAME
	 * @uses WsdlToPhp::OPT_GEN_WSDL_CLASS_KEY
	 * @uses WsdlToPhp::OPT_GATH_METH_KEY
	 * @uses WsdlToPhp::OPT_GATH_METH_START_NAME
	 * @uses WsdlToPhp::OPT_SEND_PARAM_AS_ARRAY_KEY
	 * @uses WsdlToPhp::OPT_RESPONSE_AS_WSDL_OBJECT_KEY
	 * @uses WsdlToPhp::OPT_GENERIC_CONSTANTS_NAMES_KEY
	 * @uses WsdlToPhp::OPT_INHERITS_FROM_IDENTIFIER_KEY
	 * @uses WsdlToPhp::OPT_SEND_PARAMETERS_AS_ARRAY_KEY
	 * @param string $_pathToWsdl WSDL url or path
	 * @param string $_login login to get access to WSDL
	 * @param string $_password password to get access to WSDL
	 * @param array $_options associative array between WsdlToPhp options keys and values
	 * @param array $_wsdlOptions options to get access to WSDL
	 * @return WsdlToPhp
	 */
	public function __construct($_pathToWsdl,$_login = false,$_password = false,array $_options = array(),array $_wsdlOptions = array())
	{
		$pathToWsdl = trim($_pathToWsdl);
		/**
		 * Options for WSDL
		 */
		$options = $_wsdlOptions;
		$options['trace'] = true;
		$options['exceptions'] = true;
		$options['cache_wsdl'] = WSDL_CACHE_NONE;
		if(!empty($_login) && !empty($_password))
		{
			$options['login'] = $_login;
			$options['password'] = $_password;
		}
		$this->setStructs(array());
		$this->setFunctions(array());
		$this->setWsdls(array());
		/**
		 * Construct
		 */
		try
		{
			parent::__construct($pathToWsdl,$options);
		}
		catch(SoapFault $fault)
		{
			print_r($fault);
		}
		$this->addWsdl($pathToWsdl);
		/**
		 * Set attributes
		 */
		$this->setOptionCategory(array_key_exists(self::OPT_CAT_KEY,$_options)?$_options[self::OPT_CAT_KEY]:self::OPT_CAT_START_NAME);
		$this->setOptionGenerateAutoloadFile(array_key_exists(self::OPT_GEN_AUTOLOAD_KEY,$_options)?$_options[self::OPT_GEN_AUTOLOAD_KEY]:false);
		$this->setOptionGenerateTutorialFile(array_key_exists(self::OPT_GEN_TUTORIAL_KEY,$_options)?$_options[self::OPT_GEN_TUTORIAL_KEY]:false);
		$this->setOptionSubCategory(array_key_exists(self::OPT_SUB_CAT_KEY,$_options)?$_options[self::OPT_SUB_CAT_KEY]:self::OPT_SUB_CAT_START_NAME);
		$this->setOptionGenerateWsdlClassFile(array_key_exists(self::OPT_GEN_WSDL_CLASS_KEY,$_options)?$_options[self::OPT_GEN_WSDL_CLASS_KEY]:false);
		$this->setOptionGatherMethods(array_key_exists(self::OPT_GATH_METH_KEY,$_options)?$_options[self::OPT_GATH_METH_KEY]:self::OPT_GATH_METH_START_NAME);
		$this->setOptionSendArrayAsParameter(array_key_exists(self::OPT_SEND_PARAM_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAM_AS_ARRAY_KEY]:false);
		$this->setOptionResponseAsWsdlObject(array_key_exists(self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY,$_options)?$_options[self::OPT_RESPONSE_AS_WSDL_OBJECT_KEY]:false);
		$this->setOptionGenericConstantsNames(array_key_exists(self::OPT_GENERIC_CONSTANTS_NAMES_KEY,$_options)?$_options[self::OPT_GENERIC_CONSTANTS_NAMES_KEY]:false);
		$this->setOptionInheritsClassIdentifier(array_key_exists(self::OPT_INHERITS_FROM_IDENTIFIER_KEY,$_options)?$_options[self::OPT_INHERITS_FROM_IDENTIFIER_KEY]:'');
		$this->setOptionSendParametersAsArray(array_key_exists(self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY,$_options)?$_options[self::OPT_SEND_PARAMETERS_AS_ARRAY_KEY]:false);
	}
	/**
	 * Generate all classes based on options
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::initStructs()
	 * @uses WsdlToPhp::getFunctions()
	 * @uses WsdlToPhp::initFunctions()
	 * @uses WsdlToPhp::loadWsdls()
	 * @uses WsdlToPhp::getOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhp::generateWsdlClassFile()
	 * @uses WsdlToPhp::setOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhp::generateStructsClasses()
	 * @uses WsdlToPhp::generateFunctionsClasses()
	 * @uses WsdlToPhp::generateClassMap()
	 * @uses WsdlToPhp::getOptionGenerateAutoloadFile()
	 * @uses WsdlToPhp::generateAutoloadFile()
	 * @uses WsdlToPhp::getOptionGenerateTutorialFile()
	 * @uses WsdlToPhp::generateTutorialFile()
	 * @param string $_packageName the string used to prefix all generate classes
	 * @param string $_rootDirectory path where classes should be generated
	 * @param int $_rootDirectoryRights system rights to apply on folder
	 * @param bool $_createRootDirectory create root directory if not exist
	 * @return bool true|false depending on the well creation fot the root directory
	 */
	public function generateClasses($_packageName,$_rootDirectory,$_rootDirectoryRights = 0775,$_createRootDirectory = true)
	{
		$rootDirectory = $_rootDirectory . (substr($_rootDirectory,-1) != '/'?'/':'');
		/**
		 * Root directory
		 */
		if(!is_dir($rootDirectory) && !$_createRootDirectory)
			return false;
		elseif($_createRootDirectory)
			@mkdir($rootDirectory,$_rootDirectoryRights);
		/**
		 * Begin process
		 */
		if(is_dir($rootDirectory))
		{
			/**
			 * Initialize elements
			 */
			$init = false;
			if(!count($this->getStructs()))
				$this->initStructs();
			else
				$init = true;
			if(!count($this->getFunctions()))
				$this->initFunctions();
			if(!$init && count($this->wsdls))
				$this->loadWsdls(implode('',array_slice(array_keys($this->wsdls),0,1)));
			/**
			 * Generate Wsdl Class ?
			 */
			if($this->getOptionGenerateWsdlClassFile())
				$wsdlClassFile = $this->generateWsdlClassFile($_packageName,$rootDirectory,$_rootDirectoryRights);
			else
				$wsdlClassFile = array();
			if(!count($wsdlClassFile))
				$this->setOptionGenerateWsdlClassFile(false);
			/**
			 * Generate classes files
			 */
			$structsClassesFiles = $this->generateStructsClasses($_packageName,$rootDirectory,$_rootDirectoryRights);
			$functionsClassesFiles = $this->generateFunctionsClasses($_packageName,$rootDirectory,$_rootDirectoryRights);
			$classMapFile = $this->generateClassMap($_packageName,$rootDirectory,$_rootDirectoryRights);
			/**
			 * Generate autoload ?
			 */
			if($this->getOptionGenerateAutoloadFile())
				$this->generateAutoloadFile($_packageName,$rootDirectory,$_rootDirectoryRights,array_merge($wsdlClassFile,$structsClassesFiles,$functionsClassesFiles,$classMapFile));
			/**
			 * Generate tutorial ?
			 */
			if($this->getOptionGenerateTutorialFile())
				$this->generateTutorialFile($_packageName,$rootDirectory,$_rootDirectoryRights,$functionsClassesFiles);
			return true;
		}
		else
			return false;
	}
	/**
	 * Initialize structs defined in WSDL :
	 * - Get structs defined
	 * - Parse each struct definition
	 * - Analyze each struct paramaters
	 * @uses SoapClient::__getTypes()
	 * @uses WsdlToPhp::addStruct()
	 * @uses WsdlToPhp::cleanName()
	 * @tutorial restriction aren't get with structs, see loadWsdls :
	 * <xsd:simpleType name="SearchOption">
	 * --<xsd:restriction base="xsd:string">
	 * ----<xsd:enumeration value="DisableLocationDetection"/>
	 * ----<xsd:enumeration value="EnableHighlighting"/>
	 * --</xsd:restriction>
	 * </xsd:simpleType>
	 * Example on how to send them : http://msdn.microsoft.com/en-us/library/dd250961
	 * @return bool true|false depending on the well types catching from the WSDL
	 */
	private function initStructs()
	{
		$types = $this->__getTypes();
		if(is_array($types) && count($types))
		{
			$structsDefined = array();
			$structsParams = array();
			foreach($types as $type)
			{
				/**
				 * Remove useless break line, tabs
				 */
				$type = str_replace("\r",'',$type);
				$type = str_replace("\n",'',$type);
				$type = str_replace("\t",'',$type);
				/**
				 * Remove curly braces
				 */
				$type = str_replace("{",'',$type);
				$type = str_replace("}",'',$type);
				/**
				 * Remove brackets
				 */
				$type = str_replace("[",'',$type);
				$type = str_replace("]",'',$type);
				/**
				 * Add space to parse it
				 */
				$type = str_replace(';',' ;',$type);
				/**
				 * Remove duplicate spaces
				 */
				$type = preg_replace('/[\s]+/',' ',$type);
				/**
				 * Explode definition base on format :
				 * struct {struct_name} {paramName} {paramValue} ;[{paramName} {paramValue} ;]+
				 */
				$typeDef = explode(' ',$type);
				/**
				 * Get struct definition start
				 */
				$struct = $typeDef[0];
				if($struct != 'struct' && !array_key_exists(self::cleanName($struct),$this->getStructs()))
					continue;
				/**
				 * Replace some uppercase words in struct name
				 */
				$structName = $typeDef[1];
				/**
				 * Struct already known ?
				 */
				if(in_array($structName,$structsDefined))
					continue;
				/**
				 * Collect struct params
				 */
				$start = false;
				$then = false;
				$end = false;
				$structParamName = '';
				$structParamType = '';
				$typeDefCount = count($typeDef);
				if($typeDefCount > 3)
				{
					for($i = 2;$i < $typeDefCount;$i++)
					{
						$typeVal = $typeDef[$i];
						if($typeVal != '{' && is_string($typeVal) && !empty($typeVal) && !$start)
						{
							$end = false;
							$then = false;
							$start = true;
						}
						if($typeVal === ';')
						{
							$end = true;
							$then = false;
							$start = false;
						}
						if($then)
						{
							$structParamName = $typeVal;
							if(!empty($structParamType) && !empty($structParamName) && !empty($structName))
							{
								$this->addStruct($structParamType,$structParamName,$structName);
								$structsDefined[] = $structName;
								$structParamName = '';
								$structParamType = '';
							}
						}
						if($start && !$then)
						{
							/**
							 * Replace some weird definition to known valid type
							 */
							$typeVal = str_replace('<anyXML>','DOMDocument',$typeVal);
							$structParamType = $typeVal;
							$then = true;
						}
					}
				}
				else
					$this->addStruct($structParamType,$structParamName,$structName);
			}
			return true;
		}
		else
			return false;
	}
	/**
	 * Generate structs classes based on structs collected
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::getDirectory()
	 * @uses WsdlToPhp::getOptionInheritsClassIdentifier()
	 * @uses WsdlToPhp::getOptionCategory()
	 * @uses WsdlToPhp::setOptionCategory()
	 * @uses WsdlToPhp::cleanClassName()
	 * @uses WsdlToPhp::cleanPropertyName()
	 * @uses WsdlToPhp::getOptionGenericConstantsNames()
	 * @uses WsdlToPhp::cleanConstantName()
	 * @uses WsdlToPhp::structIsKnown()
	 * @uses WsdlToPhp::structName()
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 */
	private function generateStructsClasses($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$structs = $this->getStructs();
		$structsClassesFiles = array();
		if(count($structs))
		{
			$ClassType = ucfirst($_packageName);
			$classType = $_packageName;
			/**
			 * Ordering structs in order to generate mother class first and to put them on top in the autoload file
			 */
			$structsToGenerateDone = array();
			foreach($structs as $structName=>$structParams)
			{
				if(!array_key_exists($structName,$structsToGenerateDone))
					$structsToGenerateDone[$structName] = 0;
				if(is_array($structParams) && array_key_exists('inherits',$structParams) && !empty($structParams['inherits']) && array_key_exists($structParams['inherits'],$structs))
				{
					$inherits = $structParams['inherits'];
					while(!empty($inherits) && array_key_exists($inherits,$structs))
					{
						if(!array_key_exists($inherits,$structsToGenerateDone))
							$structsToGenerateDone[$inherits] = 1;
						else
							$structsToGenerateDone[$inherits]++;
						$inherits = (array_key_exists($inherits,$structs) && is_array($structs[$inherits]) && array_key_exists('inherits',$structs[$inherits]))?$structs[$inherits]['inherits']:'';
					}
				}
			}
			/**
			 * Order by priority desc
			 */
			arsort($structsToGenerateDone);
			$structTmp = $structs;
			$structs = array();
			foreach($structsToGenerateDone as $structName=>$structPriority)
				$structs[$structName] = $structTmp[$structName];
			unset($structTmp);
			unset($structsToGenerateDone);
			foreach($structs as $structName=>$structParams)
			{
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$structName);
				/**
				 * Extends class name
				 */
				$extend = '';
				$inherits = false;
				if($this->getOptionInheritsClassIdentifier() != '')
				{
					$currentOptionValue = $this->getOptionCategory();
					$this->setOptionCategory(self::OPT_CAT_END_NAME);
					$structType = $this->getPart($structName,self::OPT_CAT_KEY);
					if(self::structIsKnown($structType . $this->getOptionInheritsClassIdentifier()))
					{
						$extend = self::structName($structType . $this->getOptionInheritsClassIdentifier(),$_packageName,true);
						$inherits = true;
					}
					$this->setOptionCategory($currentOptionValue);
				}
				elseif(array_key_exists('inherits',$structParams) && self::structIsKnown($structParams['inherits']))
				{
					$extend = self::structName($structParams['inherits'],$_packageName,true);
					$inherits = true;
					unset($structParams['inherits']);
				}
				if(empty($extend) && $this->getOptionGenerateWsdlClassFile())
					$extend = $ClassType . 'WsdlClass';
				/**
				 * Class definition
				 */
				$className = self::structName($structName,$_packageName);
				$classMap[$structName] = $className;
				/**
				 * Define struct class file name and initialize struct class generator
				 */
				$documentation = '';
				if(array_key_exists('documentation',$structParams))
				{
					$documentation = "\r\n * Documentation : " . $structParams['documentation'];
					unset($structParams['documentation']);
				}
				$structsClassesFiles[] = $structClassFileName = $elementFolder . $className . '.php';
				$php = new ezcPhpGenerator($structClassFileName,true,true);
				$php->indentString = "	";
				$php->appendCustomCode("/**\r\n * Class file for $className\r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * Class $className$documentation\r\n * @date " . date('d/m/Y') . "\r\n */");
				$php->appendCustomCode("class $className" . (!empty($extend)?' extends ' . self::cleanClassName($extend):''));
				$php->appendCustomCode("{");
				/**
				 * Attributes
				 */
				$php->indentLevel++;
				$parameters = array();
				$parametersString = "";
				$usesString = "";
				$isRestriction = false;
				$parametersList = array();
				$parametersForParent = array();
				$parametersType = array();
				if(count($structParams))
				{
					foreach($structParams as $elementIndex=>$element)
					{
						/**
						 * Current index is not valid
						 */
						if(!is_numeric($elementIndex))
							continue;
						/**
						 * Get informations and sanitize them
						 */
						$type = $element['type'];
						$Type = self::structName($type,$_packageName);
						$name = $element['name'];
						$cleanName = self::cleanPropertyName($name);
						$meta = $element['meta'];
						$isRestriction = (array_key_exists('isRestriction',$element) && $element['isRestriction'] == true);
						/**
						 * Is it's not a restriction, aka an enumeration in mot case, we generate the attributes
						 */
						if(!$isRestriction)
						{
							/**
							 * List of attributes for which we generate setters, getters, general methods
							 */
							$parameters[] = array(
												'type'=>$type,
												'name'=>$name);
							/**
							 * Is this attribute a know type ?
							 */
							$parametersString .= "\r\n * @param " . (self::structIsKnown($type)?$Type:$type) . ' $_' . lcfirst($cleanName) . " $name";
							/**
							 * Uses documentation part
							 */
							$usesString .= "\r\n * @uses $className::set" . ucfirst($cleanName) . "()";
							/**
							 * Parameters used for methods assigned to classes matching ArrayOf
							 */
							$parametersType[] = $Type;
							/**
							 * Attribute has a default value ? then use it
							 */
							if(array_key_exists('default',$meta))
							{
								$defaultValue = $meta['default'];
								if(is_numeric($defaultValue))
									$defaultValue = floatval($defaultValue);
								elseif(is_bool($defaultValue) || $defaultValue === 'true' || $defaultValue === 'false')
									$defaultValue = ($defaultValue === true || $defaultValue == 'true')?true:false;
								$parametersList[] = '$_' . lcfirst($cleanName) . ' = ' . var_export($defaultValue,true);
							}
							/**
							 * Attribute is required, then the value si required ! 
							 */
							elseif((array_key_exists('minOccurs',$meta) && $meta['minOccurs'] >= 1) || (array_key_exists('minoccurs',$meta) && $meta['minoccurs'] >= 1))
								$parametersList[] = '$_' . lcfirst($cleanName);
							/**
							 * Default value assignement
							 */
							else
								$parametersList[] = '$_' . lcfirst($cleanName) . ' = null';
							/**
							 * If attribute is type of ArrayOf, then we assign the returned value to the ArrayOf class
							 */
							if(strpos($type,'ArrayOf') !== false && self::structIsKnown($type))
								$parametersForParent[] = "'$cleanName'=>new $Type(" . '$_' . lcfirst($cleanName) . ")";
							else
								$parametersForParent[] = "'$cleanName'=>\$_" . lcfirst($cleanName);
							/**
							 * Informations extracted from the XML/WSDL tag attributes of the current attribute
							 */
							$metas = array();
							foreach($meta as $metaName=>$metaValue)
								$metas[] = "\t- " . $metaName . ' : ' . $metaValue;
							if(count($metas))
								array_unshift($metas,"\r\n * " . 'Meta informations :');
							$php->appendCustomCode("/**\r\n * The $name" . implode("\r\n * ",$metas) . "\r\n * @var " . (self::structIsKnown($type)?$Type:$type) . "\r\n */");
							$php->appendCustomCode("public \$$cleanName;");
						}
					}
				}
				/**
				 * Restriction class, set constant and values allowed
				 */
				if($isRestriction && array_key_exists('values',$element) && count($element['values']))
				{
					$valuesDone = array();
					$inArray = array();
					$constantsUsed = "";
					$valuesCount = count($element['values']);
					$valuesCountLength = strlen($valuesCount);
					foreach($element['values'] as $index=>$value)
					{
						$meta = '';
						if(array_key_exists($value,$element['meta']))
						{
							foreach($element['meta'][$value] as $metaName=>$metaValue)
								$meta = "\r\n * \t- $metaName : $metaValue";
						}
						$meta = !empty($meta)?"\r\n * " . 'Meta informations :' . $meta:$meta;
						$php->appendCustomCode("/**\r\n * Constant for value " . var_export($value,true) . "$meta\r\n * @return " . gettype($value) . " " . var_export($value,true) . "\r\n */");
						/**
						 * Generic name avoiding naming problems from custom values
						 */
						if($this->getOptionGenericConstantsNames())
							$constantValueName = 'ENUM_VALUE_' . str_repeat('0',$valuesCountLength - strlen($index)) . $index;
						/**
						 * Constant name based on the value contained by the constant
						 */
						else
						{
							/**
							 * Avoid multiple constant with same name for different case value
							 */
							$cleanValueName = self::cleanConstantName($value);
							$constantValueName = strtoupper($cleanValueName);
							if(!array_key_exists($constantValueName,$valuesDone))
								$valuesDone[$constantValueName] = 0;
							else
								$valuesDone[$constantValueName]++;
							$constantValueName .= ((array_key_exists($constantValueName,$valuesDone) && $valuesDone[$constantValueName])?'_' . $valuesDone[$constantValueName]:'');
							$constantValueName = 'VALUE_' . $constantValueName;
						}
						$inArray[] = "self::$constantValueName";
						$constantsUsed .= "\r\n * @uses $className" . "::$constantValueName";
						$php->appendCustomCode('const ' . $constantValueName . ' = ' . var_export($value,true) . ';');
					}
				}
				/**
				 * Constructor
				 */
				$php->appendCustomCode("/**\r\n * Constructor$parametersString\r\n * @return $className\r\n */");
				$php->appendCustomCode("public function __construct(" . implode(',',$parametersList) . ")");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode(($inherits && $this->getOptionGenerateWsdlClassFile()?$ClassType . 'WsdlClass':'parent') . "::__construct(array(" . implode(',',$parametersForParent) . "));");
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * Add method per attributes
				 */
				if(count($parameters))
				{
					foreach($parameters as $parameter)
					{
						$cleanParameter = self::cleanPropertyName($parameter['name']);
						$cleanType = self::structName($parameter['type'],$_packageName);
						/**
						 * Set
						 */
						$php->appendCustomCode("/**\r\n * Set " . $cleanParameter . "\r\n * @param $cleanType \$_" . lcfirst($cleanParameter) . " $cleanParameter\r\n * @return " . $cleanType . "\r\n */");
						$php->appendCustomCode("public function set" . ucfirst($cleanParameter) . "(\$_" . lcfirst($cleanParameter) . ")");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						if(strpos($className,'ArrayOf') === false && array_key_exists($parameter['type'],$this->getStructs()) && array_key_exists(0,$this->structs[$parameter['type']]) && array_key_exists('isRestriction',$this->structs[$parameter['type']][0]) && $this->structs[$parameter['type']][0]['isRestriction'] == true && array_key_exists('values',$this->structs[$parameter['type']][0]) && count($this->structs[$parameter['type']][0]['values']))
							$php->appendCustomCode('return ($this->' . $cleanParameter . ' = ' . $cleanType . '::valueIsValid($_' . lcfirst($cleanParameter) . ')?$_' . lcfirst($cleanParameter) . ':null);');
						else
							$php->appendCustomCode("return (\$this->" . $cleanParameter . ' = $_' . lcfirst($cleanParameter) . ');');
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * Get
						 */
						$php->appendCustomCode("/**\r\n * Get " . $cleanParameter . "\r\n * @return $cleanType\r\n */");
						$php->appendCustomCode("public function get" . ucfirst($cleanParameter) . "()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						if(strpos($parameter['type'],'XML') !== false || strpos($parameter['type'],'DOMDocument') !== false)
						{
							$php->appendCustomCode("if(!(\$this->" . $cleanParameter . " instanceof DOMDocument))");
							$php->appendCustomCode("{");
							$php->indentLevel++;
							$php->appendCustomCode("\$dom = new DOMDocument('1.0','UTF-8');");
							$php->appendCustomCode("\$dom->formatOutput = true;");
							$php->appendCustomCode("\$dom->loadXML(\$this->" . $cleanParameter . ");");
							$php->appendCustomCode("\$this->set" . ucfirst($cleanParameter) . "(\$dom);");
							$php->indentLevel--;
							$php->appendCustomCode("}");
						}
						$php->appendCustomCode("return \$this->" . $cleanParameter . ';');
						$php->indentLevel--;
						$php->appendCustomCode("}");
					}
					/**
					 * Add specifics methods for classes like "*ArrayOf*" in order to give type to value returned by specifics methods
					 */
					if(strpos($className,'ArrayOf') !== false && count($parametersType) == 1)
					{
						/**
						 * current method
						 */
						$php->appendCustomCode("/**\r\n * Returns the current element\r\n * @see " . $ClassType . "WsdlClass::current()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function current()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::current();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * item method
						 */
						$php->appendCustomCode("/**\r\n * Returns the element\r\n * @see " . $ClassType . "WsdlClass::item()\r\n * @param int \$_index\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function item(\$_index)");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::item(\$_index);");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * first method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::first()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function first()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::first();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * last method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::last()\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function last()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::last();");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * offsetGet method
						 */
						$php->appendCustomCode("/**\r\n * Returns the first element\r\n * @see " . $ClassType . "WsdlClass::offsetGet()\r\n * @param int \$_offset\r\n * @return " . $parametersType[0] . "\r\n */");
						$php->appendCustomCode("public function offsetGet(\$_offset)");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return parent::offsetGet(\$_offset);");
						$php->indentLevel--;
						$php->appendCustomCode("}");
						/**
						 * Add method
						 */
						if(is_array($parameter) && array_key_exists($parameter['type'],$this->getStructs()) && is_array($this->structs[$parameter['type']]) && count($this->structs[$parameter['type']]) && array_key_exists(0,$this->structs[$parameter['type']]) && array_key_exists('isRestriction',$this->structs[$parameter['type']][0]) && $this->structs[$parameter['type']][0]['isRestriction'] == true && array_key_exists('values',$this->structs[$parameter['type']][0]) && count($this->structs[$parameter['type']][0]['values']))
						{
							$php->appendCustomCode("/**\r\n * Add element to array\r\n * @see " . $ClassType . "WsdlClass::add()\r\n * @uses " . $cleanType . "::valueIsValid()\r\n * @param " . $parametersType[0] . " \$_item\r\n * @return bool true|false\r\n */");
							$php->appendCustomCode("public function add(\$_item)");
							$php->appendCustomCode("{");
							$php->indentLevel++;
							$php->appendCustomCode("return " . $cleanType . '::valueIsValid($_item)?parent::add($_item):false;');
							$php->indentLevel--;
							$php->appendCustomCode("}");
						}
						/**
						 * Return alone attribute name
						 */
						$php->appendCustomCode("/**\r\n * Returns the attribute name\r\n * @return string '$cleanParameter'\r\n */");
						$php->appendCustomCode("public function getAttributeName()");
						$php->appendCustomCode("{");
						$php->indentLevel++;
						$php->appendCustomCode("return '" . str_replace($ClassType . 'Type','',$cleanParameter) . "';");
						$php->indentLevel--;
						$php->appendCustomCode("}");
					}
				}
				/**
				 * Restriction class, set constant and values allowed
				 */
				if($isRestriction && array_key_exists('values',$element) && count($element['values']))
				{
					/**
					 * Return true if value is allowed
					 */
					$php->appendCustomCode("/**\r\n * Return true if value is allowed$constantsUsed\r\n * @param mixed \$_value value\r\n * @return bool true|false\r\n */");
					$php->appendCustomCode("public static function valueIsValid(\$_value)");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("return in_array(\$_value,array(" . implode(',',$inArray) . "));");
					$php->indentLevel--;
					$php->appendCustomCode("}");
				}
				/**
				 * Class name
				 */
				$php->appendCustomCode("/**\r\n * Method returning the class name\r\n * @return string __CLASS__\r\n */");
				$php->appendCustomCode("public function __toString()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return __CLASS__;');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				$php->indentLevel--;
				/**
				 * End
				 */
				$php->appendCustomCode("}");
				$php->finish();
			}
		}
		return $structsClassesFiles;
	}
	/**
	 * Initialize functions :
	 * - Get structs defined
	 * - Parse each struct definition
	 * @uses SoapClient::__getFunctions()
	 * @uses WsdlToPhp::addFunction()
	 * @return bool true|false depending on the well functions catching from the WSDL
	 */
	private function initFunctions()
	{
		$functions = $this->__getFunctions();
		if(is_array($functions) && count($functions))
		{
			foreach($functions as $function)
			{
				$infos = array();
				preg_match('/([A-Za-z\d_]+) ([A-Za-z\d_]+)\(([A-Za-z\d_]+) \$.+\)/',$function,$infos);
				if(count($infos) == 4)
					$this->addFunction($infos[2],$infos[3],$infos[1]);
			}
			return true;
		}
		else
			return false;
	}
	/**
	 * Generate methods by class
	 * @uses WsdlToPhp::getFunctions()
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::getDirectory()
	 * @uses WsdlToPhp::getOptionGenerateWsdlClassFile()
	 * @uses WsdlToPhp::getOptionSendArrayAsParameter()
	 * @uses WsdlToPhp::getOptionSendParametersAsArray()
	 * @uses WsdlToPhp::getOptionResponseAsWsdlObject()
	 * @uses WsdlToPhp::getOptionGenericConstantsNames()
	 * @uses WsdlToPhp::cleanClassName()
	 * @uses WsdlToPhp::structIsKnown()
	 * @uses WsdlToPhp::structName()
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 * @return array the absolute paths to the generated files
	 */
	private function generateFunctionsClasses($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$functions = $this->getFunctions();
		$functionsClassesFiles = array();
		if(count($functions))
		{
			$PackageName = ucfirst($_packageName);
			$structs = $this->getStructs();
			foreach($functions as $className=>$methods)
			{
				$elementFolder = $this->getDirectory($_rootDirectory,$_rootDirectoryRights,$className);
				$ClassName = $PackageName . 'Service' . ucfirst(self::cleanClassName($className));
				$functionsClassesFiles[] = $functionClassFileName = $elementFolder . $ClassName . '.php';
				$php = new ezcPhpGenerator($functionClassFileName,true,true);
				$php->indentString = "	";
				/**
				 * Start
				 */
				if($this->getOptionGenerateWsdlClassFile())
					$extend = $PackageName . 'WsdlClass';
				else
					$extend = '';
				$php->appendCustomCode("/**\r\n * Class file for $ClassName\r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * Class $ClassName\r\n * @date " . date('d/m/Y') . "\r\n */");
				$php->appendCustomCode("class $ClassName" . (empty($extend)?'':' extends ' . $extend));
				$php->appendCustomCode("{");
				$php->indentLevel++;
				/**
				 * Returns type list
				 */
				$methodReturns = array();
				/**
				 * Methods
				 */
				foreach($methods as $index=>$methodInfos)
				{
					$methodName = $methodInfos['method'];
					$meta = $methodInfos['meta'];
					/**
					 * Parameter name
					 */
					$methodParam = ucfirst($methodInfos['parameter']);
					$lMethodParam = lcfirst($methodInfos['parameter']);
					$uMethodParam = ucfirst($methodInfos['parameter']);
					$cleanParameterName = self::structName($methodInfos['parameter'],$_packageName);
					/**
					 * Get parameter infos
					 */
					$methodsToCall = array();
					$methodsUsed = array();
					if(self::structIsKnown($methodInfos['parameter']))
					{
						$methodParamAttributes = array_key_exists($lMethodParam,$structs)?$structs[$lMethodParam]:$structs[$uMethodParam];
						foreach($methodParamAttributes as $structInfoIndex=>$structInfos)
						{
							if(is_numeric($structInfoIndex))
							{
								$methodsToCall[] = ($this->getOptionSendArrayAsParameter()?'\'' . $structInfos['name'] . '\'=>':'') . '$_' . lcfirst($cleanParameterName) . '->get' . ucfirst($structInfos['name']) . '()';
								$methodsUsed[] = $cleanParameterName . '::get' . ucfirst($structInfos['name']) . '()';
							}
						}
					}
					else
						$methodsToCall[] = ($this->getOptionSendArrayAsParameter()?'\'' . $methodInfos['parameter'] . '\'=>':'') . '$_' . lcfirst($cleanParameterName);
					/**
					 * Return name
					 */
					$methodReturn = ucfirst($methodInfos['return']);
					$cleanReturnName = self::structName($methodInfos['return'],$_packageName);
					$lmethodReturn = lcfirst($methodReturn);
					$umethodReturn = ucfirst($methodReturn);
					$methodReturns[] = $cleanReturnName;
					/**
					 * Method
					 */
					$php->appendCustomCode("/**\r\n * Method to call $methodName");
					if(count($meta))
					{
						$php->appendCustomCode(" * Meta informations :");
						foreach($meta as $metaName=>$metaValue)
							$php->appendCustomCode(" * \t- $metaName : $metaValue");
					}
					if($this->getOptionGenerateWsdlClassFile())
					{
						$php->appendCustomCode(" * @uses " . $extend . "::getSoapClient()");
						$php->appendCustomCode(" * @uses " . $extend . "::setResult()");
						$php->appendCustomCode(" * @uses " . $extend . "::getResult()");
						$php->appendCustomCode(" * @uses " . $extend . "::saveLastError()");
					}
					foreach($methodsUsed as $methodToUse)
						$php->appendCustomCode(" * @uses $methodToUse");
					$php->appendCustomCode(" * @param $cleanParameterName \$_" . lcfirst($cleanParameterName) . " $methodParam");
					$php->appendCustomCode(" * @return " . (self::structIsKnown($methodInfos['return'])?$cleanReturnName:$methodInfos['return']) . "\r\n */");
					$php->appendCustomCode("public function $methodName(" . (self::structIsKnown($methodInfos['parameter'])?"$cleanParameterName ":'') . '$_' . lcfirst($cleanParameterName) . ')');
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("try");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode("\$this->setResult(" . (($this->getOptionResponseAsWsdlObject() && self::structIsKnown($methodInfos['return']))?"new $cleanReturnName(":'') . "self::getSoapClient()->$methodName(" . ($this->getOptionSendParametersAsArray()?'array(\'parameters\'=>':'') . ($this->getOptionSendArrayAsParameter()?'array(':'') . implode(',',$methodsToCall) . ($this->getOptionSendArrayAsParameter()?")":'') . ($this->getOptionSendParametersAsArray()?')':'') . ")" . ($this->getOptionSendParametersAsArray()?'->parameters':'') . (($this->getOptionResponseAsWsdlObject() && self::structIsKnown($methodInfos['return']))?')':'') . ");");
					$php->indentLevel--;
					$php->appendCustomCode("}");
					$php->appendCustomCode("catch(SoapFault \$fault)");
					$php->appendCustomCode("{");
					$php->indentLevel++;
					$php->appendCustomCode('return !$this->saveLastError(__METHOD__,$fault);');
					$php->indentLevel--;
					$php->appendCustomCode("}");
					$php->appendCustomCode("return \$this->getResult();");
					$php->indentLevel--;
					$php->appendCustomCode("}");
				}
				/**
				 * Result method
				 */
				$methodReturns = array_unique($methodReturns);
				$php->appendCustomCode("/**\r\n * Method returning the result content\r\n * @return " . implode('|',$methodReturns) . "\r\n */");
				$php->appendCustomCode("public function getResult()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return parent::getResult();');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * Class name
				 */
				$php->appendCustomCode("/**\r\n * Method returning the class name\r\n * @return string __CLASS__\r\n */");
				$php->appendCustomCode("public function __toString()");
				$php->appendCustomCode("{");
				$php->indentLevel++;
				$php->appendCustomCode('return __CLASS__;');
				$php->indentLevel--;
				$php->appendCustomCode("}");
				/**
				 * End
				 */
				$php->indentLevel--;
				$php->appendCustomCode("}");
				$php->finish();
			}
		}
		return $functionsClassesFiles;
	}
	/**
	 * Generate classMap class
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::structName()
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 * @return array the absolute path to the generated file
	 */
	private function generateClassMap($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		$php = new ezcPhpGenerator($_rootDirectory . '/' . ucfirst($_packageName) . 'ClassMap.php',true,true);
		$php->indentString = "	";
		$php->appendCustomCode("/**\r\n * ClassMap \r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * ClassMap\r\n * @date " . date('d/m/Y') . "\r\n */");
		$php->appendCustomCode('class ' . ucfirst($_packageName) . 'ClassMap');
		$php->appendCustomCode('{');
		$php->indentLevel++;
		$php->appendCustomCode("/**\r\n * Return the class map definition associating structs defined and structs generated. This array is sent to the SoapClient when calling the WS\r\n * @return array\r\n */");
		$php->appendCustomCode('final public static function classMap()');
		$php->appendCustomCode('{');
		$php->indentLevel++;
		$structs = $this->getStructs();
		$classesToMap = array();
		foreach($structs as $structName=>$structInfos)
			$classesToMap[$structName] = self::structName($structName,$_packageName);
		$php->appendCustomCode("return " . var_export($classesToMap,true) . ';');
		$php->indentLevel--;
		$php->appendCustomCode('}');
		$php->indentLevel--;
		$php->appendCustomCode('}');
		$php->finish();
		return array(
					$_rootDirectory . ucfirst($_packageName) . 'ClassMap.php');
	}
	/**
	 * Generate autoload file for all classes
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 * @param array $_classesFiles
	 */
	private function generateAutoloadFile($_packageName,$_rootDirectory,$_rootDirectoryRights,array $_classesFiles = array())
	{
		if(count($_classesFiles))
		{
			$php = new ezcPhpGenerator($_rootDirectory . '/' . ucfirst($_packageName) . 'Autoload.php',true,true);
			$php->appendCustomCode("/**\r\n * Autoload File \r\n * @date " . date('d/m/Y') . "\r\n */\r\n/**\r\n * Includes for all generated classes files\r\n * @date " . date('d/m/Y') . "\r\n */");
			foreach($_classesFiles as $classFile)
			{
				if(is_file($classFile))
					$php->appendCustomCode('require_once ' . str_replace($_rootDirectory,'dirname(__FILE__) . \'/',$classFile) . '\';');
			}
			$php->finish();
		}
	}
	/**
	 * Generate Wsdl Class file
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param int $_rootDirectoryRights
	 * @return array the absolute path to the generated file
	 */
	private function generateWsdlClassFile($_packageName,$_rootDirectory,$_rootDirectoryRights)
	{
		if(is_file(dirname(__FILE__) . '/WsdlClassFileTpl.php'))
		{
			$content = file_get_contents(dirname(__FILE__) . '/WsdlClassFileTpl.php');
			$metaInformation = '';
			foreach($this->wsdls as $wsdlLocation=>$wsdlinfos)
			{
				foreach($wsdlinfos['meta'] as $metaName=>$metaValue)
					$metaInformation .= (!empty($metaInformation)?"\r\n * ":'') . ucfirst($metaName) . " : $metaValue";
			}
			$content = str_replace(array(
										'packageName',
										'PackageName',
										'generation_date',
										'meta_informations'),array(
																lcfirst($_packageName),
																ucfirst($_packageName),
																date('d/m/Y'),
																$metaInformation),$content);
			file_put_contents($_rootDirectory . ucfirst($_packageName) . 'WsdlClass.php',$content);
			return array(
						$_rootDirectory . ucfirst($_packageName) . 'WsdlClass.php');
		}
		else
			return array();
	}
	/**
	 * Generate tutorial file
	 * @uses WsdlToPhp::getOptionGenerateAutoloadFile()
	 * @uses WsdlToPhp::getWsdls()
	 * @uses ezcPhpGenerator::appendCustomCode()
	 * @uses ezcPhpGenerator::finish()
	 * @uses ReflectionClass::getMethods()
	 * @uses ReflectionMethod::getName()
	 * @uses ReflectionMethod::getParameters()
	 * @param string $_packageName
	 * @param string $_rootDirectory
	 * @param bool $_rootDirectoryRights
	 * @param array $_classesFiles
	 * @return bool true|false
	 */
	private function generateTutorialFile($_packageName,$_rootDirectory,$_rootDirectoryRights,array $_functionsClassesFiles = array())
	{
		if(class_exists('ReflectionClass') && count($_functionsClassesFiles) && is_file(dirname(__FILE__) . '/sample-tpl.php') && $this->getOptionGenerateAutoloadFile() && is_file($_rootDirectory . '/' . ucfirst($_packageName) . 'Autoload.php'))
		{
			require_once $_rootDirectory . '/' . ucfirst($_packageName) . 'Autoload.php';
			$content = '';
			foreach($_functionsClassesFiles as $classFilePath)
			{
				$pathinfo = pathinfo($classFilePath);
				$className = str_replace('.' . $pathinfo['extension'],'',$pathinfo['filename']);
				if(class_exists($className))
				{
					$r = new ReflectionClass($className);
					$methods = $r->getMethods();
					$classMethods = array();
					foreach($methods as $method)
					{
						if($method->class === $className && !in_array($method->getName(),array(
																								'__toString',
																								'__construct',
																								'getResult')))
							array_push($classMethods,$method);
					}
					if(count($classMethods))
					{
						$classNameVar = lcfirst($className);
						$content .= "\r\n\r\n/**" . str_repeat('*',strlen("Example for $className")) . "\r\n * Example for $className\r\n */";
						$content .= "\r\n\$$classNameVar = new $className(\$wsdl);";
						foreach($classMethods as $classMethod)
						{
							$content .= "\r\n// sample call for $className::" . $classMethod->getName() . '()';
							$classParameters = $classMethod->getParameters();
							$parameters = array();
							foreach($classParameters as $classParameter)
								array_push($parameters,class_exists(ucfirst(substr($classParameter->getName(),1)))?'new ' . ucfirst(substr($classParameter->getName(),1)) . '(/*** update parameters list ***/)':'$' . lcfirst($classParameter->getName()));
							$content .= "\r\nif(\$$classNameVar->" . $classMethod->getName() . '(' . implode(',',$parameters) . '))';
							$content .= "\r\n\t" . 'print_r($' . $classNameVar . '->getResult());';
							$content .= "\r\nelse";
							$content .= "\r\n\tprint_r($" . $classNameVar . "->getLastError());";
						}
					}
				}
			}
			if(!empty($content))
			{
				$fileContent = file_get_contents(dirname(__FILE__) . '/sample-tpl.php');
				$fileContent = str_replace(array(
												'packageName',
												'PackageName',
												'PACKAGENAME',
												'WSDL_PATH',
												'generation_date',
												'$content;'),array(
																lcfirst($_packageName),
																ucfirst($_packageName),
																strtoupper($_packageName),
																implode('',array_slice(array_keys($this->getWsdls()),0,1)),
																date('d/m/Y'),
																$content),$fileContent);
				file_put_contents($_rootDirectory . 'sample-' . strtolower($_packageName) . '.php',$fileContent);
			}
			return true;
		}
		elseif(!class_exists('ReflectionClass'))
		{
			echo "\r\n WsdlToPhp::generateTutorialFile() needs ReflectionClass, see http://fr2.php.net/manual/fr/class.reflectionclass.php\r\n";
			return false;
		}
		return false;
	}
	/**
	 * @return array
	 */
	public function getStructs()
	{
		return $this->structs;
	}
	/**
	 * @param array $types
	 */
	protected function setStructs($_structs)
	{
		$this->structs = $_structs;
	}
	/**
	 * Add type to structs
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_paramType
	 * @param string $_paramName
	 * @param string $_structName
	 */
	private function addStruct($_paramType,$_paramName,$_structName)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$paramNameCleaned = self::cleanName($_paramName);
		if(!array_key_exists($structNameCleaned,$this->structs))
			$this->structs[$structNameCleaned] = array();
		if(!empty($_paramType) && !empty($paramNameCleaned))
		{
			/**
			 * Ensure class attribute isn't already defined
			 */
			$paramExists = false;
			foreach($this->structs[$structNameCleaned] as $index=>$structParam)
				$paramExists |= (is_array($structParam) && array_key_exists('name',$structParam) && $structParam['name'] === $paramNameCleaned);
			if(!$paramExists)
				$this->structs[$structNameCleaned][] = array(
															'type'=>$_paramType,
															'name'=>$paramNameCleaned,
															'meta'=>array());
		}
	}
	/**
	 * Method to add info value to an existing struct and param
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_structName
	 * @param string $_paramName
	 * @param string $_structInfoName
	 * @param mixed $_structInfoValue
	 */
	private function addStructInfo($_structName,$_paramName,$_structInfoName,$_structInfoValue)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$paramNameCleaned = self::cleanName($_paramName);
		$structInfoNameCleaned = self::cleanName($_structInfoName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName && is_array($params) && count($params))
			{
				foreach($params as $paramIndex=>$paramInfo)
				{
					if(is_array($paramInfo) && array_key_exists('name',$paramInfo) && $paramInfo['name'] == $paramNameCleaned)
					{
						if(array_key_exists($structInfoNameCleaned,$structs[$structNameCleaned][$paramIndex]) && is_array($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned]) && is_array($_structInfoValue))
							$structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned] = array_merge($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned],$_structInfoValue);
						elseif(array_key_exists($structInfoNameCleaned,$structs[$structNameCleaned][$paramIndex]) && is_array($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned]))
							array_push($structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned],$_structInfoValue);
						else
							$structs[$structNameCleaned][$paramIndex][$structInfoNameCleaned] = $_structInfoValue;
					}
				}
			}
		}
		$this->setStructs($structs);
	}
	/**
	 * Add struct inheritence info
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_structName
	 * @param string $_inherits
	 */
	private function addStructInherits($_structName,$_inherits)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName)
				$structs[$structNameCleaned]['inherits'] = $_inherits;
		}
		$this->setStructs($structs);
	}
	/**
	 * Add struct documentation info
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_structName
	 * @param string $_documentation
	 */
	private function addStructDocumentation($_structName,$_documentation)
	{
		/**
		 * Replace special characters
		 */
		$structNameCleaned = self::cleanName($_structName);
		$structs = $this->getStructs();
		foreach($structs as $structName=>$params)
		{
			if($structNameCleaned == $structName && is_array($params) && count($params))
				$structs[$structNameCleaned]['documentation'] = $_documentation;
		}
		$this->setStructs($structs);
	}
	/**
	 * Add type to restrictions
	 * @uses WsdlToPhp::addStruct()
	 * @uses WsdlToPhp::addStructInfo()
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_paramType
	 * @param string $_paramValue
	 * @param string $_restrictionName
	 * @param bool $_isRestriction
	 * @return void
	 */
	private function addRestriction($_paramType,$_paramValue,$_restrictionName,$_isRestriction = true)
	{
		/**
		 * Replace special characters
		 */
		$paramTypeCleaned = self::cleanName($_paramType);
		$paramValueCleaned = self::cleanName($_paramValue);
		$restrictionNameCleaned = self::cleanName($_restrictionName);
		if(!array_key_exists($restrictionNameCleaned,$this->structs) && !empty($paramTypeCleaned))
		{
			$this->addStruct($paramTypeCleaned,$restrictionNameCleaned,$restrictionNameCleaned);
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'meta',array());
			if($_isRestriction)
			{
				$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'isRestriction',$_isRestriction);
				$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'values',array());
			}
		}
		if(empty($paramTypeCleaned) && !empty($paramValueCleaned))
		{
			if(is_int($paramValueCleaned))
				$paramValueCleaned = intval($paramValueCleaned);
			elseif(is_float($paramValueCleaned))
				$paramValueCleaned = floatval($paramValueCleaned);
			elseif(is_numeric($paramValueCleaned))
				$paramValueCleaned = intval($paramValueCleaned) == $paramValueCleaned?intval($paramValueCleaned):floatval($paramValueCleaned);
			elseif(is_bool($paramValueCleaned))
				$paramValueCleaned = $paramValueCleaned?true:false;
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,'values',$paramValueCleaned);
		}
		else
			$this->addStructInfo($restrictionNameCleaned,$restrictionNameCleaned,$paramTypeCleaned,$paramValueCleaned);
	}
	/**
	 * @return array
	 */
	public function getFunctions()
	{
		return $this->functions;
	}
	/**
	 * @param array $functions
	 */
	protected function setFunctions($_functions)
	{
		$this->functions = $_functions;
	}
	/**
	 * @uses WsdlToPhp::getGather()
	 * @uses WsdlToPhp::cleanName()
	 * @uses WsdlToPhp::getFunctions()
	 * @param string $_function
	 */
	private function addFunction($_functionName,$_functionParameter,$_functionReturn)
	{
		/**
		 * Replace special characters
		 */
		$functionNameCleaned = self::cleanName($_functionName);
		$functionParameterCleaned = self::cleanName($_functionParameter);
		$functionReturnCleaned = self::cleanName($_functionReturn);
		/**
		 * Define class name
		 */
		$className = ucfirst($this->getGather($functionNameCleaned));
		if(!array_key_exists($className,$this->getFunctions()))
			$this->functions[$className] = array();
		if(!array_key_exists($functionNameCleaned,$this->functions[$className]))
			$this->functions[$className][$functionNameCleaned] = array(
																	'method'=>$functionNameCleaned,
																	'parameter'=>$functionParameterCleaned,
																	'return'=>$functionReturnCleaned,
																	'meta'=>array());
	}
	/**
	 * Method to add info value to an existing function and method name
	 * @uses WsdlToPhp::getStructs()
	 * @uses WsdlToPhp::setStructs()
	 * @uses WsdlToPhp::setFunctions()
	 * @uses WsdlToPhp::getFunctions()
	 * @uses WsdlToPhp::cleanName()
	 * @param string $_functionName
	 * @param string $_functiontInfoName
	 * @param mixed $_functionInfoValue
	 */
	private function addFunctionInfo($_functionName,$_functionInfoName,$_functionInfoValue)
	{
		/**
		 * Replace special characters
		 */
		$functionNameCleaned = self::cleanName($_functionName);
		$functions = $this->getFunctions();
		foreach($functions as $className=>$methods)
		{
			foreach($methods as $functionName=>$funtionParams)
			{
				if($functionName == $functionNameCleaned)
				{
					if(array_key_exists($_functionInfoName,$functions[$className][$functionNameCleaned]) && is_array($functions[$className][$functionNameCleaned][$_functionInfoName]) && is_array($_functionInfoValue))
						$functions[$className][$functionNameCleaned][$_functionInfoName] = array_merge($functions[$className][$functionNameCleaned][$_functionInfoName],$_functionInfoValue);
					elseif(array_key_exists($_functionInfoName,$functions[$className][$functionNameCleaned]) && is_array($functions[$className][$functionNameCleaned][$_functionInfoName]))
						array_push($functions[$className][$functionNameCleaned][$_functionInfoName],$_functionInfoValue);
					else
						$functions[$className][$functionNameCleaned][$_functionInfoName] = $_functionInfoValue;
				}
			}
		}
		$this->setFunctions($functions);
	}
	/**
	 * @return the $optionCategory
	 */
	public function getOptionCategory()
	{
		return $this->optionCategory;
	}
	/**
	 * Value must be @see self::OPT_CAT_END_NAME or @see self::OPT_CAT_START_NAME or @see self::OPT_CAT_NONE_NAME
	 * @param int $optionCategory
	 */
	public function setOptionCategory($_optionCategory = self::OPT_CAT_START_NAME)
	{
		if($_optionCategory == self::OPT_CAT_END_NAME || $_optionCategory == self::OPT_CAT_START_NAME || $_optionCategory == self::OPT_CAT_NONE_NAME)
		{
			$this->optionCategory = $_optionCategory;
			return true;
		}
		else
		{
			$this->optionCategory = self::OPT_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * @return int
	 */
	public function getOptionSubCategory()
	{
		return $this->optionSubCategory;
	}
	/**
	 * Value must be @see self::OPT_SUB_CAT_END_NAME or @see self::OPT_SUB_CAT_START_NAME or @see self::OPT_SUB_CAT_NONE_NAME
	 * @param int $optionSubCategory
	 */
	public function setOptionSubCategory($_optionSubCategory = self::OPT_SUB_CAT_START_NAME)
	{
		if($_optionSubCategory == self::OPT_SUB_CAT_END_NAME || $_optionSubCategory == self::OPT_SUB_CAT_START_NAME || $_optionSubCategory == self::OPT_SUB_CAT_NONE_NAME)
		{
			$this->optionSubCategory = $_optionSubCategory;
			return true;
		}
		else
		{
			$this->optionSubCategory = self::OPT_SUB_CAT_START_NAME;
			return false;
		}
	}
	/**
	 * @return int
	 */
	public function getOptionGatherMethods()
	{
		return $this->optionGatherMethods;
	}
	/**
	 * @param int $optionGatherMethods
	 */
	public function setOptionGatherMethods($_optionGatherMethods = self::OPT_GATH_METH_START_NAME)
	{
		if($_optionGatherMethods == self::OPT_GATH_METH_START_NAME || $_optionGatherMethods == self::OPT_GATH_METH_END_NAME)
		{
			$this->optionGatherMethods = $_optionGatherMethods;
			return true;
		}
		else
		{
			$this->optionGatherMethods = self::OPT_GATH_METH_START_NAME;
			return false;
		}
	}
	/**
	 * @return bool
	 */
	public function getOptionSendArrayAsParameter()
	{
		return $this->optionSendArrayAsParameter;
	}
	/**
	 * @param bool $optionSendArrayAsParameter
	 */
	public function setOptionSendArrayAsParameter($_optionSendArrayAsParameter = false)
	{
		$this->optionSendArrayAsParameter = $_optionSendArrayAsParameter;
	}
	/**
	 * @return bool
	 */
	public function getOptionGenerateAutoloadFile()
	{
		return $this->optionGenerateAutoloadFile;
	}
	/**
	 * @param bool $optionGenerateAutoloadFile
	 */
	public function setOptionGenerateAutoloadFile($_optionGenerateAutoloadFile = false)
	{
		$this->optionGenerateAutoloadFile = $_optionGenerateAutoloadFile;
	}
	/**
	 * @return bool
	 */
	public function getOptionGenerateWsdlClassFile()
	{
		return $this->optionGenerateWsdlClassFile;
	}
	/**
	 * @param bool $optionGenerateWsdlClassFile
	 */
	public function setOptionGenerateWsdlClassFile($_optionGenerateWsdlClassFile = false)
	{
		$this->optionGenerateWsdlClassFile = $_optionGenerateWsdlClassFile;
	}
	/**
	 * @return bool
	 */
	public function getOptionResponseAsWsdlObject()
	{
		return $this->optionResponseAsWsdlObject;
	}
	/**
	 * @param bool $optionResponseAsWsdlObject
	 */
	public function setOptionResponseAsWsdlObject($_optionResponseAsWsdlObject = false)
	{
		$this->optionResponseAsWsdlObject = $_optionResponseAsWsdlObject;
	}
	/**
	 * @return bool
	 */
	public function getOptionSendParametersAsArray()
	{
		return $this->optionSendParametersAsArray;
	}
	/**
	 * @uses WsdlToPhp::setOptionSendArrayAsParameter() if param is true
	 * @param bool $optionSendParametersAsArray
	 */
	public function setOptionSendParametersAsArray($_optionSendParametersAsArray = false)
	{
		$this->optionSendParametersAsArray = $_optionSendParametersAsArray;
		if($_optionSendParametersAsArray)
			$this->setOptionSendArrayAsParameter($_optionSendParametersAsArray);
	}
	/**
	 * @return the $optionInheritsClassIdentifier
	 */
	public function getOptionInheritsClassIdentifier()
	{
		return $this->optionInheritsClassIdentifier;
	}
	/**
	 * @param string $optionInheritsClassIdentifier
	 */
	public function setOptionInheritsClassIdentifier($_optionInheritsClassIdentifier = '')
	{
		$this->optionInheritsClassIdentifier = (is_string($_optionInheritsClassIdentifier) && !empty($_optionInheritsClassIdentifier))?$_optionInheritsClassIdentifier:'';
	}
	/**
	 * @return bool
	 */
	public function getOptionGenericConstantsNames()
	{
		return $this->optionGenericConstantsNames;
	}
	/**
	 * @param bool $optionGenericConstantsNames
	 */
	public function setOptionGenericConstantsNames($_optionGenericConstantsNames = false)
	{
		$this->optionGenericConstantsNames = $_optionGenericConstantsNames;
	}
	/**
	 * @return bool
	 */
	public function getOptionGenerateTutorialFile()
	{
		return $this->optionGenerateTutorialFile;
	}
	/**
	 * @param bool $optionGenerateTutorialFile
	 */
	public function setOptionGenerateTutorialFile($_optionGenerateTutorialFile = false)
	{
		$this->optionGenerateTutorialFile = $_optionGenerateTutorialFile;
	}
	/**
	 * @return the $wsdls
	 */
	public function getWsdls()
	{
		return $this->wsdls;
	}
	/**
	 * @param array $wsdls
	 */
	public function setWsdls($_wsdls)
	{
		$this->wsdls = $_wsdls;
	}
	/**
	 * Add Wsdl location
	 * @param string $_wsdlLocation
	 */
	public function addWsdl($_wsdlLocation)
	{
		if(is_string($_wsdlLocation) && !empty($_wsdlLocation))
			$this->wsdls[$_wsdlLocation] = array(
												'meta'=>array());
	}
	/**
	 * Add Wsdl location meta information
	 * @uses WsdlToPhp::getWsdls()
	 * @param string $_metaName
	 * @param mixed $_metaValue
	 */
	public function addWsdlMeta($_metaName,$_metaValue)
	{
		$this->wsdls[implode('',array_slice(array_keys($this->wsdls),0,1))]['meta'][$_metaName] = $_metaValue;
	}
	/**
	 * Methods to load WSDL from current WSDL when current WSDL imports other WSDL
	 * @uses WsdlToPhp::manageWsdlLocation()
	 * @uses WsdlToPhp::manageWsdlNode()
	 * @param string $_wsdlLocation wsdl location to load
	 * @param DOMNode $_domNode DOMNode to browse
	 * @param string $_fromWsdlLocation wsdl location where the current $_domNode or $_wsdlLocation is from
	 * @return void
	 */
	private function loadWsdls($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		/**
		 * Not empty location
		 */
		if(!empty($_wsdlLocation))
			$this->manageWsdlLocation($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * New node to browse
		 */
		elseif($_domNode instanceof DOMElement)
			$this->manageWsdlNode($_wsdlLocation,$_domNode,$_fromWsdlLocation);
	}
	/**
	 * Default manage method for a location
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return true
	 */
	protected function manageWsdlLocation($_wsdlLocation,$_domNode,$_fromWsdlLocation)
	{
		$wsdlLocationContent = '';
		$dom = new DOMDocument('1.0','UTF-8');
		if(@$dom->load($_wsdlLocation))
			$wsdlLocationContent = trim($dom->saveXML());
		/**
		 * Comments tag on the beginning block parsing the DOMDocument
		 */
		if(empty($wsdlLocationContent) || trim($wsdlLocationContent) == '<?xml version="1.0" encoding="UTF-8"?>')
		{
			$wsdlLocationContent = @file_get_contents($_wsdlLocation);
			$wsdlLocationContent = preg_replace('(<!--.*-->)','',$wsdlLocationContent);
		}
		if(!empty($wsdlLocationContent) && $dom->loadXML($wsdlLocationContent) && $dom->hasChildNodes())
		{
			foreach($dom->childNodes as $childNode)
			{
				if($childNode->nodeName !== '#comment')
				{
					$this->loadWsdls('',$childNode,$_wsdlLocation);
					break;
				}
			}
		}
	}
	/**
	 * Default manage method for a node
	 * @uses WsdlToPhp::manageWsdlNodeImport()
	 * @uses WsdlToPhp::manageWsdlNodeRestriction()
	 * @uses WsdlToPhp::manageWsdlNodeElement()
	 * @uses WsdlToPhp::manageWsdlNodeDocumentation()
	 * @uses WsdlToPhp::manageWsdlNodeExtension()
	 * @uses WsdlToPhp::manageWsdlNodeUndefined()
	 * @uses WsdlToPhp::loadWsdls()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return true
	 */
	protected function manageWsdlNode($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		/**
		 * Current node is type of "import" or "include"
		 */
		if(stripos($_domNode->nodeName,'import') !== false || stripos($_domNode->nodeName,'include') !== false)
			$this->manageWsdlNodeImport($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Enumeration's and restriction's
		 */
		elseif((stripos($_domNode->nodeName,'restriction') !== false || stripos($_domNode->nodeName,'enumeration') !== false))
			$this->manageWsdlNodeRestriction($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Element's, part of a struct
		 */
		elseif((stripos($_domNode->nodeName,'element') !== false || stripos($_domNode->nodeName,'attribute') !== false) && $_domNode->hasAttribute('name') && $_domNode->getAttribute('name') != '' && $_domNode->hasAttribute('type') && $_domNode->getAttribute('type') != '')
			$this->manageWsdlNodeElement($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Documentation's
		 */
		elseif(stripos($_domNode->nodeName,'documentation') !== false && !empty($_domNode->nodeValue))
			$this->manageWsdlNodeDocumentation($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Extension of struct
		 */
		elseif(stripos($_domNode->nodeName,'extension') !== false && $_domNode->hasAttribute('base') && $_domNode->getAttribute('base') != '')
			$this->manageWsdlNodeExtension($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * Undefined node
		 */
		else
			$this->manageWsdlNodeUndefined($_wsdlLocation,$_domNode,$_fromWsdlLocation);
		/**
		 * other child nodes
		 */
		if($_domNode->hasChildNodes())
		{
			$childNodes = $_domNode->childNodes;
			$childNodesLength = $childNodes->length;
			for($i = 0;$i < $childNodesLength;$i++)
			{
				if($childNodes->item($i))
					$this->loadWsdls('',$childNodes->item($i),!empty($_wsdlLocation)?$_wsdlLocation:$_fromWsdlLocation);
			}
		}
	}
	/**
	 * Undefined node manage method
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeUndefined($_wsdlLocation = '',$_domNode = null,$_fromWsdlLocation = '')
	{
		return true;
	}
	/**
	 * Manage shema import method
	 * @uses WsdlToPhp::addWsdl()
	 * @uses WsdlToPhp::loadWsdls()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeImport($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		if($_domNode->hasAttribute('location'))
			$location = $_domNode->getAttribute('location');
		elseif($_domNode->hasAttribute('schemaLocation'))
			$location = $_domNode->getAttribute('schemaLocation');
		elseif($_domNode->hasAttribute('schemalocation'))
			$location = $_domNode->getAttribute('schemalocation');
		elseif($_domNode->hasAttribute('namespace') && (strpos($_domNode->getAttribute('namespace'),'http://') !== false || strpos($_domNode->getAttribute('namespace'),'https://') !== false))
			$location = $_domNode->getAttribute('namespace');
		/**
		 * Define valid location
		 */
		$locations = array();
		if(!empty($location) && strpos($location,'http://') === false && strpos($location,'https://') === false && (!empty($_wsdlLocation) || !empty($_fromWsdlLocation)))
		{
			$locationsToParse = array();
			array_push($locationsToParse,!empty($_wsdlLocation)?$_wsdlLocation:$_fromWsdlLocation);
			if($_domNode->hasAttribute('namespace') && strpos($_domNode->getAttribute('namespace'),'://'))
				array_push($locationsToParse,$_domNode->getAttribute('namespace'));
			foreach($locationsToParse as $locationToParse)
			{
				$fileParts = pathinfo($locationToParse);
				$fileBasename = (is_array($fileParts) && array_key_exists('basename',$fileParts))?$fileParts['basename']:'';
				$parts = parse_url(str_replace($fileBasename,'',$locationToParse));
				$scheme = (is_array($parts) && array_key_exists('scheme',$parts))?$parts['scheme']:'';
				$host = (is_array($parts) && array_key_exists('host',$parts))?$parts['host']:'';
				$path = (is_array($parts) && array_key_exists('path',$parts))?$parts['path']:'';
				$path = str_replace($fileBasename,'',$path);
				$port = (is_array($parts) && array_key_exists('port',$parts))?$parts['port']:'';
				if(!empty($scheme) && !empty($host))
					array_push($locations,str_replace('urn','http',$scheme) . '://' . $host . (!empty($port)?':' . $port:'') . (!empty($path)?$path:'/') . $location);
			}
		}
		elseif(!empty($location))
			array_push($locations,$location);
		/**
		 * New WSDL
		 */
		foreach($locations as $location)
		{
			if(!empty($location) && !array_key_exists($location,$this->getWsdls()))
			{
				/**
				 * Save Wsdl location
				 */
				$this->addWsdl($location);
				/**
				 * Load Wsdl
				 */
				$this->loadWsdls($location,null,$_wsdlLocation);
			}
		}
	}
	/**
	 * Manage restriction method
	 * @uses WsdlToPhp::addRestriction()
	 * @uses WsdlToPhp::findSuitableParent()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeRestriction($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$parentNode = stripos($_domNode->nodeName,'restriction') !== false?$_domNode->parentNode:$_domNode->parentNode->parentNode;
		/**
		 * Find parent node of this enumeration node
		 */
		$parentNode = self::findSuitableParent($parentNode);
		if($parentNode && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
		{
			if(stripos($_domNode->nodeName,'restriction') !== false)
			{
				$type = explode(':',$_domNode->getAttribute('base'));
				if($_domNode->hasChildNodes())
				{
					$childNodes = $_domNode->childNodes;
					$childNodesLength = $childNodes->length;
					$firstValidNodePos = 0;
					while(!(($childNodes->item($firstValidNodePos) instanceof DOMNode) && $childNodes->item($firstValidNodePos)->nodeType === XML_ELEMENT_NODE) && $firstValidNodePos++ < $childNodesLength);
					if($childNodes->item($firstValidNodePos) && stripos($childNodes->item($firstValidNodePos)->nodeName,'enumeration') === false)
					{
						$this->addRestriction($type[count($type) - 1],'',$parentNode->getAttribute('name'),false);
						for($i = 0;$i < $childNodesLength;$i++)
						{
							$childNode = $childNodes->item($i);
							if($childNode && $childNode->hasAttributes())
							{
								$childNodeName = explode(':',$childNode->nodeName);
								$childNodeName = $childNodeName[count($childNodeName) - 1];
								$childNodeValue = $childNode->getAttribute('value');
								$this->addStructInfo($parentNode->getAttribute('name'),$parentNode->getAttribute('name'),'meta',array(
																																	$childNodeName=>$childNodeValue));
							}
						}
					}
					else
						$this->addRestriction($type[count($type) - 1],'',$parentNode->getAttribute('name'));
				}
				else
					$this->addRestriction($type[count($type) - 1],'',$parentNode->getAttribute('name'));
			}
			else
				$this->addRestriction('',$_domNode->getAttribute('value'),$parentNode->getAttribute('name'));
		}
	}
	/**
	 * Manage element method
	 * @uses WsdlToPhp::addStructInfo()
	 * @uses WsdlToPhp::findSuitableParent()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeElement($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		/**
		 * Find parent node of this element node
		 */
		$parentNode = self::findSuitableParent($_domNode->parentNode);
		if($parentNode && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
		{
			$attributes = $_domNode->attributes;
			$attributesLength = $attributes->length;
			for($i = 0;$i < $attributesLength;$i++)
			{
				$attribute = $attributes->item($i);
				if($attribute && $attribute->nodeName != 'name' && $attribute->nodeName != 'type')
					$this->addStructInfo($parentNode->getAttribute('name'),$_domNode->getAttribute('name'),'meta',array(
																														$attribute->nodeName=>trim($attribute->nodeValue)));
			}
		}
	}
	/**
	 * Manage element method
	 * @uses WsdlToPhp::findSuitableParent()
	 * @uses WsdlToPhp::addStructInfo()
	 * @uses WsdlToPhp::addRestriction()
	 * @uses WsdlToPhp::addStructDocumentation()
	 * @uses WsdlToPhp::addWsdlMeta()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeDocumentation($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$documentation = trim($_domNode->nodeValue);
		$documentation = str_replace(array(
											"\r",
											"\n",
											"\t"),array(
													'',
													'',
													' '),$documentation);
		$documentation = preg_replace('[\s+]',' ',$documentation);
		/**
		 * Find parent node of this documentation node
		 */
		$parentNode = self::findSuitableParent($_domNode->parentNode);
		if($parentNode)
		{
			/**
			 * is it an element ? part of a struct
			 */
			if(strpos($parentNode->nodeName,'element') !== false && $parentNode->hasAttribute('type'))
			{
				/**
				 * Find parent node of this documentation node
				 */
				$upParentNode = self::findSuitableParent($parentNode->parentNode);
				if($upParentNode && $upParentNode->hasAttribute('name') && $upParentNode->getAttribute('name') != '')
					$this->addStructInfo($upParentNode->getAttribute('name'),$parentNode->getAttribute('name'),'meta',array(
																															'documentation'=>$documentation));
			}
			/**
			 * is it an enumeration
			 */
			elseif(strpos($parentNode->nodeName,'enumeration') !== false)
			{
				/**
				 * Find parent node of this enumeration node
				 */
				$upParentNode = self::findSuitableParent($parentNode->parentNode);
				if($upParentNode && $upParentNode->hasAttribute('name') && $upParentNode->getAttribute('name') != '')
					$this->addRestriction('meta',array(
														$parentNode->getAttribute('value')=>array(
																								'documentation'=>$documentation)),$upParentNode->getAttribute('name'));
			}
			/**
			 * is it a struct ?
			 */
			elseif((strpos($parentNode->nodeName,'element') !== false || stripos($parentNode->nodeName,'complextype') !== false || stripos($parentNode->nodeName,'simpletype') !== false) && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				$this->addStructDocumentation($parentNode->getAttribute('name'),$documentation);
			/**
			 * is it an operation ?
			 */
			elseif(strpos($parentNode->nodeName,'operation') !== false && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
				$this->addFunctionInfo($parentNode->getAttribute('name'),'meta',array(
																					'documentation'=>$documentation));
			/**
			 * is it a definitions ?
			 */
			elseif(strpos($parentNode->nodeName,'definitions') !== false)
				$this->addWsdlMeta('documentation',$documentation);
		}
	}
	/**
	 * Manage extension method
	 * @uses WsdlToPhp::findSuitableParent()
	 * @uses WsdlToPhp::addStructInherits()
	 * @param string $_wsdlLocation
	 * @param DOMNode $_domNode
	 * @param string $_fromWsdlLocation
	 * @return void
	 */
	protected function manageWsdlNodeExtension($_wsdlLocation = '',DOMNode $_domNode,$_fromWsdlLocation = '')
	{
		$base = explode(':',$_domNode->getAttribute('base'));
		$inheritsName = $base[count($base) - 1];
		if(!empty($inheritsName))
		{
			/**
			 * Find parent node of this extension node
			 */
			$parentNode = self::findSuitableParent($_domNode->parentNode);
			if($parentNode && $parentNode->hasAttribute('name') && $parentNode->getAttribute('name') != '')
			{
				/**
				 * Avoid infinite loop on case like this when looping/managing inheritance :
				 * <xs:complexType name="duration">
				 * -<xs:simpleContent>
				 * --<xs:extension base="xs:duration">
				 * ---<xs:attributeGroup ref="tns:commonAttributes"/>
				 * --</xs:extension>
				 * -</xs:simpleContent>
				 * </xs:complexType>
				 */
				if($inheritsName !== $parentNode->getAttribute('name'))
					$this->addStructInherits($parentNode->getAttribute('name'),$inheritsName);
			}
		}
	}
	/**
	 * Find the suitable parent node of the current node in maximum 5 parents
	 * Centralize method to find a valid parent
	 * @param DOMNode $_domNode
	 * @param int $_maxDeep max deep of this current node
	 * @return DOMElement|null
	 */
	final private function findSuitableParent(DOMNode $_domNode,$_maxDeep = 5)
	{
		$parentNode = $_domNode;
		while($_maxDeep-- > 0 && ($parentNode instanceof DOMElement) && $parentNode->nodeName && !((stripos($parentNode->nodeName,'element') !== false || stripos($parentNode->nodeName,'complextype') !== false || stripos($parentNode->nodeName,'simpletype') !== false) && $parentNode->hasAttribute('name')))
			$parentNode = $parentNode->parentNode;
		return ($parentNode instanceof DOMElement)?$parentNode:null;
	}
	/**
	 * Indicates if structName is known or not
	 * @uses WsdlToPhp::cleanClassName()
	 * @uses WsdlToPhp::getStructs()
	 * @param string $_structName
	 * @return bool true|false
	 */
	protected function structIsKnown($_structName)
	{
		$uStructName = ucfirst($_structName);
		$lStructName = lcfirst($_structName);
		$structName = self::cleanClassName($_structName);
		$uuStructName = ucfirst($structName);
		$llStructName = lcfirst($structName);
		return (is_array($this->getStructs()) && (array_key_exists($uStructName,$this->getStructs()) || array_key_exists($lStructName,$this->getStructs()) || array_key_exists($uuStructName,$this->getStructs()) || array_key_exists($llStructName,$this->getStructs())));
	}
	/**
	 * Set the struct name to use
	 * @uses WsdlToPhp::cleanClassName()
	 * @uses WsdlToPhp::structIsKnown()
	 * @param string $_structName
	 * @param string $_packageName
	 * @param bool $_force
	 * @return string
	 */
	protected function structName($_structName,$_packageName,$_force = false)
	{
		return ($_force || self::structIsKnown($_structName))?ucfirst($_packageName) . 'Type' . ucfirst(self::cleanClassName($_structName)):$_structName;
	}
	/**
	 * Return directory where to store class and create it if needed
	 * @uses WsdlToPhp::getCategory()
	 * @uses WsdlToPhp::getSubCategory()
	 * @param string $_rootDirectory
	 * @param int $_rootDirectoryRights
	 * @param string $_string
	 * @return string
	 */
	private function getDirectory($_rootDirectory,$_rootDirectoryRights,$_string)
	{
		$directory = $_rootDirectory;
		$mainCat = $this->getCategory($_string);
		$subCat = $this->getSubCategory($_string);
		if(!empty($mainCat))
		{
			$directory .= ucfirst($mainCat) . '/';
			if(!is_dir($directory))
				@mkdir($directory,$_rootDirectoryRights);
		}
		if(!empty($subCat))
		{
			$directory .= ucfirst($subCat) . '/';
			if(!is_dir($directory))
				@mkdir($directory,$_rootDirectoryRights);
		}
		return $directory;
	}
	/**
	 * Get main category part
	 * @param element name $_string
	 * @return string
	 */
	private function getCategory($_string)
	{
		return $this->getPart($_string,self::OPT_CAT_KEY);
	}
	/**
	 * Get sub category part
	 * @param element name $_string
	 * @return string
	 */
	private function getSubCategory($_string)
	{
		return $this->getPart($_string,self::OPT_SUB_CAT_KEY);
	}
	/**
	 * Get gather name class
	 * @param string
	 */
	private function getGather($_string)
	{
		return $this->getPart($_string,self::OPT_GATH_METH_KEY);
	}
	/**
	 * Get category part
	 * @uses WsdlToPhp::getOptionCategory()
	 * @uses WsdlToPhp::getOptionSubCategory()
	 * @uses WsdlToPhp::getPart()
	 * @uses WsdlToPhp::getOptionGatherMethods()
	 * @param string $_string element name
	 * @param string $_string category type
	 * @return string
	 */
	protected function getPart($_string,$_optionName)
	{
		$elementType = '';
		$optionValue = 0;
		switch($_optionName)
		{
			case self::OPT_CAT_KEY:
				$optionValue = $this->getOptionCategory();
				break;
			case self::OPT_SUB_CAT_KEY:
				$optionValue = $this->getOptionSubCategory();
				$mainCatPart = $this->getPart($_string,self::OPT_CAT_KEY);
				switch($this->getOptionCategory())
				{
					case self::OPT_CAT_END_NAME:
						if($_string != $mainCatPart && strlen($mainCatPart) < strlen($_string))
							$_string = substr($_string,0,strlen($_string) - strlen($mainCatPart));
						elseif($_string = $mainCatPart)
							$_string = '';
						break;
					case self::OPT_CAT_START_NAME:
						if($_string != $mainCatPart && strlen($mainCatPart) < strlen($_string))
							$_string = substr($_string,strlen($mainCatPart));
						elseif($_string = $mainCatPart)
							$_string = '';
						break;
					case self::OPT_SUB_CAT_NONE_NAME:
					default:
						$_string = '';
						break;
				}
				break;
			case self::OPT_GATH_METH_KEY:
				$optionValue = $this->getOptionGatherMethods();
				break;
		}
		if(!empty($_string))
		{
			switch($optionValue)
			{
				case self::OPT_CAT_END_NAME:
				case self::OPT_SUB_CAT_END_NAME:
				case self::OPT_GATH_METH_END_NAME:
					/**
					 * Determine category from last word
					 */
					$parts = preg_split('/[A-Z]/',ucfirst($_string));
					/**
					 * Ex : Error or error
					 */
					if(count($parts) == 0)
						$elementType = $_string;
					elseif(!empty($parts[count($parts) - 1]))
						$elementType = substr($_string,strrpos($_string,implode('',array_slice($parts,-1))) - 1);
					else
					{
						$part = '';
						for($i = count($parts) - 1;$i >= 0;$i--)
						{
							$part = trim($parts[$i]);
							if(!empty($part))
								break;
						}
						$elementType = substr($_string,((count($parts) - 2 - $i) + 1) * -1);
					}
					break;
				case self::OPT_CAT_START_NAME:
				case self::OPT_SUB_CAT_START_NAME:
				case self::OPT_GATH_METH_START_NAME:
					/**
					 * Determine category from first word
					 */
					$parts = preg_split('/[A-Z]/',ucfirst($_string));
					/**
					 * Ex : Error or error
					 */
					if(count($parts) == 0)
						$elementType = $_string;
					elseif(empty($parts[0]) && !empty($parts[1]))
						$elementType = substr($_string,0,strlen($parts[1]) + 1);
					else
					{
						$part = '';
						for($i = 0;$i < count($parts);$i++)
						{
							$part = trim($parts[$i]);
							if(!empty($part))
								break;
						}
						$elementType = substr($_string,0,$i);
					}
					break;
				case self::OPT_CAT_NONE_NAME:
				case self::OPT_SUB_CAT_NONE_NAME:
				default:
					break;
			}
		}
		return $elementType;
	}
	/**
	 * Clean struct, function, restrition name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanName($_name)
	{
		return $_name;
	}
	/**
	 * Clean constant name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanConstantName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
	}
	/**
	 * Clean property name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanPropertyName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
	}
	/**
	 * Clean class name
	 * @param string $_name
	 * @return string
	 */
	public static function cleanClassName($_name)
	{
		return preg_replace('/[_]+/','_',preg_replace('/[^a-zA-Z0-9_]/','_',$_name));
	}
	/**
	 * Return current class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>
