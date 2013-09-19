<?php

function quicksort(array $list)
{
    if (empty($list)) {
        return array();
    }

    $pivot = array_shift($list);

    return array_merge(
        quicksort(
            array_filter(
                $list,
                function ($elt) use ($pivot) {
                    return $elt <= $pivot;
                }
            )
        ),
        array($pivot),
        quicksort(
            array_filter(
                $list,
                function ($elt) use ($pivot) {
                    return $elt > $pivot;
                }
            )
        )
    );
}

var_dump(quicksort(array(42,23,4,15,8,16)));
var_dump(quicksort(array(4, 'b', 'c', 'a')));
