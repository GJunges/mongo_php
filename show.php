<?php

    $manager=new \MongoDB\Driver\Manager("mongodb://localhost:27017");

    $query=new \MongoDB\Driver\Query([]);

    $cursor=$manager->executQuery('raiz.academicos',$query);

    foreach($cursor as $c){
        echo $c->nome;"<br>";
        echo $c->idade;S
    }