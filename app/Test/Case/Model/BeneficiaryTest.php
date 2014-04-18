<?php
App::uses('Beneficiary', 'Model');

/**
 * Beneficiary Test Case
 *
 */
class BeneficiaryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.beneficiary',
		'app.municipality',
		'app.city',
		'app.state',
		'app.country',
		'app.university',
		'app.beneficiary_type',
		'app.user',
		'app.person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Beneficiary = ClassRegistry::init('Beneficiary');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Beneficiary);

		parent::tearDown();
	}

}
