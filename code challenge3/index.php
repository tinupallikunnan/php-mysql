<!doctype html>
<html lang="en">
  <head>
<title>Create Product</title>
  </head>
  <body>
<form action="create.php" method="post" enctype="multipart/form-data">
  <label for="item_name">Name:</label>
  <input type="text" id="item_name" name="item_name" required value="<?php if (isset($_POST['item_name'])) echo $_POST['item_name']; ?> "> <br>
<br>
  <label for="item_desc">Description:</label>
  <input id="description" name="item_desc" required value="<?php if (isset($_POST['item_desc'])) echo $_POST['item_desc']; ?>"></textarea><br>
<br>
  <label for="item_img">Image URL:</label>
   <input type="text" id="imageURL" name="item_img" required value="<?php if (isset($_POST['item_img'])) echo $_POST['item_img']; ?>"><br>
<br>
<label for="item_price">Price:</label>
   <input type="text" id="price" name="item_price" min="0" step="0.01" required value="<?php if (isset($_POST['item_price'])) echo $_POST['item_price']; ?>"><br>
<br>
<input type="submit" value="Submit">
</form>
</body>
</html>