<?php 

namespace Controllers\Servicios;

use Controllers\PublicController;
use Views\Renderer;
use Dao\Servicios\Servicios as ServiciosDao;

class Ofertas extends PublicController{
    public function run() :void
    {
        $viewData["products"] = ServiciosDao::getOfferProducts();
        Renderer::render("servicios/ofertas", $viewData);
    }
}