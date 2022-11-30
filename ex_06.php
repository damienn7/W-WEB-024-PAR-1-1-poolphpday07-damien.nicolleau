<?php

function sum_rec($nbr, $iteration)
{
    if((!isset($nbr) || !isset($iteration))||(!is_int($nbr)||!is_int($iteration)))
    {
        return NULL;
    }

    if($nbr>0 && $iteration>0)
    {
        return ($nbr+sum_rec($iteration,$iteration-1));
    }

    if($nbr<0 && $iteration<0)
    {
        return (abs($nbr)+sum_rec(abs($iteration),abs($iteration)-1));
    }

    if($nbr<0 || $iteration<0)
    {
        return (abs($nbr)+sum_rec(abs($iteration),abs($iteration)-1)*(-1));
    }

    if($iteration==0)
    {
        return $nbr;
    }
}

//echo sum_rec(5,3);