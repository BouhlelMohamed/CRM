<?php

class ScrapingController
{
    public function scrapingPage()
    {  
        $view = new View;
        return $view->render("Views/scraping/scrapingShow");
    }
}