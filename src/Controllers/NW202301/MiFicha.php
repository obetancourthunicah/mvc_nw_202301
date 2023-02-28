<?php
namespace Controllers\NW202301;

use Controllers\PublicController;
use Views\Renderer;

class MiFicha extends PublicController{

    public function run() :void
    {
        $viewData = array(
            "nombre" => "Orlando J Betancourth",
            "email" => "obetancourthunicah@gmail.com",
            "title" => "Software Engineer"
        );

        Renderer::render("nw202301/miFicha", $viewData);
    }
}

?>
