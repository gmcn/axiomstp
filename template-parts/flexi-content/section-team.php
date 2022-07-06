<?php



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


                   <div id="accordion">



                    <div class="card-header" id="heading1">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          Our <span>Mission</span>                     </a>

                    </div>

                    <div id="collapse1" class="collapse <!--show-->" aria-labelledby="heading1" data-parent="#accordion">
                      <div class="card-body">
                        <p>Providing a complete range of innovative temporary surface protection solutions that exceed customer expectations, and making it easy for construction professionals to protect finished surfaces, resulting in the satisfaction of all stakeholders.</p>
                      </div>
                    </div>




                    <div class="card-header" id="heading2">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Our <span>Vision</span>                     </a>

                    </div>

                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordion">
                      <div class="card-body">
                      <p>To be the primary provider of temporary surface protection solutions to construction professionals in North America. </p>              </div>
                    </div>




                    <div class="card-header" id="heading3">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Our <span>Values</span>                     </a>

                    </div>

                    <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordion">
                      <div class="card-body">

                          <p><strong>INTEGRITY</strong> – We are upright and can be trusted to do the right thing.</p>
                          <p><strong>CONTINUOUS IMPROVEMENT</strong> – We are always learning and growing. If there’s a better way to do something, we embrace it.</p>
                          <p><strong>TEAM SPIRIT</strong> – People are our greatest asset. We value everyone and work together as one team.</p>
                          <p><strong>GIVING BACK</strong> – We have a generosity mindset and believe in adding value to our circle of influence.</p>

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
               <h3>Meet the Team</h3>

                <p>We have a team of temporary surface protection experts ready to assist you with your project needs, no matter how big or small they are! Reach out to us by phone, text, email, or our online form and we will respond quickly - the #TeamAxiom way.
                </p>
             </div>

           </div>
         <?php endif; ?>


         <?php if ($i == 8): ?>
           <div class="col-xl-8 d-xl-none section-team__mission_wrap">

             <div class="section-team__mission">

               <div class="align-self-center">


                   <div id="accordion">



                    <div class="card-header" id="heading1">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                          Our <span>Mission</span>                     </a>

                    </div>

                    <div id="collapse1" class="collapse <!--show-->" aria-labelledby="heading1" data-parent="#accordion">
                      <div class="card-body">
                        <p>Providing a complete range of innovative temporary surface protection solutions that exceed customer expectations, and making it easy for construction professionals to protect finished surfaces, resulting in the satisfaction of all stakeholders.</p>
                      </div>
                    </div>




                    <div class="card-header" id="heading2">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                          Our <span>Vision</span>                     </a>

                    </div>

                    <div id="collapse2" class="collapse " aria-labelledby="heading2" data-parent="#accordion">
                      <div class="card-body">
                      <p>To be the primary provider of temporary surface protection solutions to construction professionals in North America. </p>              </div>
                    </div>




                    <div class="card-header" id="heading3">

                        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                          Our <span>Values</span>                     </a>

                    </div>

                    <div id="collapse3" class="collapse " aria-labelledby="heading3" data-parent="#accordion">
                      <div class="card-body">

                          <p><strong>INTEGRITY</strong> – We are upright and can be trusted to do the right thing.</p>
                          <p><strong>ICONTINUOUS IMPROVEMENT</strong> – We are always learning and growing. If there’s a better way to do something, we embrace it.</p>
                          <p><strong>ITEAM SPIRIT</strong> – People are our greatest asset. We value everyone and work together as one team.</p>
                          <p><strong>IGIVING BACK</strong> – We have a generosity mindset and believe in adding value to our circle of influence.</p>

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
