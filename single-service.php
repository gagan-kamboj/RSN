<?php
$page = 'Single Service';
include('inc/header.php');  
$servicetitle = $_GET['services'];
$service_info = $obj->GetServiceByTitle($servicetitle);
$service_tabs = $obj->GetServiceTabsByService($servicetitle);
$service_tab_content = $obj->GetServiceTabsByService($servicetitle);
$servicetool = $obj->GetServiceToolByService($servicetitle);
?>
<style>
.careercolabout {
   box-shadow: 0px 2px 4px 0px;
    padding: 51px;
    margin-top: 20px;
    border-radius: 5px;
    margin-left: 155px;
}
h3.careerrsnabout {
   text-align:center;
}
p.carercontent {
   text-align:center;
}
.btnabout {
  padding-left: 398px;
}
.service-tags span {
    border: 1px solid #e4e4e4;
    border-radius: 25px;
    padding: 8px;
}

.active {
    background-color: unset;
}
ul.nav.nav-tabs.itsworks {
    padding-left: 107px;
}
.tab-content {
    padding-left: 98px;
}
.backcolor {
    background: #F2F2F2;
} 
span.backgtag {
    background-color: #fff;
}

.services {
    margin-top: 151px;
}
.bggg {
  
    padding: 30px;
   
}
.careercolabouts {
   box-shadow: 0px 2px 4px 0px #00000040 !important;
    display: block !important;
    margin: auto !important;
    background: #f2f2f2 !important;
    padding: 35px 16px 23px 0px !important;
    border-radius: 0px !important;
    padding-top: -35px;
    /* margin-top: 12px;*/
}
h5.servicetool {
    
    color: #ff5da1;
}

.tab-tools {
    display: flex;
    flex-wrap: nowrap;
    justify-content: center;
    justify-content: space-evenly;
}

</style>
<!-- single Services start -->
     <div class="container service-section"> 
          <div class="row">
            <div class="col-md-12"> <span class="heading" style=""><?=$service_info['Title'];?></span></div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="services"> 

                 <h5 class="subheading1"><?=$service_info['Title1'];?></h5>
                <p> <?=$service_info['Content1'];?></p>
                 
                </div>
            </div>
             <div class="col-md-6">
                <div class="services">
                   
                 <img class="img-fluids" src="admin/dashboard/assets/images/services/<?=$service_info['Tab_Icon'];?>" style="" alt=""/>
                 
                </div>
            </div>
        </div><br>
  <div class="row">
            <div class="col-md-6">
                <div class="services">
                    <h5 class="subheading2"><?=$service_info['Title2'];?></h5>
             <p class="content"><?=$service_info['Content2'];?> </p>
                 
                </div>
            </div>
               <div class="col-md-6">
                <div class="services">
                    <h5 class="subheading3"> <?=$service_info['Title3'];?> </h5>
             <p class="content"><?=$service_info['Content3'];?></p>
            
                </div>
            </div>
          
        </div><br>
 <div class="row">
            <div class="col-md-6">
                <div class="services">
                   
             <h5 class="subheading4"> <?=$service_info['Title4'];?> </h5>
             <p class="content"><?=$service_info['Content4'];?></p>
            
                 
                </div>
            </div>
                <div class="col-md-6">
                <div class="services">
                    
                    <h5 class="subheading5"><?=$service_info['Title5'];?></h5>
             <p class="content"><?=$service_info['Content5'];?></p>
             
                </div>
            </div>
          
        </div>
    </div><br>
    
    <!--service tools-->
    
   
    <div class="bggg">
<div class="container">
      <h5 class="servicetool">TOOL WE USE</h5><br>
<div class="col-md-12 careercolabouts">
 <div class="tab-tools">
    
     <?php 
			 $i = 1;
			 while($rows = mysqli_fetch_array($servicetool)){ 
		
			 ?>
			 
	<div class="tab-pane  <?php if($i == 1) {echo 'active';} ?>" id="tabs-<?=$i;?>" role="tabpanel">
	
		<th> <img class="img-fluids" src="admin/dashboard/assets/images/servicetool/<?=$rows['Tab_Icon'];?>" style="" alt=""/></th>
	</div>
	
	
	 <?php $i++; } ?>
 
</div><br>

</div>
</div>
</div>

    
    <!--How Its Work start-->
    <div class="backcolor">
    <h2 class="itswork">How Its Work  </h2><br>
    
   <ul class="nav nav-tabs itsworks" role="tablist">
         <?php 
			 $i = 1;
			 while($row = mysqli_fetch_array($service_tabs)){ ?>
	<li class="nav-item">
		<a class="nav-link <?php if($i == 1) {echo 'active';} ?>" data-toggle="tab" href="#tabs-<?=$i;?>" role="tab"><?=$row['Tab_title'];?></a>
	</li>
	
	        <?php $i++;} ?>
	        
 
</ul><!-- Tab panes -->
<div class="tab-content">
    
     <?php 
			 $i = 1;
			 while($rows = mysqli_fetch_array($service_tab_content)){ 
			 
			 $tags = explode(',',$rows['Extra']);
			 
			 ?>
			 
	<div class="tab-pane  <?php if($i == 1) {echo 'active';} ?>" id="tabs-<?=$i;?>" role="tabpanel">
		<p><?=$rows['Tab_content'];?></p>
		
	<div class="service-tags">
	    <?php foreach($tags as $tag)  {?>
	    
	    <span class="backgtag"><?=$tag;?></span>
	    <?php } ?>
	</div>
	
	</div>
	
	
	 <?php $i++; } ?>
 
</div><br>
    
    </div>
     <!--How Its Work end-->
     
     
     
     
     
     <!-- single Services end -->

<div class="bgg">
<div class="container">
<div class="col-md-9 careercolabout ">
<h3 class="careerrsnabout">Have a bussiness problem to solve?</h3>

<p class="carercontent">Let’s craft brilliance together!</p>
<div class="btnabout">
 <a class="btn btn-secondary careerabout" style="" href="contactus.php" role="button">Contact Us</a>
 </div>
</div>
</div>
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.8/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>




<?php include('inc/footer.php'); ?>