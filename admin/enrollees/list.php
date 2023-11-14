<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <link rel="shortcut icon" href="img/logonbg.png" type="image/x-icon">
<div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">New Enrollees</h1>
       		</div>
       		<div class="col-lg-6" >
       			<img style="float:right; width:140px; height: 140px;" src="<?php echo web_root; ?>img/logonbg.png" >
       		</div>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="dash-table" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>ID</th>
				  		<th>
				  		 <!-- <input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">  -->
				  		 Name</th>
				  		<th>Sex</th> 
				  		<th>Age</th>
				  		<th>Address</th>
				  		<th>Contact No.</th>
				  		<!-- <th>Email Address</th> -->
				  		<th>Status</th>
				  		<th>Strand</th>
				  		<th width="14%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php  //`IDNO`, `FNAME`, `LNAME`, `MNAME`, `SEX`, `BDAY`, `BPLACE`,
				  	// `STATUS`, `AGE`, `NATIONALITY`, `RELIGION`, `CONTACT_NO`, `HOME_ADD`, `EMAIL`, `student_status`
				  		$mydb->setQuery("SELECT * FROM `tblstudent` s, course c WHERE s.COURSE_ID=c.COURSE_ID AND NewEnrollees=1");

				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
							
							if($result->BDAY!='0000-00-00'){
								$age = date_diff(date_create($result->BDAY),date_create('today'))->y;
							}else{
								$age='None';
							}
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result->IDNO.'</a></td>';
				  		echo '<td>'. $result->LNAME.','. $result->FNAME.' '. $result->MNAME.'</td>';
				  		echo '<td>'. $result->SEX.'</td>';
				  		echo '<td>' .$age.'</td>';
				  		echo '<td>'. $result->HOME_ADD.'</td>';
				  		echo '<td>'. $result->CONTACT_NO.'</td>';
				  		// echo '<td>' . $result->EMAIL.'</a></td>';
				  		echo '<td>'. $result->student_status.'</td>'; 
				  		echo '<td>'. $result->COURSE_NAME.'</td>';
				  		 if($result->student_status=='New'){
				  		 	echo '<td align="center" > 
							   <div  class="btn-group open" >
							   <a  class="btn btn-primary" href="#"><i class="fa fa-folder-open-o fa-fw"></i></a>
							   <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
								 <span class="fa fa-caret-down" title="Toggle dropdown menu"></span>
							   </a>
							   <ul class="dropdown-menu">
								
								 <li><a href="index.php?view=view&id='.$result->IDNO.'"><i class="fa fa-search fa-fw"></i> View Info.</a></li>
								 <li class="divider"></li>
								 <li><a href="controller.php?action=confirm&IDNO='.$result->IDNO.'"><i class="fa fa-check-circle-o"></i> Confirm</a></li>
							
							
							   </ul>
							 </div>
						   </li>
		   

							        
				  			      </td>';
				  		// echo '<td align="center" > <a title="View Grades" href="index.php?view=grades&id='.$result->IDNO.'" class="btn btn-primary btn-xs" >Grades <span class="fa fa-info-circle fw-fa"></span> </a>
				  		// 			 </td>';
				  		 }else{
				  		 	echo '<td align="center" > 
				  		             <a title="Add Subject" href="index.php?view=addCredit&IDNO='.$result->IDNO.'"  class="btn btn-info btn-xs  ">Confirm <span class="fa fa-info-circle fw-fa"></span></a>
				  			      </td>';
				  		 }
				  		
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
 
				<!-- <div class="btn-group">
				  <a href="index.php?view=add" class="btn btn-default">New</a>
				  <button type="submit" class="btn btn-default" name="delete"><span class="glyphicon glyphicon-trash"></span> Delete Selected</button>
				</div>
 -->
			</div>
				</form>
	

</div> <!---End of container-->