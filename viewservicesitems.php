<html>
<head>
<title>Check Box Demo</title>
<link rel="stylesheet" href="css/checkbox.css" />
</head>
<body>
<div class="container">
<div class="main">
<h2>Select the Services you want:</h2><hr/>
<form action="checkbox.php" method="post"> \checkbox form to get the values
<label class="heading"></label><br/><br/>
<input type="checkbox" name="check_list[]" value="Website Development"><label>Website Development</label><br/>
<input type="checkbox" name="check_list[]" value="Data Support"><label>Data Support</label><br/>
<input type="checkbox" name="check_list[]" value="Online Marketing"><label>Online Marketing</label><br/>
<input type="checkbox" name="check_list[]" value="Business Development"><label>Business Development</label><br/>
<input type="checkbox" name="check_list[]" value="Responsive Themes"><label>Responsive Themes</label><br/><br/>
<input type="submit" name="submit" Value="Submit"/> \On submitting the form,user will be redirected to "chckbox.php"
<br/><br/>
<h2>Update or Delete existing data.</h2><hr/><br/>\links to edit or delete existing data in database
<a class="link1" href=checkbox-edit.php>Edit</a><br/><br/><br/>
<a class="link2" href=checkbox-delete.php>Delete</a>
</form>
</div>
<br/>
<!-- Div Fugo is advertisement div-->
<div class="fugo">
<a href="https://www.formget.com/app/"><img src="images/formGetadv-1.jpg" /></a>
</div>
</div>
</body>

</html>