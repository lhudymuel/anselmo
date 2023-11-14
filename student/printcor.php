<?php 
require_once ("../include/initialize.php");

 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }


    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Anselmo A. Sandoval Memorial National High School</title>

     <!-- Bootstrap Core CSS -->
 <link href="<?php echo web_root; ?>css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="<?php echo web_root; ?>font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="<?php echo web_root; ?>font/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="<?php echo web_root; ?>css/dataTables.bootstrap.css" rel="stylesheet">
 
     <!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
 
 <link href="<?php echo web_root; ?>css/modern.css" rel="stylesheet">
 <link href="<?php echo web_root; ?>css/costum.css" rel="stylesheet">
  <body onload="window.print();">

  <div class="row">
        <div class="col-xs-12">
            <h1 class="tophead">
            <img class="logoprt" src="img/logonbg.png">
            <img class="logodep" src="img/deped.png">
            <p class="rep">Republic of the Philippines</p>
            <p class="titleroo">Anselmo A. Sandoval Memorial National High School</p>
            <p class="loc">Brgy. Pulong Niogan, Mabini Batangas </p>
            

</h1>
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
      $stud = $student->single_student($_SESSION['IDNO']);

      ?>
      <table>
        <tr>
            <td width="75%" colspan="2" >
                <address>
                Name :<b>  <?php echo $stud->LNAME. ', ' .$stud->FNAME .' ' .$stud->MNAME;?></b><br>
                Address : <?php echo $stud->HOME_ADD;?><br> 
                
          </address>
          </td>

          <address class="neck">
          <b> <?php echo $_SESSION['SEMESTER']; ?>, <b> <?php echo $_SESSION['SY']; ?> </b><br>
          <b class="titlereg">REGISTRATION FORM</b>
          </address>
          <td >
        


            Strand:  <b>  <?php 

            $course = New Course();
            $singlecourse = $course->single_course($stud->COURSE_ID);
            echo $_SESSION['COURSE_YEAR'] = $singlecourse->COURSE_NAME.'-'.$singlecourse->COURSE_LEVEL;
            $_SESSION['COURSEID'] =$stud->COURSE_ID;
            $_SESSION['COURSELEVEL'] = $stud->YEARLEVEL;
            ?></b><br>
      
          </td>
        </tr>
      </table>

  <div class="row">
         <div style="margin-left: 100px;" class=titlesub>
         <b>SUBJECT</b>
         
        </div>

        <div style="margin-left: 480px; margin-top:-20px; position: absolute; " class=titleunit>
         <b>UNIT(s)</b>
        </div>

        <div style="margin-left: 50px;" class="subs">
        <table style="width:70%">
        <tr>
            <td width="75%" colspan="2" >
            

            <?php
                    $tot = 0;
                   
                      $sql ="SELECT * 
                          FROM  tblstudent st, studentsubjects ss, `subject` sub, `tblschedule` s, tblinstructor i
                          WHERE  st.IDNO=ss.IDNO AND ss.`SUBJ_ID` = sub.`SUBJ_ID` AND sub.`SUBJ_ID` = s.`SUBJ_ID`
                          AND s.INST_ID=i.INST_ID AND STUDSECTION=SECTION AND OUTCOME !='Drop'  
                          AND ss.`IDNO`=" .$_SESSION['IDNO']." 
                          AND s.sched_semester = '".$_SESSION['SEMESTER']."' AND LEVEL='".$_POST['Course']."'";

                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();
                      
                      $mydb->setQuery($sql);
                      $cur = $mydb->loadResultList();

                      foreach ($cur as $result) {
                        echo '<tr>'; 
                        echo '<td>'.$result->SUBJ_CODE.'</td>';
                      
                        echo '<td>'.$result->UNIT.'</td>';
                      
                        
                      
                        echo '</tr>';
                        

                        $tot += $result->UNIT;
                        

                      }
                 
                      ?> 
                      

                       <footer style="margin-left: 10px">
                   
                        <tr>
                        <td colspan="2" align="right"> <hr style="width: 10%;  margin-left: 430px;"> TOTAL<?php echo $tot; ?> </td>
                          <td colspan="6" > </td>
                        </tr>     
                      </footer>
                    
        </tr>
      </table>
    

        </div>
            
          
  <div class="status">
    <b>
    <?php 
        if (!isset($res->enrollment_status) || empty($res->enrollment_status)) {
            echo '<span style="color: red;">Not Enrolled</span>';
        } else {
            if ($res->enrollment_status == 'Enrolled') {
                echo '<span style="color: #050332;">' . $res->enrollment_status . '</span>';
            } else {
                echo '<span style="color: red;">' . $res->enrollment_status . '</span>';
            }
        }
    ?> 

    </b>

  </div>
<div class="principal">
<b>Wilfredo M. Dakila</b>
</div>


  <div class="sign">
    <hr class="signature">
<b>Principal</b>
  </div>
                      
  </body>
</html>