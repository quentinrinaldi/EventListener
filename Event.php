<?php
abstract class Event
{
	protected $object;
	
	public function __construct($object) {
		$this->$object = $object;
	}

	public function getObject()
	{
		return $this->object;
	}

	public abstract function getName();
}