<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

class Home extends Page
{
    /**
     * Método reponsável por retornar o conteúdo (view) da nossa home
     * @return string
     */
    public static function getHome()
    {
        $obOrganization = new Organization;

        // View da home
        $content = View::render('pages/home', [
            'name'          => $obOrganization->name,
            'description'   => $obOrganization->description,
            'site'          => $obOrganization->site
        ]);

        // Retorna a view da página
        return self::getPage('WDEV - Home', $content);
    }

}
