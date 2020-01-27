<?php

class InvoiceController
{
    public function invoicePage()
    {        
        $view = new View;
        return $view->render("Views/invoice/invoiceToPdf");
    }
}