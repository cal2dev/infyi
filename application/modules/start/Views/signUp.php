<div class="page-header" id="banner">
	<div class="row">
	  	<div class="col-lg-12">
	    	<div class="page-header">
	      		<h1 id="forms">Sign Up</h1>
	    	</div>
	  	</div>
	</div>

	<div class="row">
	  	<div class="col-lg-6">
	    	<div class="well bs-component">
	      		<form class="form-horizontal" name="userForm" ng-submit="signup(userForm.$valid)" enctype="application/x-www-form-urlencoded" novalidate>
	        		<fieldset>
	                  <div class="form-group" ng-class="{ 'has-error' : userForm.firstName.$invalid && !userForm.firstName.$pristine }">
	                    <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
	                    <div class="col-lg-10">
	                      	<input type="text" class="form-control" name="firstName" data-ng-model="user.firstName" placeholder="First name" ng-required="true" ng-minlength="3" ng-maxlength="10">
	                      	<p ng-show="userForm.firstName.$error.required && !userForm.firstName.$pristine" class="help-block">This field is required.</p>
	                      	<p ng-show="userForm.firstName.$error.minlength" class="help-block">Too short.</p>
            				<p ng-show="userForm.firstName.$error.maxlength" class="help-block">Too long.</p>
	                    </div>
	                  </div>
	                  <div class="form-group" ng-class="{ 'has-error' : userForm.lastName.$invalid && !userForm.lastName.$pristine }">
	                    <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
	                    <div class="col-lg-10">
	                      <input type="text" class="form-control" name="lastName" data-ng-model="user.lastName" placeholder="Last name" ng-required="true" ng-minlength="3" ng-maxlength="10">
	                      <p ng-show="userForm.lastName.$error.required && !userForm.lastName.$pristine" class="help-block">This field is required.</p>
	                      	<p ng-show="userForm.lastName.$error.minlength" class="help-block">Too short.</p>
            				<p ng-show="userForm.lastName.$error.maxlength" class="help-block">Too long.</p>
	                    </div>
	                  </div>
	                  <div class="form-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine}">
	                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
	                    <div class="col-lg-10">
	                      	<input type="email" class="form-control" name="email" data-ng-model="user.email" placeholder="Email" ng-required="true" ng-minlength="10" ng-maxlength="70">
	                      	<p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
	                    </div>
	                  </div>
	                  <div class="form-group" ng-class="{ 'has-error': userForm.password.$invalid && !userForm.password.$pristine}">
	                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
	                    <div class="col-lg-10">
	                      <input type="password" class="form-control" name="password" data-ng-model="user.password" placeholder="Password" ng-required="true" ng-minlength="4" ng-maxlength="20" id="password">
	                      	<p ng-show="userForm.password.$error.minlength" class="help-block">Too short.</p>
            				<p ng-show="userForm.password.$error.maxlength" class="help-block">Too long.</p>
            				<p ng-show="userForm.password.$error.required && !userForm.password.$pristine" class="help-block">This field is required.</p>
	                    </div>
	                  </div>
	                  <div class="form-group" ng-class="{ 'has-error': userForm.confirmPassword.$invalid && !userForm.confirmPassword.$pristine}">
	                  	<label for="cat" class="col-lg-2 control-label">Confirm Password</label>
	                  	<div class="col-lg-10">
	                      <input type="password" class="form-control" name="confirmPassword" data-ng-model="user.confirmPassword" placeholder="Confirm Password"  pw-check="password" ng-required="true" ng-minlength="4" ng-maxlength="20">
	                      	<p ng-show="userForm.confirmPassword.$error.minlength" class="help-block">Too short.</p>
            				<p ng-show="userForm.confirmPassword.$error.maxlength" class="help-block">Too long.</p>
            				<p ng-show="userForm.confirmPassword.$error.required && !userForm.confirmPassword.$pristine" class="help-block">This field is required.</p>
 							<span class="msg-error" ng-show="userForm.confirmPassword.$error.pwmatch">    Passwords don't match.  </span>
		                </div>
	                  </div>
	                  <div class="form-group">
	                    <div class="col-lg-10 col-lg-offset-2">
	                      <button type="submit" class="btn btn-primary">Sign Up</button>
	                      <a href='#login' class="btn btn-info">Login</a>
	                    </div>
	                  </div>
	               </fieldset>
	            </form>
	            <div class="alert alert-success" style="display:none" id="msg">Logged in.</div>
	         </div>
	  	</div>
	</div>
</div>
