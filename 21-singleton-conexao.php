<?php
/**
 * Autor  : Rafaela Cristina Alcântara da Silva
 * GitHub : https://github.com/rafaela13c
 * LinkedIn: https://www.linkedin.com/in/rafaela-cas1308/
 *
 * Descrição: Arquivo 21/30 - Gerenciador Central de Conexão (Padrão Singleton)
 */

class Database
{
    private static ?PDO $instancia = null;

    // Construtor privado impede instanciação externa direta da classe
    private function __construct() {}

    public static function getConexao(): PDO {
        if (self::$instancia === null) {
            self::$instancia = new PDO("mysql:host=localhost;dbname=sistema", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }
        return self::$instancia;
    }
}
