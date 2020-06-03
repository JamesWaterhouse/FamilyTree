<?PHP

function findPersonBreadth(String $missingPerson, Array $rootAsArray) {

    foreach ($rootAsArray as $person) {
        echo('<br>' . $person->name);
        if ($missingPerson == $person->name) {
            echo "  <- Hello... is it me you're looking for?";
            exit;
        }
    }

    foreach ($rootAsArray as $person) {
        if ($person->mum && $person->dad) {
            findPersonBreadth($missingPerson, [$person->mum, $person->dad]);
        }
        else if($person->mum) {
            findPersonBreadth($missingPerson, [$person->mum]);
        }
        else if($person->dad) {
            findPersonBreadth($missingPerson, [$person->dad]);
        }
    }
}