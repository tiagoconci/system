<?php
/**
 * Diary Fixture
 */
class DiaryFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'city_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'enabled' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'car_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idx_diary__car_id' => array('column' => 'car_id', 'unique' => 0),
			'idx_diary__city_time' => array('column' => 'city_time', 'unique' => 0),
			'idx_diary__user_id' => array('column' => 'user_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'date' => '2017-09-11',
			'city_time' => 1,
			'enabled' => 1,
			'car_id' => 1,
			'user_id' => 1
		),
	);

}
