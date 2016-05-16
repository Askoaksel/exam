<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Date</td>
        <td>Location</td>
        <td>Aperature</td>
		<td>Lens</td>
        <td>Delete</td>
    </tr>
    </thead>
    <tbody>
<?php

$query = 'SELECT * FROM ' . $tableName . ' WHERE deleted ="0";';

$res = mysqli_query($con, $query);
if($res){
    if(mysqli_num_rows($res)){
        while($row = mysqli_fetch_assoc($res)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>'.'<td>'.$row['user'].'</td>'.'<td>'.$row['date_taken'].'</td>'.'<td>'.$row[''].'</td>'.'<td>'.$row['location'].$row['aperature'].$row['lens'].'</td>'.'<td><input type="submit" name="delete" value="delete: ' . $row['id'] . '"/></td>';
            echo '</tr>';
        }
    }
}

?>

    </tbody>
</table>
