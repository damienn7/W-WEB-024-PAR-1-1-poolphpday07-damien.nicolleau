<?php

function my_pow($nb_a=NULL,$nb_b=NULL)
{   
    if(is_int($nb_a)&&is_int($nb_b))
    {   
    
        if($nb_b>0)
        {
        $result=1;
        for($i=0;$i<$nb_b;$i++)
        {   
            $result=$result*$nb_a;
        }
        return $result;
    }
    }elseif($nb_b==0)
    {
        return 1;
    }
    else
    {
        return NULL;
    }
}

//echo my_pow(3,0);