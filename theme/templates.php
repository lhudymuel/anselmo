<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title; ?> |Anselmo A. Sandoval Memorial National High School</title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 <link rel="shortcut icon" href="img/logonbg.png" type="image/x-icon">

 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">

  <link href="<?php echo web_root; ?>css/ekko-lightbox.css" rel="stylesheet">
 <style type="text/css">

.p {

  color: white;
   margin-bottom: 0;
  margin-top: 0;
  /*padding: 0;*/
  /*float: right;*/
  list-style: none;
}

.p > a { 
  color: white;
  /*text-align: center;*/
  margin-bottom: 0;
  margin: 0;
  padding: 0;
  text-decoration:none;
  background-color:  #0000FF;
}
.p > a:hover ,
.p > a:focus {
   color: black; 
   text-decoration:none;
   background-color: black;
}


 
.title-logo  {
  margin-top-15px
   color: black;
    font-size: 32px;
    margin-left: -20px
   
  
  
  }
.title-logo:hover {
  color: black; 
  text-decoration:none; 
}
.carttxtactive {
  color: red;
  font-style: bold;
  box-shadow: red;

}
.carttxtactive:hover {
   color: white;
}

.menu  li {
  left: 35px;
  width: 230px;
  padding: 0 3px 0 3px;
  text-align: center;
 
}
img{
  max-width: 100%;  
}
@media (max-width: 670px){
    .image img{
        margin-left: 65px;
        margin-top: 178px;
        width: 61vw;
        height: 40%;
    }
}
@media (min-width: 670px){
    
    .image img{
    margin-left: 222px;
    margin-top: 80px;
    width: 44vw;
    height: 0%;
    }
}
@media (min-width: 1024px){
    .image img{
        margin-left: 470px;
        margin-top: 25px;
        width: 34vw;
        height: 40%;
    }
}

    @media (min-width: 670px) {
      .image  img{
        width: 30vw;
      }
    }
  
.image2 img{
  
    margin-left: 198px;
    margin-top: -713px;
    width: 53px;
    display: none;
    height: 53px;
}
.image3 img{
  
  width: 60px;
  height: 60px;
  margin-left: 254px;
  display: none;
  margin-top: -756px;
}


.text p{
  color: white;
  font-size: 40px;
  font-family: "Times New Roman", Times, serif;
  font-weight: bold;
  text-align: center;
  margin-top: -75px;
}
@media (max-width: 670px){
  .text p{
    color: white;
    font-size: 17px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    text-align: center;
    margin-top: -5px;
}
}
@media (min-width: 670px){
  .text p{
    color: white;
    font-size: 24px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    text-align: center;
    margin-top: -5px;
}

}
@media (min-width: 670px){
  .text p{
    color: white;
    font-size: 30px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
    text-align: center;
    margin-top: -5px;
}
}


#banner{
    background:  url(img/banner.png);
    background-size: cover;
    background-position: top center;
    position: relative;
    height: 100vh;
    margin-top: -50px;
    
}

@media  (max-width: 670px){
    #banner{   
        background:  url(img/pbanner.png);
        background-size: cover;
        background-position: top center;
        position: relative;
        height: 100vh;
        margin-top: -50px;  
    }
}
@media  (min-width: 670px){
    #banner{   
        background:  url(img/tbanner.png);
        background-size: cover;
        background-position: top center;
        position: relative;
        height: 100vh;
        margin-top: -50px;  
    }
}
@media  (min-width: 1024px){
    #banner{   
        background:  url(img/banner.png);
        background-size: cover;
        background-position: top center;
        position: relative;
        height: 100vh;
        margin-top: -50px;  
    }
}
</style>
<section id="banner">
      
</section>

<?php 
$sem = new Semester();
$resSem = $sem->single_semester();
$_SESSION['SEMESTER'] = $resSem->SEMESTER; 
?>
 <?php
if (isset($_SESSION['gvCart'])){
  if (count($_SESSION['gvCart'])>0) {
    $cart = '<span class="carttxtactive">('.count($_SESSION['gvCart']) .')</span>';
  } 
 
} 
$currentyear = date('Y');
  $nextyear =  date('Y') + 1;
  $sy = $currentyear .'-'.$nextyear;
  $_SESSION['SY'] = $sy;
 ?>
</head>

  
<body style="Pbackground-color:#e0e4e5" >

