<?php

class Model_Page extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'page_title',
		'page_description',
		'page_content',
		'page_status',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'pages';

	/**
	 * Validation Page
	 * @param  [type] $factory [description]
	 * @return [type]          [description]
	 */
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('page_title', 'Title', 'required|max_length[255]');

		return $val;
	}

}
