

<!--sidebar-menu-->
<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-inbox"></i> Menu</a>
  <ul>
    <li class="active admin_menu"><a href="<?php	echo site_url('myadmin');	?>"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-user"></i> <span>Student Management</span></a>
	
	<ul>	
    <li > <a href="<?php	echo site_url('myadmin/users');	?>"><i class="icon icon-user"></i> <span>Registered Student</span></a> </li>
    <li > <a href="<?php	echo site_url('myadmin/enrolled-users');	?>"><i class="icon icon-user"></i> <span>Enrolled Student</span></a> </li>
	
	<li > <a href="<?php	echo site_url('myadmin/add-new-user');	?>"><i class="icon icon-user"></i> <span>Add New User</span></a> </li>
	
	<li > <a href="<?php	echo site_url('myadmin/enroll-user-course');	?>"><i class="icon icon-user"></i> <span>Enroll Student to Course</span></a> </li>
	</ul>
	</li>
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-user"></i> <span>Course Management</span></a>	
	<ul>
	<li > <a href="<?php	echo site_url('myadmin/courses');	?>"><i class="icon icon-pencil"></i> <span>Manage Courses</span></a> </li>
	<li > <a href="<?php	echo site_url('myadmin/batches');	?>"><i class="icon icon-pencil"></i> <span>Manage Batches</span></a> </li>
    <li > <a href="<?php	echo site_url('myadmin/classes');	?>"><i class="icon icon-pencil"></i> <span>Manage Classes</span></a> </li>
	</ul>
	</li>
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> <span>Trainer Management</span></a>
	
	<ul>	
     <li > <a href="<?php	echo site_url('myadmin/trainers');	?>"><i class="icon icon-pencil"></i> <span>Manage Trainers</span></a> </li>	
	 </ul>
	</li>
	
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> 	<span>Coupon Management</span></a>
		<ul>	
			<li >
				<a href="<?php	echo site_url('myadmin/coupon');	?>">
					<i class="icon icon-pencil"></i>
					<span>Coupons</span>
				</a>
			</li>	
		</ul>
	</li>
	
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> <span>Enquiry Management</span></a>
	
	<ul>

     <li > <a href="<?php	echo site_url('myadmin/enquiries');	?>"><i class="icon icon-pencil"></i> <span>Enquiries</span></a> </li>
     
	 </ul>
	 </li>
    <li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> <span>Newsletter Management</span></a>
     <ul>
        <li><a href="<?php	echo site_url('myadmin/subscriber');	?>">Subscriber</a></li>
        <li><a href="<?php	echo site_url('myadmin/emailtemplate');	?>">Email Template</a></li>
   
      </ul>

    </li>	
    <li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> <span>Report Management</span></a>
     <ul>
        <li><a href="<?php	echo site_url('myadmin/subscriber');	?>">Subscriber</a></li>
   
      </ul>

    </li>	
	
	<li class="submenu admin_menu"> <a href="#"><i class="icon icon-envelope"></i> <span>Rating Management</span></a>
     <ul>
        <li><a href="<?php	echo site_url('myadmin/ratings');	?>">Ratings</a></li>
		<li><a href="<?php	echo site_url('myadmin/new-rating-requests');	?>">New Rating Requests</a></li>
      </ul>

    </li>	
	
  </ul>
</div>
<!--sidebar-menu--> 
