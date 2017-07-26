<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570d186f6822fe0c"></script>

<section id="tb" class=" sticky  topbanner" style="background:#f1f1f1; border-bottom: 1px solid #999 !important; " >
  <div class="container">
    <div class="row">
      
 
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12  wow fadeInLeft  " align="left" style="">
        
     
        
        <br>
        <div class=" col-md-3 col-sm-12 col-lg-3 col-xs-12"><h2 class="inside-banner" style="color:#2980B9 !important;" align="left">Our Blogs</h2></div>
        <div class=" col-md-7 col-sm-12 col-lg-7 col-xs-12">
        <div class="input-group">
				<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <div class="input-group-btn search-panel">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style="padding:11px;border:solid 1px #418FDE;">
                    	<span id="search_concept">Categories</span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#contains">Java</a></li>
                      <li><a href="#its_equal">Hadoop</a></li>
                      <li><a href="#greather_than">Salesforce</a></li>
                      <li><a href="#less_than">DotNet</a></li>
                      <li class="divider"></li>
                      <li><a href="#all">Others</a></li>
                    </ul>
                </div>
               
                <input type="text" class="form-control"  value="<?php echo get_search_query() ?>" name="s" placeholder="Search JanBask Blogs..." style="border:solid 1px #418FDE;">
                <span class="input-group-btn" >
                    <button class="btn btn-default" type="submit" style="padding:11px;border:solid 1px #418FDE; background-color:#418FDE; color:#fff;"><span class="glyphicon glyphicon-search"></span></button>
                </span>
				</form>
            </div>
         
          <br>
          
        
         
        </div>
      </div>
     
      
     
    </div>
  </div>
  
</section>

<section id="about" class="padding-top-bottom " style="  background-position: 100% 0%; background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12" align="left">
	  
        <div class="row widgetrow" style="" >
         
          <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12 wow fadeInLeft">
            <div class=" bloghome" style="" align="center" >

              <div style="background-color:#fff; box-shadow: 0 0 3px #bdbdbd; padding:10px;">
			  <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyseventeen' ); ?></h1>
			<br>
                
                <br>
                <div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyseventeen' ); ?></p>

					

				</div>

              </div>
            </div>
          </div>

		
 		
        </div>
		<!-- Row Blog list end -->
			
 
				
      </div>
	
    </div>
  </div>
</section>


<?php get_footer();
