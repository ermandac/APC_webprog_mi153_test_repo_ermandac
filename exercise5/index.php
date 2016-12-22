<?php
include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM users WHERE user_id=".$_GET['delete_id'];
 mysqli_query($con, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>

<DOCTYPE html>
<html>
	
	<head>
	<title>My Website</title>
	<link href="mywebpage.css" type="text/css" rel="stylesheet" />
	
	
	
	<script type="text/javascript">
	var popit = true;
	window.onbeforeunload = function()
	{ 
		if(popit == true)
		{
			popit = false;
            return "Are you sure you want to leave?"; 
		}
    }
	function edit_id(id)
	{
		if(confirm('Sure to edit ?'))
		{
			window.location.href='edit_data.php?edit_id'+id;
		}
	}
		
	function delete_id(id)
	{
		if(confirm('Sure to Delete ?'))
		{
			window.location.href='index.php?delete_id='+id;
		}
	} 
	</script>
		</head>
		<div id="nav">
        <div id="nav_wrapper">
                 <ul>
                    <li><a href="#">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
                </ul>
        </div>
    </div>
		
	<div id="tableform">
	    <table align="center">
			<tr>
				<th colspan="5"><a href="add_data.php">Register Here</a></th>
			</tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>City Name</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th colspan="2">Operations</th>
			</tr>
		<?php
			$sql_query="SELECT * FROM guestform";
			$result_set=mysqli_query($con, $sql_query);
			while($row=mysqli_fetch_row($result_set))
				{
		?>
			<tr>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td><?php echo $row[5]; ?></td>
				<td><?php echo $row[6]; ?></td>
				<td align="center"><a href="javascript:edit_id('<?php echo $row[0]; ?>')"><img src="edit.png" align="EDIT" /></a></td>
				<td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="delete.png" align="DELETE" /></a></td>
			 </tr>
        <?php
				}
		?>
    </table>
	</div>
</html>
