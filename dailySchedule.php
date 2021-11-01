<?php include 'pheader.php';?>

<div class="header-icon">
	<i class="fa fa-tachometer"></i>
</div>
<div class="header-title">
	<h1>Daily Schedule</h1>
	<small> Todays Schedule</small>
	<ol class="breadcrumb hidden-xs">
		<li><a href="index.php"><i class="pe-7s-home"></i>Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</div>
</section>

<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-bd" data-index="0">
				<div class="panel-body">
					<div class="table-responsive" ng-app="myApp" ng-controller="customersCtrl">
					<form action="scheduleAppointment.php" method="get">
							<table id="myTable" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>6:00 AM</th>
										<th>07:00 AM</th>
										<th>8:00 AM</th>
										<th>10:00 AM</th>
										<th>12:00 PM</th>
										<th>02:00 PM</th>
										<th>03:00 PM</th>
										<th>05:00 PM</th>
										<th>07:00 PM</th>
										<th>09.00 PM</th>
									</tr>
								</thead>
								
								<tbody id="tbody">

									<td>Wake Up and Take Your Time</td>
										<td>Go For A Walk</td>
										<td>Freshen Up and Grab Your Breakfast</td>
										<td>Read Somthing</td>
										<td>Grab A Healthy Lunch</td>
										<td>Read Something</td>
										<td>Take A Nap</td>
										<td>Go For A Evening Walk PM</td>
										<td>Take Your Dinner and Walk </td>
										<td>Get Ready For Bed</td>

								</tbody>
							</table>
							</form>
					</div>
				</div>
			</div>
	</div>
</div>





















<!-- /.content -->

	<?php include 'pfooter.php';?>