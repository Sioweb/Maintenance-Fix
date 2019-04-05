<?php

namespace Sioweb\MaintenanceFix\Modules;

use Contao\ModuleMaintenance;
use Contao\Exception;
use Contao\System;

class Maintenance extends ModuleMaintenance
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_maintenance';

	/**
	 * Generate the module
	 *
	 * @throws \Exception
	 */
	protected function compile()
	{
		parent::compile();

		foreach ($GLOBALS['TL_MAINTENANCE_EXTENDED'] as $callback)
		{
			$this->import($callback);


			if (!$this->$callback instanceof ExecutableInterface)
			{
				throw new \Exception("$callback is not an Executable class");
			}

			$buffer = $this->$callback->run();

			if ($this->$callback->isActive())
			{
				$this->Template->content = $buffer;
				break;
			}
			else
			{
				$this->Template->content = $buffer.$this->Template->content;
			}
		}
	}
}
