<?php
/**
 * PHP Version 7.2
 * Mnt
 *
 * @category Controller
 * @package  Controllers\Mnt
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 * @version  CVS:1.0.0
 * @link     http://url.com
 */
 namespace Controllers\Mnt;

// ---------------------------------------------------------------
// Sección de imports
// ---------------------------------------------------------------
use Controllers\PrivateController;
use Views\Renderer;

/**
 * Journals
 *
 * @category Public
 * @package  Controllers\Mnt;
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @link     http://
 */
class Journals extends PrivateController
{
    /**
     * Runs the controller
     *
     * @return void
     */
    public function run():void
    {
        // code
        $viewData = array();
        $viewData["journals"] = \Dao\Mnt\Journals::getAll();
        /* 
        journals_view
        journals_edit
        journals_delete
        journals_new
        */
        $viewData["journals_view"] = $this->isFeatureAutorized('mnt_journals_view');
        $viewData["journals_edit"] = $this->isFeatureAutorized('mnt_journals_edit');
        $viewData["journals_delete"] = $this->isFeatureAutorized('mnt_journals_delete');
        $viewData["journals_new"] = $this->isFeatureAutorized('mnt_journals_new');

        Renderer::render("mnt/journals", $viewData);
    }
}

?>
