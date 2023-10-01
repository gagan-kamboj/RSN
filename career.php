<?php 
$page = 'Career';
include('inc/header.php'); 
// $careertitle = $_GET['careers'];
// $career_info = $obj->GetCourseByTitle($careertitle);
?>
<style>
.careercol {
    box-shadow: 0px 2px 4px 0px;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    margin-left: 380px;
}
span a.arrow {
    font-size: 30px;
    margin-left: 249px;
    color: #f16920 !important;
}

a.arrow.pointer.flot-left {
    float: right;
}
.bg-white {
  background-color: #ffff !important;
}

</style>
<!--script link section start-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!--script link section end-->

<!--banner start-->

<div class="bannercareer">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <h1 class="bannerheading">Join <span class="greyText">Rsnginfo</span> and<br> develop new innovative<br>
tech products</h1>
              
            </div>
            <div class="col-md-6">
              <h1 class="bannerheading2">Application Process</h1>
                <p class="bannertext">If interested in one of the following positions and your skills and experience are a match for the role,please send us your CV to </p>
			</div>
        </div>
    </div>
</div><br>
<!--banner end-->
<div class="container">

<h4 class="careerheading">OPEN POSITION</h4>

<div class="row pt-4 my-md-5 pt-md-5 border-top"> 
<?php
$i = 1;
while($row = mysqli_fetch_array($career)){ ?>
<div class="col-md-6 careercol ">
   
<strong class="careerrsn"><?=$row['Title'];?></strong> <span><a data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>" class="arrow pointer flot-left" style="cursor: pointer;">&#8811; </a></span>
<h6> FULL TIME HYBRID </h6>

</div>

  <!-- creating a modal popup code.........-->

    	<div class="modal fade bd-example-modal-lg bg-white" tabindex="-1" id="myModal<?php echo $row['id'] ?>"  aria-labelledby="myLargeModalLabel" aria-hidden="true" role="dialog">
			<div class="modal-dialog modal-lg">
			    <div class="modal-content">
					<div class="modal-header">
						 <button type="button" class="close" data-dismiss="modal">&times;</button>
						    <h4 class="modal-title"></h4>
				    </div>
				    <div class="modal-body">
				        
   
						 <p style="text-align:center;" class="data"><?php echo $row['Title']; ?></p>
						 <p style="text-align:center;" class="data"> <?php echo $row['Location']; ?></p>
						 <span class="jobd">Job Description:</span><br></br>
						 <h4 class="skill">Skill Set :</h4> <p><?php echo $row['Skill']; ?></p>
						 <h4 class="skill">Roles & Responsibilities :</h4> <p><?php echo $row['Roles']; ?></p>
						 <h4 class="skill">Experience: 3 plus</h4> <p> <?php echo $row['Experience']; ?></p>
						 <button type="button" class="button1">Please send your CV to below email address with Job title</button>
						 <h6 class="text-center f">Jobs@rsnginfo.com</h6>
				    </div>
				</div>
			</div>
		</div>
    

<!--career popup end-->
  <?php $i++; } ?>

</div>
</div>

<!--popup script start -->


<!--popup script start -->
<?php include('inc/footer.php'); ?>