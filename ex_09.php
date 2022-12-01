<?php

function is_prime($nbr=NULL)
{
    if($nbr==NULL || !is_int($nbr) || $nbr<0)
    {
        return $nbr;
    }

    if($nbr==2)
    {
        return true;
    }
    
    for($i=2;$i<$nbr;$i++)
    {
        if($nbr%$i==0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
}

//var_dump(is_prime(2));