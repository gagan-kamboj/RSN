<?php 
//$page = 'About Us';
include('inc/header.php'); 

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
</style>
 <!-- AboutUs start -->
<div class="aboutus4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="ourcomp"><?=$aboutus['Title'];?></h1>
              
                <p class="paraa"><?=$aboutus['Content'];?> </p>
               
                <a class="btn btn-info cc" href="contactus.php" role="button">Lets work gether</a>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid8" src="admin/dashboard/assets/images/aboutus/<?=$aboutus['Image'];?>" style="" alt=""/>
            </div>
        </div>
    </div>
</div><br><br>
 <!-- AboutUs end -->

<!-- stats -->
<div class="container">
<div class="row stat">
            <div class="col-sm-3 r">
                <div class="service-tabs1">
                <h4 class="text-center 12"><?=$achievements['Talented_people'];?>+</h4>
                <p class="text-center 13">Talented people </p>
            </div>
            
             </div>
            <div class="col-sm-3 r">
                <div class="service-tabs1">
              
                <h4 class="text-center 12"><?=$achievements['Year_market'];?>+</h4>
                <p class="text-center 13">Year market </p>
            </div>
             </div>
             <div class="col-sm-3 r">
                 <div class="service-tabs1">
               
                <h4 class="text-center 12"><?=$achievements['Technogies_used'];?>+</h4>
                <p class="text-center 13">Technogies used</p>
            </div>
             </div>
              <div class="col-sm-3">
                 <div class="service-tabs1">
               
              <h4 class="text-center 12"><?=$achievements['Offices'];?>+</h4>
                <p class="text-center 13">Offices</p>
            </div>
             </div>
        </div><br><br>
		</div>
<!-- //stats -->
 <!-- Slider start -->
 <div class="container">
<div class="slideshow-container">
 <?php while($row = mysqli_fetch_array($Slider)){ ?>
<div class="mySlides fade">

   <div class="row">
  <div class="col-md-6">
        <h4><?=$row['Title'];?></h4>
         <!-- <img class="img-fluid" src="admin/dashboard/assets/images/slider/" style="height:40px; width=40px;" alt=""/>-->
          <p><?=$row['Content'];?></p>
      </div>
       <div class="col-md-6">
     <img class="img-fluid" src="admin/dashboard/assets/images/slider/<?=$row['Image'];?>" style="height:200px; width=900px;" alt=""/>
      </div>
       </div>
   
</div>
</div>

  <?php } ?>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div><br><br>


  <!-- Slider end -->
 <!-- AboutUs start -->
<div class="aboutus1">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="who"><?=$aboutus['Title1'];?></h1>
              
                <p class="who1"><?=$aboutus['Content1'];?> </p>
             
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="admin/dashboard/assets/images/aboutus/<?=$aboutus['Image'];?>" style="height:200px; width=200px;" alt=""/>
            </div>
        </div>
    </div>
</div><br><br>
 <!-- AboutUs end -->
<!-- AboutUs start -->
<div class="aboutus">
    <div class="container">
        <div class="row">
             <div class="col-sm-6">
                <img class="img-fluid" src="admin/dashboard/assets/images/aboutus/<?=$aboutus['Image'];?>" style="height:200px; width=200px;" alt=""/>
            </div>
            <div class="col-sm-6">
                <h1 class="why"><?=$aboutus['Title2'];?></h1>
              
                <p class="why1"><?=$aboutus['Content2'];?> </p>
            </div>
        </div>
    </div>
</div><br><br>
 <!-- AboutUs end -->
 <div class="container">
 
 <h1 class="our">Our Values</h1>
 <hr>
 
 
 <!-- Our values start -->
<div class="row rt">
     <?php 
     $a = 0;
	 while($row = mysqli_fetch_array($ourvalues)){ ?>
            <div class="col-sm-4">
                <div class="value">
     <!-- <h5>  </h5>-->
	             <img src="admin/dashboard/assets/images/ourvalues/<?=$row['Icon'];?>" class="iconic <?=$a;?>">
				 
                <h4 class="headingcont<?=$a;?>"><?=$row['Sub_heading'];?></h4>
                <p class="headingcont1<?=$a;?>"><?=$row['Content'];?></p>
            </div>
            
             </div>
            <?php $a++;} ?>
			
         </div><br>
		 </div>
            
<!-- Our values end -->
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
 
<?php include('inc/footer.php'); ?>