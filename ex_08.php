<?php

function str_beautifuler($str=NULL)
{   
    if($str==NULL|| !is_string($str))
    {
        return NULL;
    }

    $arr=explode(" ",$str);

    foreach($arr as $key=>$value)
    {
        $begin=substr($value,0,-1);
        $end=ucfirst(substr($value,-1));
        $chaine.=$begin.$end." ";
    }
    return rtrim(ltrim($chaine));
    //echo $chaine;
}

//echo str_beautifuler(" cqdc fd fdf");



/*
Écrire une fonction qui prend en paramètre une chaîne de caractères.
Elle doit la retourner avec pas plus d’un espace consécutif entre chaque mot, ni aucun espace au début et
à la fin, le tout avec une majuscule à chaque fin de mot uniquement.
En cas d’erreur, si les arguments ne sont pas du bon type ou si la fonction est appelée sans argument, la
fonction devra retourner NULL.


str_beautifuler(“Un PanGolin CacHe”);
// retourne “uN pangoliN cachE”

*/