<?php

function from($date)
{
    $newDate = clone $date;
    $newDate->add(new DateInterval('PT1000000000S'));
    return $newDate;
}
