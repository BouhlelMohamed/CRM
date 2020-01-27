<?php

require_once './Models/PurchaseManager.php';

class PurchaseController
{
    public function purchasePage()
    {
        $purchaseManager = new PurchaseManager;

        $view = new View;

        return $view->render("Views/purchase/showAllPurchases", array("purchases"   =>  $purchaseManager->showAllPurchases()));
    }

    public function insertPurchasePage()
    {
        $purchaseManager = new PurchaseManager;
        $purchaseManager->insertPurchase();
        header("Location: purchase");

    }
    public function exportPurchasesInPdfPage()
    {
        $purchaseManager = new PurchaseManager;
        $purchaseManager->insertPurchase();
        header("Location: purchase");

    }
}