<?php
App::uses('BeneficiaryType', 'Model');

/**
 * BeneficiaryType Test Case
 *
 */
class BeneficiaryTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.beneficiary_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BeneficiaryType = ClassRegistry::init('BeneficiaryType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BeneficiaryType);

		parent::tearDown();
	}

}
