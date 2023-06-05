<html>
    <body>
        <?php
        //Tao mang sinh vien
        $SinhVien = array(
            "SinhVien1" => array(
                "Name" => "Viet",
                "Age" => 19,
                "Point" => 10
            ),
            "SinhVien2" => array(
                "Name" => "Bao",
                "Age" => 21,
                "Point" => 9
            ),
            "SinhVien3" => array(
                "Name" => "Hao",
                "Age" => 21,
                "Point" => 3
            )
            );

            foreach ($SinhVien as $sv) {
                $name = $sv['Name'];
                $age = $sv['Age'];
                $point = $sv['Point'];
            
                if ($point < 4.0) {
                    echo "Student $name: Trượt <br>";
                    echo "Age: $age <br> ";
                    echo "Point: $point <br>"; 
                } else {
                    echo "Student $name: Đỗ <br>";
                    echo "Age: $age <br> ";
                    echo "Point: $point <br>"; 
                }
            }
        ?>
    </body>
</html>