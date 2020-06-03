<?php

function findPersonDepth($missingPerson, $root) {

    echo '<br>' . $root->name;

    if ($missingPerson == $root->name) {
        echo "    <- Hello... is it me you're looking for?";
        return $root;
    }
    if ($root->mum) {

        $result = findPersonDepth($missingPerson, $root->mum);
        if($result) {
            return $result;
        }
    }
    if($root->dad){

        $result = findPersonDepth($missingPerson, $root->dad);
        if($result) {
            return $result;
        }
    }
    return false;
}