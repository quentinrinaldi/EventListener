<?php 
class Listener implements IListener
{
	private $eventCallbackCollection;

	public function __construct()
	{
		$this->eventCallbackCollection = ['LOGIN_EVENT'=> ['welcome'], 'LOGOUT_EVENT'=> ['goodbye', 'cleanCookies']];
	}
	public function listen(Event $event) :void
	{
		foreach ($this->eventCallbackCollection[$event->getName()] as $function) {
			$this->$function($event->getObject());
		}
	}	

	public function welcome(string $userLogin)
	{
		echo 'welcome '.$userLogin;
	}

	public function goodbye($userLogin)
	{
		echo 'bye bye '.$userLogin;
	}

	public function cleanCookies ($param)
	{
		echo 'Hmmmm cooookiiiieeessss';
	}
}