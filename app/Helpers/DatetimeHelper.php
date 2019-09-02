<?php

    function readableStartAndEndDates($startDate, $endDate) {
        $readableTime = readableTimeBetweenTwoDates($startDate, $endDate);
        if($startDate && $endDate) {
            return "du {$startDate->format('m/Y')} au {$endDate->format('m/Y')} ({$readableTime})";
        }
        if($startDate) {
            return "depuis le {$startDate->format('m/Y')} ({$readableTime})";
        }
    }

    function readableTimeBetweenTwoDates($starDate, $endDate = null) {
        if($endDate == null) $endDate = \Carbon\Carbon::now();
        $diff = $starDate->diff($endDate);
        $readableDiff = "";
        if($diff->y) $readableDiff .= "{$diff->y} ans";
        if($diff->y && $diff->m) $readableDiff .= " ";
        if($diff->m) $readableDiff .= "{$diff->m} mois";
        return $readableDiff;
    }