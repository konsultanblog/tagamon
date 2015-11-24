<?php
/*
Contact Widget
*/
add_action('widgets_init', create_function('', 'return register_widget("niche_contact_widget");'));

class niche_contact_widget extends WP_Widget {

	// constructor
	function __construct() {
		parent::__construct(
			'niche_contact_widget', // Base ID
			__( 'Contact widgets', 'niche' ) // Name			
		);
	}

  function form($niche_instance) {

    if ($niche_instance) {
      $niche_title = sanitize_text_field($niche_instance['contact_title']);
      $niche_address = sanitize_text_field($niche_instance['address']);
      $niche_phone = sanitize_text_field($niche_instance['phone']);
      $niche_fax = sanitize_text_field($niche_instance['fax']);
      $niche_web = esc_url_raw($niche_instance['web']);
      $niche_email = sanitize_email($niche_instance['email']);
    } else {
	  $niche_title=$niche_email=$niche_address=$niche_phone=$niche_fax=$niche_web= '';
    }
    ?>
    <p>
      <label for="<?php echo $this->get_field_id('contact_title'); ?>">
        <?php _e('Widget Title', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('contact_title'); ?>" name="<?php echo $this->get_field_name('contact_title'); ?>" type="text" value="<?php echo esc_attr($niche_title); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('address'); ?>">
        <?php _e('Address', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>" type="text" value="<?php echo esc_attr($niche_address); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('phone'); ?>">
        <?php _e('Phone', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>" name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($niche_phone); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('fax'); ?>">
        <?php _e('Fax', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('fax'); ?>" name="<?php echo $this->get_field_name('fax'); ?>" type="text" value="<?php echo esc_attr($niche_fax); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('email'); ?>">
    <?php _e('Email', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo esc_attr($niche_email); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('web'); ?>">
    <?php _e('Website', 'niche'); ?>
      </label>
      <input class="widefat" id="<?php echo $this->get_field_id('web'); ?>" name="<?php echo $this->get_field_name('web'); ?>" type="text" value="<?php echo esc_attr($niche_web); ?>" />
    </p>
        <?php
  }

  function update($niche_new_instance, $niche_old_instance) {
    $niche_instance = $niche_old_instance;
    $niche_instance['contact_title'] = sanitize_text_field($niche_new_instance['contact_title']);
    $niche_instance['address'] = sanitize_text_field($niche_new_instance['address']);
    $niche_instance['phone'] = sanitize_text_field($niche_new_instance['phone']);
    $niche_instance['fax'] = sanitize_text_field($niche_new_instance['fax']);
    $niche_instance['email'] = sanitize_email($niche_new_instance['email']);
    $niche_instance['web'] = esc_url_raw($niche_new_instance['web']);
    return $niche_instance;
  }

  function widget($args, $niche_instance) {
    extract($args);
    // these are the widget options
    $niche_title = apply_filters('widget_title', $niche_instance['contact_title']);
      $niche_address = esc_attr($niche_instance['address']);
      $niche_phone = esc_attr($niche_instance['phone']);
      $niche_fax = esc_attr($niche_instance['fax']);
      $niche_web = esc_url_raw($niche_instance['web']);
      $niche_email = esc_attr($niche_instance['email']);
    echo $before_widget;
    // Check if title is set
    if ($niche_title) {
      echo $before_title . $niche_title . $after_title;
    }
    ?>
    <div class="contact">
      <ul>
		<?php if (!empty($niche_address)) { ?><li><span><?php _e('Address','niche'); ?> : </span><?php echo esc_attr($niche_address); ?></li> <?php } ?>
		<?php if (!empty($niche_phone)) { ?><li><span><?php _e('Phone','niche'); ?> : </span> <?php echo esc_attr($niche_phone); ?></li> <?php } ?>
		<?php if (!empty($niche_fax)) { ?><li><span><?php _e('Fax','niche'); ?> : </span> <?php echo esc_attr($niche_fax); ?></li> <?php } ?>
		<?php if (!empty($niche_email)) { ?><li><span><?php _e('Email','niche'); ?> : </span><a href="mailto:<?php echo esc_attr($niche_email); ?>"><?php echo esc_attr($niche_email); ?></a></li> <?php } ?>
		<?php if (!empty($niche_web)) { ?><li><span><?php _e('Web','niche'); ?> : </span><a href="<?php echo esc_url($niche_web); ?>"><?php echo esc_url($niche_web); ?></a></li> <?php } ?>
      </ul>
    </div>
    <?php
    echo $after_widget;
  }

}
?>
