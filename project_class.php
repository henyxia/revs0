<?php
class Status
{
	public $name;
	public $state;
	public $redaction;
	public $redactionRevision;
	public $creators = array();
	public $keywords = array();
}

class Project
{
	public $status;
	public $content;

	public function __construct()
	{
		$this->status = new Status(); 
	}
}

