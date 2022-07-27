<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>ONLINE FOOD ORDERING SYSTEM</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<link rel="stylesheet" href="styles/registration.css" type="text/css">
<style>
table { border-collapse: collapse; width: 100%;}
th, td {text-align: left;padding: 8px;}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Food Ordering System</a></h1>
    </div>
    <div class="clear"></div>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container">
    <!-- content body -->
    <aside id="left_column">
      <section>
        <!-- article 1 -->
        <article>
          <h2>Login Form</h2>
			<form action="login.php" style="border:0px solid #ccc" method="POST">
			  <div class="container">
				<label><b>Email</b></label>
				<input type="text" placeholder="Enter Email" name="email" required>

				<label><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>

				<input type="checkbox" checked="checked"> Remember me

				<div class="clearfix">
				<button type="submit" class="signupbtn">Login</button>
				  <button type="button" class="cancelbtn"><a href="Creg.html" style="background:none;color:white">Register</a></button>
				</div>
			  </div>
			</form>
        </article>
		</section>
    </aside>
    <!-- main content -->
    <div id="content">
      <!-- section 1 -->
      <article>
          <h2><a href="#">About Us</a></h2>
          <address>
          
          </address>
          <p>
		  In the current generation, no business will be expanded unless they work online. Most of the people has internet at the fingertips. Food business is one of the fast growing business with a lot of scope to expand online. There are particularly several problems faced by the public in placing an order online such as difficulty in placing the order online, viewing the menu available, tracking the ordered food etc. The current software enables the user to do the difficult task easily. 
		  <br/><br/><br/>
		  The customer who visits the website for ordering the food online will enter his basic details such as his date of birth, name, address, phone number and gender. The customer is allowed to see the menu items in the web page thereby allowing him to choose one or more items which will be placed in the basket for ordering. The system records the details in mysql database so that it will be easy to retrieve later. The users of the system also include employees who will take the order and deliver the order to the customer’s address by using a vehicle. 
		  <br/><br/>
		  The food business in restaurants is being carried out in the same fashion for so many decades. In the restaurants, when the customers visit, they will read the large menu cards which just has the name of the item and price. They have to decide in moments time and place the order just to wait in the queue for getting the ordered items on their table. Sometimes, the waiting time is so huge that the customers will actually lose interest in the item. Moreover some customers will be in their office or busy to come physically to restaurant and eat.
		  <br/><br/>
		  To ease the process of ordering the items, giving description of each item and getting the item on the table the online food ordering system is designed. Some of the common problems are listed below.
		  </p>
        </article>
    </div>
    <!-- / content body -->
    <div class="clear"></div>
  </div>
</div>
</body>
</html>
