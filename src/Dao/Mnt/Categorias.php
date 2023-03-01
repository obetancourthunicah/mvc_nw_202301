<?php
namespace Dao\Mnt;

use Dao\Table;
/*
`catid` BIGINT(8) NOT NULL AUTO_INCREMENT,
`catnom` VARCHAR(45) NULL,
`catest` CHAR(3) NULL DEFAULT 'ACT',
 */
/**
 * Undocumented class
 */
class Categorias extends Table{
    /**
     * Crea un nuevo registro de categoria.
     *
     * @param string $catnom description
     * @param string $catest description
     *
     * @return int
     */
    public static function insert(string $catnom, string $catest="ACT"): int
    {
        $sqlstr = "INSERT INTO categorias (catnom, catest) values(:catnom, :catest);";
        $rowsInserted = self::executeNonQuery(
            $sqlstr,
            array("catnom"=>$catnom, "catest"=>$catest)
        );
        return $rowsInserted;
    }
    public static function update(){

    }
    public static function delete(){

    }
    public static function findAll(){
        $sqlstr = "SELECT * from categorias;";
        return self::obtenerRegistros($sqlstr, array());
    }
    public static function findByFilter(){

    }
    public static function findById(){

    }
}
