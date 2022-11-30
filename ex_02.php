<?php

function  my_facto_rec($nbr)
{
    static $return=1;
    static $i=2;
    if($nbr>0 && is_int($nbr))
    {   if($i<=$nbr)
        {
            $return *= $i;
            $i++;
            my_facto_rec($nbr,$return,$i);
        }
        
        if($i>=$nbr+1)
        {
            return $return;
        }
    }
    elseif($nbr==0)
    {
        return 1;
    }
    elseif(get_num_args()>1)
    {
        return NUll;
    }
    else
    {
        return NULL;
    }


}

echo my_facto_rec(7);
