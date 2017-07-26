<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-570d186f6822fe0c"></script>

<section id="tb" class=" sticky  topbanner" style="background:#f1f1f1; border-bottom: 1px solid #999 !important; " >
  <div class="container">
    <div class="row">
      
 
      <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12  wow fadeInLeft  " align="left" style="">
        
     
        
        <br>
        <div class=" col-md-3 col-sm-12 col-lg-3 col-xs-12"><h2 class="inside-banner" style="color:#2980B9 !important;" align="left"><?php
				//the_title();
			?></h2></div>
         <div class=" col-md-7 col-sm-12 col-lg-7 col-xs-12">
        <div class="input-group">
                
				<form  method="get"  action="<?php echo home_url( '/' ); ?>" style="display:table !important;">
               
                <input type="text" class="form-control" name="s" placeholder="Search JanBask Blogs..." style="border:solid 1px #418FDE;">
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

<style></style>

<section id="about" class="padding-top-bottom " style="  background-position: 100% 0%; background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
	<?php while(have_posts()):the_post();?>
      <div class="col-md-9 col-sm-12 col-lg-9 col-xs-12" align="left">
        <div class=" bloghome" style="" align="center" >
		 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <?php if(!empty($image[0])){ ?>
		   
		    <div class="" style="background: url(<?php echo get_template_directory_uri();?>/assets/img/ba.jpg)  center no-repeat; box-shadow: 0 0 3px #bdbdbd;  padding:20px;"><div class="opacity-light bg-black"></div>
		  <?php } else{?>
			 <div style="background:url(<?php echo get_template_directory_uri();?>/assets/img/ba.jpg) center no-repeat; box-shadow: 0 0 3px #bdbdbd;  padding:20px;">
		  <?php } ?>
          
		  <a href="javascript:;">
            <h1 class="home-blog" style="color:#fff !important; font-size:30px; margin-bottom:0px !important; line-height:40px;" align="left"><?php the_title(); ?></h1>
            </a><br>
            <h2 style="font-size:14px; color:#fff;" align="left">By <?php the_author();?></h2>
            <br>
            <hr class="style10" style="margin-bottom:10px !important;">
            <div class="row homeblogfoot" align="left">
              <div class="col-md-3 col-sm-3 col-xs-6 spanblogdetail" style="color:#fff !important;"><i class="fa fa-calendar"></i>&nbsp;<span class=""><?php echo get_the_date('M d,Y');?></span></div>
              <div class="col-md-3 col-sm-3 col-xs-6 spanblogdetail2" style="color:#fff !important;"><a href="" style="color:#fff !important;"><i class="fa fa-comments"></i>&nbsp;<span class="">Write a Comment</span></a></div>
            </div>
          </div>
        </div>
        <div class="post-detail">
		<?php the_content();?>
		
	<hr class="style10">
       
         <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://janbask-training.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </div>
      </div>
      
<?php endwhile; ?>	
<?php wp_reset_query();?>  
	<?php get_sidebar();?>
    </div>
  </div>
</section>

<?php get_footer();
