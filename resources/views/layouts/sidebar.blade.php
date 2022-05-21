
	
			<div class="main-wrapper page-main">
			

				<aside class="app-sidebar mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
					<div class="app-sidebar__user">
					    <div class="dropdown">
							<a class="nav-link pl-2 pr-2 leading-none d-flex" data-toggle="dropdown" href="#">
							{{-- "{{URL::asset('assets/img/avatar/avatar-1.jpeg')}}" --}}
								<img alt="image" src="{{URL::asset('assets/img/avatar/avatar-1.jpeg')}}" class="avatar-md rounded-circle mCS_img_loaded">
								<span class="ml-2 d-lg-block">
							   <h6>{{ Auth::user()->name }}</h6>
							   <span>{{ Auth::user()->email }}</span>

								</span>
							</a>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-desktop"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li class="active"><a class="slide-item active" href="index.html"><span>Sales Dashboard </span></a></li>
								<li><a class="slide-item" href="index2.html"><span>E-Commerce</span></a></li>
								<li><a class="slide-item" href="index3.html"><span>HR Dashboard </span></a></li>
								<li><a class="slide-item" href="index4.html"><span>Finance Dashboard </span></a></li>
								<li><a class="slide-item" href="index5.html"><span>Social Dashboard</span></a></li>
							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="widgets.html"><i class="side-menu__icon fa fa-flask"></i><span class="side-menu__label">Widgets</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-tasks"></i><span class="side-menu__label">UI Elements</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="elements.html" class="slide-item"> Elements</a></li>
								<li><a href="buttons.html" class="slide-item"> Buttons</a></li>
								<li><a href="toastr.html" class="slide-item"> Toastr</a></li>
								<li><a href="calender.html" class="slide-item"> Calendar</a></li>
								<li><a href="rangesliders.html" class="slide-item"> Rangeslider</a></li>
								<li><a href="modals.html" class="slide-item"> Modals</a></li>
								<li><a href="timeline.html" class="slide-item"> Timeline</a></li>
								<li><a href="invoice.html" class="slide-item"> Invoice</a></li>
								<li><a href="users.html" class="slide-item"> Users List</a></li>
								<li><a href="mailinbox.html" class="slide-item"> Mail-inbox</a></li>
								<li><a href="mail-compose.html" class="slide-item"> Mail-Compose</a></li>
							</ul>
						</li>
						<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">staff type</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backstaffstype.index')}}" class="slide-item"> staff type</a></li>
							
							</ul>
						</li>

        				<li class="slide">
						    <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-paw"></i><span class="side-menu__label">staffs</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backstaff.index')}}" class="slide-item"> staffs</a></li>
							
							</ul>
						</li>


						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-table"></i><span class="side-menu__label">Booking</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backbooking.index')}}" class="slide-item">booking page</a></li>
								
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-file-text"></i><span class="side-menu__label">rooms</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backroom.index')}}" class="slide-item"> room</a></li>
						
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-bar-chart"></i><span class="side-menu__label"> id_card_types </span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backIdCard.index')}}" class="slide-item"> id_card_types </a></li>
						
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-map"></i><span class="side-menu__label">Room type</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="{{route('backroomtype.roomtype')}}" class="slide-item"> Room type</a></li>
                                 
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-pie-chart"></i><span class="side-menu__label">Pages</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="profile.html" class="slide-item"> Profile</a></li>
								<li><a href="pricing-tables.html" class="slide-item"> Pricing Tables</a></li>
								<li><a href="gallery.html" class="slide-item"> Gallery</a></li>
								<li><a href="shop.html" class="slide-item"> Shop</a></li>
								<li><a href="shop-cart.html" class="slide-item"> Shop Cart</a></li>
								<li><a href="terms.html" class="slide-item"> Terms and Conditions</a></li>
								<li><a href="register.html" class="slide-item"> Register</a></li>
								<li><a href="login.html" class="slide-item"> Login</a></li>
								<li><a href="forgot.html" class="slide-item"> Forgot Password</a></li>
								<li><a href="reset.html" class="slide-item"> Reset Password</a></li>
								<li><a href="under-construction.html" class="slide-item"> Under Construction</a></li>
								<li><a href="lockscreen.html" class="slide-item"> Lock Screen</a></li>
								<li><a href="404.html" class="slide-item"> 404</a></li>
								<li><a href="505.html" class="slide-item"> 505</a></li>
								<li><a href="emptypage.html" class="slide-item"> Empty  Page</a></li>
							</ul>
						</li>

					</ul>
				</div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; height: 351px; top: 0px; display: block; max-height: 455px;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div></aside>

			
			

			</div>
		
