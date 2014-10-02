        <div class="row">
          <div class="col-sm-6">
            <div class="well well-signup">
              <?php echo do_shortcode('[gravityform id="2" name="Sign Up" title="false" ajax="true"]'); ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="well well-signup">
              <p>If you've already signed up, please enter your information below to access RampRate resources.</p>
              <?php $args = array(
                'echo'           => true,
                'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
                'form_id'        => 'loginform',
                'label_username' => __( 'Email' ),
                'label_password' => __( 'Password' ),
                'label_remember' => __( 'Remember Me' ),
                'label_log_in'   => __( 'Log In' )
                //'id_username'    => 'user_login',
                //'id_password'    => 'user_pass',
                //'id_remember'    => 'rememberme',
                //'id_submit'      => 'wp-submit',
                //'remember'       => true,
                //'value_username' => NULL,
                //'value_remember' => false
              ); ?>
              <?php wp_login_form( $args ); ?>
              <p class="forgetmenot"><a href="<?php echo wp_lostpassword_url( get_permalink() ); ?>" title="Lost Password">Lost Password</a></p>
            </div>
          </div>
        </div>