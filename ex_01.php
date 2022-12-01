<?php

function  my_facto($nbr=NULL)
{
    if($nbr>0 && is_int($nbr))
    {
        $return = 1;
        for ($i=2; $i <= $nbr; $i++) {
            $return *= $i;
        }
        return $return;
    }
    elseif($nbr==0)
    {
        return 1;
    }
    else
    {
        return $nbr;
    }

    if($nbr==NULL)
    {
        return NULL;
    }
}

//var_dump(my_facto_rec(7));