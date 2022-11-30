<?php

function sum_it($nbr, $iteration)
{
    if((!isset($nbr) || !isset($iteration))||(!is_int($nbr)||!is_int($iteration)))
    {
        return NULL;
    }

    if($nbr>0 && $iteration>0)
    {
        for($i=0;$i<$iteration;$i++)
        {
            $nbr+=$iteration-1;
        }
        return $nbr;
    }

    if($nbr<0 && $iteration<0)
    {
        for($i=0;$i<abs($iteration);$i++)
        {
            $nbr=abs($nbr)+abs($iteration)-1;
        }
        return $nbr;
    }

    if($nbr<0 || $iteration<0)
    {

        for($i=0;$i<$iteration;$i++)
        {
            $nbr=abs($nbr)+abs($iteration)-1;
        }
        return $nbr*(-1);
    }
}

//echo sum_it(-5,-3);