<div class="navbar-fixed-top navbar-TOPsm  col-md-10    col-md-offset-1"    role="navigation" style="margin-left: 0%; width: 100%;">
  <div class="container">
    <div class="navbar-header">
          <h5 class="navbar-menu p" >Anselmo A. Sandoval Memorial National High School</h5>
         <button type="button" class="navbar-toggle btn-xs p" data-toggle="collapse" data-target=".smMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button> 
    </div>
      <div  class="collapse navbar-collapse  smMenu "> 

        <ul class="navbar-nav p navbar-left tooltip-demo" style="margin-left:-8%;"> 
            <li class="dropdown dropdown-toggle ">
              <a  data-toggle="tooltip" data-placement="left" title="Contact Us"   href=""> 
               <i class="fa fa-phone fa-fw"> </i>  Call Us:  09123456789 OR Email Us: anselmoasasndovalmemorialnationalhighschool@gmail.com
              </a>
            </li>
            <li><span>    ||    </span></li>
            <li>
             <a  data-toggle="tooltip" data-placement="bottom" title="Academic Year" ><i class="fa fa-calendar-o"></i> Academic Year - <?php echo $_SESSION['SY'] ; ?></a>
            </li> 
             <li><span>    ||    </span></li>
           <li>
            <a  data-toggle="tooltip" data-placement="bottom" title="Semester" > <?php echo $_SESSION['SEMESTER'] . ' Semester';?></a>
           </li>
          </ul>
          <ul class="navbar-nav p navbar-right ">

            <?php if (isset($_SESSION['IDNO']) ){  

              $student = New Student();
              $singlestudent = $student->single_student($_SESSION['IDNO']);

              if ($singlestudent->student_status=='Irregular') {
                # code...
        
            ?> 
             <li class="dropdown dropdown-toggle tooltip-demo">
              <a   data-toggle="tooltip" data-placement="bottom"  title="Subject to be taken"  href="<?php echo web_root.'index.php?q=cart';  ?>"> 
               <i class="fa fa-shopping-cart fa-fw"> </i> <?php echo  isset($cart) ? $cart : "(0)" ; ?> 
              </a>
            </li> 
            <?php
              }
            ?> 
            <li class="dropdown  dropdown-toggle">
               <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <i class="fa fa-user fa-fw"></i>
                    <?php echo $singlestudent->FNAME. ' ' . $singlestudent->LNAME ; ?>
                  <i class="caret"> </i> 
               </a>

                  <ul class="dropdown-menu dropdown-acnt"> 
                    <li><a title="Edit" href="<?php echo web_root; ?>index.php?q=profile"  >My Profile</a></li> 
                    <li> <a  href="logout.php">Logout</a></li>  
                  </ul> 
            </li>  
 
          <?php  } else{?>
          <li  class="tooltip-demo"><a data-toggle="tooltip" data-placement="left" title="Enrol Now" href="<?php echo web_root.'index.php?q=enrol'; ?>">Enroll Now!</a></li>
          <?php } ?>

        </ul>
      </div>

  </div>
</div>

<style>
   #myElement {
    margin-left: 0%; 
    width: 100%
    }
 
</style>
 <div class="navbar navbar-static-top navbar-magbanua col-md-10    col-md-offset-1 "    role="navigation"  id="myElement" style=""> 
    
      <div class="container ">
        <div class="navbar-header"> 
            <div class="navbar-menu p" >Menu</div>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".bigMenu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 

      
        </div>
<?php
  
  ?>
        <div class="collapse navbar-collapse bigMenu"  > 
          <ul class="nav navbar-nav menu" style="margin-left:auto; margin-right: auto; align-items: center;"  > 

          <!-- <ul class="nav navbar-nav" >  -->
          <li class="dropdown dropdown-toggle ">
              <a href="<?php echo web_root.'index.php'; ?>">Home</a>
            </li>
            <li class="dropdown dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q']=='') ? "active" : false;?> ">
              <a href="<?php echo web_root.'index.php?q=about'; ?>"> About</a>
            </li>
            <li class="dropdown-toggle <?php echo (isset($_GET['q']) && $_GET['q']=='department') ? "active" : false;?>" >
              <a href="<?php echo web_root.'index.php?q=department'; ?>">Strand</a>
            </li>
            
            <li class="dropdown-toggle <?php echo (isset($_GET['q']) && ($_GET['q']=='enrol' || $_GET['q']=='subject')) ? "active" : false;?>" >
              <a href="<?php echo web_root.'index.php?q=enrol'; ?>">Enroll Now!</a>
            </li>
 
            
          
          </ul>           
        </div> 
        <!--/.navbar-collapse --> 
    </div> 
   <!-- /.nav-collapse --> 
  </div> 
 <!-- /.container -->

<!-- pop up login -->
<?php // include "LogSignModal.php"; ?> 
<!-- end pop up login -->
  
<div class="col-md-10 col-md-push-1 "> 
   <!-- start content --> 
   
  <?php  check_message(); ?> 
  
        <div class="row"> 
          <div id="page-wrapper">
               <?php

          if($title=='Profile'){
                echo ' <div class="row">';

                require_once $content;
                echo ' </div><br/>';  
     
              }else{
  // check_message(); ?>


<div class="row">
             
                 
                  <div class="panel-body">
                 
                    <?php require_once $content; ?>
           
                     
                  </div>
                <!--   <div class="panel-footer">
                      Panel Footer
                  </div> -->
             
           <div class="col-lg-4">
          
                  <?php 
                  //require_once "sidebar.php";
                
                    ?>
             </div>
        </div>

        
        <?php }
  
