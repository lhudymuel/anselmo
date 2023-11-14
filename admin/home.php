
<link rel="stylesheet" href="css/dashboard.css">
<link rel="shortcut icon" href="img/logonbg.png" type="image/x-icon">
<div class="row">
         <div class="col-lg-12">
            <h1 class="page-header">Welcome to the <?php echo $_SESSION['ACCOUNT_TYPE'] ?> Panel</h1>
          </div>
          <!-- /.col-lg-12 -->

 </div>
 

<div class="container">
<div class="panel post">
  <a href="<?php echo web_root; ?>admin/enrollees/index.php"><span> <?php echo isset($enrollees->enrollees) ? $enrollees->enrollees : 0; ?> <br>  </span>New Enrollees</a>
</div>


<div class="panel page">
  <a href="<?php echo web_root; ?>admin/student/index.php"><span> <?php echo $tot ; ?></span>Students </a>
</div>


<div class="panel comment">
  <a href="<?php echo web_root; ?>admin/strand/index.php"><span><?php echo $tots ; ?> <br>  </span>Strand</a>
</div>


<div class="panel user">
  <a href="<?php echo web_root; ?>admin/instructor/index.php"><span><?php echo $totst ; ?> <br>  </span>Instructors</a>
</div>

<div class="panel track">
  <a href="<?php echo web_root; ?>admin/track/index.php"><span><?php echo $tottr ; ?> <br>  </span>Tracks</a>
</div>

<div class="panel subject">
  <a href="<?php echo web_root; ?>admin/subject/index.php"><span><?php echo $totsu ; ?> <br>  </span>Subjects</a>
</div>
</div>







 