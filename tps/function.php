<?php

function is_prime(int|float $nombre): bool
{
    $verification = 0;

    for ($i = 1; $i <= $nombre; ++$i) {
        if ($nombre % $i == 0) {
            ++$verification;
        }
    }

    return $verification == 2;
}

function fibonacci(int $nombre): int
{
    $fibo = 0;

    for ($i = 0; $i <= $nombre; ++$i) {
        $fibo += $i;
    }

    return $fibo;
}

function array_sum1(array $tableau): int
{
    $arraySum = 0;

    foreach ($tableau as $valeur) {
        $arraySum += $valeur;
    }

    return $arraySum;
}

function count_words(string $chaine): int
{
    $nombreChaine = 0;

    if ($chaine != '') {
        $nombreChaine = 1;
    }

    for ($i = 0; $i < strlen($chaine); ++$i) {
        if ($chaine[$i] == '' || $chaine[$i] == ',') {
            ++$nombreChaine;
        }
    }

    return $nombreChaine;
}

function remove_duplicates(array $arrayDuplicates): array
{
    $newTableau = [$arrayDuplicates[0]];
    $increment = 1;

    foreach ($arrayDuplicates as $val) {
        $isval = 1;

        foreach ($newTableau as $value) {
            if ($value == $val) {
                $isval = 0;
            }
        }

        if ($isval == 1) {
            $newTableau[$increment] = $val;
            ++$increment;
        }
    }

    return $newTableau;
}

function max_in_array(array $tableau): int
{
    $valeurMax = 0;

    foreach ($tableau as $valeur) {
        if ($valeur > $valeurMax) {
            $valeurMax = $valeur;
        }
    }

    return $valeurMax;
}

function merge_arrays(array $tableau1, array $tableau2): array
{
    $incrementation = 0;
    $newArray = [];

    foreach ($tableau1 as $valeur) {
        $newArray[$incrementation] = $valeur;
        ++$incrementation;
    }

    foreach ($tableau2 as $valeur) {
        $newArray[$incrementation] = $valeur;
        ++$incrementation;
    }

    $tableauNoDoublon = [$newArray[0]];
    $incrementation = 1;

    foreach ($newArray as $valeur) {
        $isval = 1;

        foreach ($tableauNoDoublon as $value) {
            if ($value == $valeur) {
                $isval = 0;
            }
        }

        if ($isval == 1) {
            $tableauNoDoublon[$incrementation] = $valeur;
            ++$incrementation;
        }
    }

    return $tableauNoDoublon;
}

function reverse_string(string $chaine): string
{
    $chaineSortie = '';

    for ($i = strlen($chaine) - 1; $i >= 0; --$i) {
        $chaineSortie .= $chaine[$i];
    }

    return $chaineSortie;
}

function count_vowels(string $chaine): int
{
    $voyelles = 0;

    for ($i = 0; $i < strlen($chaine); ++$i) {
        if ($chaine[$i] == 'a' || $chaine[$i] == 'e' || $chaine[$i] == 'i' || $chaine[$i] == 'u' || $chaine[$i] == 'y'
            || $chaine[$i] == 'o' || $chaine[$i] == 'y') {
            ++$voyelles;
        }
    }

    return $voyelles;
}
function power(int $base, int $exposant): int
{
    return $base ** $exposant;
}
