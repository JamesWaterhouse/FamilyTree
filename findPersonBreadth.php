<?php

function findPersonBreadth($missingPerson, $root) {

    $array[] = $root;
  
        for ($i = 0; $i < count($array); $i++) {
            echo '<br>' . $array[$i]->name;
            if ($array[$i]->name == $missingPerson) {
                echo "    <- Hello... is it me you're looking for?";
                return $array[$i];
            } else {
                if ($array[$i]->mum) {
                    $array[] = $array[$i]->mum;
                }
                if ($array[$i]->dad) {
                    $array[] = $array[$i]->dad;
                }
            }
        }
    return false;
}