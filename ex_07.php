<?php

function str_to_wordtab($str=NULL, $delim=NULL)
{
    if(($str==NULL || $delim==NULL)||(!is_string($str)||!is_string($delim)))
    {
        return $str;
    }
    else
    {
        return explode($delim,$str);
    }
}

//var_dump(str_to_wordtab("dedhji dezduhd azdbhjzd dzdhkjz"," "));

/*
Écrire une fonction qui prend en paramètres une chaîne de caractères et un délimiteur.
Elle doit retourner un tableau contenant les morceaux de la chaîne découpée grâce au délimiteur.
En cas d’erreur, si les arguments ne sont pas du bon type ou si la fonction est appelée sans argument, la
fonction devra retourner NULL.

str_to_wordtab(“Mais tu es tout la”, ’ ’ );
// retourne array(“Mais”, “tu”, “es”, “tout”, “la”)

*/