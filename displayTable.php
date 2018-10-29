

<!DOCTYPE html>
<html>
    <head>
        <title> Save data</title>
    </head>
    <body align="center">
	 <h2><b> <u>Select the Courses offered by Us</u></b><br/></h2>
        <table border="1" align="center">
            <tr>
                <td><b><u>Course ID</b></u></td>
                <td><b><u>Course Name</b></u></td>
                <td><b><u>Course Type</b></u></td>
            </tr>
			
<?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
?>

            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["courseType"]; ?></td>
            </tr>
			
<?php
     $i++;
    }
?>

        </table>
    </body>
</html>