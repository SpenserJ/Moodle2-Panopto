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
    
    
    return true;
}

?>
