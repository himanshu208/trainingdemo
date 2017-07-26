<!--Header-part-->
<div id="header">
  <h1><a href="#">JanBask Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse hidden-phone">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome <?php	echo $this->session->userdata('admin_name');	?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php	echo site_url('myadmin/users');	?>"><i class="icon-user"></i>Registered Users</a></li>
		<li class="divider"></li>
           <li><a href="<?php	echo site_url('myadmin/updatepassword');	?>"><i class="icon-check"></i>Update Password</a></li>
		   <li class="divider"></li>
           <li><a href="<?php	echo site_url('myadmin/enrolled-users');	?>"><i class="icon-check"></i>Enrolled User</a></li>
		<li class="divider"></li>
           <li><a href="<?php	echo site_url('myadmin/courses');	?>"><i class="icon-check"></i>Manage Courses</a></li>
		<li class="divider"></li>
           <li><a href="<?php	echo site_url('myadmin/batches');	?>"><i class="icon-check"></i>Manage Batches</a></li>
        <li class="divider"></li>
           <li><a href="<?php	echo site_url('myadmin/classes');	?>"><i class="icon-check"></i>Manage Class</a></li>
        <li class="divider"></li>
        <li><a href="<?php	echo site_url('myadmin/trainers');	?>"><i class="icon-check"></i>Trainers Registeration</a></li>
        <li class="divider"></li>
        <li><a href="<?php	echo site_url('myadmin/corporate-enquiries');	?>"><i class="icon-check"></i>Corporate Training Enquiries</a></li>
        <li class="divider"></li>
        <li><a href="<?php	echo site_url('myadmin/contact-us-enquiries');	?>"><i class="icon-check"></i>Contact Us Enquiries</a></li>
        <li class="divider"></li>
      
        <li><a href="<?php	echo site_url('myadmin/logout');	?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    
    <li class=""><a title="" href="<?php	echo site_url('myadmin/logout');	?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

