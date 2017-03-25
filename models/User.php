<?php

namespace models;

use database\Connect;

class User extends Connect
{
	/**
	 * Nome da tabela do banco de dados.
	 */
	const TABLE = 'users';

	/**
	 * Abre conexão com o banco de dados.
	 */
	public function __construct()
	{
		parent::__construct(self::TABLE);
	}

	/**
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->select();
	}
}
