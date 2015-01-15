<?php
function xmldb_block_panopto_upgrade($oldversion = 0) {
    global $CFG, $DB;
    $dbman = $DB->get_manager();

    if ($oldversion < 2014121502) {
        //Add db fields for servername and application key per course

        if(isset($CFG->block_panopto_server_name)){
            $oldServerName = $CFG->block_panopto_server_name;
        }
        if(isset($CFG->block_panopto_application_key)){
            $oldAppKey = $CFG->block_panopto_application_key;
        }
        
        // Define field panopto_server to be added to block_panopto_foldermap.
        $table = new xmldb_table('block_panopto_foldermap');
        $field = new xmldb_field('panopto_server', XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, null, 'panopto_id');
        
        // Conditionally launch add field panopto_server.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
            if(isset($oldServerName)){
                $DB->set_field('block_panopto_foldermap', 'panopto_server', $oldServerName, null);
            }
        }
                  

        // Define field panopto_app_key to be added to block_panopto_foldermap.
        $table = new xmldb_table('block_panopto_foldermap');
        $field = new xmldb_field('panopto_app_key', XMLDB_TYPE_CHAR, '64', null, XMLDB_NOTNULL, null, null, 'panopto_server');

        // Conditionally launch add field panopto_app_key.
        if (!$dbman->field_exists($table, $field)) {
            $dbman->add_field($table, $field);
            if(isset($oldAppKey)){
                $DB->set_field('block_panopto_foldermap', 'panopto_app_key', $oldAppKey, null);
            }
        }
       
        // Panopto savepoint reached.
        upgrade_block_savepoint(true, 2014121502, 'panopto');
    }
    
 if ($oldversion < 2015011501) {
        //Add table to store course ids for rolling sync
        
        // Define table course_ids_for_provision to be created.
        $table = new xmldb_table('course_ids_for_provision');

        // Adding fields to table course_ids_for_provision.
        $table->add_field('id', XMLDB_TYPE_INTEGER, '10', null, XMLDB_NOTNULL, XMLDB_SEQUENCE, null);
        $table->add_field('course_id', XMLDB_TYPE_INTEGER, '20', null, XMLDB_NOTNULL, null, null);

        // Adding keys to table course_ids_for_provision.
        $table->add_key('primary', XMLDB_KEY_PRIMARY, array('id'));

        // Conditionally launch create table for course_ids_for_provision.
        if (!$dbman->table_exists($table)) {
            $dbman->create_table($table);
        }

        // Panopto savepoint reached.
        upgrade_block_savepoint(true, 2015011501, 'panopto');
    }
    
    return true;
}
?>
