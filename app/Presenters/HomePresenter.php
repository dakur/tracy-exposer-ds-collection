<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Logger;
use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{

	public function __construct(
		private Logger $logger,
	)
	{
		parent::__construct();
		$this->logger->log('from presenter');
	}

}
