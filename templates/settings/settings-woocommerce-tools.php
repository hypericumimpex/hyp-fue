<h3><?php _e('Rescan Customer Orders', 'follow_up_emails'); ?></h3>
<p>Reset your customer data with this setting.</p>

<?php wp_nonce_field( 'fue-update-settings-verify' ); ?>

<p>
	<a href="admin-post.php?action=fue_rescan_orders" class="button"><?php _e('Scan Customer Orders', 'follow_up_emails'); ?></a>
</p>

<hr/>
