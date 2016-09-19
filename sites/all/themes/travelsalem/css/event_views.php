$view = new view();
$view->name = 'upcoming_events_search_form';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = 'Upcoming Events Search Form';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = 'Featured Events';
$handler->display->display_options['css_class'] = 'upcoming-block';
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['link_display'] = 'page_1';
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'better_exposed_filters';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
$handler->display->display_options['pager']['type'] = 'some';
$handler->display->display_options['pager']['options']['items_per_page'] = '0';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['row_plugin'] = 'fields';
/* Footer: Global: Text area */
$handler->display->display_options['footer']['area']['id'] = 'area';
$handler->display->display_options['footer']['area']['table'] = 'views';
$handler->display->display_options['footer']['area']['field'] = 'area';
$handler->display->display_options['footer']['area']['format'] = 'full_html';
/* No results behavior: Global: Text area */
$handler->display->display_options['empty']['area']['id'] = 'area';
$handler->display->display_options['empty']['area']['table'] = 'views';
$handler->display->display_options['empty']['area']['field'] = 'area';
$handler->display->display_options['empty']['area']['empty'] = TRUE;
$handler->display->display_options['empty']['area']['content'] = '<p style="text-align:center;">Sorry, no results were found. Please try another search.</p>';
$handler->display->display_options['empty']['area']['format'] = 'full_html';
/* Field: Content: Primary Newsletter Image */
$handler->display->display_options['fields']['field_event_image']['id'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['table'] = 'field_data_field_event_image';
$handler->display->display_options['fields']['field_event_image']['field'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['label'] = '';
$handler->display->display_options['fields']['field_event_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_event_image']['settings'] = array(
  'image_style' => 'calendar_block',
  'image_link' => 'content',
  'grid_field_formatter' => array(
    'grid_enable' => 0,
    'columns' => '1',
  ),
);
$handler->display->display_options['fields']['field_event_image']['delta_limit'] = '3';
$handler->display->display_options['fields']['field_event_image']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Event Date */
$handler->display->display_options['fields']['field_event_date']['id'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['table'] = 'field_data_field_event_date';
$handler->display->display_options['fields']['field_event_date']['field'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['label'] = '';
$handler->display->display_options['fields']['field_event_date']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_date']['settings'] = array(
  'format_type' => 'event_time',
  'fromto' => 'both',
  'multiple_number' => '',
  'multiple_from' => '',
  'multiple_to' => '',
  'show_remaining_days' => 0,
  'show_repeat_rule' => 'hide',
);
$handler->display->display_options['fields']['field_event_date']['delta_offset'] = '0';
/* Field: Content: Event Category */
$handler->display->display_options['fields']['field_event_category']['id'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['table'] = 'field_data_field_event_category';
$handler->display->display_options['fields']['field_event_category']['field'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['label'] = '';
$handler->display->display_options['fields']['field_event_category']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_category']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_category']['delta_offset'] = '0';
/* Sort criterion: Content: Event Date -  start date (field_event_date) */
$handler->display->display_options['sorts']['field_event_date_value']['id'] = 'field_event_date_value';
$handler->display->display_options['sorts']['field_event_date_value']['table'] = 'field_data_field_event_date';
$handler->display->display_options['sorts']['field_event_date_value']['field'] = 'field_event_date_value';
/* Sort criterion: Content: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'events' => 'events',
);
/* Filter criterion: Date: Date (node) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'node';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['operator'] = 'between';
$handler->display->display_options['filters']['date_filter']['exposed'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['operator_id'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['label'] = 'Event Date';
$handler->display->display_options['filters']['date_filter']['expose']['operator'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['expose']['remember'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['remember_roles'] = array(
  2 => '2',
  1 => '1',
  3 => '3',
);
$handler->display->display_options['filters']['date_filter']['group_info']['label'] = 'Date (node)';
$handler->display->display_options['filters']['date_filter']['group_info']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group_info']['remember'] = FALSE;
$handler->display->display_options['filters']['date_filter']['group_info']['group_items'] = array(
  1 => array(),
  2 => array(),
  3 => array(),
);
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_popup';
$handler->display->display_options['filters']['date_filter']['default_date'] = 'now';
$handler->display->display_options['filters']['date_filter']['default_to_date'] = '+30 day';
$handler->display->display_options['filters']['date_filter']['year_range'] = '-0:+3';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'field_data_field_event_date.field_event_date_value' => 'field_data_field_event_date.field_event_date_value',
);
/* Filter criterion: Content: Event Category (field_event_category) */
$handler->display->display_options['filters']['field_event_category_tid']['id'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['table'] = 'field_data_field_event_category';
$handler->display->display_options['filters']['field_event_category_tid']['field'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator_id'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['label'] = 'Type of Event';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['identifier'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_category_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_category_tid']['vocabulary'] = 'event_types';

/* Display: Upcoming Events from Home Page Search */
$handler = $view->new_display('page', 'Upcoming Events from Home Page Search', 'page_1');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Upcoming Events';
$handler->display->display_options['exposed_block'] = TRUE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Primary Newsletter Image */
$handler->display->display_options['fields']['field_event_image']['id'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['table'] = 'field_data_field_event_image';
$handler->display->display_options['fields']['field_event_image']['field'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['label'] = '';
$handler->display->display_options['fields']['field_event_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_event_image']['settings'] = array(
  'image_style' => 'calendar_block',
  'image_link' => 'content',
  'grid_field_formatter' => array(
    'grid_enable' => 0,
    'columns' => '1',
  ),
);
$handler->display->display_options['fields']['field_event_image']['delta_limit'] = '3';
$handler->display->display_options['fields']['field_event_image']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Event Date */
$handler->display->display_options['fields']['field_event_date']['id'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['table'] = 'field_data_field_event_date';
$handler->display->display_options['fields']['field_event_date']['field'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['label'] = '';
$handler->display->display_options['fields']['field_event_date']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_date']['settings'] = array(
  'format_type' => 'event_time',
  'fromto' => 'both',
  'multiple_number' => '1',
  'multiple_from' => '',
  'multiple_to' => '',
  'show_remaining_days' => 0,
  'show_repeat_rule' => 'hide',
);
$handler->display->display_options['fields']['field_event_date']['delta_offset'] = '0';
/* Field: Content: Event Category */
$handler->display->display_options['fields']['field_event_category']['id'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['table'] = 'field_data_field_event_category';
$handler->display->display_options['fields']['field_event_category']['field'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['label'] = '';
$handler->display->display_options['fields']['field_event_category']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_category']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_category']['delta_offset'] = '0';
/* Field: Content: Who is the event for? */
$handler->display->display_options['fields']['field_event_audience']['id'] = 'field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['table'] = 'field_data_field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['field'] = 'field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['label'] = 'Audience';
$handler->display->display_options['fields']['field_event_audience']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_audience']['type'] = 'hs_taxonomy_term_reference_hierarchical_links';
$handler->display->display_options['fields']['field_event_audience']['settings'] = array(
  'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_event_audience']['group_rows'] = FALSE;
$handler->display->display_options['fields']['field_event_audience']['delta_offset'] = '0';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'events' => 'events',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Date: Date (node) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'node';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['operator'] = 'between';
$handler->display->display_options['filters']['date_filter']['group'] = 1;
$handler->display->display_options['filters']['date_filter']['exposed'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['operator_id'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['label'] = 'Event Date';
$handler->display->display_options['filters']['date_filter']['expose']['operator'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['expose']['remember'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['remember_roles'] = array(
  2 => '2',
  1 => '1',
  3 => '3',
);
$handler->display->display_options['filters']['date_filter']['group_info']['label'] = 'Date (node)';
$handler->display->display_options['filters']['date_filter']['group_info']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group_info']['remember'] = FALSE;
$handler->display->display_options['filters']['date_filter']['group_info']['group_items'] = array(
  1 => array(),
  2 => array(),
  3 => array(),
);
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_popup';
$handler->display->display_options['filters']['date_filter']['default_date'] = 'now';
$handler->display->display_options['filters']['date_filter']['default_to_date'] = '+30 day';
$handler->display->display_options['filters']['date_filter']['year_range'] = '-0:+3';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'field_data_field_event_date.field_event_date_value' => 'field_data_field_event_date.field_event_date_value',
);
/* Filter criterion: Content: Event Region (field_event_region) */
$handler->display->display_options['filters']['field_event_region_tid']['id'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['table'] = 'field_data_field_event_region';
$handler->display->display_options['filters']['field_event_region_tid']['field'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_region_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator_id'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['label'] = 'Event Region (field_event_region)';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['identifier'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_region_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_region_tid']['vocabulary'] = 'event_regions';
/* Filter criterion: Content: Event Category (field_event_category) */
$handler->display->display_options['filters']['field_event_category_tid']['id'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['table'] = 'field_data_field_event_category';
$handler->display->display_options['filters']['field_event_category_tid']['field'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_category_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator_id'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['label'] = 'Type of Event';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['identifier'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_category_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_category_tid']['vocabulary'] = 'event_types';
/* Filter criterion: Content: Who is the event for? (field_event_audience) */
$handler->display->display_options['filters']['field_event_audience_tid']['id'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['table'] = 'field_data_field_event_audience';
$handler->display->display_options['filters']['field_event_audience_tid']['field'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['value'] = '';
$handler->display->display_options['filters']['field_event_audience_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator_id'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['label'] = 'Audience';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['identifier'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_audience_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_audience_tid']['vocabulary'] = 'event_audience';
$handler->display->display_options['path'] = 'events/upcoming-search';

/* Display: Block */
$handler = $view->new_display('block', 'Block', 'block_1');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Search Upcoming Events';
$handler->display->display_options['defaults']['use_ajax'] = FALSE;
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['link_url'] = 'events/upcoming-search';
$handler->display->display_options['defaults']['group_by'] = FALSE;
$handler->display->display_options['defaults']['query'] = FALSE;
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['query']['options']['distinct'] = TRUE;
$handler->display->display_options['query']['options']['pure_distinct'] = TRUE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'list';
$handler->display->display_options['style_options']['grouping'] = array(
  0 => array(
    'field' => 'title',
    'rendered' => 1,
    'rendered_strip' => 0,
  ),
);
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['row_plugin'] = 'node';
$handler->display->display_options['row_options']['view_mode'] = 'token';
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Event Date (field_event_date:delta) */
$handler->display->display_options['fields']['delta']['id'] = 'delta';
$handler->display->display_options['fields']['delta']['table'] = 'field_data_field_event_date';
$handler->display->display_options['fields']['delta']['field'] = 'delta';
$handler->display->display_options['fields']['delta']['alter']['text'] = '[delta:raw]';
/* Field: Content: Primary Newsletter Image */
$handler->display->display_options['fields']['field_event_image']['id'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['table'] = 'field_data_field_event_image';
$handler->display->display_options['fields']['field_event_image']['field'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['label'] = '';
$handler->display->display_options['fields']['field_event_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_event_image']['settings'] = array(
  'image_style' => 'calendar_block',
  'image_link' => 'content',
  'grid_field_formatter' => array(
    'grid_enable' => 0,
    'columns' => '1',
  ),
);
$handler->display->display_options['fields']['field_event_image']['delta_limit'] = '3';
$handler->display->display_options['fields']['field_event_image']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Event Date */
$handler->display->display_options['fields']['field_event_date']['id'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['table'] = 'field_data_field_event_date';
$handler->display->display_options['fields']['field_event_date']['field'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['label'] = '';
$handler->display->display_options['fields']['field_event_date']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_date']['settings'] = array(
  'format_type' => 'long',
  'fromto' => 'both',
  'multiple_number' => '1',
  'multiple_from' => 'now',
  'multiple_to' => '',
  'multiple_relative' => '1',
  'show_repeat_rule' => 'show',
  'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_event_date']['delta_limit'] = '1';
$handler->display->display_options['fields']['field_event_date']['delta_offset'] = '0';
/* Field: Content: Event Category */
$handler->display->display_options['fields']['field_event_category']['id'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['table'] = 'field_data_field_event_category';
$handler->display->display_options['fields']['field_event_category']['field'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['label'] = '';
$handler->display->display_options['fields']['field_event_category']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_category']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_category']['delta_offset'] = '0';
/* Field: Content: Body */
$handler->display->display_options['fields']['body']['id'] = 'body';
$handler->display->display_options['fields']['body']['table'] = 'field_data_body';
$handler->display->display_options['fields']['body']['field'] = 'body';
$handler->display->display_options['fields']['body']['label'] = '';
$handler->display->display_options['fields']['body']['element_label_colon'] = FALSE;
$handler->display->display_options['defaults']['arguments'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'events' => 'events',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Date: Date (node) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'node';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['operator'] = 'between';
$handler->display->display_options['filters']['date_filter']['group'] = 1;
$handler->display->display_options['filters']['date_filter']['exposed'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['operator_id'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['label'] = 'Event Date';
$handler->display->display_options['filters']['date_filter']['expose']['operator'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['expose']['remember'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['remember_roles'] = array(
  2 => '2',
  1 => '1',
  3 => '3',
);
$handler->display->display_options['filters']['date_filter']['group_info']['label'] = 'Date (node)';
$handler->display->display_options['filters']['date_filter']['group_info']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group_info']['remember'] = FALSE;
$handler->display->display_options['filters']['date_filter']['group_info']['group_items'] = array(
  1 => array(),
  2 => array(),
  3 => array(),
);
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_popup';
$handler->display->display_options['filters']['date_filter']['default_date'] = 'now';
$handler->display->display_options['filters']['date_filter']['default_to_date'] = '+30 day';
$handler->display->display_options['filters']['date_filter']['year_range'] = '-0:+3';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'field_data_field_event_date.field_event_date_value' => 'field_data_field_event_date.field_event_date_value',
);
/* Filter criterion: Content: Event Category (field_event_category) */
$handler->display->display_options['filters']['field_event_category_tid']['id'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['table'] = 'field_data_field_event_category';
$handler->display->display_options['filters']['field_event_category_tid']['field'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_category_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator_id'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['label'] = 'Event Category (field_event_category)';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['identifier'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
  4 => 0,
);
$handler->display->display_options['filters']['field_event_category_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_category_tid']['vocabulary'] = 'event_types';
/* Filter criterion: Content: Event Region (field_event_region) */
$handler->display->display_options['filters']['field_event_region_tid']['id'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['table'] = 'field_data_field_event_region';
$handler->display->display_options['filters']['field_event_region_tid']['field'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_region_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator_id'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['label'] = 'Region';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['identifier'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_region_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_region_tid']['vocabulary'] = 'event_regions';
/* Filter criterion: Content: Who is the event for? (field_event_audience) */
$handler->display->display_options['filters']['field_event_audience_tid']['id'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['table'] = 'field_data_field_event_audience';
$handler->display->display_options['filters']['field_event_audience_tid']['field'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_audience_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator_id'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['label'] = 'Audience';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['identifier'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_audience_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_audience_tid']['vocabulary'] = 'event_audience';
/* Filter criterion: Date: Date (node) */
$handler->display->display_options['filters']['date_filter_1']['id'] = 'date_filter_1';
$handler->display->display_options['filters']['date_filter_1']['table'] = 'node';
$handler->display->display_options['filters']['date_filter_1']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter_1']['operator'] = '>=';
$handler->display->display_options['filters']['date_filter_1']['group'] = 1;
$handler->display->display_options['filters']['date_filter_1']['granularity'] = 'hour';
$handler->display->display_options['filters']['date_filter_1']['default_date'] = 'now';
$handler->display->display_options['filters']['date_filter_1']['date_fields'] = array(
  'field_data_field_event_date.field_event_date_value' => 'field_data_field_event_date.field_event_date_value',
);
/* Filter criterion: Content: Node UUID */
$handler->display->display_options['filters']['uuid']['id'] = 'uuid';
$handler->display->display_options['filters']['uuid']['table'] = 'node';
$handler->display->display_options['filters']['uuid']['field'] = 'uuid';
$handler->display->display_options['filters']['uuid']['group_type'] = 'sum';
$handler->display->display_options['filters']['uuid']['operator'] = '<=';
$handler->display->display_options['filters']['uuid']['value'] = array(
  'value' => '1',
  'min' => '',
  'max' => '',
);

/* Display: Input Required Search Block */
$handler = $view->new_display('block', 'Input Required Search Block', 'block_2');
$handler->display->display_options['defaults']['title'] = FALSE;
$handler->display->display_options['title'] = 'Search Upcoming Events';
$handler->display->display_options['defaults']['use_ajax'] = FALSE;
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['link_url'] = 'events/upcoming-search';
$handler->display->display_options['defaults']['exposed_form'] = FALSE;
$handler->display->display_options['exposed_form']['type'] = 'better_exposed_filters';
$handler->display->display_options['exposed_form']['options']['submit_button'] = 'Search';
$handler->display->display_options['exposed_form']['options']['bef'] = array(
  'general' => array(
    'allow_secondary' => 0,
    'secondary_label' => 'Advanced options',
    'collapsible_label' => NULL,
    'combine_rewrite' => NULL,
    'reset_label' => NULL,
    'bef_filter_description' => NULL,
    'any_label' => NULL,
    'filter_rewrite_values' => NULL,
  ),
  'date_filter' => array(
    'bef_format' => 'default',
    'more_options' => array(
      'is_secondary' => 0,
      'any_label' => '',
      'bef_filter_description' => '',
      'tokens' => array(
        'available' => array(
          0 => 'global_types',
          'secondary_label' => NULL,
          'collapsible_label' => NULL,
          'combine_rewrite' => NULL,
          'reset_label' => NULL,
          'bef_filter_description' => NULL,
          'any_label' => NULL,
          'filter_rewrite_values' => NULL,
        ),
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
        'filter_rewrite_values' => NULL,
      ),
      'rewrite' => array(
        'filter_rewrite_values' => '',
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
      ),
      'secondary_label' => NULL,
      'collapsible_label' => NULL,
      'combine_rewrite' => NULL,
      'reset_label' => NULL,
      'filter_rewrite_values' => NULL,
    ),
    'secondary_label' => NULL,
    'collapsible_label' => NULL,
    'combine_rewrite' => NULL,
    'reset_label' => NULL,
    'bef_filter_description' => NULL,
    'any_label' => NULL,
    'filter_rewrite_values' => NULL,
  ),
  'field_event_category_tid' => array(
    'bef_format' => 'default',
    'more_options' => array(
      'bef_select_all_none' => FALSE,
      'bef_collapsible' => 0,
      'is_secondary' => 0,
      'any_label' => '',
      'bef_filter_description' => '',
      'tokens' => array(
        'available' => array(
          0 => 'global_types',
          1 => 'vocabulary',
          'secondary_label' => NULL,
          'collapsible_label' => NULL,
          'combine_rewrite' => NULL,
          'reset_label' => NULL,
          'bef_filter_description' => NULL,
          'any_label' => NULL,
          'filter_rewrite_values' => NULL,
        ),
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
        'filter_rewrite_values' => NULL,
      ),
      'rewrite' => array(
        'filter_rewrite_values' => '',
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
      ),
      'secondary_label' => NULL,
      'collapsible_label' => NULL,
      'combine_rewrite' => NULL,
      'reset_label' => NULL,
      'filter_rewrite_values' => NULL,
    ),
    'secondary_label' => NULL,
    'collapsible_label' => NULL,
    'combine_rewrite' => NULL,
    'reset_label' => NULL,
    'bef_filter_description' => NULL,
    'any_label' => NULL,
    'filter_rewrite_values' => NULL,
  ),
  'field_event_region_tid' => array(
    'bef_format' => 'default',
    'more_options' => array(
      'bef_select_all_none' => FALSE,
      'bef_collapsible' => 0,
      'is_secondary' => 0,
      'any_label' => '',
      'bef_filter_description' => '',
      'tokens' => array(
        'available' => array(
          0 => 'global_types',
          1 => 'vocabulary',
          'secondary_label' => NULL,
          'collapsible_label' => NULL,
          'combine_rewrite' => NULL,
          'reset_label' => NULL,
          'bef_filter_description' => NULL,
          'any_label' => NULL,
          'filter_rewrite_values' => NULL,
        ),
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
        'filter_rewrite_values' => NULL,
      ),
      'rewrite' => array(
        'filter_rewrite_values' => '',
        'secondary_label' => NULL,
        'collapsible_label' => NULL,
        'combine_rewrite' => NULL,
        'reset_label' => NULL,
        'bef_filter_description' => NULL,
        'any_label' => NULL,
      ),
      'secondary_label' => NULL,
      'collapsible_label' => NULL,
      'combine_rewrite' => NULL,
      'reset_label' => NULL,
      'filter_rewrite_values' => NULL,
    ),
    'secondary_label' => NULL,
    'collapsible_label' => NULL,
    'combine_rewrite' => NULL,
    'reset_label' => NULL,
    'bef_filter_description' => NULL,
    'any_label' => NULL,
    'filter_rewrite_values' => NULL,
  ),
  'secondary_label' => NULL,
  'collapsible_label' => NULL,
  'combine_rewrite' => NULL,
  'reset_label' => NULL,
  'bef_filter_description' => NULL,
  'any_label' => NULL,
  'filter_rewrite_values' => NULL,
);
$handler->display->display_options['exposed_form']['options']['input_required'] = 1;
$handler->display->display_options['exposed_form']['options']['text_input_required'] = '';
$handler->display->display_options['exposed_form']['options']['text_input_required_format'] = 'basic';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* Field: Content: Primary Newsletter Image */
$handler->display->display_options['fields']['field_event_image']['id'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['table'] = 'field_data_field_event_image';
$handler->display->display_options['fields']['field_event_image']['field'] = 'field_event_image';
$handler->display->display_options['fields']['field_event_image']['label'] = '';
$handler->display->display_options['fields']['field_event_image']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_image']['click_sort_column'] = 'fid';
$handler->display->display_options['fields']['field_event_image']['settings'] = array(
  'image_style' => 'calendar_block',
  'image_link' => 'content',
  'grid_field_formatter' => array(
    'grid_enable' => 0,
    'columns' => '1',
  ),
);
$handler->display->display_options['fields']['field_event_image']['delta_limit'] = '3';
$handler->display->display_options['fields']['field_event_image']['delta_offset'] = '0';
/* Field: Content: Title */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
/* Field: Content: Event Date */
$handler->display->display_options['fields']['field_event_date']['id'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['table'] = 'field_data_field_event_date';
$handler->display->display_options['fields']['field_event_date']['field'] = 'field_event_date';
$handler->display->display_options['fields']['field_event_date']['label'] = '';
$handler->display->display_options['fields']['field_event_date']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_date']['settings'] = array(
  'format_type' => 'event_time',
  'fromto' => 'both',
  'multiple_number' => '1',
  'multiple_from' => '',
  'multiple_to' => '',
  'show_remaining_days' => 0,
  'show_repeat_rule' => 'hide',
);
$handler->display->display_options['fields']['field_event_date']['delta_offset'] = '0';
/* Field: Content: Event Category */
$handler->display->display_options['fields']['field_event_category']['id'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['table'] = 'field_data_field_event_category';
$handler->display->display_options['fields']['field_event_category']['field'] = 'field_event_category';
$handler->display->display_options['fields']['field_event_category']['label'] = '';
$handler->display->display_options['fields']['field_event_category']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_category']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_event_category']['delta_offset'] = '0';
/* Field: Content: Who is the event for? */
$handler->display->display_options['fields']['field_event_audience']['id'] = 'field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['table'] = 'field_data_field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['field'] = 'field_event_audience';
$handler->display->display_options['fields']['field_event_audience']['label'] = 'Audience';
$handler->display->display_options['fields']['field_event_audience']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_event_audience']['type'] = 'hs_taxonomy_term_reference_hierarchical_links';
$handler->display->display_options['fields']['field_event_audience']['settings'] = array(
  'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_event_audience']['delta_offset'] = '0';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: Content: Published */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 1;
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
/* Filter criterion: Content: Type */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
  'events' => 'events',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: Date: Date (node) */
$handler->display->display_options['filters']['date_filter']['id'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['table'] = 'node';
$handler->display->display_options['filters']['date_filter']['field'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['operator'] = 'between';
$handler->display->display_options['filters']['date_filter']['group'] = 1;
$handler->display->display_options['filters']['date_filter']['exposed'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['operator_id'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['label'] = 'Event Date';
$handler->display->display_options['filters']['date_filter']['expose']['operator'] = 'date_filter_op';
$handler->display->display_options['filters']['date_filter']['expose']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['expose']['remember'] = TRUE;
$handler->display->display_options['filters']['date_filter']['expose']['remember_roles'] = array(
  2 => '2',
  1 => '1',
  3 => '3',
);
$handler->display->display_options['filters']['date_filter']['group_info']['label'] = 'Date (node)';
$handler->display->display_options['filters']['date_filter']['group_info']['identifier'] = 'date_filter';
$handler->display->display_options['filters']['date_filter']['group_info']['remember'] = FALSE;
$handler->display->display_options['filters']['date_filter']['group_info']['group_items'] = array(
  1 => array(),
  2 => array(),
  3 => array(),
);
$handler->display->display_options['filters']['date_filter']['form_type'] = 'date_popup';
$handler->display->display_options['filters']['date_filter']['default_date'] = 'now';
$handler->display->display_options['filters']['date_filter']['default_to_date'] = '+30 day';
$handler->display->display_options['filters']['date_filter']['year_range'] = '-0:+3';
$handler->display->display_options['filters']['date_filter']['date_fields'] = array(
  'field_data_field_event_date.field_event_date_value' => 'field_data_field_event_date.field_event_date_value',
);
/* Filter criterion: Content: Event Category (field_event_category) */
$handler->display->display_options['filters']['field_event_category_tid']['id'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['table'] = 'field_data_field_event_category';
$handler->display->display_options['filters']['field_event_category_tid']['field'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_category_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator_id'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['label'] = 'Type of Event';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['operator'] = 'field_event_category_tid_op';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['identifier'] = 'field_event_category_tid';
$handler->display->display_options['filters']['field_event_category_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_category_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_category_tid']['vocabulary'] = 'event_types';
/* Filter criterion: Content: Event Region (field_event_region) */
$handler->display->display_options['filters']['field_event_region_tid']['id'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['table'] = 'field_data_field_event_region';
$handler->display->display_options['filters']['field_event_region_tid']['field'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['group'] = 1;
$handler->display->display_options['filters']['field_event_region_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator_id'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['label'] = 'Region';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['operator'] = 'field_event_region_tid_op';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['identifier'] = 'field_event_region_tid';
$handler->display->display_options['filters']['field_event_region_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_region_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_region_tid']['vocabulary'] = 'event_regions';
/* Filter criterion: Content: Who is the event for? (field_event_audience) */
$handler->display->display_options['filters']['field_event_audience_tid']['id'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['table'] = 'field_data_field_event_audience';
$handler->display->display_options['filters']['field_event_audience_tid']['field'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['value'] = '';
$handler->display->display_options['filters']['field_event_audience_tid']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator_id'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['label'] = 'Audience';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['operator'] = 'field_event_audience_tid_op';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['identifier'] = 'field_event_audience_tid';
$handler->display->display_options['filters']['field_event_audience_tid']['expose']['remember_roles'] = array(
  2 => '2',
  1 => 0,
  3 => 0,
);
$handler->display->display_options['filters']['field_event_audience_tid']['type'] = 'select';
$handler->display->display_options['filters']['field_event_audience_tid']['vocabulary'] = 'event_audience';
$translatables['upcoming_events_search_form'] = array(
  t('Master'),
  t('Featured Events'),
  t('more'),
  t('Search'),
  t('Reset'),
  t('Sort by'),
  t('Asc'),
  t('Desc'),
  t('<p style="text-align:center;">Sorry, no results were found. Please try another search.</p>'),
  t('Event Date'),
  t('Date (node)'),
  t('Type of Event'),
  t('Upcoming Events from Home Page Search'),
  t('Upcoming Events'),
  t('Audience'),
  t('Event Region (field_event_region)'),
  t('Block'),
  t('Search Upcoming Events'),
  t('Event Date (field_event_date:delta)'),
  t('[delta:raw]'),
  t('.'),
  t(','),
  t('Event Category (field_event_category)'),
  t('Region'),
  t('Input Required Search Block'),
  t('Advanced options'),
);
