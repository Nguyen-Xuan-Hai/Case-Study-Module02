<table class="table-list">
    <tr>
        <th>STT</th>
        <th>Trip_id</th>
        <th>Trip_date</th>
        <th>Description</th>
        <th>Driver_id</th>
        <th>Usr_id</th>
        <th>Taxi_id</th>
        <th>Strt_time</th>
        <th>End_time</th>
        <th>Location_start</th>
        <th>Location_end</th>
        <th>Customer_number</th>
    </tr>


    <?php foreach ($bills as $key => $bill): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $bill['Trip_id'] ?></td>
            <td><?php echo $bill['Trip_date'] ?></td>
            <td><?php echo $bill['Description'] ?></td>
            <td><?php echo $bill['Driver_id'] ?></td>
            <td><?php echo $bill['Usr_id'] ?></td>
            <td><?php echo $bill['Taxi_id'] ?></td>
            <td><?php echo $bill['Strt_time'] ?></td>
            <td><?php echo $bill['End_time'] ?></td>
            <td><?php echo $bill['Location_start'] ?></td>
            <td><?php echo $bill['Location_end'] ?></td>
            <td><?php echo $bill['Customer_number'] ?></td>
        </tr>
    <?php endforeach; ?>

</table>