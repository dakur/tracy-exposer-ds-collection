<?php declare(strict_types = 1);

namespace App\Tracy;

use App\Logger;
use Latte\Engine;
use Nette\Bridges\ApplicationLatte\LatteFactory;
use Tracy\IBarPanel;


final class LogPanel implements IBarPanel
{

	private Engine $latte;

	public function __construct(
		LatteFactory $latteFactory,
		private Logger $logger,
	)
	{
		$this->latte = $latteFactory->create();
	}


	public function getTab(): string
	{
		return 'logs';
	}

	public function getPanel(): string
	{
		$this->logger->log('from panel');
		return $this->latte->renderToString(__DIR__ . '/panel.latte', [
			'items' => $this->logger->getLogs(),
		]);
	}

}
