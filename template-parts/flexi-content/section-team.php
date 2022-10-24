<?php

$teamHeading = get_sub_field('team_intro_heading');
$teamCopy = get_sub_field('team_intro_copy');

$ourMission = get_sub_field('our_mission');
$ourVision = get_sub_field('our_vision');
$ourValues = get_sub_field('our_values');


 ?>



 <section class="container section-team">

     <?php if ( have_rows('team') ): ?>
       <div class="row">
         <?php $i = 1; while ( have_rows('team') ) : the_row();

         $team_member_photo = get_sub_field('team_member_photo');
         $team_member_name = get_sub_field('team_member_name');
         $team_member_details = get_sub_field('team_member_details');
         $team_member_email = get_sub_field('team_member_email');
         $team_member_phone = get_sub_field('team_member_phone');


         ?>

         <?php if ($i == 8): ?>
           <div class="col-xl-8 d-none d-xl-block section-team__mission_wrap">

             <div class="section-team__mission">

               <div class="align-self-center">

                   <div id="teamsteps">

                    <div class="card-header" id="heading1">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          Our <span>Mission</span>                     </a>

                    </div>

                    <div id="collapse1" class="collapse <!--show-->" aria-labelledby="heading1" data-parent="#teamsteps">
                      <div class="card-body">
                        <?php echo $ourMission ?>
                      </div>
                    </div>




                    <div class="card-header" id="heading2">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Our <span>Vision</span>                     </a>

                    </div>

                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#teamsteps">
                      <div class="card-body">
                      <?php echo $ourVision ?>
                      </div>
                    </div>




                    <div class="card-header" id="heading3">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Our <span>Values</span>                     </a>

                    </div>

                    <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#teamsteps">
                      <div class="card-body">

                            <?php echo $ourValues; ?>

                      </div>
                    </div>



                </div>

               </div>

             </div>

           </div>
         <?php endif; ?>

         <div class="col-md-6 col-xl-4 section-team__member d-flex" style="display: flex">
          <img src="<?php echo $team_member_photo; ?>" alt="<?php echo $team_member_name; ?>">

          <div class="section-team__member_details align-self-center">
            <p class="name"><?php echo $team_member_name; ?></p>
            <p class="details"><?php echo $team_member_details; ?></p>

            <?php if ($team_member_phone): ?>
              <p class="contact"><span>Phone or text</span> <a href="tel:<?php echo $team_member_phone; ?>"><?php echo $team_member_phone; ?></a> </p>
            <?php endif; ?>

            <?php if ($team_member_email): ?>
              <p class="contact"><span>Email</span> <a href="mailto:<?php echo $team_member_email; ?>"><?php echo $team_member_email; ?></a> </p>
            <?php endif; ?>


          </div>

         </div>

         <?php if ($i == 4): ?>

           <div class="col-xl-8 section-team__meet_wrap">

             <div class="section-team__meet">

               <h2><?php echo $teamHeading ?></h2>


                <p><?php echo $teamCopy ?></p>
             </div>

           </div>
         <?php endif; ?>


         <?php if ($i == 8): ?>
           <div class="col-xl-8 d-xl-none section-team__mission_wrap">

             <div class="section-team__mission">

               <div class="align-self-center">


                   <div id="teamsteps">



                    <div class="card-header" id="heading1">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          Our <span>Mission</span>                     </a>

                    </div>

                    <div id="collapse1" class="collapse <!--show-->" aria-labelledby="heading1" data-parent="#teamsteps">
                      <div class="card-body">
                        <?php echo $ourMission ?>
                      </div>
                    </div>




                    <div class="card-header" id="heading2">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Our <span>Vision</span>                     </a>

                    </div>

                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#teamsteps">
                      <div class="card-body">
                        <?php echo $ourVision ?>
                      </div>
                    </div>




                    <div class="card-header" id="heading3">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Our <span>Values</span>                     </a>

                    </div>

                    <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#teamsteps">
                      <div class="card-body">

                          <?php echo $ourValues ?>
                        </div>
                    </div>



                </div>

               </div>

             </div>

           </div>
         <?php endif; ?>

         <?php $i++; endwhile; ?>
       </div>
     <?php endif; ?>

   </div>


 </section>
