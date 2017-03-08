<?php
namespace com\wowza\entities\application;
use com\wowza\entities\application\helpers\ModuleItem;
class Modules extends \com\wowza\entities\Entity{
	public $moduleList = array();

	public function __construct(){
		$this->moduleList[] = $this->getModuleItem("base", "Base", "com.wowza.wms.module.ModuleCore");
		$this->moduleList[] = $this->getModuleItem("logging", "Client Logging", "com.wowza.wms.module.ModuleClientLogging");
		$this->moduleList[] = $this->getModuleItem("flvplayback", "FLVPlayback", "com.wowza.wms.module.ModuleFLVPlayback");
	}

	public function getModuleItem($name, $description, $class, $order=null){
		if(is_null($order))
			$order = count($this->moduleList);

		$mi = new ModuleItem();
		$mi->order=$order;
		$mi->name = $name;
		$mi->description = $description;
		$mi->class = $class;
		return $mi;
	}

	public function setURI($baseURI){
		$this->restURI = $baseURI."/streamconfiguration";
	}
}
