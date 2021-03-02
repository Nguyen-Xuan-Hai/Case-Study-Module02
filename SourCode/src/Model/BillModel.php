<?php


namespace App\Model;


class BillModel
{
    protected $database;

    public function __construct()
    {
        $db = new DBConnect();
        $this->database = $db->connect();
    }
    public function getAll()
    {
        $sql = "SELECT * FROM TRIP_DETAILS";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
//    public function getAll()
//    {
//        $sql = "SELECT * FROM TRIP_DETAILS JOIN BILL_DETAILS ON TRIP_DETAILS.Trip_id = BILL_DETAILS.Trip_id";
//        $stmt = $this->database->query($sql);
//        return $stmt->fetchAll();
//    }

    public function createTrip($Trip_date, $Description, $Driver_id, $Usr_id, $Taxi_id, $Strt_time, $End_time,$Location_start,$Location_end,$Customer_number)
    {
        $sql = "INSERT INTO TRIP_DETAILS(Trip_date,Description,Driver_id,Usr_id,Taxi_id,Strt_time,End_time,Location_start,Location_end,Customer_number) VALUES (:Trip_date,:Description,:Driver_id,:Usr_id,:Taxi_id,:Strt_time,:End_time,:Location_start,:Location_end,:Customer_number);";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":Trip_date", $Trip_date);
        $stmt->bindParam(":Description", $Description);
        $stmt->bindParam(":Driver_id", $Driver_id);
        $stmt->bindParam(":Usr_id", $Usr_id);
        $stmt->bindParam(":Taxi_id", $Taxi_id);
        $stmt->bindParam(":Strt_time", $Strt_time);
        $stmt->bindParam(":End_time", $End_time);
        $stmt->bindParam(":Location_start", $Location_start);
        $stmt->bindParam(":Location_end", $Location_end);
        $stmt->bindParam(":Customer_number", $Customer_number);
        $stmt->execute();
        return $stmt->fetchAll();
    }
//    public function createBill($Bill_date, $Amount, $Discount, $Total, $Usr_id, $Trip_id)
//    {
//        $sql = "INSERT INTO BILL_DETAILS(Bill_date,Amount,Discount,Total,Usr_id,Trip_id) VALUES (:Bill_date,:Amount,:Discount,:Total,:Usr_id,:Trip_id);";
//        $stmt = $this->database->prepare($sql);
//        $stmt->bindParam(":Bill_date", $Bill_date);
//        $stmt->bindParam(":Amount", $Amount);
//        $stmt->bindParam(":Discount", $Discount);
//        $stmt->bindParam(":Total", $Total);
//        $stmt->bindParam(":Usr_id", $Usr_id);
//        $stmt->bindParam(":Trip_id", $Trip_id);
//        $stmt->execute();
//        return $stmt->fetchAll();
//    }

}