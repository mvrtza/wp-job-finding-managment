<?php
function HTSV_create_role() {
	add_role(
		'staff_member',
		__( 'مدیریت استان' ),
		array(
			'read'                   => true,
			'delete_posts'           => true,
			'delete_published_posts' => true,
			'edit_posts'             => true,
			'publish_posts'          => true,
			'upload_files'           => true,
			'edit_pages'             => true,
			'edit_published_pages'   => true,
			'publish_pages'          => true,
			'delete_published_pages' => false,
		)
	);

}
HTSV_create_role();


?>