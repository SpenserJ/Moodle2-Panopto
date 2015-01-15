<?php

$tasks = array(                                                                                                                     
    array(                                                                                                                          
        'classname' => 'block_panopto\task\scheduleprovision',                                                                            
        'blocking' => 0,  //Won't block other tasks scheduled to run                                                                                                           
        'minute' => '*/5', //Default schedule is to repeat every five minutes                                                                                                           
        'hour' => '*',                                                                                                              
        'day' => '*',                                                                                                               
        'dayofweek' => '*',                                                                                                         
        'month' => '*'                                                                                                              
    )
);

?>