<?php

  $section_intro_heading = get_sub_field('section_intro_heading');
  $section_intro_main_paragraph = get_sub_field('section_intro_paragraph');


 ?>

 <div class="container section-intro">
   <div class="row">

     <div class="col-md-4">

       <h2><?php echo $section_intro_heading  ?></h2>

     </div>

     <div class="col-md-8">

       <?php echo $section_intro_main_paragraph ?>

     </div>

   </div>
 </div>
