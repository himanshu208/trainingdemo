<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
        <div class=" col-md-3 col-sm-12 col-lg-3 col-xs-12"><h2 class="inside-banner" style="color:#2980B9 !important;" align="left"><?php
				the_archive_title( '', '' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
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

<section id="about" class="padding-top-bottom " style="  background-position: 100% 0%; background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-12 col-lg-9 col-xs-12" align="left">

	 <div class="row widgetrow" style="" >
	<?php while(have_posts()): the_post(); ?>
         
          <div class="col-md-4 col-sm-12 col-lg-4 col-xs-12 wow fadeInLeft">
            <div class=" bloghome" style="" align="center" >
		  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		  <?php if(!empty($image[0])){ ?>
		   <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" class="img-responsive img-rounded"></a>
		  <?php } else{?>
			<img src="http://www.cssdesignawards.com/hpf/todd-paulson-716.jpg" alt="<?php the_title(); ?>" >
		  <?php } ?>
              <div style="background-color:#fff; box-shadow: 0 0 3px #bdbdbd; padding:10px;"><a href="<?php the_permalink()?>">
                <h1 class="home-blog" style="color:#2980B9 !important; font-size:16px; margin-bottom:0px !important; line-height:22px;" align="left"><?php the_title(); ?></h1>
                </a><br>
                <h2 style="font-size:14px;" align="left"><?php the_author();?></h2>
                <br>
                <hr class="style10">
                <div class="row homeblogfoot">
                  <div class="col-md-6 col-sm-12 col-xs-12 spanblog"><i class="fa fa-calendar"></i>&nbsp;<span class="spanDate"><?php echo get_the_date('M d,Y');?></span></div>
                  
                  <div class="col-md-6 col-sm-12 col-xs-12 spanblog2"><i class="fa fa-comments"></i>&nbsp;<span class="spanDate">7 Comments</span></div>
                </div>
                <div class="" align="center" style=" margin-top:10px;"><span>
                 <a href=" <?php the_permalink()?>"> <button class="btn btn-store1 btn-store" type="submit" name="submit">Explore More</button></a>
                  </span></div>
              </div>
            </div>
          </div>

		
 		
	  <?php endwhile;?>
  </div>
				<div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <!-- pagination -->
                        <div class="pagination">
                             <?php wp_pagenavi();?>
                        </div>
                        <!-- end pagination -->
                    </div>
                </div>
      </div>
	<?php get_sidebar();?>
    </div>
  </div>
</section>

<?php get_footer();
