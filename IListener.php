<?php
interface IListener 
{
	public function listen(Event $event) :void ;
}