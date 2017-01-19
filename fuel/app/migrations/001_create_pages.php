<?php

namespace Fuel\Migrations;

class Create_pages
{
	public function up()
	{
		\DBUtil::create_table('pages', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'page_title' => array('constraint' => 255, 'type' => 'varchar'),
			'page_description' => array('type' => 'text'),
			'page_content' => array('type' => 'text'),
			'page_status' => array('constraint' => 1, 'type' => 'tinyint'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('pages');
	}
}