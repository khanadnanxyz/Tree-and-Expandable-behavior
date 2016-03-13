<?php
App::uses('AppModel', 'Model');
/**
 * Upload Model
 *
 * @property Uploadfield $Uploadfield
 */
class Upload extends AppModel {

public $name = 'Upload';
public $actsAs = array(
        'Expandable.Expandable' => array(
            'with' => 'Uploadfield',
        )
    );

//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Uploadfield' => array(
			'className' => 'Uploadfield',
			'foreignKey' => 'upload_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
    
    /**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Category' => array(
			'className' => 'Category',
			'foreignKey' => 'category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
