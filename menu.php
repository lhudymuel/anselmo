<link rel="stylesheet" href="css/servicestyle.css">
  
  <div class="panel-group" id="accordion">
  <ul>
 
<?php 

$mydb->setQuery("SELECT * FROM `department`");

              $cur = $mydb->loadResultList();

            foreach ($cur as $result) {

?>
<li>
  <!-- <div class="panel panel-default"> -->
    <div class="panel-heading">
      <h4 class="panel-title">
        <a id="load"  data-toggle="collapse" data-parent="#accordion" href="#<?php echo $result->DEPT_ID; ?>" data-id="<?php echo $result->DEPT_ID; ?>">
          <?php echo $result->DEPARTMENT_DESC . ' [ ' .$result->DEPARTMENT_NAME . ' ] '; ?>
        </a>
      </h4>
    </div>

 <div id="<?php echo $result->DEPT_ID; ?>" class="panel-collapse collapse out">
      <div class="panel-body">
      <div id="loaddata<?php echo $result->DEPT_ID; ?>">
        
      </div>
      </div>
    </div>
 
 </li>
<!-- </div> -->

<?php } ?>
</ul> 

  
</div>


</section>



<!--Service -->
<section id="service">
<div class="title-text">
  <p>AASMNHS</p>
  <h11>STRAND</h11>
</div>
<div class="service-box">
 
  <div class="single-service">
      <img src="img/stem.png">
      <div class="overlays"></div>
      <div class="service-desc">
          <h3>STEM</h3>
          <hr>
          <p>Science Technology Engineering Mathematics</p>
      </div>
  </div>
  <div class="single-service">
      <img src="img/abm.png">
      <div class="overlays"></div>
      <div class="service-desc">
          <h3>ABM</h3>
          <hr>
          <p>Accounting Business Management</p>
      </div>
  </div>
  <div class="single-service"> 
       <img src="img/humss.png">
       <div class="overlays"></div>
       <div class="service-desc">
          <h3>HUMSS</h3>
          <hr>
          <p>Humanities and Social Sciences</p>
      </div>
  </div>
  <div class="single-service"> 
       <img src="img/ict.png">
       <div class="overlays"></div>
       <div class="service-desc">
          <h3>ICT</h3>
          <hr>
          <p>Information Communication and Technology</p>
      </div>
  </div>
  <div class="single-service"> 
       <img src="img/he.png">
       <div class="overlays"></div>
       <div class="service-desc">
          <h3>H.E.</h3>
          <hr>
          <p>Home Economics</p>
      </div>
  </div>
  <div class="single-service"> 
       <img src="img/smaw.png">
       <div class="overlays"></div>
       <div class="service-desc">
          <h3>SMAW</h3>
          <hr>
          <p>Shielded metal arc welding </p>
      </div>
  </div>
  <div class="single-service"> 
       <img src="img/eim.png">
       <div class="overlays"></div>
       <div class="service-desc">
          <h3>EIM</h3>
          <hr>
          <p>Electrical Installation and Maintenance</p>
      </div>
  </div>

</div>

</section>
 
    
