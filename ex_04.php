<?php
/*
function my_pow_rec($nbr, $power)
{
    if(is_int($nbr)&&is_int($power))
    {   
        if($power>0)
        {
        $result=1;
        for($i=0;$i<$power;$i++)
        {   
            $result=$result*$nb_a;
        }
        return $result;
    }
    }elseif($power==0)
    {
        return 1;
    }
    else
    {
        return NULL;
    }
}
*/


function my_pow_rec($nbr,$power)
{   
    
    if(!is_int($nbr)||!is_int($power))
    {
        return NULL;
    }

    if($nbr ==0 || $power==0)
    {
        return 1;
    }

    if(isset($nbr)&&isset($power))
    {
        //$power=$power-1;
        if($power==0)
        {
            return 1;
        }

        if($power<0)
        {
            return NULL;
        }
        if($power>=0)
        {
            return ($nbr*my_pow_rec($nbr,$power-1));
        }
        
    }
    else
    {
        return NULL;
    }
}

//echo my_pow_rec();