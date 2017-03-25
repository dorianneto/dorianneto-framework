<?php

namespace database;

use PDO;

abstract class Connect extends PDO
{
	/**
	 * DSN usado para efetuar conexão com o servidor e o banco de dados.
	 * @var string DSN
	 */
	private $dsn = 'mysql:dbname=framework;host=127.0.0.1';

	/**
	 * Tabela padrão do objeto que utilizar esta classe.
	 * @var string Tabela
	 */
	private $table;

	/**
	 * Usuário do banco de dados.
	 */
	const USER = 'root';

	/**
	 * Senha do usuário do banco de dados.
	 */
	const PASS = null;

	/**
	 * Conexão com o banco de dados.
	 * @param string $tabela
	 */
	public function __construct($tabela)
	{
		try {
			parent::__construct($this->dsn, self::USER, self::PASS, array(
				PDO::MYSQL_ATTR_INIT_COMMAND => "set names 'utf8'"
			));
			$this->setTable($tabela);
		} catch (PDOException $error) {
			echo 'Error: {$error->getMessage()}';
		}
	}

	/**
	 * Retorna a tabela que será usada.
	 * @return string Nome da tabela
	 */
	private function getTable()
	{
		return $this->table;
	}

	/**
	 * Seta a tabela padrão do objeto que utilizar esta classe.
	 * @param string $tabela Tabela do banco de dados
	 */
	private function setTable($table)
	{
		$this->table = $table;
	}

	/**
	 * [select description]
	 * @param  array|null $columns [description]
	 * @return [type]              [description]
	 */
	public function select(array $columns = null)
	{
		$columns = !empty($columns) ? implode(',', $columns) : '*';

		$result = $this->prepare("select $columns from {$this->getTable()}");
		$result->execute();

		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	/**
	 * [insert description]
	 * @return [type] [description]
	 */
	public function insert()
	{
		// Body
	}

	/**
	 * [update description]
	 * @return [type] [description]
	 */
	public function update()
	{
		// Body
	}

	/**
	 * [delete description]
	 * @return [type] [description]
	 */
	public function delete()
	{
		// Body
	}
}
