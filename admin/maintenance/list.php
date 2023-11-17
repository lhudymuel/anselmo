<?php
	 if (!isset($_SESSION['ACCOUNT_ID'])){
      redirect(web_root."admin/index.php");
     }

?>
 <div class="row">
      <div class="col-lg-12">
       	 <div class="col-lg-6">
            <h1 class="page-header">Set the Current Semester  </h1>
       		</div>
       		<div class="col-lg-6" >
       			<img style="float:right; width:140px; height: 140px;" src="<?php echo web_root; ?>img/logonbg.png" >
       		</div>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
	 		    <form action="controller.php?action=delete" Method="POST">  
			      <div class="table-responsive">			
				<table id="" class="table table-striped table-bordered table-hover table-responsive" style="font-size:12px" cellspacing="0">
				
				  <thead>
				  	<tr>
				  		<th>Semester</th>
				  		<th>Set</th> 
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead>  
              
				  <tbody>
				  	<?php 
				  	 	$mydb->setQuery("SELECT * 
											FROM  `tblsemester`");
				  		$cur = $mydb->loadResultList();

						foreach ($cur as $result) {
				  		echo '<tr>';
				  		echo '<td >'. $result->SEMESTER.'</td>';
				  		echo '<td>' . $result->SETSEM.'</a></td>'; 

				  		echo '<td align="center" ><a title="Edit" href="controller.php?action=edit&id='.$result->SEMID.'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"> Set</span></a>
				  					  </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>
  	</div>
				</form>
	

</div> <!---End of container-->'
<li class="list-group-item text-right">
    <span class="pull-left"><strong>Enrollment Status</strong></span> 
    <?php 
        if (!isset($result->estatus) || empty($result->estatus)) {
            echo '<span style="color: red;">Open</span>';
            echo'empy file';
        } else {
            if ($result->estatus == 'Open') {
                echo '<span style="color: green;">' . $result->estatus . '</span>';
            } else {
                echo '<span style="color: red;">' . $result->estatus . '</span>';
            }
        }
    ?> 
</li>

<form method="post" >
    <tr>
        <td></td>
        <td colspan="5">  
            <div class="form-group">
                <label for="estatus" class="col-sm-2 control-label">Enrollment Status</label>
                <div class="col-sm-10">
                    <select class="form-control" id="estatus" name="estatus">
                        <option value="Open">Open</option>
                        <option value="Closed">Closed</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button  type="submit" name="submit" class="btn btn-primary">Update Status</button>
                </div>
            </div>
        </td>
    </tr>
</form>

<?php
// Assuming $mydb is properly instantiated and connected
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit'])) {
        if (isset($_POST['estatus'])) {
            $estatus = $_POST['estatus'];

            // Use prepared statements to prevent SQL injection
            $query = "UPDATE tblsemester SET estatus =  '$estatus'  WHERE SEMID ";
            $stmt = mysqli_prepare($mydb->conn, $query);
            
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo '<div class="alert alert-success" role="alert">Enrollment status has been updated successfully!</div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">Failed to update enrollment status. Please try again!</div>';
            }

            // Close the prepared statement
			mysqli_close($mydb->conn);
        } else {
            echo '<div class="alert alert-danger" role="alert">Enrollment status is required!</div>';
        }
    }
}
?>






	

