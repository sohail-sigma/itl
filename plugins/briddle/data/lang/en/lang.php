<?php return [
    'plugin' => [
        'name' => 'Bulk Packages',
        'description' => 'Import bulk Packages into your database.',
    ],
    'settings' => [
        'name' => 'Data import',
        'description' => 'Settings for your data import.',
        'suffix' => 'This is used for appending the name of your briddle_data_import table (e.g. _latest)',
    ],
    'labels' => [
        'settings' => 'Settings',
        'import' => 'Import',
        'replace' => 'Replace',
        'use' => 'Example usage',
        'temporary' => 'Temporary table',
    ],
    'hints' => [
        'import' => 'Please upload a valid UTF-8 encoded CSV document (.csv) using a comma as the seperator and a double quote as a delimiter. The first row should contain valid column names.',
        'destination' => 'Data will be imported to the table by firing import event.',
        'example' => 'You can listen for the briddle.data.imported event in your own plugin (e.g. plugins/acme/datahandler).',
    ],
    'messages' => [
        'success' => 'Data successfully imported!',
        'type' => 'Unsupported file extension!',
        'invalid' => 'Invalid file!',
        'empty' => 'Missing file!',
        'imported' => 'Data imported!',
        'error' => 'Error while importing!',
    ],
];
