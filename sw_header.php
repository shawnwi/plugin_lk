<?php
function add_stylesheet_to_head() {
?>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.4.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="<?=plugin_dir_url( __FILE__ ) ?>src/js/multidatepicker/jquery-ui.multidatespicker.js"></script>
<link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/pepper-grinder/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/dubrox/Multiple-Dates-Picker-for-jQuery-UI/master/jquery-ui.multidatespicker.css">
<?php
  echo "<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";

  ?>
<style>
<?php
$startDate = '2022-08-01';
$endDate = '2022-12-31';
$thispageID = get_the_ID();
$args = array( 'post_type' => 'calendar_menu', 'posts_per_page' => '' );

$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post();


  //filter which product to be shown
    $featured_posts = get_field('food_package');
    $product_filter = '';
    if( $featured_posts ):
      foreach( $featured_posts as $featured_post ): 
        $permalink = get_permalink( $featured_post->ID );
        $title = get_the_title( $featured_post->ID ); //echo esc_html( $title );
        $custom_field = get_field( 'field_name', $featured_post->ID ); //echo esc_html( $custom_field );

        //if($featured_post->ID==$thispageID){echo "yahoo!!!";}
       
      

        //echo "this product ID: " . $featured_post->ID;
        //echo "this page ID: " . $thispageID;
        //echo "this food ID is: " . get_the_ID();
        if($featured_post->ID==$thispageID){ //start to display the calendar based on this product
   


  $terms = get_the_terms( get_the_ID() , 'category' );
  if ( $terms != null ){
    foreach( $terms as $term ) {
      //$term_link = get_term_link( $term, 'category' );
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      
      if($term->slug=='mon'){
        $img = get_the_post_thumbnail_url();



        //start for loop for monday
        for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
          if (date('N', $i) == 1){ //Monday == 1
            //echo date('l Y-m-d', $i); //prints the date only if it's a Monday
            ?>
            
              <?php echo ".class_" . date('Ymd', $i); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled{
                background-image: unset !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }   

              <?php echo ".class_" . date('Ymd', $i); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" . date('Ymd', $i); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
              }
      
            <?
          }//end if - only monday
        
        }//end for loop for monday


      } //if mon - get the image













      if($term->slug=='tue'){
        $img = get_the_post_thumbnail_url();



        //start for loop for monday
        for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
          if (date('N', $i) == 2){ //Tuesday == 1
            //echo date('l Y-m-d', $i); //prints the date only if it's a Monday
            ?>
            
              <?php echo ".class_" . date('Ymd', $i); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled{
                background-image: unset !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }   

              <?php echo ".class_" . date('Ymd', $i); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" . date('Ymd', $i); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
              }
      
            <?
          }//end if - only monday
        
        }//end for loop for monday


      } //if mon - get the image































      if($term->slug=='wed'){
        $img = get_the_post_thumbnail_url();



        //start for loop for monday
        for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
          if (date('N', $i) == 3){ //Tuesday == 1
            //echo date('l Y-m-d', $i); //prints the date only if it's a Monday
            ?>
            
              <?php echo ".class_" . date('Ymd', $i); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled{
                background-image: unset !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }   

              <?php echo ".class_" . date('Ymd', $i); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" . date('Ymd', $i); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
              }
      
            <?
          }//end if - only monday
        
        }//end for loop for monday


      } //if mon - get the image























      if($term->slug=='thu'){
        $img = get_the_post_thumbnail_url();



        //start for loop for monday
        for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
          if (date('N', $i) == 4){ //Tuesday == 1
            //echo date('l Y-m-d', $i); //prints the date only if it's a Monday
            ?>
            
              <?php echo ".class_" . date('Ymd', $i); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled{
                background-image: unset !important;
              }   
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }   

              <?php echo ".class_" . date('Ymd', $i); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" . date('Ymd', $i); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
              }
      
            <?
          }//end if - only monday
        
        }//end for loop for monday


      } //if mon - get the image
























      if($term->slug=='fri'){
        $img = get_the_post_thumbnail_url();



        //start for loop for monday
        for ($i = strtotime($startDate); $i <= strtotime($endDate); $i = strtotime('+1 day', $i)) {
          if (date('N', $i) == 5){ //Tuesday == 1
            //echo date('l Y-m-d', $i); //prints the date only if it's a Monday
            ?>
            
              <?php echo ".class_" . date('Ymd', $i); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled{
                background-image: unset !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }    

              <?php echo ".class_" . date('Ymd', $i); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" . date('Ymd', $i); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
              }
      
            <?php
          }//end if - only monday
        
        }//end for loop for monday


      } //if mon - get the image













      unset($term); 
    } //for each for the term
  }//end if for the term




  
  
  
  
  
  
  
  
  
  
  
  if(get_field('day')){

    $img = get_the_post_thumbnail_url();
  
  //echo "testing!------";
  //echo the_field('day');
  //echo the_field('month');
  ?>
            
              <?php echo ".class_" . get_field('day'); ?>{
                background-image:url('<?=$img?>') !important;
                background-size: cover !important;
              }
              <?php echo ".class_" . get_field('day'); ?>.ui-state-disabled{
                background-image: unset !important;
              }
              <?php echo ".class_" . date('Ymd', $i); ?>.ui-state-disabled::before{
                display: none;
              }   

              <?php echo ".class_" . get_field('day'); ?> a{
                background: transparent !important;
                color: #FFF !important;
              }

              <?php echo ".class_" .  get_field('day'); ?>::before{
                content: '<?=get_the_title()?>';
                position: absolute;color:#FFF;padding: 10px 20px;max-width:120px;margin-top: 65px; line-height: 17px;z-index:1;opacity:.8;background-color: #000;font-size:12px;
                width: 108px;
              }
      
            <?php


  
  }//special for specific day

  }//end $product_filter


endforeach;
endif;








  endwhile;wp_reset_postdata();
endif;
?>

</style>
<?php  
  } //end all the styling added
  add_action( 'wp_head', 'add_stylesheet_to_head' );
?>
