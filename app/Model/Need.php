<?php
App::uses('AppModel', 'Model');
/**
 * Need Model
 *
 */
class Need extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'El nombre es obligatorio',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'between' => array(
				'rule' => array('between', 5, 100),
				'message' => 'Debe tener entre 5 y 100 caracteres'
			)
		),
	);
}
