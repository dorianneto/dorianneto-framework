<?php

namespace app;

class View
{
	/**
	 * Diretório base da pasta onde todas as views do sistema se encontram.
	 */
	const PATH_BASE = 'views';

	/**
	 * Propriedade que guarda o nome do arquivo.
	 * @var string Nome do arquivo usado pela view.
	 */
	private $file;

	/**
	 * Dados que o modelo retorna para a view.
	 * @var mix
	 */
	private $data;

	/**
	 * Captura o nome do arquivo que foi solicitado pelo cliente.
	 * @param string $file Arquivo.
	 */
	public function __construct($file)
	{
		$this->file = $file;
	}

	/**
	 * Guarda os dados armazenados na classe View.
	 * @param array $data Dados retornados do model.
	 */
	public function setData(Array $data)
	{
		$this->data = $data;
	}

	/**
	 * Exibe os dados armazenados na classe View.
	 * @return array Retorna o valor que foi retornado pelo model.
	 */
	public function getData()
	{
		return $this->data;
	}

	/**
	 * Exibe o conteúdo e página solicitado pelo usuário.
	 */
    public function showContent()
    {
    	if (file_exists(self::PATH_BASE . DS . $this->file . '.php')) {
    		require_once self::PATH_BASE . DS . $this->file . '.php';
    	}
    }
}
