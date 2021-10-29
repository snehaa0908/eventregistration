<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-image:url(https://img.freepik.com/free-vector/hand-painted-watercolor-tropical-leaves-summer-background_23-2148936206.jpg?size=626&ext=jpg&ga=GA1.2.830616330.1623456000);
  background-size:cover;
}
form {border: 3px solid #f1f1f1;}

input[type=text] {
  text-align:center;
  justify-content:center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=password]{
  text-align:center;
  justify-content:center;
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;

}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 58%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  text-align:center;
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2>Login Form</h2>

<form action="#" method="post" style="background-color:#ddf5e7">
  <div class="imgcontainer">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLg7YYue_VyRsQLCwmguYP8nSLBwe24G8WgqJr8i_YxHwyHXbn9wqkZXAwdAvSGF9kVMk&usqp=CAU" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter email" name="m_user" required>
<br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="m_pass" required>
        
    <button type="submit" name="login">Login</button><br>
    Don't have an account?<a class="btn btn-link" href="signin.php"><b>SIGN IN</b></a>
   
</form>
<br><br><br>
<!-- Footer -->
<div class="foot">
<footer class="page-footer font-small cyan darken-3">

  <!-- Footer Elements -->
  <div class="container">

    <!-- Grid row-->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-12 py-5">
        <div class="mb-5 flex-center">
<div class="footeralign">
          <!-- Facebook -->
          <a class="fb-ic"href="https://www.facebook.com/sairamec/" >
            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"style="padding-left:30px;" > </i>
          </a>&nbsp;
          <!-- Twitter -->
          <a class="tw-ic"href="https://twitter.com/sairam_ec?lang=en">
            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i> 
          </a> &nbsp; &nbsp;
          <!-- Google +-->
          <a class="gplus-ic"href="https://sairam.edu.in/">
            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a> &nbsp; &nbsp;
          <!--Linkedin -->
          <a class="li-ic"href="https://www.linkedin.com/school/sri-sairam-engineering-college/?originalSubdomain=in">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a> &nbsp; &nbsp;
          <!--Instagram-->
          <a class="ins-ic"href="https://www.instagram.com/sairamec/?hl=en">
            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"></i>
          </a> &nbsp; &nbsp;
          <!--Pinterest-->
          <a class="pin-ic"href="https://in.pinterest.com/pin/63050463505633367/">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
          </a>
</div>
        </div>
      </div>
      <br><br>
      <!-- Grid column -->
      <div class="col-md-4 footer-item last-item">
            
            <div class="contact-form">
              <form id="contact footer-contact" action="" method="post"style="background-color:#660033;">
              <br><h2>WRITE TO US</h2>
                <div class="row"><br>
                  <div class="col-lg-12 col-md-12 col-sm-12" >
                      <input name="name"  type="text" class="form-control" id="name" placeholder="Full Name" required="" style="width: 300px;height: 30px;">
                  </div><br>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]@[^ @]" placeholder="E-Mail Address" required=""style="width: 300px;height: 30px;">            
                  </div><br>
                  <div class="col-lg-12">
                      <button type="submit" id="form-submit" class="filled-button"style="width: 150px;height: 30px;"><a href="mailto:snehaasundarajan@gmail.com" style="color: black;text-decoration: none;"><b>Send Message</b></a></button>
                  </div>
                  <br>
                </div>
              </form>
            </div>
          </div>
    </div>
    <!-- Grid row-->

  </div>
  <!-- Footer Elements -->

</footer>
<!-- Footer --></div>

</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","events");
if ($conn-> connect_error){
die("Connection Failed:". $conn-> connect_error);
}
if(isset($_POST['login']))
{
session_start();
$_SESSION['email']=$_POST['m_user'];
$name=$_POST['m_user'];
$password=$_POST['m_pass'];
$sql = "SELECT mail,pass from login";
$i=0;
$result= $conn-> query($sql);
	if($result-> num_rows > 0){
		while($row = $result-> fetch_assoc()){
            if($name=='admin@gmail.com' and $password=='Admin123$')
            {
			header("Refresh:0;url=indexadmin.php");
            exit();

            }
		if($row['mail']==$name and $row['pass']==$password){
			header("Refresh:0;url=index.php");
            $i=1;
		}
    }
		if($i==0){
			echo '<script>alert("Invalid details")</script>';
		}
	}
}
?>