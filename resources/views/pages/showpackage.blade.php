@extends('layouts.app')

@section('content')
	@include('pages.inc.navbar')
		<header class="masthead-5">
		  <div class="container h-100">
		    <div class="row h-100 align-items-center">
		      <div class="col-12 text-center">
		        <h1 class="font-weight-light">Show Tour Packages</h1>
		      </div>
		    </div>
		  </div>
		</header>

		<div class="container" style="margin-top: -40px;">
			<div class="row h-100 align-items-center">
				<div class="col-md-12">
					<nav>
					  <div class="nav nav-tabs" style="background-color: #ffff; border-bottom: 0;" id="nav-tab" role="tablist">
					    <a class="nav-item nav-link active packagenav" style="font-size: 20px; color:#212121; padding: 1.5rem 2.5rem; border: 0; border-top-left-radius: 0; border-top-right-radius: 0;" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fa fa-file" style="padding-right: 5px;"></i>Information</a>
					    <a class="nav-item nav-link packagenav" style="font-size: 20px; color:#212121; padding: 1.5rem 2.5rem; border: 0; border-top-left-radius: 0; border-top-right-radius: 0;" id="nav-plan-tab" data-toggle="tab" href="#nav-plan" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-calendar" style="padding-right: 5px;"></i>Tour Plan</a>
					    <a class="nav-item nav-link packagenav" style="font-size: 20px; color:#212121; padding: 1.5rem 2.5rem; border: 0; border-top-left-radius: 0; border-top-right-radius: 0;" id="nav-location-tab" data-toggle="tab" href="#nav-location" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa fa-map-marker" style="padding-right: 5px;"></i>Location</a>
					    <a class="nav-item nav-link packagenav" style="font-size: 20px; color:#212121; padding: 1.5rem 2.5rem; border: 0; border-top-left-radius: 0; border-top-right-radius: 0;" id="nav-gallery-tab" data-toggle="tab" href="#nav-gallery" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa fa-camera" style="padding-right: 5px;"></i>Gallery</a>
					  </div>
					</nav>

					<div class="tab-content" id="nav-tabContent" style="padding-top: 30px;">
						<div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" >
							@include('pages.inc.packageinfo')
							@include('pages.inc.packagebook')
						</div>

						<div class="tab-pane fade" id="nav-plan" role="tabpanel" aria-labelledby="nav-plan-tab">
							@include('pages.inc.packagetourplan')
							@include('pages.inc.packagebook')
						</div>

						<div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
							@include('pages.inc.packagetourlocation')
							@include('pages.inc.packagebook')
						</div>

						<div class="tab-pane fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
							@include('pages.inc.packagegallery')
							@include('pages.inc.packagebook')
						</div>
					</div>
				</div>
			</div>
		</div>
	@include('pages.inc.footer')
@endsection