<!DOCTYPE HTML>
<html>
    <head>
    
    </head>

    <body>

    <?php
    echo "<h3>Angka Palindrome</h3>";

    
    function palindrome_angka($angka) {
     // tulis kode di sini
     $balik = " " ;
            for($j=strlen($angka)-1; $j>=0; $j--){
            $balik .= substr($angka, $j, 1);     
        
            }   
            if($balik == $angka && strlen($angka) == 1){
                $next = $angka + 1;
                echo $angka . " adalah palindrome. Nilai palindrome selanjutnya adalah " . $next . "<br>";
            } else if ($balik == $angka){
                if (strlen($angka) == 2){
                    $next2 = $angka + 11;
                } else if (strlen($angka) == 3){
                    $next2 = $angka + 101;
                }
                echo $angka . " adalah palindrome. Nilai palindrome selanjutnya adalah " . $next2 ."<br>";
                

            } else {
                echo $angka . " bukan palindrome. Nilai palindrome terdekat adalah <br>";
            }     
            echo "<br>";
            return $balik;
    }

    palindrome_angka(8);// 9
    palindrome_angka(10); // 11
    palindrome_angka(117); // 121
    palindrome_angka(175); // 181
    palindrome_angka(1000);

    // TEST CASES
    //echo palindrome_angka(8) // 9
    //echo palindrome_angka(10); // 11
    //echo palindrome_angka(117); // 121
    //echo palindrome_angka(175); // 181
    //echo palindrome_angka(1000); // 1001
    ?>
    
    
    </body>
</html>
