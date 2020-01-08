@extends('admin.layouts.master')

	@section('content')

		<div class="main-panel">
          <div class="content-wrapper">
            
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
							@include('admin.layouts.createpackageinfo')
						</div>

						<div class="tab-pane fade" id="nav-plan" role="tabpanel" aria-labelledby="nav-plan-tab">
							@include('admin.layouts.createpackagetourplan')
						</div>

						<div class="tab-pane fade" id="nav-location" role="tabpanel" aria-labelledby="nav-location-tab">
							@include('admin.layouts.createpackagelocation')
						</div>

						<div class="tab-pane fade" id="nav-gallery" role="tabpanel" aria-labelledby="nav-gallery-tab">
							@include('admin.layouts.createpackagegallery')
							
						</div>
					</div>
	        </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019 <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i>
              </span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->

	@endsection
        