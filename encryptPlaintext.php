<?php

    $Ptxt = "I wish you courage as you step ahead towards new challenges in life Congrats and may all your other dreams be fulfilled.";
    
    $Cptxt = $Ptxt;
    
    $Check = "e3f9e085c4a4ec54b7d87a36d877b9c7f256a691";
    
    $x=0; 
    
    echo $Check."\n\n";
    
    $index = array(0,0,0,0);
    
    $all = array(
        $index,
    );
    
    do {
        $Cptxt = $Ptxt;
        do{
            $index[0] = rand(0,6); 
            $index[1] = rand(0,6); 
            $index[2] = rand(0,6); 
            $index[3] = rand(0,6); 
        } while(in_array($index, $all));
        
        array_push($all, $index);
        // print_r($index);
        
        foreach ($index as $i) {
            if ($i == 0) {
                $Cptxt = sha1($Cptxt);  
            } else if ($i == 1) {
                $Cptxt = hash('sha256',$Cptxt);
            } else if ($i == 2) {
                $Cptxt = hash('sha384',$Cptxt);
            } else if ($i == 3) {
                $Cptxt = hash('sha512',$Cptxt);
            } else if ($i == 4) {
                $Cptxt = md5($Cptxt);
            } else if ($i == 5) {
                $Cptxt = hash('md2',$Cptxt);
            } else if ($i == 6) {
                $Cptxt = hash('md4',$Cptxt);
            }
        }
        // echo $x.".".$Cptxt. "\n";
        
        if ($Cptxt == $Check) {
            echo "Hurey!"."\n";
            echo $x.".".$Cptxt. "\n";
            $j = 0;
            foreach ($index as $i) {
            if ($i == 0) {
                $index[$j] = "sha1";  
            } else if ($i == 1) {
                $index[$j] = "sha256"; 
            } else if ($i == 2) {
                $index[$j] = "sha384"; 
            } else if ($i == 3) {
                $index[$j] = "sha512"; 
            } else if ($i == 4) {
                $index[$j] = "md5"; 
            } else if ($i == 5) {
                $index[$j] = "md2"; 
            } else if ($i == 6) {
                $index[$j] = "md4"; 
            }$j++;
            }
            print_r($index);
            break;
        }
        
        $x++;
        
    } while ($x <= 2401);
    
    echo "\nBroken heart!";
?>

