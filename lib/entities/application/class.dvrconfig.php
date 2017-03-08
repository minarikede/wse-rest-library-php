<?php
namespace com\wowza\entities\application;
class DvrConfig extends \com\wowza\entities\Entity{
	public $licenseType = "Monthly";
	public $inUse = array();
	public $dvrEnable = array();
	public $windowDuration = array();
	public $storageDir = "\$\{com\.wowza\.wms\.context\.VHostConfigHome\}/dvr";
	public $archiveStrategy = "append";
	public $dvrOnlyStreaming = array();
	public $startRecordingOnStartup = array();
	public $dvrEncryptionSharedSecret = "";
	public $dvrMediaCacheEnabled = array();
	public $httpRandomizeMediaName = array();
	public function setURI(){
		$this->restURI = $baseURI."/dvr";
	}
}
