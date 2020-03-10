<?php $this->load->view('layout/header') ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

<section class="content">
	  <!---//////////////////////--->
      <div class="row">
        <div class="col-12 ">
          	<div class="box">
              <div class="row no-gutters py-2">

                <div class="col-sm-6 col-lg-3">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-person font-size-26"></i><br>
                        New Users
                      </span>
                      <span class="text-primary font-size-40">34</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar" role="progressbar" style="width: 35%; height: 4px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 hidden-down">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-document font-size-26"></i><br>
                        Today Invoices
                      </span>
                      <span class="text-info font-size-40">18</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-info" role="progressbar" style="width: 55%; height: 4px;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body br-1 border-light">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-information font-size-26"></i><br>
                        Open Issues
                      </span>
                      <span class="text-warning font-size-40">46</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-warning" role="progressbar" style="width: 65%; height: 4px;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


                <div class="col-sm-6 col-lg-3 d-none d-lg-block">
                  <div class="box-body">
                    <div class="flexbox mb-1">
                      <span>
                        <i class="ion-folder font-size-26"></i><br>
                        New Projects
                      </span>
                      <span class="text-danger font-size-40">12</span>
                    </div>
                    <div class="progress progress-xxs mt-10 mb-0">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
        </div>
        <!-- /.col -->
		  
      </div>
      <!-- /.row -->
	  <div class="row">
        <div class="col-xl-6 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="areaChart" style="height:350px"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		  
		<div class="col-xl-6 col-12">
          <!-- AREA CHART -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Yeary Sales</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
			  <ul class="list-inline text-right">
					<li>
						<h5><i class="fa fa-circle mr-5" style="color: #26c6da;"></i>iPhone</h5>
					</li>
					<li>
						<h5><i class="fa fa-circle mr-5" style="color: #fc4b6c;"></i>iPad</h5>
					</li>
					<li>
						<h5><i class="fa fa-circle mr-5" style="color: #398bf7;"></i>iPod</h5>
					</li>
				</ul>
              <div id="morris-area-chart" style="height: 310px;"></div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          </div>		  
      </div>      
      <!-- /.row -->  
	  <div class="row">
		<div class="col-md-4 col-12">
				<div class="box box-inverse" style="background-color: #3b5998">
				  <div class="box-header no-border">
					<span class="fa fa-facebook font-size-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title box-title-bold">Facebook feed</h5>
					  </div>
				  </div>

				  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
					<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					<div class="flexbox">
					  <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
					  <span><i class="fa fa-heart"></i> 75</span>
					</div>
				  </blockquote>
			  </div>
		</div>
		<div class="col-md-4 col-12">		
			  <div class="box box-inverse box-carousel slide" data-ride="carousel" style="background-color: #00aced">
				  <div class="box-header no-border">
					<span class="fa fa-twitter font-size-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title box-title-bold">Twitter feed</h5>
					  </div>
				  </div>

				  <div class="carousel-inner">
					<blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item active">
					  <p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					  <div class="flexbox">
						<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
						<span><i class="fa fa-heart"></i> 62</span>
					  </div>
					</blockquote>

					<blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
					  <p>Uniquely revolutionize leveraged catalysts for change for world-class web services. Efficiently underwhelm competitive.</p>
					  <div class="flexbox">
						<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
						<span><i class="fa fa-heart"></i> 45</span>
					  </div>
					</blockquote>

					<blockquote class="blockquote blockquote-inverse no-border m-0 py-15 carousel-item">
					  <p>Enthusiastically optimize cross-media manufactured products without process-centric web services. Conveniently.</p>
					  <div class="flexbox">
						<time class="text-white" datetime="2017-11-22 20:00">22 November, 2017</time>
						<span><i class="fa fa-heart"></i> 65</span>
					  </div>
					</blockquote>
				  </div>
			  </div>		
		</div>
		<div class="col-md-4 col-12">		
			  <div class="box box-inverse bg-red">
				  <div class="box-header no-border">
					<span class="fa fa-google-plus font-size-30"></span>
					  <div class="box-tools pull-right">
						<h5 class="box-title box-title-bold">Google Plus</h5>
					  </div>
				  </div>

				  <blockquote class="blockquote blockquote-inverse no-border m-0 py-15">
					<p>Holisticly benchmark plug imperatives for multifunctional deliverables. Seamlessly incubate cross functional action.</p>
					<div class="flexbox">
					  <time class="text-white" datetime="2017-11-21 20:00">21 November, 2017</time>
					  <span><i class="fa fa-heart"></i> 75</span>
					</div>
				  </blockquote>
			  </div>				
			</div>
	
	  </div>	
		
		
	  <div class="row">
	  	<div class="col-md-6 col-12">
			<div class="row">
			  <div class="col-md-6 col-12">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
				  </div>

				  <ul class="flexbox flex-justified text-center my-30">
					<li class="br-1">
					  <div class="font-size-18">%76.58</div>
					  <small>All Time</small>
					</li>

					<li class="br-1">
					  <div class="font-size-18">%35.12</div>
					  <small>Last Month</small>
					</li>

					<li>
					  <div class="font-size-18">%6.66</div>
					  <small>Today</small>
					</li>
				  </ul>

				  <div id="baralc" class="text-center"><canvas width="236" height="80" style="display: inline-block; width: 236px; height: 80px; vertical-align: top;"></canvas></div>
				</div>
			  </div>
			  <div class="col-md-6 col-12">
				<div class="box bg-blue">
				  <div class="box-body text-white">
					<div class="font-size-50 font-weight-200">6,374</div>
					<p>Increase in page views</p>
				  </div>

				  <div id="lineIncrease"><canvas width="524" height="140" style="display: inline-block; width: 524.328px; height: 140px; vertical-align: top;"></canvas></div>
				</div>
			  </div>
			  <div class="col-12">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success font-size-18 mr-1"></i> %20</h6>
				  </div>

				  <ul class="flexbox flex-justified text-center">
					<li class="br-1">
					  <div class="font-size-18">953</div>
					  <small>New York</small>
					</li>

					<li class="br-1">
					  <div class="font-size-18">813</div>
					  <small>Los Angeles</small>
					</li>

					<li>
					  <div class="font-size-18">369</div>
					  <small>Dallas</small>
					</li>
				  </ul>

				  <div id="linearea"><canvas width="339" height="80" style="display: inline-block; width: 339px; height: 80px; vertical-align: top;"></canvas></div>
				</div>
			  </div>
			
		  </div>
		</div>
		
        <div class="col-md-3 col-12">			
            <div class="box">
              <div class="box-header with-border">
                <h5 class="box-title">Top Locations</h5>
				<div class="box-tools pull-right">
					<ul class="card-controls">
					  <li class="dropdown">
						<a data-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
						<div class="dropdown-menu dropdown-menu-right">
						  <a class="dropdown-item active" href="#">Today</a>
						  <a class="dropdown-item" href="#">Yesterday</a>
						  <a class="dropdown-item" href="#">Last week</a>
						  <a class="dropdown-item" href="#">Last month</a>
						</div>
					  </li>
					  <li><a href="#" class="link card-btn-reload" data-toggle="tooltip" title="" data-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
					</ul>
				</div>
              </div>	
				
              <div class="box-body">
                <div class="text-center py-20">
					<div class="donut" data-peity='{ "fill": ["#7460ee", "#26c6da", "#fc4b6c"], "radius": 133, "innerRadius": 80  }' >9,6,5</div>
                </div>

                <ul class="flexbox flex-justified text-center mt-30">
                  <li class="br-1">
                    <div class="font-size-20 text-primary">953</div>
                    <small>New York</small>
                  </li>

                  <li class="br-1">
                    <div class="font-size-20 text-success">813</div>
                    <small>Los Angeles</small>
                  </li>

                  <li>
                    <div class="font-size-20 text-danger">369</div>
                    <small>Dallas</small>
                  </li>
                </ul>
              </div>
            </div>
        </div>
		<div class="col-12 col-md-3">
              <div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">Current Visitors</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="uk" style="height: 378px"></div>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
          </div>
	  </div>	
		
	<div class="row">
		  
          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="linechart" >1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>New Users</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">113</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="barchart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Monthly Sale</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4">
            <div class="box box-body">
              <div class="flexbox">
                <div id="discretechart">1,4,3,7,6,4,8,9,6,8,12</div>
                <div class="text-right">
                  <span>Impressions</span><br>
                  <span>
                    <i class="ion-ios-arrow-up text-success"></i>
                    <span class="font-size-18 ml-1">%80</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
		  
      </div>
	  
		
         
      
	</section>
</div>
<?php $this->load->view('layout/sidebar') ?>
<?php $this->load->view('layout/footer') ?>