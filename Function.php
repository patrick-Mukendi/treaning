<?php

/*Q2 Écrire une fonction is_prime qui prend un nombre en paramètre et 
retourne true s'il est premier, sinon false.*/
function is_prime (int|float $nombre):bool{
    $verification=0;
    for($i=1;$i<=$nombre;$i++){
        if($nombre%$i==0){
            $verification++;
        }
    }
    if($verification==2){
        return true;
    }
    return false;
}

//fibonacci
function fibonacci(int $nombre):int{
    $fibo=0;
    for($i=0;$i<=$nombre;$i++){
        $fibo+=$i;
    }
    return $fibo;
}


//Écrire une fonction array_sum qui prend un tableau de nombres en paramètre et retourne la somme de tous les éléments.
function array_sum1(array $tableau):int{
    $arraySum=0;
    foreach($tableau as $valeur){
        $arraySum+=$valeur;
    }
    return $arraySum;
}


//Écrire une fonction count_words qui prend une chaîne de caractères 
//en paramètre et retourne le nombre de mots dans la chaîne.
function count_words(string $chaine):int{
    $nombreChaine=0;
    
     if($chaine!="")
        {
            $nombreChaine=1;   
            
        }  
     for($i=0;$i<strlen($chaine);$i++)
       {
          
           if($chaine[$i]==" "||$chaine[$i]==" ,")
           {
            $nombreChaine++;
           }

       }
       return  $nombreChaine;
}

/*Écrire une fonction remove_duplicates qui prend un tableau 
en paramètre et retourne un nouveau tableau sans doublons*/
function remove_duplicates(array $arrayDuplicates):array{
    $newTableau=[$arrayDuplicates[0]];
    $increment=1;
foreach($arrayDuplicates as  $val)
{
    $isval=1;
    foreach($newTableau as $value)
    {
        if($value==$val)
        {
            $isval=0;
        } 
    }

    if($isval==1)
    {
        $newTableau[$increment]=$val;
        $increment+=1;
    }

}
  return $newTableau;
}


/* Écrire une fonction max_in_array qui prend un tableau de nombres en
 paramètre et retourne le plus grand nombre.*/
function max_in_array (array $tableau):int{
    $valeurMax=0;

    foreach($tableau as $valeur)
    {
        if($valeur>$valeurMax)
        {
            $valeurMax=$valeur;
        }
    }
    return $valeurMax;
}

/*Écrire une fonction merge_arrays qui prend deux tableaux en paramètre
 et retourne un nouveau tableau contenant tous les éléments des deux tableaux, sans doublons.*/
function merge_arrays(array $tableau1, array $tableau2): array{
    $incrementation=0;
    $newArray=[];
    foreach($tableau1 as $valeur)
    {
        $newArray[$incrementation]=$valeur;
        $incrementation++;
    }
    foreach($tableau2 as $valeur)
    {
        $newArray[$incrementation]=$valeur;
        $incrementation++;
    }
    $tableauNoDoublon=[ $newArray[0]];
    $incrementation=1;
    foreach($newArray as $valeur)
    {
        $isval=1;
        foreach($tableauNoDoublon as $value)
        {
            if($value==$valeur){
                $isval=0;
            }
        }
        if($isval==1)
        {
            $tableauNoDoublon[$incrementation]=$valeur;
            $incrementation++;
        }
    }
return $tableauNoDoublon;
}

/* Écrire une fonction reverse_string qui prend une chaîne de caractères 
en paramètre et retourne la chaîne inversée.*/
function reverse_string(string $chaine):string{
$chaineSortie="";
for($i=strlen($chaine)-1 ; $i >= 0 ; $i--)
$chaineSortie.=$chaine[$i];
return $chaineSortie;  
}

/*Écrire une fonction count_vowels qui prend une chaîne de caractères en
/ paramètre et retourne le nombre de voyelles dans la chaîne.*/
function count_vowels(string $chaine):int{
    $voyelles=0;
    for($i=0; $i<strlen($chaine);$i++){
        if($chaine[$i]=="a"||$chaine[$i]=="e"||$chaine[$i]=="i"||$chaine[$i]=="u"||$chaine[$i]=="y"||$chaine[$i]=="o"||$chaine[$i]=="y")
        $voyelles++;
    }
    return $voyelles;
}

/*Écrire une fonction power qui prend deux paramètres (base et exposant) et 
retourne la base élevée à la puissance de l'exposant.*/
function power(int $base, $exposant):int{
    return $base**$exposant;
}
