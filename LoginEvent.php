<?php 
class LoginEvent extends Event
{
	const NAME = 'LOGIN_EVENT';

	public function getName()
	{
		return self :: NAME;
	}
}