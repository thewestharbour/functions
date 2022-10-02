// Outline Admin Blocks Better
add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
  	.editor-styles-wrapper .wp-block-group__inner-container{
		  background: #f8f8f8;
      border: 1px solid #c0c0c0;
    } 
  </style>';
}
