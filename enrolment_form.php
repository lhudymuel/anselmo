<?php
$q = $_GET['q'];
if($q=='enrol'){   
  if(isset($_SESSION['IDNO'])){ 
  
    $student = New Student();
    $stud  = $student->single_student($_SESSION['IDNO']);
 
 
    if ($stud->NewEnrollees == 1) {
      # code...
      // message("You cannot enrol now. For more information, please contact administrator.","error");
      redirect('index.php?q=profile');
     }else{ 

      if ($stud->student_status=='Regular') {
        # code...
        redirect('index.php?q=subject');

      }elseif($stud->student_status=='Irregular'){

        // redirect("index.php?q=subjectlist");
         redirect("index.php?q=cart");
 
     }else{
         redirect('index.php?q=profile');
     }
 
    }

  
  }else{
  ?>
<ul class="nav nav-tabs" id="myTab">
    <li class="active"><a href="#New" data-toggle="tab">Enroll Here</a></li> 
    <li><a href="#Old" data-toggle="tab">Login Here</a></li>
    
  </ul>
  <div class="tab-content"><br/>
    <div class="tab-pane active" id="New">

     <?php include  "regform.php"; ?> 
               
    </div><!--/tab-pane-->
       
     <div class="tab-pane" id="Old">

  

      <style>
        
        
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap");
body {
	font-family: "Roboto", sans-serif;
}
main {
	place-content: center;
}
.wrapper {
	width: 40rem;
  margin-left: 350px;
	padding: 2.1rem 2rem;
	border-radius: 0.7rem;
	display: flex;
	flex-direction: column;
	background: #fff;
	justify-items: center;
	align-items: center;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
@media (min-width: 1024px){
  .wrapper {
	width: 40rem;
  margin-left: 550px;
	padding: 2.1rem 2rem;
	border-radius: 0.7rem;
	display: flex;
	flex-direction: column;
	background: #fff;
	justify-items: center;
	align-items: center;
	box-shadow: rgba(0, 0, 0, 0.3) 0px 19px 38px, rgba(0, 0, 0, 0.22) 0px 15px 12px;
}
}
.wrapper .heading h1 {
	font-weight: 700;
	font-size: 2rem;
}
.wrapper .social {
	padding: 2.5rem;
}
.wrapper .social .social-links {
	text-decoration: none;
	color: #000;
	font-size: 1.3rem;
}
.wrapper .social .social-links > .fa-brands {
	border: 1px solid #e4e4e4;
	display: inline-block;
	border-radius: 60px;
	padding: 0.5em 0.6em;
	margin-left: 0.5rem;
	transition: all 0.5s ease;
}
.wrapper .social .social-links > .fa-brands:hover {
	background: #000;
	color: #fff;
}
.form-group {
	display: flex;
	flex-direction: column;
	width: 100%;
	align-items: center;
}
.form-group p {
	font-size: 18px;
  margin-left: -250px;
	opacity: 0.9;
	color: #212121;
	margin-bottom: 0.3rem;
}
.form-group > input {
	padding: 0.7rem 0.1rem;
	margin-bottom: 0.9rem;
	border: none;
	width: 100%;
  background-color: lightgray;
}
.form-group > input:focus {
	background: #eee;
}
.form-group > ::placeholder {
	background: #fff;
	padding: 0.7rem 0.2rem;
	text-transform: capitalize;
}
.btn {
	font-size: 14px;
	text-decoration: none;
}
.btn-forget {
	color: #212121;
	margin-bottom: 1rem;
}
.btn-primary {
	background: #fff;
	padding: 0.6rem 2.4rem;
	text-transform: uppercase;
	color: #fff;
	border-radius: 6px;
	font-weight: 700;
	transition: all 200ms linear;
}
.btn-primary:hover {
	background: #fff;
	color: #ff4b2b;
	border: 1px solid #ff4b2b;
}
.social img{
  width: 100px;
  height: 100px;
}
  /* Placeholder design */
  input::placeholder {
        color: #fff;
      
    }

    /* Adjusting the password show button position */
    .input-group-append {
        position: relative;
        display: flex;
    }

    .input-group-append button {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ced4da;
        background-color: #e9ecef;
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        margin-top: -43px;
        margin-left: 327px;
        margin-bottom: 10px;
    }


/* Media query for mobile responsiveness */
@media only screen and (max-width: 768px) {
	.wrapper {
		width: 93%;
    margin-bottom: 33px;
    margin-left: 9px;
    padding: 1.5rem 1rem;
    border-radius: 0.5rem;
		box-shadow: rgba(0, 0, 0, 0.3) 0px 10px 20px, rgba(0, 0, 0, 0.22) 0px 6px 6px;
	}

	.wrapper .heading h1 {
		font-size: 1.5rem;
	}

	.wrapper .social {
		padding: 1.5rem;
	}

	.wrapper .social .social-links {
		font-size: 1rem;
	}

	.form-group p {
		font-size: 14px;
		margin-bottom: 0.2rem;
    margin-left: -192px;
	}

	.form-group > input {
		padding: 0.6rem 0.1rem;
		margin-bottom: 0.7rem;
	}

	.form-group > ::placeholder {
		padding: 0.6rem 0.2rem;
	}
  label .control-label{
    margin-left: 40px;
  }
  .input-group-append button {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ced4da;
        background-color: #e9ecef;
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        margin-top: -41px;
        margin-left: 246px;;
        margin-bottom: 7px;
    }
.btn-primary {
	background: #fff;
  margin-left: 10px;
	padding: 0.6rem 2.4rem;
	text-transform: uppercase;
	color: #fff;
	border-radius: 6px;
	font-weight: 700;
	transition: all 200ms linear;
}


}


      </style>
    
     <main>
	<div class="wrapper">
		<div class="heading">
			<h1>Login</h1>
		</div>
		<div class="social">
			<img src="img/logonbg.png" alt="">
		</div>
		
    <form class="form-group" action="login.php" method="POST">

    <p class="control-label" for="U_USERNAME">Username:</p> 
   
      <input required="true"   id="U_USERNAME" name="U_USERNAME" placeholder="Username" type="text" class="form-control input" >


    <p class="control-label" for="U_PASS">Password:</p>
      <input required="true" name="U_PASS" id="U_PASS" placeholder="Password" type="password" class="form-control input">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="showPasswordToggle" onclick="togglePasswordVisibility()">
            <i id="showIcon" class="fa fa-eye"></i>
        </button>
           </div>
        
        
			
      <button type="submit" id="oldLogin" name="oldLogin" style="background-color:#098744;color:#fff;" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-logged-in"></span> Login</button> 
		</form>
	</div>
</main>

  
          

      
    </div><!--/tab-pane-->
     <div class="tab-pane" id="Transferees"><br/> 
      <?php include  "registrationform.php"; ?> 
    </div><!--/tab-pane-->

  </div><!--/tab-content-->

  <script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("U_PASS");
        var icon = document.getElementById("showIcon");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            icon.classList.remove("fa-eye");
            icon.classList.add("fa-eye-slash");
        } else {
            passwordInput.type = "password";
            icon.classList.remove("fa-eye-slash");
            icon.classList.add("fa-eye");
        }
    }
</script>
<?php
}
 }else{
  include 'coursesubject.php';
 } 
?>


 