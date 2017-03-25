<?php
/**
 * Framework desenvolvido com foco em estudo de conceitos
 *
 * @author Dorian Neto <doriansampaioneto@gmail.com>
 * @copyright (c) 2013
 * @version 1.0
 */

if (phpversion() < 5.3){
    echo "Você possui uma versão do php desatualizada. Por favor, entre em contato com o suporte de hospedagem e
    solicite que o php instalado no servidor seja atualizado para a versão 5.3+";
    exit;
}

session_start();

/*
 * Constantes para inicialização do sistema.
 */
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('ROOT_APP', dirname(__FILE__) . DS . 'app' . DS);
define('ROOT_PUB', dirname(__FILE__) . DS . 'public' . DS);
define('ROOT_CONTROLLER', dirname(__FILE__) . DS . 'controllers' . DS);

/*
 * Autoload do sistema.
 */
require_once ROOT_APP . 'autoload.php';
