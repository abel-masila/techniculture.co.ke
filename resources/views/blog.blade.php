@extends('templates/default')

@section('content')
	<div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    AquaTech 
                    <small>Blogs</small>
                </h1>

                <!-- First Blog Post -->
                <h2>
                    <a href="#">A beginners guide to onion farming in kenya</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">AquaTech</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2016 at 10:00 PM</p>
                <hr>
                <img class="img-responsive" src="{{URL::asset('/img/Yielding.jpg')}}" alt="">
                <hr>
                <p>50 percent of the red onions in Kenya are imported from Tanzania, as indicated by Food and Agriculture Organisation's (FAO) 2014 report. Kenyan Farmers have been doing their best to address the demand and close the gap, but there is still more supply to be achieved. This makes the Red Bulb Onion a very attractive commercial investment for the Kenyan market at the moment, since local production is not enough.

				Major types of onions farmed in Kenya are bulb onions and spring onions. The best areas suited for farming being Karatina, Naivasha, Kieni, Emali and Mai Mahiu.

				Bulb...

				</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                <!-- Second Blog Post -->
                <h2>
                    <a href="#">Getting started on chili farming</a>
                </h2>
                <p class="lead">
                    by <a href="index.php">AquaTech</a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2016 at 10:45 PM</p>
                <hr>
                <img class="img-responsive" src="{{URL::asset('/img/chilli.jpg')}}" alt="">
                <hr>
                <p>One of the lessons for beginners in chilies is to always have a market in mind when you start planting chilies. Someone has to be literary waiting for your chilies to pick them as soon as you harvest. Try free-styling just like that and you will be fighting frustrations from your over-ripping chilies with no real buyer to buy your them and a swarm of brokers telling you how to minimize your loses by selling to them as if they are buying rejects.

				Before you begin planting you have to make sure that your market is viable enough for you to cover your productions costs within the first 2 to 3...</p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>


                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Older</a>
                    </li>
                    <li class="next">
                        <a href="#">Newer &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                <div class="panel panel-success">
				  <div class="panel-heading">
				    <h3 class="panel-title">Blog Search</h3>
				  </div>
				  <div class="panel-body">
				   <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here..">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
				  </div>
				</div>
                </div>
                <!-- Blog Categories Well -->           
                 <div class="panel panel-success">
				  <div class="panel-heading">
				    <h3 class="panel-title">Blog Tags</h3>
				  </div>
				  <div class="panel-body">
				  <div class="col-lg-12">
                         Fish,Water
                    </div>
				  </div>
				</div>

				<div class="panel panel-success">
				  <div class="panel-heading">
				    <h3 class="panel-title">Get in Touch</h3>
				  </div>
				  <div class="panel-body">
				  <div class="col-lg-12">
                         Are you interested in learning more about MFarm? Do you have a new project that you want to talk to us about? Contact us at the number or email address below
                         <address>
							  <strong>Full Name</strong><br>
							  <a href="mailto:#">abelmasila@gmail.com</a>
						</address>
						<address>
							  <abbr title="Phone">Mobile No:</abbr> (254) 703 917754
						</address>
                    </div>
				  </div>
				</div>

				<div class="panel panel-success">
				  <div class="panel-heading">
				    <h3 class="panel-title">Disclaimer</h3>
				  </div>
				  <div class="panel-body">
				  <div class="col-lg-12">
                         All content provided on this AquaTech blog site is for informational purposes only. AquaTech makes no representations as to the accuracy or completeness of any information on this site or found by following any link on this site.
							AquaTech will not be liable for any errors or omissions in this information nor for the availability of this information. AquaTech will not be liable for any losses, injuries, or damages from the display or use of this information.
							This terms and conditions are subject to change at any-time with or without notice.
					</div>
				  </div>
				</div>

            </div>

        </div>
        <!-- /.row -->
@stop
@section('footer')

@stop