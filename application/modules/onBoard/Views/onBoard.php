<?php $this->load->view('inc/header'); ?>
<body><div id="wrapper" ng-controller="onBoardController">

        <?php $this->load->view('inc/nav');?>

       <!--  <div id="loading-bar" class="bar"></div> -->
        <div id="page-wrapper" class="view-animate-container">

			<div id="loading_view"><h1>working on it... <i class='fa fa-cog fa-spin'></i></h1></div>
            <div class="container-fluid page {{ pageClass }}" ng-view>
				
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

<?php $this->load->view('inc/footer');?>
