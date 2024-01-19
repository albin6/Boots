<?php 
ob_start();
include '../db.php';
$user=$_SESSION['user']['Username'];
$query=  mysqli_query($con, "select *from registration where Email='$user'");
$r6=  mysqli_fetch_array($query);
$id=$_GET['id'];
$qb=  mysqli_query($con, "select *from products where Id='$id'");
$r3=  mysqli_fetch_array($qb);
?>
<!DOCTYPE HTML>
<head>
<title>Boots</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<style>
    .contact-form input[type="number"], input[type="email"], input[type="date"], .contact-form textarea {
    padding: 8px;
    display: block;
    width: 98%;
    background: none;
    border: 1px solid #CACACA;
    outline: none;
    color: #464646;
    font-size: 1em;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    -webkit-appearance: none;
}
</style>

<script>
    function multiply()
    {
        var a1=document.getElementById('price').value;
        var a2=document.getElementById('quantity').value;
        document.getElementById('total').value=a1*a2;
    }
</script>
</head>
<body>
  <div class="wrap">
	
 <div class="main">
    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Make Payment</h2>
                                        <form method="post" action="">
					    	<div>
						    	<span><label>Name</label></span>
                                                        <span><input type="text" name="txtname" value="<?php echo $r6['Name'];?>" readonly="" class="textbox" ></span>
						    </div>
						    <div>
						    	<span><label>E-mail</label></span>
                                                        <span><input type="text" name="email" readonly="" value="<?php echo $user;?>" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Price</label></span>
                                                        <span><input type="text" name="price" readonly="" id="price" value="<?php echo $r3['Price'];?>" class="textbox"></span>
						    </div>
                                                 <div>
						     	<span><label>Quantity</label></span>
                                                        <span><input type="number" name="quantity" required="" id="quantity" class="textbox" onkeyup="multiply();"></span>
						    </div>
                                                 <div>
						     	<span><label>Total</label></span>
                                                        <span><input type="number" name="total" required="" readonly="" id="total" class="textbox"></span>
						    </div>
						   	<div>
						    	<span><label>Card Number</label></span>
                                                        <span><input type="number" name="cardno" id="cnumber" onchange="validate_card()" value="" required="" class="textbox" ></span>
						    <script>
                                            function validate_card()
                                            {
                                            var val=document.getElementById('cnumber').value;
                                            if(val.length<16)
                                            {
                                            alert('Must Enter 16 digit');
                                            }
                                            else if(val.length>16)
                                            {
                                            alert('Must Enter 16 digit');
                                            }
                                            }
                                        </script> 
                                                        </div>
                                            <div>
						    	<span><label>CVV Number</label></span>
                                                        <span><input type="number" name="cvvno" id="cvvno" onchange="validate_cvvno()" value="" required="" class="textbox" ></span>
                                                         <script>
                                            function validate_cvvno()
                                            {
                                            var cvvno=document.getElementById('cvvno').value;
                                            if(cvvno.length<3)
                                            {
                                            alert('Must Enter 3 digit');
                                            }
                                            else if(cvvno.length>3)
                                            {
                                            alert('Must Enter 3 digit');
                                            }
                                            }
                                        </script> 
						    </div>
                                            <div>
						    	<span><label>Expiry Date</label></span>
                                                        <span><input type="date" id="txtDate" name="edate" value="" required="" class="textbox" ></span>
						    </div>
						   <div>
                                                       <span><input type="submit" name="sub" value="Submit"  class="myButton"></span>
						  </div>
					    </form>
                                        <?php 
                                        if(isset($_POST['sub']))
                                        {
                                            $email=$_POST['email'];
                                            $price=$_POST['price'];
                                            $quantity=$_POST['quantity'];
                                            $total=$_POST['total'];
                                            $cardno=$_POST['cardno'];
                                            $cvvno=$_POST['cvvno'];
                                             $edate=$_POST['edate'];
                                            // echo  "insert into payment(Uid,Pid,Price,Quatity,Total,Cardno,Cvv,Expirydate) values ('$email','$id','$price','$quantity','$total','$cardno','$cvvno','$edate')";
                                             $qty=  mysqli_query($con, "insert into payment(Uid,Pid,Price,Quatity,Total,Cardno,Cvv,Expirydate,Status) values ('$email','$id','$price','$quantity','$total','$cardno','$cvvno','$edate','Pending')");
                                             echo '<script>alert("Paid Successfully...");window.location.href="index.php";</script>';
                                        }
                                        ?>
				  </div>
  				</div>
			
			  </div>		
         </div> 
    </div>
 </div>

    <script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>
</body>
</html>

<?php 
ob_flush();
?>