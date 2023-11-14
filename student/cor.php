<?php  
 if (!isset($_SESSION['IDNO'])){
      redirect("index.php");
     }


    $student = New Student();
    $res = $student->single_student($_SESSION['IDNO']);

    $course = New Course();
    $resCourse = $course->single_course($res->COURSE_ID);
	?>

<div class="col-md-12">
    <h1 style="font-size: 15px;">Name:<?php echo $res->FNAME .' '.$res->LNAME; ?> </h1>
     <b>Status: <?php 
        if (!isset($res->enrollment_status) || empty($res->enrollment_status)) {
            echo '<span style="color: red;">Not Enrolled</span>';
        } else {
            if ($res->enrollment_status == 'Enrolled') {
                echo '<span style="color: green;">' . $res->enrollment_status . '</span>';
            } else {
                echo '<span style="color: red;">' . $res->enrollment_status . '</span>';
            }
        }
    ?> 
        
    </b>
    </div>
      <div class="table-responsive" style="margin-top:5%;"> 
             <form action="customer/controller.php?action=delete" Method="POST">  					
            			
            		 </form>
                     <form action="student/printcor.php" method="POST" target="_blank">
                <input type="hidden" name="Course" value="<?php echo $resCourse->COURSE_LEVEL; ?>">
                <!-- this row will not appear when printing -->
                    <div class="row no-print">
                      <div class="col-xs-12">
                       <span class="pull-right"> <button type="submit" name="submit" class="btn btn-primary"  ><i class="fa fa-print"></i> View You COR here</button></span>  
                    </div>
                    </div> 
                  </form>    
                    </div>