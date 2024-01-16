<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
	
	# Connect to the database.
	  require ('connect_db.php'); 

    $q = "SELECT * FROM products;" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) 
		
		{
echo '
<h1>Read Items</h1>
<table class="table">
<thead>
<tr><th>Item ID</th><th>Item Name</th><th>Description</th><th>Image</th><th>Price</th></tr></thead><tbody>';
			
while($row = mysqli_fetch_array($r,MYSQLI_ASSOC))
		{
echo'<tr>
<td>'.$row['item_id'].' </td><td>'.$row['item_name'].' </td><td>'.$row['item_desc'].'</td><td><img src="'.$row['item_img'].'" alt="product" width="50"   height="50"></td><td>£'.$row['item_price'].'</td>
			<td><a href="delete.php?id='.$row['item_id'].'">Delete Record</a></td>';
		}
		
echo'</tr></table></br><br><a href="create.php">Add Records</a>  |  <a href="read.php">Read Records</a>  |  <a href="update.php">Update Record</a>  | ';}
	
# Close database connection.
  mysqli_close($link); 
  exit();
?>

<?php
# Open database connection.
require ( 'connect_db.php' ) ;

if ( isset( $_GET['item_id'] ) ) $id = $_GET['item_id'] ;    
    $sql = "DELETE FROM products WHERE item_id='$id'";
 if ($link->query($sql) === TRUE) {
       header("Location: read.php");
    } else {
        echo "Error deleting record: " . $link->error;
    }

   ?> 
    
</body>
</html>