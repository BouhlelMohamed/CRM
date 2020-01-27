<?php

require_once('Database.php');
require_once('Purchase.php');

class PurchaseManager
{
    public function showAllPurchases()
    {
        $query = Database::getPdo()->prepare("SELECT * FROM purchases");

        $query->execute();

        $allPurchases = $query->fetchAll();

        $purchases = array();

        $index = 0;

        foreach($allPurchases as $v)
        {
            $purchase = new Purchase;
            $purchase->setId($v['id']);
            $purchase->setName($v['name']);
            $purchase->setPrice($v['price']);
            $purchase->setDate($v['date']);
            $purchases[$index] = $purchase;
            $index++;

        }

        return $purchases;
    }


    public function insertPurchase()
    {
        $query = Database::getPdo()->prepare("INSERT INTO purchases (name, price, date) VALUES (:name, :price, :date)");

        $query->execute([
            'name'  =>  $_POST['name'],
            'price' =>  $_POST['price'],
            'date' =>  $_POST['date']

        ]);
    }

    public function exportPurchaseInPdf()
    {
        
    }
}