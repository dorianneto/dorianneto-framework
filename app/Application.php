<?php

namespace app;

use lib\Auth;

class Application
{
	/**
	 * Armazena a página solicitada pelo cliente.
	 * @var string
	 */
	private $page;

	/**
	 * Armazena a ação solicitada pelo cliente.
	 * @var string
	 */
	private $action;

	/**
	 * Verifica se existe um usuário logado e carrega as rotas.
	 */
	public function __construct()
	{
		Auth::isLogged();
		$this->loadRoute();
	}

	/**
	 * Armazena a solicitação de página e/ou ação feita pelo cliente em propriedades do objeto.
	 * @return void
	 */
	private function loadRoute()
	{
		$this->page = isset($_GET['page']) && !empty($_GET['page']) ?
		$_GET['page'] : null;

		$this->action = isset($_GET['action']) && !empty($_GET['action']) ?
		$_GET['action'] : null;
	}

	/**
	 * Verifica os dados da página e ação passados pelo usuário e seleciona as respectivas ações do sistema.
	 * @return void
	 */
	public function dispatcher()
	{
		if (file_exists(ROOT_CONTROLLER . ucfirst($this->page) . 'Controller.php')) {
			if (class_exists("controllers\\{$this->page}Controller")) {
				$page = $this->page;
				$page = "\\controllers\\{$page}Controller";
				$controller = new $page();
				if (method_exists($controller, $this->action)) {
					$action = $this->action;
					$controller->$action();
				}
			}
		}
	}
}
