<?php

	$this->startSetup();

	$table = new Varien_Db_Ddl_Table();

	$table->setName($this->getTable('kubitoo_webrtc/configuration'));

	$table->addColumn(
    	'entity_id',
    	Varien_Db_Ddl_Table::TYPE_INTEGER, 
    	10, 
	    array(
	        'auto_increment' => true,
	        'unsigned' => true,
	        'nullable'=> false,
	        'primary' => true
	    )
	);
	
	$table->addColumn(
			'servicename',
			Varien_Db_Ddl_Table::TYPE_VARCHAR,
			255,
			array(
					'nullable' => false,
			)
	);

	$table->addColumn(
    	'tokenid', 
    	Varien_Db_Ddl_Table::TYPE_VARCHAR, 
    	40, 
    	array(
        	'nullable' => false,
    	)
	);

	$table->addColumn(
			'textbutton',
			Varien_Db_Ddl_Table::TYPE_VARCHAR,
			255,
			array(
					'nullable' => false,
			)
	);

	$table->addColumn(
			'htmlbutton',
			Varien_Db_Ddl_Table::TYPE_TEXT,
			null,
			array(
					'nullable' => false,
			)
	);

	$table->addColumn(
			'idbutton',
			Varien_Db_Ddl_Table::TYPE_INTEGER,
			null,
			array(
				'nullable' => false,
			)
	);
	
	$table->addColumn(
    	'visibility', 
    	Varien_Db_Ddl_Table::TYPE_BOOLEAN, 
    	null, 
    	array(
        	'nullable' => false,
    	)
	);

	$table->setOption('type', 'InnoDB');
	$table->setOption('charset', 'utf8');

	$this->getConnection()->createTable($table);

	$this->endSetup();
