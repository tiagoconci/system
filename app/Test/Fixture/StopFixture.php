<?php
/**
 * Stop Fixture
 */
class StopFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'patient_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'companion' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'diary_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'establishment_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'start_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'end_time' => array('type' => 'time', 'null' => true, 'default' => null),
		'absence' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'idx_stops__diary_id' => array('column' => 'diary_id', 'unique' => 0),
			'idx_stops__establishment_id' => array('column' => 'establishment_id', 'unique' => 0),
			'idx_stops__patient_id' => array('column' => 'patient_id', 'unique' => 0)
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
			'patient_id' => 1,
			'companion' => 1,
			'diary_id' => 1,
			'establishment_id' => 1,
			'start_time' => '00:17:34',
			'end_time' => '00:17:34',
			'absence' => 1
		),
	);

}
