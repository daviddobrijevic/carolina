<?php 
    $title = 'Services';
    include 'templates/header.php';	
    include 'templates/navigation.php';
?>


<div class="container pt-4">
	<div class="row no-gutters">
		<div class="col-12 hero">
			<img src="img/services.jpg" class="img-fluid">
			<h2 class="text-uppercase d-none d-md-block">Services</h2>
		</div>
	</div>
</div>


<div class="container py-4">
	<div class="row">
		<main class="col-lg-8 main-content">
			<h2 class="d-block d-md-none text-uppercase text-center">Services</h2>

			<div id="services" role="tablist" aria-multiselectable="true">
				<div class="card">
					<div class="card-header py-2" role="tab" id="service_1">
						<h3 class="mb-0">
							<a data-toggle="collapse" data-parent="#services" href="#service_1desc" aria-expanded="true" aria-controls="service_1desc">Service 1</a>
						</h3>
					</div> <!--.card-header-->

					<div id="service_1desc" class="collapse show" role="tabpanel" aria-labelledby="service_1">
						<div class="card-block ml-2">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</div> <!--.card-block-->
					</div> <!--#service_1desc-->
				</div> <!--.card-->

				<div class="card">
					<div class="card-header py-2" role="tab" id="service_2">
						<h3 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_2desc" aria-expanded="false" aria-controls="service_2desc">Service 2</a>
						</h3>
					</div> <!--.card-header-->

					<div id="service_2desc" class="collapse" role="tabpanel" aria-labelledby="service_2">
						<div class="card-block ml-2">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</div> <!--.card-block-->
					</div><!--#service_1desc-->
				</div> <!--.card-->

				<div class="card">
					<div class="card-header py-2" role="tab" id="service_3">
						<h3 class="mb-0">
							<a class="collapsed" data-toggle="collapse" data-parent="#services" href="#service_3desc" aria-expanded="false" aria-controls="service_3desc">Service 3</a>
						</h3>
					</div> <!--.card-header-->

					<div id="service_3desc" class="collapse" role="tabpanel" aria-labelledby="service_3">
						<div class="card-block ml-2">
							Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
						</div> <!--.card-block-->
					</div><!--#service_1desc-->
				</div> <!--.card-->
  			</div> <!--#services-->
		</main>

		<aside class="col-lg-4 pt-4 pt-lg-0 discount">
			<div class="p-3">
				<h3 class="text-center text-uppercase mt-4">First Time Customers</h3>
				<p class="lead text-center mt-4">Get 20% Off in any service, with this coupon:</p>

				<div class="coupon p-1">
					<p class="text-center text-uppercase">
						<span class="display-4">20% off</span>
						in any service
					</p>
				</div>
			</div>
		</aside>
	</div> <!--.row-->
</div> <!--.container--> 



<?php 
	include 'templates/appointment.php'
?>

<?php 
    include 'templates/footer.php'
?>