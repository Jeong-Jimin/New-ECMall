<?php

/**********************************************************************/
/**********************************************************************/
/******************** Product Upload Function *************************/
/**********************************************************************/
/**********************************************************************/

include '../Model/db_Processing.php';

?>
<head>
<link rel="stylesheet" href="./main.min.css">
</head>

<h1>Product Register -for admin- </h1>

<form action="../Controller/Controller.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="function" value="product_register"/>

  <tr>
<td>
  Product Name
</td>
<td>
  <input type="text" name="p_name" size="30"/>
</td>
  </tr>
<br />

  <tr>
<td>
  Product Price
</td>
<td>
  <input type="text" name="p_price" size="30"/>
</td>
  </tr>
<br />

<tr>
<td>
Product Memo
</td>
<td>
<textarea name="p_memo"></textarea>
</td>
</tr>
<br />

  <tr>
<td>
  Product Image
</td>
<td>
  <input type="file" name="p_img" /><br />
  (*Drag-and-drop available)
</td>
  </tr>
<br /><br /><br />

  <input type="submit" value="Register"/>


</form>
