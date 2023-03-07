<?php
namespace Controllers\Mnt;

use Controllers\PublicController;
use Views\Renderer;

class Categorias extends PublicController {
    public function run() :void
    {
        $viewData = array(
            "edit_enabled"=>true,
            "delete_enabled"=>true,
            "new_enabled"=>true
        );
        $viewData["categorias"] = \Dao\Mnt\Categorias::findAll();
        Renderer::render('mnt/categorias', $viewData);
    }
}
?>
