<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Driver</th>
        <th>Date</th>
        <th>Description</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Location Start</th>
        <th>Location End</th>
        <th>Customer Number</th>
        <th>Bill Date</th>
        <th>Amount</th>
        <th>Discount</th>
        <th>Total</th>
    </tr>


    <?php foreach ($bills as $key => $bill): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=show-bill&id=<?php echo $bill['Trip_id'] ?>">
                    <?php echo 'DH-' . $bill['Trip_id'] ?>
                </a>
            </td>
            <td><?php echo $bill['Trip_date'] ?></td>
            <td><?php echo $bill['Description'] ?></td>
            <td><?php echo $bill['Strt_time'] ?></td>
            <td><?php echo $bill['End_time'] ?></td>
            <td><?php echo $bill['Location_start'] ?></td>
            <td><?php echo $bill['Location_end'] ?></td>
            <td><?php echo $bill['Customer_number'] ?></td>
            <td><?php echo $bill['Bill_date'] ?></td>
            <td><?php echo $bill['Amount'] ?></td>
            <td><?php echo $bill['Discount'] ?></td>
            <td><?php echo $bill['Total'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>