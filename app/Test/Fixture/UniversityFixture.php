<?php
/**
 * UniversityFixture
 *
 */
class UniversityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'municipality_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'fax' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'key' => 'index'),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'documents_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'calendar_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indicators_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'projects_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'experiences_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'suggest_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'forum_module' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'team_modulo' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'name' => array('column' => 'name', 'unique' => 1),
			'email' => array('column' => 'email', 'unique' => 1),
			'I_MUNICIPALITY_ID' => array('column' => 'municipality_id', 'unique' => 0),
			'I_UNIVERSITY_ID' => array('column' => 'parent_id', 'unique' => 0)
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
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'location' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'municipality_id' => 1,
			'phone' => 'Lorem ipsum dolor sit amet',
			'fax' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'parent_id' => 1,
			'is_active' => 1,
			'documents_module' => 1,
			'calendar_module' => 1,
			'indicators_module' => 1,
			'projects_module' => 1,
			'experiences_module' => 1,
			'suggest_module' => 1,
			'forum_module' => 1,
			'team_modulo' => 1,
			'modified' => '2014-03-16 18:37:23',
			'created' => '2014-03-16 18:37:23'
		),
	);

}
