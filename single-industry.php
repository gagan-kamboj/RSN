<?php
$page = 'Single Industry';
include('inc/header.php'); 
 $industrytitle = $_GET['industry'];
 $industry_info = $obj->GetIndustryByTitle($industrytitle);
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

span.headings {
    font-size: 22px;
    color: white;
    font-weight: 600;
    background-color: #FF0000;
    padding-right: 10px;
    padding-left: 10px;
    position: relative;
    top: 50px;
}
</style>
<!-- single Industry start -->
     <div class="container service-section">
       <span class="headings" style="font-size: 40px;"><?=$industry_info['Tab_title'];?></span><br>
        <div class="row">
            <div class="col-md-6">
                <div class="services">
                 <strong class="subheading"> Empathise </strong>
                <p class="content"><?=$industry_info['Tab_content'];?> </p>
                 
                </div>
            </div>
             <div class="col-md-6">
                <div class="services">
                   
                 <img class="img-fluids" src="admin/dashboard/assets/images/industrytabs/<?=$industry_info['Tab_icon'];?>" style="height:130px; width=130px; margin-left: 141px;" alt=""/>
                 
                </div>
            </div>
        </div><br>
  <div class="row">
            <div class="col-md-6">
                <div class="services">
                    <strong class="subheading"> Define ( the Problem) </strong>
             <p class="content">Apt logic and detailing is incorporated precisely with elements like design functions, features, functionalities, workflow and beyond to solve complex issues with minimal snags. </p>
                 
                </div>
            </div>
               <div class="col-md-6">
                <div class="services">
                    <strong class="subheading"> Ideation </strong>
             <p class="content">With Proven ideation techniques combined with a client-centric approach at the core, we ideate roadmaps while mapping your business journey to decode human-focused problem statements.</p>
            
                </div>
            </div>
          
        </div><br>
 <div class="row">
            <div class="col-md-6">
                <div class="services">
                   
             <strong class="subheading"> Prototype </strong>
             <p class="content">We develop a results-focused prototype meant to build an authentic digital connection with the utmost level of detail and quality based on diversified experiments.</p>
            
                 
                </div>
            </div>
                <div class="col-md-6">
                <div class="services">
                    
                    <strong class="subheading"> Testing </strong>
             <p class="content">We finetune our designs using state-of-the-art testing techniques by testing the overall product usability at Omni-channel platforms to impart a clear big picture of design experience benchmarking, blueprints, personas, and journey maps of ideal consumers.</p>
             
                </div>
            </div>
          
        </div>
          
    </div>
     <!-- single Industry end -->
     
     
<div class="col-md-9 careercolabout ">
<h3 class="careerrsnabout">Have a bussiness problem to solve?</h3>

<p class="carercontent">Let’s craft brilliance together!</p>

<div class="btnabout">
 <a class="btn btn-secondary careerabout" style="float:left;" href="contactus.php" role="button">Contact Us</a>
 </div>
</div>

<?php include('inc/footer.php'); ?>