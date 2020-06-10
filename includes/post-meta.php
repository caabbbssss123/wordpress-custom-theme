<?php
use Carbon_Fields\Container;
use Carbon_Fields\Complex_Container;
use Carbon_Fields\Field;

/*
	Global ==========================================================
*/
Container::make('theme_options', 'Global Settings')
->add_tab(__('HEADER'), array(
	Field::make('image', 'header_brand_logo', 'Brand Logo')->set_width(20)->set_value_type('url'),
));