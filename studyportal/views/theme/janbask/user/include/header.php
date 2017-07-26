<!--Header-part-->
<div id="header">
  <h1><a href="#">JanBask Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse hidden-phone">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome <?php	echo $this->session->userdata("user_name");	?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php	echo site_url("user");	?>"><i class="icon-home"></i> My Dashboard</a></li>
		<li class="divider"></li>
        <li><a href="<?php	echo site_url("user/profile");	?>"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="<?php	echo site_url("user/orders");	?>"><i class="icon-check"></i> My Orders</a></li>
        
        <li class="divider"></li>
        <li><a href="<?php	echo site_url("user/logout");	?>"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"> <span class="text">Exlore Courses</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="<?php echo site_url('online-java-training');?>" target="_blank">Java</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('dotnet-training');?>" target="_blank">DotNet</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('business-analyst-training');?>" target="_blank">BA</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('online-qa-training');?>" target="_blank">QA</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('pmp-course');?>" target="_blank">PMP</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('hadoop-big-data-analytics');?>" target="_blank">Hadoop</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('online-salesforce-training');?>" target="_blank">Salesforce</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('courses/aws');?>" target="_blank">AWS</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('courses/android');?>" target="_blank">Adnroid</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('iphone-application-training');?>" target="_blank">iOS</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('courses/digital_marketing');?>" target="_blank">Digital Marketing</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('oracle-dba-training');?>" target="_blank">Oracle DBA</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('online-sql-server-training');?>" target="_blank">SQL</a></li>
        <li class="divider"></li>
        <li><a class="sAdd" title="" href="<?php echo site_url('data-science');?>" target="_blank">Data Science</a></li>
        <li class="divider"></li>		
        <li><a class="sInbox" title="" href="<?php echo site_url('courses/vmware');?>" target="_blank"> VM Ware</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="<?php echo site_url('devops-certification-training');?>" target="_blank"> Devops</a></li>
        
      </ul>
    </li>
    <li><a href="http://janbaskdemo.com/jbclassblog/" target="_blank"><i class="icon-check"></i> Blogs</a></li>
    <li class=""><a title="" href="<?php	echo site_url("user/logout");	?>"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>

<!--start-top-serch--> 

<!--close-top-serch--> 