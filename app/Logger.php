<?php declare(strict_types = 1);

namespace App;

use Ds\Stack;


final class Logger
{

	private Stack $logs;

	public function __construct()
	{
		$this->logs = new Stack();
	}


	public function log(string $action): void
	{
		$this->logs->push($action);
	}


	public function getLogs(): array
	{
		return $this->logs->toArray();
	}

}
