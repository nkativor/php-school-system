<?php
include("include/header.php");
 ?>

<div class="container">
  <div class="row">
    <div class="col-md-8 justify-content-center ">

      				<!-- Login form -->
      				<form class="login-form pt-5" id="lgF" action="signincode.php" method="post">
      					<div class="card " style="width:520px;height:400px; text-align:center;margin-left:320px">
      						<div class="card-body">
      							<div class="text-center mb-3">
      								<i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                      <h4>SCHOOL MANAGEMENT SYSTEM</h4>
      								<h5 class="mb-0">Login to your account</h5>
      								<span class="d-block text-muted">Enter your credentials below</span>
      							</div>

      							<div class="form-group form-group-feedback form-group-feedback-left">
      								<input type="text" id="n" class="form-control pt-3" placeholder="name" name="name">
      								<div class="form-control-feedback">
      									<i class="icon-user text-muted"></i>
      								</div>
      							</div>

      							<div class="form-group form-group-feedback form-group-feedback-left">
      								<input type="password" id="p" class="form-control pt-3" placeholder="Password" name="password">
      								<div class="form-control-feedback">
      									<i class="icon-lock2 text-muted"></i>
      								</div>
      							</div>
                                      <input type="hidden" value="1" id="pag_1">
      							<div class="form-group">
      								<button type="submit" id="b" class="btn btn-primary btn-block pt-3" name="login_btn"><span id="lgspan">Sign in</span> <i class="icon-circle-right2 lgb ml-2"></i></button>
      							</div>
                    <div class="text-center mb-3">
                      <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                      <p>NELLYTECH LIMITED CO.</p>
                    </div>
      						</div>
      					</div>

      				</form>

      				<!-- /login form -->
    </div>
  </div>
</div>



</body>
</html>
