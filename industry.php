<?php
$page = 'Industries';
include('inc/header.php');  
?>
 <!-- Banner start -->
  <div class="bannerbtnsoft"> <button class="buttondarkpink">Software Developement</button> </div>
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1><?=$banner['Heading'];?></h1>
                <h4><?=$banner['Sub_heading'];?></h4>
                <p><?=$banner['Content'];?> </p>
                <button class="btn btn-info">Lets Connect</button>
            </div>
            <div class="col-sm-6">
                <img class="img-fluid" src="admin/dashboard/assets/images/banner/<?=$banner['Image'];?>" style="height:200px; width=200px;" alt=""/>
            </div>
        </div>
    </div>
</div><br><br>
 <!-- Banner end -->
 
   <!-- Slider start 

<div class="slideshow-container">

<div class="mySlides fade">
 
  
   <div class="row">
  <div class="col-md-6">
        <h4></h4>
          <img class="img-fluid" src="admin/dashboard/assets/images/slider/" style="height:40px; width=40px;" alt=""/>
          <p></p>
      </div>
       <div class="col-md-6">
     <img class="img-fluid" src="admin/dashboard/assets/images/slider/" style="height:200px; width=900px;" alt=""/>
      </div>
       </div>
   
</div>
 
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
 
</div><br><br>


  <!-- Slider end -->
  
   <!--BANNER TEAM START-->
  <div class="bannerbtnsoft"> <button class="buttondarkpink">Experienced Team</button> </div>
<div class="banner">
    <div class="container">
        <div class="row">
             <div class="col-sm-6">
                <img class="img-fluid" src="admin/dashboard/assets/images/experiencedbanner/<?=$bannerteam['Images'];?>" style="height:200px; width=200px;" alt=""/>
            </div>
            
            <div class="col-sm-6">
                <h1><?=$bannerteam['Heading'];?></h1>
                <p><?=$bannerteam['Content'];?> </p>
                <button class="btn btn-info">More about us	&#8594</button>
            </div>
           
        </div>
    </div>
</div><br><br>
  
   <!--BANNER TEAM END-->
  
<!-- Industry start start -->
     <div class="container service-section">
       
        <div class="row">
              <?php while($row = mysqli_fetch_array($Industry)){ ?>
            <div class="col-md-4">
                <div class="service-tabs">
                    <!--<a href="single-industry.php?industry=" class="zoom d-block">-->
                 <img class="img-fluid" src="admin/dashboard/assets/images/industry/<?=$row['Icon'];?>" style="height:40px; width=40px;" alt=""/>
                <h4><?=$row['Title'];?></h4>
                <p><?=$row['Content'];?></p> <!--</a>-->
                </div>
            </div>
              
              <?php } ?>
        </div>
 
          
       
    </div>
     <!--Industry  end -->


<?php include('inc/footer.php'); ?>