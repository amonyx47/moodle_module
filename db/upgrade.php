<?php

function xmldb_certificate_upgrade($oldversion = 0)
{
    if ($oldversion < 2012091800) {
        // Add new fields to certificate table.
        $table = new xmldb_table('moodle_module');
        $field = new xmldb_field('showcode');
        $field->set_attributes(XMLDB_TYPE_INTEGER, '1', XMLDB_UNSIGNED, XMLDB_NOTNULL, null, '0', 'savecert');
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
        }


        // Certificate savepoint reached.
        upgrade_mod_savepoint(true, 2012091800, 'moodle_module');
    }
}

?>