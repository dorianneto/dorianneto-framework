<?php

namespace controllers;

use models\User;
use app\View;

class UserController
{
	/**
	 * View padrão
	 */
	const VIEW_DEFAULT = 'user';

	/**
	 * Métodos de ações do usuário.
	 */
	public function index()
	{
		$User = new User;
		$index = $User->index();

		$View = new View(self::VIEW_DEFAULT);
		$View->setData($index);
		$View->showContent();
	}
}
