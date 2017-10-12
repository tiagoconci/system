<?php
App::uses('Diary', 'Model');

/**
 * Diary Test Case
 */
class DiaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.diary',
		'app.car',
		'app.user',
		'app.stop'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Diary = ClassRegistry::init('Diary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Diary);

		parent::tearDown();
	}

}
