<?php
/**
 * PHP Version 7.2
 * NW202301
 *
 * @category Controller
 * @package  Controllers\NW202301
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  Comercial http://
 * @version  CVS:1.0.0
 * @link     http://url.com
 */
namespace Controllers\NW202301;

// ---------------------------------------------------------------
// Sección de imports
// ---------------------------------------------------------------
use Controllers\PublicController;
use Views\Renderer;

/**
 * DateDemo
 *
 * @category Public
 * @package  Controllers\NW202301;
 * @author   Orlando J Betancourth <orlando.betancourth@gmail.com>
 * @license  MIT http://
 * @link     http://
 */
class DateDemo extends PublicController
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
        $dateValue = new \DateTime("now", new \DateTimeZone("UTC"));
        $viewData["dateISO"] = $dateValue->format(\DateTimeInterface::W3C);
        $viewData["date"] = $dateValue->format(\DateTimeInterface::ATOM);
        $viewData["dateRFC"] = $dateValue->format(\DateTimeInterface::RFC7231);
        $viewData["dateCustom"] = $dateValue->format('Ymd');
        Renderer::render("nw202301/datedemo", $viewData);
    }
}

?>
