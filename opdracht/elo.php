<?php 

function elo ($oppelo, $oldelo, $won) {
    if ($won == 'won') {
        if ($oldelo < $oppelo) {
            $addelo = ((($oppelo - $oldelo) * 0.8 + 25) / 4);
        } elseif ($oldelo > $oppelo) {
            $addelo = ((($oldelo - $oppelo) / 2 * 0.8 + 25) / 4);
        } else {
            $addelo = 25;
        }
    } elseif ($won == 'lost') {
        if ($oldelo > $oppelo) {
            $addelo = ((($oppelo - $oldelo) * 0.8 + 25 * -1) / 2);
        } elseif ($oldelo < $oppelo) {
            $addelo = ((($oldelo - $oppelo) / 2 * 0.8 + 25 * -1) / 2);
        } else {
            $addelo = -25;
        }
    }
     
    return $addelo;
}

function oppelo ($oppelo, $oldelo, $won) {
    if ($won == 'lost') {
        if ($oldelo < $oppelo) {
            $addelo = ((($oppelo - $oldelo) * 0.8 + 25) / 4);
        } elseif ($oldelo > $oppelo) {
            $addelo = ((($oldelo -$oppelo) / 2 * 0.8 + 25) / 4);
        } else {
            $addelo = 25;
        }
    } elseif ($won == 'won') {
        if ($oldelo > $oppelo) {
            $addelo = ((($oppelo - $oldelo) * 0.8 + 25 * -1) / 2);
        } elseif ($oldelo < $oppelo) {
            $addelo = ((($oldelo - $oppelo) / 2 * 0.8 + 25 * -1) / 2);
        } else {
            $addelo = -25;
        }
    }
     
    return $addelo;
}

?>