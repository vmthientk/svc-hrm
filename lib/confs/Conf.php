<?php
class Conf {

	var $smtphost;
	var $dbhost;
	var $dbport;
	var $dbname;
	var $dbuser;
	var $version;

	function Conf() {

		$this->dbhost	= 'localhost';
		$this->dbport 	= '3306';
		if(defined('ENVIRNOMENT') && ENVIRNOMENT == 'test'){
		$this->dbname    = 'test_svc_hrm';		
		}else {
		$this->dbname    = 'svc_hrm';
		}
		$this->dbuser    = 'admin';
		$this->dbpass	= 'admin123';// Local database name
		$this->version = '3.3.2';

		$this->emailConfiguration = dirname(__FILE__).'/mailConf.php';
		$this->errorLog =  realpath(dirname(__FILE__).'/../logs/').'/';
	}
}
?>