<?php

$installer = $this;

$installer->startSetup();

$installer->getConnection()->addColumn(
    $installer->getTable('kubitoo_webrtc/configuration'),
    'language',
    "VARCHAR(20) NOT NULL DEFAULT 'en_US'");

$installer->endSetup();


$installer = $this;

$installer->startSetup();

$installer->getConnection()->addColumn(
    $installer->getTable('kubitoo_webrtc/configuration'),
    'imgbutton',
    "TEXT NULL");

$installer->endSetup();