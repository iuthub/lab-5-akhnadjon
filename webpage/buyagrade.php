*U1710240	
*Sanakulov Akhmadjon
*group № CSE 17-4
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>

		<h1>Buy Your Way to a Better Education!</h1>

		<p>
			The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
		</p>
		
		<hr/>
		
		<h2>Give Us Your Money</h2>
		<form action="sucker.php" method="post">
			<p>Name</p>
			<input type="text" placeholder="Write your name" name="name" value="<?=isset($_GET['name']) ? $_GET['name'] : ""?>">
			<p>Section</p><br>	
			<select name="section">
				<option <?=(isset($_GET['section']) and $_GET['section']=='MA')?"selected" : ""?>>MA</option>
				<option <?=(isset($_GET['section']) and $_GET['section']=='MH')?"selected" : ""?>>MH</option>
			</select>
			<p>Credit Card</p>
			<input type="text" placeholder="Write Smth" name="credit_card" value="<?=isset($_GET['credit_card']) ? $_GET['credit_card'] : ""?>"><br>

			<input type="radio" name="card_type" value="visa" <?=(isset($_GET['card_type']) and $_GET['card_type']=='visa')?"checked" : ""?> >Visa

  			<input type="radio" name="card_type" value="mastercard" <?=(isset($_GET['card_type']) and $_GET['card_type']=='mastercard')?"checked" : ""?>>Master Card
		<div>
			<input type="submit" value="I am a giant sucker."></input>
		</div>
		</form>
		
		
	</body>
</html>