<!--
Author: RitronixTechnology
Author URL: http://RitronixTechnology.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 12/4/18
 * Time: 7:48 PM
 */
?>

			<!-- banner -->
				<div class="banner">
					<div class="banner-grids">
						<div class="banner-left">
							<div class="banner-left1">
								<div class="banner-left1-grid">
									<img src="<?=base_url()?>Static/home/images/1.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<h3>
											<a href="">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="<?=base_url()?>Static/home/images/4.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">

										<h3>
											<a href="">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-left2">
								<div class="banner-left1-grid">
									<img src="<?=base_url()?>Static/home/images/3.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<h3>
											<a href="">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="<?=base_url()?>Static/home/images/2.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<h3>
											<a href="">
												Kids studying
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="banner-right">
							<section class="slider">
								<div class="flexslider">
									<ul class="slides">
										<li>
											<div class="services-grid-right-grid1">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid2">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid3">
												
											</div>
										</li>
									</ul>
								</div>
							</section>
									<!--FlexSlider-->
									<script defer src="<?=base_url()?>Static/home/js/jquery.flexslider.js"></script>
									<script type="text/javascript">
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									</script>
									<!--End-slider-script-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner -->
			<!-- banner-bottom -->
				<div class="banner-bottom">
					<div class="banner-bottom-grids">
						<div class="col-md-4 banner-bottom-grid">
							<h3>Welcome To <span>IPS</span></h3>
							<h2><i>" Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium. "</i></h2>
							<p>But I must explain to you how all this mistaken idea of denouncing 
								pleasure and praising pain was born and I will give you a complete 
								account of the system, and expound the actual teachings of the great 
								explorer of the truth, the master-builder of human happiness. 
								<span>No one rejects, dislikes, or avoids pleasure itself, because it is 
								pleasure, but because those who do not know how to pursue pleasure 
								rationally encounter consequences that are extremely painful.</span></p>
<!--							<div class="more">-->
<!--								<a href="" class="hvr-rectangle-out">Read More...</a>-->
<!--							</div>-->
<!--							<div class="tags">-->
<!--								<h4>Tags</h4>-->
<!--								<ul>-->
<!--									<li><a href="">Themes</a></li>-->
<!--									<li><a href="">Art</a></li>-->
<!--									<li><a href="">Music</a></li>-->
<!--									<li><a href="">Entertainment</a></li>-->
<!--									<li><a href="">New</a></li>-->
<!--									<li><a href="">Design</a></li>-->
<!--									<li><a href="">Books</a></li>-->
<!--									<li><a href="">Themes</a></li>-->
<!--									<li><a href="">Art</a></li>-->
<!--									<li><a href="">Music</a></li>-->
<!--									<li><a href="">Entertainment</a></li>-->
<!--									<li><a href="">New</a></li>-->
<!--									<li><a href="">Design</a></li>-->
<!--									<li><a href="">Books</a></li>-->
<!--								</ul>-->
<!--							</div>-->
						</div>
						<div class="col-md-4 banner-bottom-grid">
							<h3>Latest Projects For <span>Kids</span></h3>
							<div class="load_more">	
								<script>
									$(document).ready(function () {
										size_li = $("#myList li").size();
										x=1;
										$('#myList li:lt('+x+')').show();
										$('#loadMore').click(function () {
											x= (x+1 <= size_li) ? x+1 : size_li;
											$('#myList li:lt('+x+')').show();
										});
										$('#showLess').click(function () {
											x=(x-1<0) ? 1 : x-1;
											$('#myList li').not(':lt('+x+')').hide();
										});
									});
								</script>
								<ul id="myList">
									<li>
										<div class="l_g">
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/8.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>hdghdhadshasjhasjhajsjasjh</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/9.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>dgvhdchdhdchdhdh</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/10.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>wywywqyqwwquwu</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/11.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>Itaque earum rerum hic tenetur a sapiente></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/12.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>aut reiciendis voluptatibus maiores</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</li>
									<li>
										<div class="l_g">
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/8.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>unde omnis iste natus error sit voluptatem</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/9.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>"Lorem ipsum dolor consectetur adipiscing</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="<?=base_url()?>Static/home/images/10.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4>culpa qui officia deserunt mollit anim id</h4>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</li>
								</ul>
									<div id="loadMore" class="hvr-rectangle-out">Load more</div>
									<div id="showLess" class="hvr-rectangle-out">Show less</div>
							</div>
						</div>
						<div class="col-md-4 banner-bottom-grid">
							<h3>What's <span>New</span></h3>
							<div class="banner-bottom-grid-fig">
								<div class="banner-bottom-grid-fig1">
									<img src="<?=base_url()?>Static/home/images/4.jpg" alt=" " class="img-responsive" />
									<div class="banner-bottom-grid-fig1-pos">
<!--										<a href="">At vero eos et accusamus et iusto odio dignissimos ducimus</a>-->
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 20, 2016 By </p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-1</span></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 25, 2016 By </p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-2</span></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 28, 2016 By </p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-3</span></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 30, 2016 By </p>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner-bottom -->
<!-- //body -->
<!-- footer -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
              containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
         };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script src="<?=base_url()?>Static/home/js/bootstrap.js"></script>
<!-- //for bootstrap working -->