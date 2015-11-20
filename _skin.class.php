<?php
/**
 * This file implements a class derived of the generic Skin class in order to provide custom code for
 * the skin in this folder.
 *
 * This file is part of the b2evolution project - {@link http://b2evolution.net/}
 *
 * @package skins
 * @subpackage bootstrap_blog
 */
if( !defined('EVO_MAIN_INIT') ) die( 'Please, do not access this page directly.' );

/**
 * Specific code for this skin.
 *
 * ATTENTION: if you make a new skin you have to change the class name below accordingly
 */
class lava_Skin extends Skin
{
	var $version = '1.0';
	/**
	 * Do we want to use style.min.css instead of style.css ?
	 */
	var $use_min_css = 'check';  // true|false|'check' Set this to true for better optimization
	// Note: we leave this on "check" in the bootstrap_blog_skin so it's easier for beginners to just delete the .min.css file
	// But for best performance, you should set it to true.

	/**
	 * Get default name for the skin.
	 * Note: the admin can customize it.
	 */
	function get_default_name()
	{
		return 'Lava Skin';
	}


	/**
	 * Get default type for the skin.
	 */
	function get_default_type()
	{
		return 'normal';
	}


	/**
	 * What evoSkins API does has this skin been designed with?
	 *
	 * This determines where we get the fallback templates from (skins_fallback_v*)
	 * (allows to use new markup in new b2evolution versions)
	 */
	function get_api_version()
	{
		return 6;
	}


