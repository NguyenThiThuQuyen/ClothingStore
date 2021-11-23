<?php
    function tonghoadon($cart){
        $tonghoadon = 0;
        foreach($cart as $key => $value) {
            $tonghoadon += $value['SoLuong'] * $value['Gia'];
        }
        return $tonghoadon;
    }  
?>