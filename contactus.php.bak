<?php
$page = 'Contact Us';
include('inc/header.php');  
?>
<style>
/*Contact sectiom*/
.content-header{
  font-family: 'Oleo Script', cursive;
  color:#fcc500;
  font-size: 45px;
}

.section-content{
  text-align: center; 

}
#contact{
    
    font-family: 'Teko', sans-serif;
  padding-top: 60px;
  width: 100%;
  width: 100vw;
  height: 550px;
  background: #3a6186; /* fallback for old browsers */
  background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    color : #fff;    
}
.contact-section{
  padding-top: 40px;
}
.contact-section .col-md-6{
  width: 50%;
}

.form-line{
  border-right: 1px solid #B29999;
}

.form-group{
  margin-top: 10px;
}
label{
  font-size: 1.3em;
  line-height: 1em;
  font-weight: normal;
}
.form-control{
  font-size: 1.3em;
  color: #080808;
}
textarea.form-control {
    height: 135px;
   /* margin-top: px;*/
}

.submit{
  font-size: 1.1em;
  float: right;
  width: 150px;
  background-color: transparent;
  color: #fff;

}
input#BSbtninfo {
    /* margin-top: -2px; */
    padding: 3px;
}

</style>


<div>
 <button class="button">Let’s talk!</button>
 </div>
 
  <!-- Contactus start -->
     <div class="container service-section">
        
        <div class="row">
            
            <div class="col-md-4">
                <div class="">
                    <h4 class="country">USA </h4>
                <p class="usa"><?=$webinfo['Usa_Address'];?></p>
                </div>
            </div>
             
              <div class="col-md-4">
                <div class="">
                     <h4 class="country">India</h4>
                <p class="usa"><?=$webinfo['India_Address'];?></p>
                </div>
            </div>
             <div class="col-md-4">
                <div class="">
                <button type="button" class="ema">Send an email</button>
                <p class="usa"><?=$webinfo['Email'];?></p>
                </div>
            </div>
        </div><br>
		<hr>
       <h1 class="text-center talk">Talk to us and get your project moving!</h1>
        
    </div>
     <!-- Contactus end -->
  
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
   	<link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
   	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
			<div class="section-content">
			
			</div>
			<div class="contact-section">
			<div class="container">
			  <form action="admin/dashboard/inc/process.php?action=Contactus" method="post">
				    	<div class="col-md-6 form-line">
			  			<div class="form-group">
			  			
			  			 	<textarea name ="messages"  class="form-control" id="description"rows ="11" placeholder="About your project"></textarea>
			  			</div>
			  		
			  			
					</div>
					<div class="col-md-6 ">
			  			<div class="form-group">
			  				
					    	<input type="text" name="name" class="form-control" id="" placeholder=" Your name" required>
				  		</div>
				  		<div class="form-group">
					    	
					    	<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder=" Your email" required>
					  	</div>	
					  	<div class="form-group">
					    	
					    	<input type="tel" name="phone" class="form-control" id="telephone" placeholder=" Your phone(optional)" required>
			  			</div>
			  		</div>
			  		<div>
			  		     
			  			    	
                             <input type="file" class="btn btn-default submit" id="BSbtninfo">
							 <button type="submit" class="btn btn-default submit"></i>Send</button>
			  			</div>
				</form>
			</div>
		
		</section>
 
 
 <script>
 $('#BSbtninfo').filestyle({
 
buttonName : 'btn-info',
 
buttonText : ' Select a File'
 
});
 
</script>
 

 
 
 
 <?php include('inc/footer.php'); ?>