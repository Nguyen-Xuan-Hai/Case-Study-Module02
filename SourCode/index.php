<?php
ob_start();

use App\Controller\BillController;

require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$billController = new BillController();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <!-- <meta http-equiv="refresh" content="0"> -->

    <title>Document</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
<a href="index.php?page=bill-details">Danh sach hoa don chi tiet</a><br>
<a href="index.php?page=bill">Tạo hóa đơn mới</a>

<?php
switch ($page) {
    // bill
    case 'bill-details':
        $billController->index();
        break;
    case 'bill':
        $billController->create();
        break;

}
ob_end_flush();
?>
</body>
</html>