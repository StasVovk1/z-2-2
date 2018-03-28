<?php 
    $mass = [1,2,3,4,5,6,7,8,9,10];
    $mass_b = [];
    echo 'Исходные данные: '.json_encode($mass);
    $summ = 0;
    for ($i = 0; $i < counts($mass); $i++){
        $summ += $mass[$i];
        $mass_b[] = $summ/($i+1);
    }

    echo '<br>Ответ: '.json_encode($mass_b);
    
    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>