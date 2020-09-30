<?php 
class Dispatcher
{
	private $listenerCollection;

	public function __construct()
	{
		$this->listenerCollection = [];
	}

	public function addListener($listener, $event) 
	{
		$eventName=$event->getName();
		if (array_key_exists($eventName, $this->listenerCollection))
		{
			array_push($this->listenerCollection[$eventName], $listener);
		}
		else
		{
			$this->listenerCollection[$eventName] = array($listener);
		}
	}

	public function removeListener($listener, $event)
	{
		$eventName=$event->getName();
		$index = array_search($this->listenerCollection[$eventName], $listener);
		unset($this->listenerCollection[$eventName][$index]);
	}

	public function dispatch(Event $event)
	{

		foreach ($this->listenerCollection[$event->getName()] as $listener)
		{
			$listener->listen($event);
		}
	}
}