<?php
App::uses('CustomField', 'Model');

/**
 * CustomField Test Case
 *
 */
class CustomFieldTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.custom_field',
		'app.category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CustomField = ClassRegistry::init('CustomField');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CustomField);

		parent::tearDown();
	}

}
