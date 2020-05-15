<?php  
    $maneger=new \MongoDB\Driver\Manager("mongodb://localhost27017");
    
    $db=new \MongoDB\Driver\BulkWrite;

    $db->insert(['nome'=>'Mria','idade'=>'25']);

    $maneger->executeBulkWrite('raiz.academicos',$db);
