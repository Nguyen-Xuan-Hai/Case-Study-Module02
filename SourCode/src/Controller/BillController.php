<?php

namespace App\Controller;

use App\Model\BillModel;

class BillController
{
    protected $billModel;

    public function __construct()
    {
        $this->billModel = new BillModel();
    }

    public function index()
    {
        // Lấy tất hoá đơn từ DB ra.
        $bills = $this->billModel->getAll();

        include "src/View/bill/bill-details.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/View/bill/bill.php";
        } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $Trip_date = $_POST['Trip_date'];
            $Description = $_POST['Description'];
            $Driver_id = $_POST['Driver_id'];
            $Usr_id = $_POST['Usr_id'];
            $Taxi_id = $_POST['Taxi_id'];
            $Strt_time = $_POST['Strt_time'];
            $End_time = $_POST['End_time'];
            $Location_start = $_POST['Location_start'];
            $Location_end = $_POST['Location_end'];
            $Customer_number = $_POST['Customer_number'];
           $this->billModel->creatTrip($Trip_date,$Description,$Driver_id,$Usr_id,$Taxi_id,$Strt_time,$End_time,$Location_start,$Location_end,$Customer_number);
            $Bill_date = $_POST['Bill_date'];
            $Amount = $_POST['Amount'];
            $Discount = $_POST['Discount'];
            $Total = $_POST['Total'];
            $Usr_id = $_POST['Usr_id'];
            $Trip_id = $_POST['Trip_id'];
            $this->billModel->createBill($Bill_date, $Amount, $Discount, $Total, $Usr_id, $Trip_id);
            $this->redirectToList();
        }
    }
    private function redirectToList()
    {
        $billModel = $this->billModel->getAll();
        header("location:index.php?page=bill-details");
    }
    public function delete(){

    }
}