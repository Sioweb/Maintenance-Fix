<?php

namespace Sioweb\MaintenanceFix\Modules;

interface ExecutableInterface
{
	public function run();
	public function isActive();
}