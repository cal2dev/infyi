<style>
.main-header-grid > .grid-left, .main-body-grid > .grid-left {
    width: 260px;
}
.main-body-grid > .grid-left {
    position: fixed;
    top: 120px;
    bottom: 0;
    overflow: auto;
}
.naked-list, .naked-list ul, .naked-list li {
    list-style: none;
    margin: 0;
    padding: 0;
}
</style>
<!-- <div class="" id="banner">
	<div class="row">
	  	<div class="col-lg-12">
	    	<div class="">
	      		<h1 id="forms">Tags</h1>
	    	</div>
	  	</div>
	</div>

	<div class="row">
	  	<div class="col-lg-6">
	    	<div class="well bs-component">
	      		<form class="form-horizontal" name="loginForm" ng-submit="login(loginForm.$valid)" novalidate>
	        		<fieldset>
	                  <div class="form-group" ng-class="{ 'has-error' : loginForm.email.$invalid && !loginForm.email.$pristine }">
	                    <div class="col-lg-10">
	                      <input type="email" class="form-control" name="email" data-ng-model="login.email" placeholder="New Tag" ng-minlength="9" ng-maxlength="70" required>
	                      <p ng-show="loginForm.email.$invalid && !loginForm.email.$pristine" class="help-block">Oops..!! Type something You lazy bastard.</p>
	                      <button class="btn btn-success" type="submit">Create</button>
	                    </div>
	                  </div>
	                 
	               </fieldset>
	            </form>
	         </div>
	  	</div>
	</div>
</div> -->
        <div class="grid-left">
          <div class="side-navigation">
            <ul class="nav-list naked-list">
              <!-- First Title Navigation -->
              <li>
                <h1 id="forms">Tags</h1>
                <button class="btn btn-success" type="button" ng-click="createTag('small')" >Create a Tag</button>
              </li>
              <li>
                <ul class="aside-nav">
                  <!-- ngRepeat: navItem in navGroup.navItems -->
				  <li >
                    <a ui-sref="tags.details"> Tag 1</a>
                  </li>
				  <li >
                    <a ui-sref="tags.details"> Tag 2</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        
<div ui-view></div>