?>
     

  </div>  
<!-- end of page  -->


 
<!-- end -->
 
  <!-- jQuery -->
  <script src="<?php echo web_root; ?>jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo web_root; ?>js/bootstrap.min.js"></script>
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.date.extensions.js"></script> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>input-mask/jquery.inputmask.extensions.js"></script> 

  <!-- Metis Menu Plugin JavaScript --> 
  <!-- DataTables JavaScript -->
  <script src="<?php echo web_root; ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo web_root; ?>js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo web_root; ?>js/ekko-lightbox.js"></script>

  <script type="text/javascript" src="<?php echo web_root; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="<?php echo web_root; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>

  <!-- Custom Theme JavaScript --> 
  <script type="text/javascript" language="javascript" src="<?php echo web_root; ?>js/janobe.js"></script> 
<script>
      //Datemask2 mm/dd/yyyy
    

   
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>


      <script>
        $('.carousel').carousel({
            interval: 6000 //changes the speed
        })
    </script>

<script type="text/javascript">


$('#date_picker').datetimepicker({
  format: 'mm/dd/yyyy',
    language:  'en',
    weekStart: 1,
    todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });

 
 
 
function validatedate(){ 
 
 

    var todaysDate = new Date() ;

    var txtime =  document.getElementById('ftime').value
    // var myDate = new Date(dateme); 

    var tprice = document.getElementById('alltot').value 
    var pmethod = document.getElementById('paymethod').value
    var onum = document.getElementById('ORDERNUMBER').value

     
     var mytime = parseInt(txtime)  ;
     var todaytime =  todaysDate.getHours()  ;
       if (txtime==""){
     alert("You must set the time enable to submit the order.")
     }else 
     if (mytime<todaytime){ 
        alert("Selected time is invalid. Set another time.")
      }else{
        window.location = "index.php?page=7&price="+tprice+"&time="+txtime+"&paymethod="+pmethod+"&ordernumber="+onum; 
      }
  }
</script>  


    <script type="text/javascript">
  $('.form_curdate').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
  $('.form_bdatess').datetimepicker({
        language:  'en',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
</script>
<script>
 


  function checkall(selector)
  {
    if(document.getElementById('chkall').checked==true)
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=true;
      }
    }
    else
    {
      var chkelement=document.getElementsByName(selector);
      for(var i=0;i<chkelement.length;i++)
      {
        chkelement.item(i).checked=false;
      }
    }
  }
   function checkNumber(textBox){
        while (textBox.value.length > 0 && isNaN(textBox.value)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
      //
      function checkText(textBox)
      {
        var alphaExp = /^[a-zA-Z]+$/;
        while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
          textBox.value = textBox.value.substring(0, textBox.value.length - 1)
        }
        textBox.value = trim(textBox.value);
      }
  

       
  </script>     
 <!-- method for saving and retrieving data without refreshing the page. -->
<script type="text/javascript" > 

$(document).on("click", "#load", function () {
 /* load all variables */
  
   
   var depid = $(this).data("id");
   
     $.ajax({    //create an ajax request to load_page.php
        type:"POST",  
        url: "menu1.php",    
        dataType: "text",   //expect html to be returned  
        data:{id:depid},               
        success: function(data){                    
         $('#loaddata'+ depid).html(data); 
          

        }

    }); 

  
}); 
</script>
<script type="text/javascript" > 

$(document).on("keyup", "#PartialPayment", function () {
 /* load all variables */
 //alert("goooog")
   
   var totsem = document.getElementById("totsem").value;
   var partial = document.getElementById("PartialPayment").value;
   var bal;

   document.getElementById("partial").value = partial;

   bal = parseFloat(totsem) - parseFloat(partial);

   document.getElementById("Balance").innerHTML = bal.toFixed(2);
   document.getElementById("txtBalance").innerHTML = bal.toFixed(2);
   
}); 
</script>
<script type="text/javascript" > 

$(document).on("click", "#btnpay", function () {
 /* load all variables */
 //alert("goooog")
   
 var partial = document.getElementById("PartialPayment").value;
 
Session.set("PartialPayment", partial);
 
// retreive a session value/object
Session.get("PartialPayment");

// alert(Session.get("PartialPayment"));

 if (partial >= 1600) {
  return true;
 }else{


  alert("invalid payment. Minimum of 1600 pesos in-order to enroll.");
  return false;
 };

 // store a session value/object

 
// clear all session data
// Session.clear();
  
// dump session data
// Session.dump();

   
}); 
</script>
</body>
</html>