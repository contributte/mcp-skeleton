<?php declare(strict_types = 1);

namespace App\UI\Home;

use App\UI\BasePresenter;

class HomePresenter extends BasePresenter
{

	public function actionDefault(): void
	{
		$this->template->serverName = 'default';
		$this->template->tools = [
			'calculator_add',
			'calculator_multiply',
		];
		$this->template->resources = [
			'app://config',
			'file://readme',
		];
		$this->template->prompts = [
			'code_review',
			'explain_code',
		];
	}

}
