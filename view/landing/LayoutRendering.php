<?php
/**
 * Created by PhpStorm.
 * user: Fabian
 * Date: 05.06.18
 * Time: 17:07
 */

namespace view;


class LayoutRendering
{

    public static function basicLayout(TemplateView $contentView){
        $view = new TemplateView("layout.php");
        $view->header = (new TemplateView("landingheader.php"))->render();
        $view->content = $contentView->render();
        $view->footer = (new TemplateView("landingfooter.php"))->render();
        echo $view->render();
    }

}