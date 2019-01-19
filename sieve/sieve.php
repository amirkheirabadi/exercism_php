<?php

// function sieve($data)
// {
//     $primeList = [];
//     for ($i = 2; $i <= $data; $i++) {
//         if (isPrime($i)) {
//             $primeList[] = $i;
//         }
//     }

//     return $primeList;
// }

// function isPrime($number)
// {
//     for ($i = 2; $i < $number; $i++) {
//         if ($number % $i === 0) {
//             return false;
//         }
//     }

//     return true;
// }

function sieve($limit)
{
    if ($limit < 2) {
        return [];
    }
    $range = range(2, $limit);
    $primes = [];
    while (count($range) >= 1) {
        $prime = array_shift($range);
        $primes[] = $prime;
        $range = array_filter($range, function ($int) use ($prime) {
            return $int % $prime >= 1;
        });
    }
    return $primes;
}