	/**
	 * Get definitions for editable params
	 *
	 * @see Plugin::GetDefaultSettings()
	 * @param local params like 'for_editing' => true
	 */
	function get_param_definitions( $params )
	{
		$r = array_merge( array(
				'general_settings_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('General settings')
				),
					'page_bg_color' => array(
						'label' => T_('Page background color'),
						'note' => T_('Page background color if there is no background image.'),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'page_bg_image' => array(
						'label' => T_('Page background image'),
						'defaultvalue' => '',
						'type' => 'text',
						'size' => '50'
					),
					'pg_sec_bg_color' => array(
						'label' => T_('Section blocks background color'),
						'note' => T_(''),
						'defaultvalue' => '#f9f9f9',
						'type' => 'color',
					),
					'pg_sec_bor_color' => array(
						'label' => T_('Section blocks border color'),
						'note' => T_(''),
						'defaultvalue' => '#dddddd',
						'type' => 'color',
					),
					'page_title_color' => array(
						'label' => T_('Page title color'),
						'note' => T_(''),
						'defaultvalue' => '#8b8b8b',
						'type' => 'color',
					),
					'page_tagline_color' => array(
						'label' => T_('Page tagline color'),
						'note' => T_(''),
						'defaultvalue' => '#a2a2a2',
						'type' => 'color',
					),
					'page_text_color' => array(
						'label' => T_('Page text color'),
						'note' => T_(''),
						'defaultvalue' => '#333',
						'type' => 'color',
					),
					'page_links_color' => array(
						'label' => T_('Page links color'),
						'note' => T_(''),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),
					'page_links_h_color' => array(
						'label' => T_('Page links hover color'),
						'note' => T_(''),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),
				'general_settings_end' => array(
					'layout' => 'end_fieldset',
				),
			
			
				'navi_settings_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Navigation settings')
				),
					'navi_bg_color' => array(
						'label' => T_('Navigation background color'),
						'note' => T_(''),
						'defaultvalue' => '#333',
						'type' => 'color',
					),
					'navi_trig_h_color' => array(
						'label' => T_('Navigation trigger button color'),
						'note' => T_('Background hover color of the navigation list trigger when on small size screens. Degault background color is the same as the site links color.'),
						'defaultvalue' => '#c65713',
						'type' => 'color',
					),
					'navi_links_color' => array(
						'label' => T_('Navigation links color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
				'navi_settings_end' => array(
					'layout' => 'end_fieldset',
				),
				
				
				'full_story_button_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Full story button settings')
				),
					'fs_but_color' => array(
						'label' => T_('Full story button color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'fs_but_bg_color' => array(
						'label' => T_('Full story button background color'),
						'note' => T_(''),
						'defaultvalue' => '#333',
						'type' => 'color',
					),
					'fs_but_hov_col' => array(
						'label' => T_('Full story button hover color'),
						'note' => T_(''),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),
				'full_story_button_end' => array(
					'layout' => 'end_fieldset',
				),
				
				
				'tags_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Tags settings')
				),
					'tags_color' => array(
						'label' => T_('Tags color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'tags_bg_color' => array(
						'label' => T_('Tags background color'),
						'note' => T_(''),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),
					'tags_color_h' => array(
						'label' => T_('Tags color (hover)'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),					
					'tags_bg_color_h' => array(
						'label' => T_('Tags background color (hover)'),
						'note' => T_(''),
						'defaultvalue' => '#c65713',
						'type' => 'color',
					),
				'tags_end' => array(
					'layout' => 'end_fieldset',
				),
				
				
				'comment_buttons_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Submit/Preview button settings')
				),
					'submit_color' => array(
						'label' => T_('Submit button color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'submit_bg_color' => array(
						'label' => T_('Submit button background color'),
						'note' => T_(''),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),				
					'preview_color' => array(
						'label' => T_('Preview button color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'preview_bg_color' => array(
						'label' => T_('Preview button background color'),
						'note' => T_(''),
						'defaultvalue' => '#333',
						'type' => 'color',
					),	
				'comment_buttons_end' => array(
					'layout' => 'end_fieldset',
				),
				
				
				'pagination_start' => array(
					'layout' => 'begin_fieldset',
					'label'  => T_('Pagination settings')
				),
					'pag_color' => array(
						'label' => T_('Pagination link color'),
						'note' => T_('This includes the bottom border color as well.'),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),
					'pag_bg_color' => array(
						'label' => T_('Pagination link background color'),
						'note' => T_(''),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),				
					'pag_h_color' => array(
						'label' => T_('Pagination link hover color'),
						'note' => T_('Also the color of active pagination link.'),
						'defaultvalue' => '#fff',
						'type' => 'color',
					),
					'pag_h_bg_color' => array(
						'label' => T_('Pagination link background hover color'),
						'note' => T_('Also the background color of active pagination link.'),
						'defaultvalue' => '#f86d18',
						'type' => 'color',
					),	
				'pagination_end' => array(
					'layout' => 'end_fieldset',
				),
				
				
				// Colorbox
				'colorbox' => array(
					'label' => T_('Colorbox Image Zoom'),
					'note' => T_('Check to enable javascript zooming on images (using the colorbox script)'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_post' => array(
					'label' => T_('Voting on Post Images'),
					'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_post_numbers' => array(
					'label' => T_('Display Votes'),
					'note' => T_('Check to display number of likes and dislikes'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_comment' => array(
					'label' => T_('Voting on Comment Images'),
					'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_comment_numbers' => array(
					'label' => T_('Display Votes'),
					'note' => T_('Check to display number of likes and dislikes'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_user' => array(
					'label' => T_('Voting on User Images'),
					'note' => T_('Check this to enable AJAX voting buttons in the colorbox zoom view'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				'colorbox_vote_user_numbers' => array(
					'label' => T_('Display Votes'),
					'note' => T_('Check to display number of likes and dislikes'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
				// Other settings
				'gender_colored' => array(
					'label' => T_('Display gender'),
					'note' => T_('Use colored usernames to differentiate men & women.'),
					'defaultvalue' => 0,
					'type' => 'checkbox',
				),
				'bubbletip' => array(
					'label' => T_('Username bubble tips'),
					'note' => T_('Check to enable bubble tips on usernames'),
					'defaultvalue' => 0,
					'type' => 'checkbox',
				),
				'autocomplete_usernames' => array(
					'label' => T_('Autocomplete usernames'),
					'note' => T_('Check to enable auto-completion of usernames entered after a "@" sign in the comment forms'),
					'defaultvalue' => 1,
					'type' => 'checkbox',
				),
			), parent::get_param_definitions( $params ) );

		return $r;
	}


	/**
	 * Get ready for displaying the skin.
	 *
	 * This may register some CSS or JS...
	 */
	function display_init()
	{
		global $Messages, $debug, $disp, $media_path, $media_url;

		// Request some common features that the parent function (Skin::display_init()) knows how to provide:
		parent::display_init( array(
				'jquery',                  // Load jQuery
				'font_awesome',            // Load Font Awesome (and use its icons as a priority over the Bootstrap glyphicons)
				'bootstrap',               // Load Bootstrap (without 'bootstrap_theme_css')
				'bootstrap_evo_css',       // Load the b2evo_base styles for Bootstrap (instead of the old b2evo_base styles)
				'bootstrap_messages',      // Initialize $Messages Class to use Bootstrap styles
				'style_css',               // Load the style.css file of the current skin
				'colorbox',                // Load Colorbox (a lightweight Lightbox alternative + customizations for b2evo)
				'bootstrap_init_tooltips', // Inline JS to init Bootstrap tooltips (E.g. on comment form for allowed file extensions)
				'disp_auto',               // Automatically include additional CSS and/or JS required by certain disps (replace with 'disp_off' to disable this)
			) );

		// Skin specific initializations:			
		// Add custom CSS:
		$custom_css = '';
		
		
		// Page background color (if no image uploaded):
		if( $color = $this->get_setting( 'page_bg_color' ) )
		{
			$custom_css = 'body {background-color: '.$color." }\n";
		};
		// Site background image:
		$page_bg_image = $this->get_setting( 'page_bg_image' );
		if( ! empty( $page_bg_image ) && file_exists( $media_path.$page_bg_image ) )
		{ // If it exists in media folder
			$custom_css .= 'body {background: url('.$media_url.$page_bg_image.") no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }\n";
		};
		// Page blocks background color:
		if( $color = $this->get_setting( 'pg_sec_bg_color' ) )
		{
			$custom_css .= '#comment_preview, article.evo_post, #feedbacks .evo_comment, .comment_form, .widget_core_coll_post_list ul, .widget_core_coll_comment_list ul, .col-md-3 .panel, .evo_comment {background-color: '.$color." }\n";
		};
		// Page blocks border color:
		if( $color = $this->get_setting( 'pg_sec_bor_color' ) )
		{
			$custom_css .= '#comment_preview, article.evo_post, #feedbacks .evo_comment, .comment_form, .col-md-9 .widget_core_coll_post_list ul, .col-md-9 .widget_core_coll_comment_list ul, .col-md-3 .panel, .evo_comment {border: 1px solid '.$color." }\n";
		};
		// Page text color:
		if( $color = $this->get_setting( 'page_text_color' ) )
		{
			$custom_css .= 'body, #comment_preview .panel-heading {color: '.$color." }\n";
		};
		// Page links color:
		if( $color = $this->get_setting( 'page_links_color' ) )
		{
			$custom_css .= 'body a, .evo_container__page_top .ufld_icon_links a span:hover, .navi .compact_search_form .search_submit:hover, .well .post_title h2 a, .widget_core_coll_comment_list ul li a span.user, .widget_core_coll_comment_list ul li a.user, .col-md-3 .panel .widget_core_coll_comment_list ul li span.login {color: '.$color." }\n";
			$custom_css .= '.evo_container__page_top .ufld_icon_links a span, .navi ul.blog-navigation li a.selected, .navi .compact_search_form .search_submit, #nav-trigger > span, nav#nav-mobile ul li.active a {background-color: '.$color." }\n";
			$custom_css .= '.navi ul.blog-navigation li a:hover, .single_navigation li a:hover, .search_submit, nav#nav-mobile ul li a:hover {background-color: '.$color." !important }\n";
			$custom_css .= '.navi .compact_search_form .search_submit, .single_navigation li a, .search_submit, .search_submit:hover {border: 1px solid '.$color." }\n";
		};
		// Page links hover color:
		if( $color = $this->get_setting( 'page_links_h_color' ) )
		{
			$custom_css .= 'body a:hover, body a:focus {color: '.$color." }\n";
		};
		// Page title color:
		if( $color = $this->get_setting( 'page_title_color' ) )
		{
			$custom_css .= '.evo_container__header h1 a {color: '.$color." }\n";
		};
		// Page tagline color:
		if( $color = $this->get_setting( 'page_tagline_color' ) )
		{
			$custom_css .= '.widget_core_coll_tagline {color: '.$color." }\n";
		};
		
		
		// Navigation background color:
		if( $color = $this->get_setting( 'navi_bg_color' ) )
		{
			$custom_css .= '.navi, #nav-trigger, nav#nav-mobile {background-color: '.$color." }\n";
			$custom_css .= 'nav#nav-mobile ul {border-top: 1px solid '.$color." }\n";
		};
		// Navigation background color hover:
		if( $color = $this->get_setting( 'navi_trig_h_color' ) )
		{
			$custom_css .= '#nav-trigger > span:hover {background-color: '.$color." }\n";
		};
		// Navigation links color:
		if( $color = $this->get_setting( 'navi_links_color' ) )
		{
			$custom_css .= '.navi ul li a, nav#nav-mobile ul li a {color: '.$color." }\n";
		};
		
		
		// Full story button color:
		if( $color = $this->get_setting( 'fs_but_color' ) )
		{
			$custom_css .= '.evo_post .evo_post__full .evo_post_more_link a {color: '.$color." }\n";
		};
		// Full story button background color:
		if( $color = $this->get_setting( 'fs_but_bg_color' ) )
		{
			$custom_css .= '.evo_post .evo_post__full .evo_post_more_link a {background-color: '.$color.'; border: 1px solid '.$color." }\n";
		};
		// Full story button hover color:
		if( $color = $this->get_setting( 'fs_but_hov_col' ) )
		{
			$custom_css .= '.evo_post .evo_post__full .evo_post_more_link a:hover {color: '.$color.'; border: 1px solid '.$color." }\n";
		};
		
		
		// Tags color:
		if( $color = $this->get_setting( 'tags_color' ) )
		{
			$custom_css .= '.post-tags, footer .small-tags a, .well .small-tags a, .tag_cloud a {color: '.$color." }\n";
		};
		// Tags background color:
		if( $color = $this->get_setting( 'tags_bg_color' ) )
		{
			$custom_css .= '.post-tags, footer .small-tags a, .well .small-tags a, .tag_cloud a {background-color: '.$color." }\n";
		};
		// Tags color hover:
		if( $color = $this->get_setting( 'tags_color_h' ) )
		{
			$custom_css .= '.post-tags, footer .small-tags a:hover, .well .small-tags a:hover, .tag_cloud a:hover {color: '.$color." !important }\n";
		};
		// Tags background color hover:
		if( $color = $this->get_setting( 'tags_bg_color_h' ) )
		{
			$custom_css .= '.post-tags, footer .small-tags a:hover, .well .small-tags a:hover, .widget_core_coll_tag_cloud .tag_cloud a:hover {background-color: '.$color." !important }\n";
		};
		
		
		// Submit button color:
		if( $color = $this->get_setting( 'submit_color' ) )
		{
			$custom_css .= '.comment_form .submit {color: '.$color.'; border: 1px solid '.$color." }\n";
		};
		// Submit button background color:
		if( $color = $this->get_setting( 'submit_bg_color' ) )
		{
			$custom_css .= '.comment_form .submit {background-color: '.$color." }\n";
		};
		// Preview button color:
		if( $color = $this->get_setting( 'preview_color' ) )
		{
			$custom_css .= '.comment_form .preview {color: '.$color.'; border: 1px solid '.$color." }\n";
		};
		// Preview button background color:
		if( $color = $this->get_setting( 'preview_bg_color' ) )
		{
			$custom_css .= '.comment_form .preview {background-color: '.$color." }\n";
		};
		
		
		// Pagination links color:
		if( $color = $this->get_setting( 'pag_color' ) )
		{
			$custom_css .= '.site_pagination li a {color: '.$color." }\n";
			$custom_css .= '.site_pagination li a, .site_pagination li span { border-bottom: 1px solid '.$color." }\n";
		};
		// Pagination links background color:
		if( $color = $this->get_setting( 'pag_bg_color' ) )
		{
			$custom_css .= '.site_pagination li a {background-color: '.$color." }\n";
		};
		// Pagination links hover color:
		if( $color = $this->get_setting( 'pag_h_color' ) )
		{
			$custom_css .= '.site_pagination li a:hover, .site_pagination li span {color: '.$color." }\n";
		};
		// Pagination links background hover color:
		if( $color = $this->get_setting( 'pag_h_bg_color' ) )
		{
			$custom_css .= '.site_pagination li a:hover, .site_pagination li span {background-color: '.$color." !important }\n";
		};
		
			
		if( ! empty( $custom_css ) )
		{ // Function for custom_css:
			$custom_css = '<style type="text/css">
				<!--
				'.$custom_css.'
				-->
			</style>';
			add_headline( $custom_css );
		}			
	}
	

	/**
	 * Those templates are used for example by the messaging screens.
	 */
	function get_template( $name )
	{
		switch( $name )
		{
			case 'Results':
				// Results list (Used to view the lists of the users, messages, contacts and etc.):
				return array(
					'page_url' => '', // All generated links will refer to the current page
					'before' => '<div class="results panel panel-default">',
					'content_start' => '<div id="$prefix$ajax_content">',
					'header_start' => '',
						'header_text' => '<div class="center"><ul class="pagination">'
								.'$prev$$first$$list_prev$$list$$list_next$$last$$next$'
							.'</ul></div>',
						'header_text_single' => '',
					'header_end' => '',
					'head_title' => '<div class="panel-heading fieldset_title"><span class="pull-right">$global_icons$</span><h3 class="panel-title">$title$</h3></div>'."\n",
					'global_icons_class' => 'btn btn-default btn-sm',
					'filters_start'        => '<div class="filters panel-body">',
					'filters_end'          => '</div>',
					'filter_button_class'  => 'btn-sm btn-info',
					'filter_button_before' => '<div class="form-group pull-right">',
					'filter_button_after'  => '</div>',
					'messages_start' => '<div class="messages form-inline">',
					'messages_end' => '</div>',
					'messages_separator' => '<br />',
					'list_start' => '<div class="table_scroll">'."\n"
					               .'<table class="table table-striped table-bordered table-hover table-condensed" cellspacing="0">'."\n",
						'head_start' => "<thead>\n",
							'line_start_head' => '<tr>',  // TODO: fusionner avec colhead_start_first; mettre a jour admin_UI_general; utiliser colspan="$headspan$"
							'colhead_start' => '<th $class_attrib$>',
							'colhead_start_first' => '<th class="firstcol $class$">',
							'colhead_start_last' => '<th class="lastcol $class$">',
							'colhead_end' => "</th>\n",
							'sort_asc_off' => get_icon( 'sort_asc_off' ),
							'sort_asc_on' => get_icon( 'sort_asc_on' ),
							'sort_desc_off' => get_icon( 'sort_desc_off' ),
							'sort_desc_on' => get_icon( 'sort_desc_on' ),
							'basic_sort_off' => '',
							'basic_sort_asc' => get_icon( 'ascending' ),
							'basic_sort_desc' => get_icon( 'descending' ),
						'head_end' => "</thead>\n\n",
						'tfoot_start' => "<tfoot>\n",
						'tfoot_end' => "</tfoot>\n\n",
						'body_start' => "<tbody>\n",
							'line_start' => '<tr class="even">'."\n",
							'line_start_odd' => '<tr class="odd">'."\n",
							'line_start_last' => '<tr class="even lastline">'."\n",
							'line_start_odd_last' => '<tr class="odd lastline">'."\n",
								'col_start' => '<td $class_attrib$>',
								'col_start_first' => '<td class="firstcol $class$">',
								'col_start_last' => '<td class="lastcol $class$">',
								'col_end' => "</td>\n",
							'line_end' => "</tr>\n\n",
							'grp_line_start' => '<tr class="group">'."\n",
							'grp_line_start_odd' => '<tr class="odd">'."\n",
							'grp_line_start_last' => '<tr class="lastline">'."\n",
							'grp_line_start_odd_last' => '<tr class="odd lastline">'."\n",
										'grp_col_start' => '<td $class_attrib$ $colspan_attrib$>',
										'grp_col_start_first' => '<td class="firstcol $class$" $colspan_attrib$>',
										'grp_col_start_last' => '<td class="lastcol $class$" $colspan_attrib$>',
								'grp_col_end' => "</td>\n",
							'grp_line_end' => "</tr>\n\n",
						'body_end' => "</tbody>\n\n",
						'total_line_start' => '<tr class="total">'."\n",
							'total_col_start' => '<td $class_attrib$>',
							'total_col_start_first' => '<td class="firstcol $class$">',
							'total_col_start_last' => '<td class="lastcol $class$">',
							'total_col_end' => "</td>\n",
						'total_line_end' => "</tr>\n\n",
					'list_end' => "</table></div>\n\n",
					'footer_start' => '',
					'footer_text' => '<div class="center"><ul class="pagination">'
							.'$prev$$first$$list_prev$$list$$list_next$$last$$next$'
						.'</ul></div><div class="center">$page_size$</div>'
					                  /* T_('Page $scroll_list$ out of $total_pages$   $prev$ | $next$<br />'. */
					                  /* '<strong>$total_pages$ Pages</strong> : $prev$ $list$ $next$' */
					                  /* .' <br />$first$  $list_prev$  $list$  $list_next$  $last$ :: $prev$ | $next$') */,
					'footer_text_single' => '<div class="center">$page_size$</div>',
					'footer_text_no_limit' => '', // Text if theres no LIMIT and therefor only one page anyway
						'page_current_template' => '<span>$page_num$</span>',
						'page_item_before' => '<li>',
						'page_item_after' => '</li>',
						'page_item_current_before' => '<li class="active">',
						'page_item_current_after'  => '</li>',
						'prev_text' => T_('Previous'),
						'next_text' => T_('Next'),
						'no_prev_text' => '',
						'no_next_text' => '',
						'list_prev_text' => T_('...'),
						'list_next_text' => T_('...'),
						'list_span' => 11,
						'scroll_list_range' => 5,
					'footer_end' => "\n\n",
					'no_results_start' => '<div class="panel-footer">'."\n",
					'no_results_end'   => '$no_results$</div>'."\n\n",
					'content_end' => '</div>',
					'after' => '</div>',
					'sort_type' => 'basic'
				);
				break;

			case 'blockspan_form':
				// Form settings for filter area:
				return array(
					'layout'         => 'blockspan',
					'formclass'      => 'form-inline',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '$title$'."\n",
					'no_title_fmt'   => '',
					'fieldset_begin' => '<fieldset $fieldset_attribs$>'."\n"
																.'<legend $title_attribs$>$fieldset_title$</legend>'."\n",
					'fieldset_end'   => '</fieldset>'."\n",
					'fieldstart'     => '<div class="form-group form-group-sm" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label></label>',
					'inputstart'     => '',
					'inputend'       => "\n",
					'infostart'      => '<div class="form-control-static">',
					'infoend'        => "</div>\n",
					'buttonsstart'   => '<div class="form-group form-group-sm">',
					'buttonsend'     => "</div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'fieldstart_checkbox'    => '<div class="form-group form-group-sm checkbox" $ID$>'."\n",
					'fieldend_checkbox'      => "</div>\n\n",
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '',
					'inputend_checkbox'      => "\n",
					'checkbox_newline_start' => '',
					'checkbox_newline_end'   => "\n",
					// - radio
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '',
					'radio_newline_end'      => "\n",
					'radio_oneline_start'    => '',
					'radio_oneline_end'      => "\n",
				);

			case 'compact_form':
			case 'Form':
				// Default Form settings (Used for any form on front-office):
				return array(
					'layout'         => 'fieldset',
					'formclass'      => 'form-horizontal',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '<span style="float:right">$global_icons$</span><h2>$title$</h2>'."\n",
					'no_title_fmt'   => '<span style="float:right">$global_icons$</span>'."\n",
					'fieldset_begin' => '<div class="fieldset_wrapper $class$" id="fieldset_wrapper_$id$"><fieldset $fieldset_attribs$><div class="panel panel-default">'."\n"
															.'<legend class="panel-heading" $title_attribs$>$fieldset_title$</legend><div class="panel-body $class$">'."\n",
					'fieldset_end'   => '</div></div></fieldset></div>'."\n",
					'fieldstart'     => '<div class="form-group" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label col-sm-3',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label class="control-label col-sm-3"></label>',
					'inputstart'     => '<div class="controls col-sm-9">',
					'inputend'       => "</div>\n",
					'infostart'      => '<div class="controls col-sm-9"><div class="form-control-static">',
					'infoend'        => "</div></div>\n",
					'buttonsstart'   => '<div class="form-group"><div class="control-buttons col-sm-offset-3 col-sm-9">',
					'buttonsend'     => "</div></div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '<div class="controls col-sm-9"><div class="checkbox"><label>',
					'inputend_checkbox'      => "</label></div></div>\n",
					'checkbox_newline_start' => '<div class="checkbox">',
					'checkbox_newline_end'   => "</div>\n",
					// - radio
					'fieldstart_radio'       => '<div class="form-group radio-group" $ID$>'."\n",
					'fieldend_radio'         => "</div>\n\n",
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '<div class="radio"><label>',
					'radio_newline_end'      => "</label></div>\n",
					'radio_oneline_start'    => '<label class="radio-inline">',
					'radio_oneline_end'      => "</label>\n",
				);

			case 'fixed_form':
				// Form with fixed label width (Used for form on disp=user):
				return array(
					'layout'         => 'fieldset',
					'formclass'      => 'form-horizontal',
					'formstart'      => '',
					'formend'        => '',
					'title_fmt'      => '<span style="float:right">$global_icons$</span><h2>$title$</h2>'."\n",
					'no_title_fmt'   => '<span style="float:right">$global_icons$</span>'."\n",
					'fieldset_begin' => '<div class="fieldset_wrapper $class$" id="fieldset_wrapper_$id$"><fieldset $fieldset_attribs$><div class="panel panel-default">'."\n"
															.'<legend class="panel-heading" $title_attribs$>$fieldset_title$</legend><div class="panel-body $class$">'."\n",
					'fieldset_end'   => '</div></div></fieldset></div>'."\n",
					'fieldstart'     => '<div class="form-group fixedform-group" $ID$>'."\n",
					'fieldend'       => "</div>\n\n",
					'labelclass'     => 'control-label fixedform-label',
					'labelstart'     => '',
					'labelend'       => "\n",
					'labelempty'     => '<label class="control-label fixedform-label"></label>',
					'inputstart'     => '<div class="controls fixedform-controls">',
					'inputend'       => "</div>\n",
					'infostart'      => '<div class="controls fixedform-controls"><div class="form-control-static">',
					'infoend'        => "</div></div>\n",
					'buttonsstart'   => '<div class="form-group"><div class="control-buttons fixedform-controls">',
					'buttonsend'     => "</div></div>\n\n",
					'customstart'    => '<div class="custom_content">',
					'customend'      => "</div>\n",
					'note_format'    => ' <span class="help-inline">%s</span>',
					// Additional params depending on field type:
					// - checkbox
					'inputclass_checkbox'    => '',
					'inputstart_checkbox'    => '<div class="controls fixedform-controls"><div class="checkbox"><label>',
					'inputend_checkbox'      => "</label></div></div>\n",
					'checkbox_newline_start' => '<div class="checkbox">',
					'checkbox_newline_end'   => "</div>\n",
					// - radio
					'fieldstart_radio'       => '<div class="form-group radio-group" $ID$>'."\n",
					'fieldend_radio'         => "</div>\n\n",
					'inputclass_radio'       => '',
					'radio_label_format'     => '$radio_option_label$',
					'radio_newline_start'    => '<div class="radio"><label>',
					'radio_newline_end'      => "</label></div>\n",
					'radio_oneline_start'    => '<label class="radio-inline">',
					'radio_oneline_end'      => "</label>\n",
				);

			case 'user_navigation':
				// The Prev/Next links of users (Used on disp=user to navigate between users):
				return array(
					'block_start'  => '<ul class="pager">',
					'prev_start'   => '<li class="previous">',
					'prev_end'     => '</li>',
					'prev_no_user' => '',
					'back_start'   => '<li>',
					'back_end'     => '</li>',
					'next_start'   => '<li class="next">',
					'next_end'     => '</li>',
					'next_no_user' => '',
					'block_end'    => '</ul>',
				);

			case 'button_classes':
				// Button classes (Used to initialize classes for action buttons like buttons to spam vote, or edit an intro post):
				return array(
					'button'       => 'btn btn-default btn-xs',
					'button_red'   => 'btn-danger',
					'button_green' => 'btn-success',
					'text'         => 'btn btn-default btn-xs',
					'group'        => 'btn-group',
				);

			case 'tooltip_plugin':
				// Plugin name for tooltips: 'bubbletip' or 'popover'
				// We should use 'popover' tooltip plugin for bootstrap skins
				// This tooltips appear on mouse over user logins or on plugin help icons
				return 'popover';
				break;

			case 'plugin_template':
				// Template for plugins:
				return array(
						// This template is used to build a plugin toolbar with action buttons above edit item/comment area:
						'toolbar_before'       => '<div class="btn-toolbar $toolbar_class$" role="toolbar">',
						'toolbar_after'        => '</div>',
						'toolbar_title_before' => '<div class="btn-toolbar-title">',
						'toolbar_title_after'  => '</div>',
						'toolbar_group_before' => '<div class="btn-group btn-group-xs" role="group">',
						'toolbar_group_after'  => '</div>',
						'toolbar_button_class' => 'btn btn-default',
					);

			case 'modal_window_js_func':
				// JavaScript function to initialize Modal windows, @see echo_user_ajaxwindow_js()
				return 'echo_modalwindow_js_bootstrap';
				break;

			default:
				// Delegate to parent class:
				return parent::get_template( $name );
		}
	}

}

?>