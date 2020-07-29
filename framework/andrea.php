 


 <?php 


 function my_cmb_box()
 {
 	$gallery=new_cmb2_box(array(
 			'title' => 'Add gallery post',
 			'id' => 'gallery_post',
 			'object_types' => 'post'

 		));
 	$gallery->add_field(array(
 		'name' => 'Add gallery Image',
 		'id' => 'gallery_image',
 		'type' => 'file_list'
 	));



 }
add_action('cmb2_init','my_cmb_box');


















  ?>