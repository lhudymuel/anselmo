<?php
require_once("../../include/initialize.php");
   
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Anselmo A. Sandoval Memorial National High School </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
 
   <link href="<?php echo web_root; ?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 <link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">
</head>


<style>
  
/*!
PRINT COR

*/
.tophead .logoprt{
    height: 100px;
    width: 100px;
    position: absolute;
    margin-left: 93px;
    margin-top: -24px;
    }
    .tophead .logodep{
    height: 100px;
    width: 100px;
    position: absolute;
    margin-left: 590px;
    margin-top: -24px;
    }
.tophead .titleroo{
    font-size: 15px;
    margin-top: -10px;
    margin-left: 200px;
    font-weight: bold;
}
.tophead .rep{
    font-size: 15px;
    margin-top: 0;
    margin-left: 295px;
}

.tophead .loc{
    font-size: 15px;
    margin-top: -8px;
    margin-left: 269px;
}

.status{
    margin-left: 100px;
}
.status b{
    font-family: "Times New Roman", Times, serif;
    font-size: 80px;
    text-transform: uppercase;
    color: darkblue;
}
.principal{
    margin-left: 760px;
    margin-top: -50px;
    position: absolute;
}

.sign{
    position: absolute;
    margin-left: 800px;
    margin-top: -50px;
}
.signature {
    width: 228px;
    border: solid 1px;
    margin-left: -87px;
}
.neck{
    margin-left: 500px;
}
.titlereg{
    margin-left: -20px;
}
</style>

<body onload="window.print();">
<div class="wrapper"> 
    <section class="invoice">
      <!-- title row -->
      <div class="row">
      <h1 class="tophead">
            <img class="logoprt" src="img/logonbg.png">
            <img class="logodep" src="img/deped.png" >
            <p class="rep">Republic of the Philippines</p>
            <p class="titleroo">Anselmo A. Sandoval Memorial National High School</p>
            <p class="loc">Brgy. Pulong Niogan, Mabini Batangas </p>
            

    </h1>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <h4 class="page-header">
            <i class="fa fa-user"></i> Student Information
            <small class="pull-right">Date: <?php echo date('m/d/Y'); ?></small>
          </h4>
        </div>
        <!-- /.col -->
      </div> 
      <?php
      $sem = new Semester();
      $resSem = $sem->single_semester();
      $_SESSION['SEMESTER'] = $resSem->SEMESTER; 


      $currentyear = date('Y');
      $nextyear =  date('Y') + 1;
      $sy = $currentyear .'-'.$nextyear;
      $_SESSION['SY'] = $sy;


      $student = New Student();
      $stud = $student->single_student($_GET['IDNO']);

      ?>
      <table>
        <tr>
          <td width="75%" colspan="2" >
            <address>
            <b>Name : <?php echo $stud->LNAME. ', ' .$stud->FNAME .' ' .$stud->MNAME;?></b><br>
            Address : <?php echo $stud->HOME_ADD;?><br> 
            Contact No.: <?php echo $stud->CONTACT_NO;?><br>
            
          </address>
          </td>
          <td >
             <b>Course/Year:  <?php 

            $course = New Course();
            $singlecourse = $course->single_course($stud->COURSE_ID);
            echo $_SESSION['COURSE_YEAR'] = $singlecourse->COURSE_NAME.'-'.$singlecourse->COURSE_LEVEL;
            $_SESSION['COURSEID'] =$stud->COURSE_ID;
            $_SESSION['COURSELEVEL'] = $stud->YEARLEVEL;
            ?></b><br>
          <b>Semester : <?php echo $_SESSION['SEMESTER']; ?></b> <br/>
          <b>Academic Year : <?php echo $_SESSION['SY']; ?></b>
          </td>
        </tr>
      </table>
         
<?php 
// if (isset($_POST['btnCartSubmit'])) {
  
  if (isset($_SESSION['admingvCart'])){
  # code...
?>
<!-- Table row -->
<div class="row">
  <div class="col-xs-12 table-responsive">
    <table class="table table-striped">
      <thead>
      <tr> 
        <th>Id</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Unit</th>  
      </tr>
      </thead>
      <tbody>
      <?php  
        $totunit = 0;
          

             $count_cart = count($_SESSION['admingvCart']);

                for ($i=0; $i < $count_cart  ; $i++) {  

                    $query = "SELECT * FROM `subject` s, `course` c WHERE s.COURSE_ID=c.COURSE_ID AND SUBJ_ID=" . $_SESSION['admingvCart'][$i]['subjectid'];
                     $mydb->setQuery($query);
                     $cur = $mydb->loadResultList(); 
                      foreach ($cur as $result) { 

                         echo '<tr>';
                          // echo '<td width="5%" align="center"></td>';
                          echo '<td>' . $result->SUBJ_ID.'</a></td>';
                          echo '<td>'. $result->SUBJ_CODE.'</td>';
                          echo '<td>'. $result->SUBJ_DESCRIPTION.'</td>';
                          echo '<td>' . $result->UNIT.'</a></td>';
                          echo '</tr>';
                        
                          $totunit +=  $result->UNIT; 
                      }      
                }  
             
          ?>
      </tbody>
     </table>  
<?php
}else{ 
?> 
    <table class="table table-striped">
      <thead>
      <tr> 
        <th>Id</th>
        <th>Subject</th>
        <th>Description</th>
        <th>Unit</th>  
      </tr>
      </thead>
      <tbody> 
      <?php 
       $totunit = 0;
      $mydb->setQuery("SELECT * FROM `subject` s, `course` c 
        WHERE s.COURSE_ID=c.COURSE_ID AND s.COURSE_ID=".$_SESSION['COURSEID']." AND SEMESTER='".$_SESSION['SEMESTER']."'");

      $cur = $mydb->loadResultList();

      foreach ($cur as $result) {
        echo '<tr>';
        echo '<td>'.$result->SUBJ_ID.'</td>';
        echo '<td>'.$result->SUBJ_CODE.'</td>'; 
        echo '<td>'.$result->SUBJ_DESCRIPTION.'</td>';
        echo '<td>'.$result->UNIT.'</td>';
        echo '</tr>';

        $totunit +=  $result->UNIT;
      }
      ?>
      <tr>
      <td colspan="3" align="right" >Total Units</td>
      <td><?php echo $totunit;?></td>
      </tr> 
      </tbody>
    </table> 
<?php
}
?>
   
    </section> 
    </div>
 </body>
 </html>


 <?php
 unset($_SESSION['COURSEID']);
 unset($_SESSION['COURSELEVEL']); 
unset($_SESSION['SEMESTER']);
unset($_SESSION['SY']); 

  unset($_SESSION['admingvCart']);

 ?>