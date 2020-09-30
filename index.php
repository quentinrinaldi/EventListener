<?php

include 'Dispatcher.php';
include 'IListener.php';
include 'Listener.php';
include 'Event.php';
include 'LoginEvent.php';

$dispatcher = new Dispatcher();
$listener = new Listener();
$loginEvent = new LoginEvent('toto');

$dispatcher->addListener($listener, $loginEvent);

$dispatcher->dispatch($loginEvent);