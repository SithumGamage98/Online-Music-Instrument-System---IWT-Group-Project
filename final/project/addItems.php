<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/offer.css">
	</head>
	<body>

		<h2> Offers Products Hadeler</h2>
		<div class="profil">
		<img src="images/profile.png" alt="Trulli" width="200" height="300">
		</div>

		<form class="form-style-9" method="post" action="submitaAddItems.php">
		<ul>
		 <li>
		   <input type="text" name="field1" class="field-style field-split align-left" placeholder="Item Name"/>
		   <input type="text" name="field2" class="field-style field-split align-right" placeholder="Item Code"/> 
		 </li>
		 <li>
			<input type="text" name="field3" class="field-style field-split align-left" placeholder="Price"/>
			<input type="number" name="field4" class="field-style field-split align-left" placeholder="Quantity"/>
		 </li>
		 <li>
			<textarea name="field5" class="field-style" placeholder="Description"></textarea>
		 </li>
		 <li>
		 <input type="submit" value="Add Item"/>
		 </li>
		</ul>
		</form>

        </div>
              
	</body>
</html>