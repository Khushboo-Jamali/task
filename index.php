<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        width: 50%;
        border-collapse: collapse;
        background-color: skyblue;
        margin-top: 50px;


    }

    div {
        height: 60%;
        width: 60%;
        background-color: pink;
        margin-left: 20%;
        padding-top: 1px;
        padding-bottom: 1px;
        margin-top: 20px;
        border-radius: 70px;

    }

    div h2 {
        font-size: 30px;

    }

    th,
    td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        text-align: center;
        font-size: 20px;
    }
</style>

<body>

    <div align="center">
        <h2>THIS IS PHP CODE</h2>
    </div>

    <table align="center">
        <thead>
            <tr>
                <th> Name</th>
                <th>Course</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = array(
                array('Khushboo', 'PHP', 20),
                array('Sumaima', 'HTML', 22),
                array('Fatima', 'JS', 25),
                array('Kinza', 'MS OFFICE', 30),
                array('Dua', 'CSS', 20),
                array('Iqra', 'BOOTSTRAP', 23)
            );



            $rows = count($data);
            $cols = count($data[0]);

            for ($i = 0; $i < $rows; $i++) {
                echo "<tr>";


                for ($j = 0; $j < $cols; $j++) {
                    echo "<td>" . $data[$i][$j] . "</td>";
                }

                echo "</tr>";
            }




            // );

            // $data = array(
            //     "HTML" => 25000,
            //     "CSS" => 2000,
            //     "JS" => 3500

            // );
            // foreach ($data as $key => $fees) {
            //     echo "this is  $key  fee  $fees <br> ";
            // }




            // echo array_search("Dua", $data);
            // $data2 = array(4, 7, 6, 3, 5, 10, 1, 10);
            // echo "<pre>";
            // array_push($data2, 20);

            // $c = array_pop($data);
            // $c = array_chunk($data, 2);
            // print_r($data);
            // print_r(array_count_values($data2));
            // var_dump(array_key_exists("7", $data));
            // echo array_search("Dua", $data);
            // print_r(array_search("Dua", $data));
            // echo "</pre>";



            // $data = array(1, 2, 4, 8, 9, 3);
            // $data2 = array(4, 7, 6, 3, 5, 9);



            // $rows = count($data);
            // $cols = count($data2);

            // $rows2 = count($data2);
            // $cols2 = count($data2);


            // for ($i = 0; $i < $rows; $i++) {
            //     echo "<tr>";


            //     for ($j = 0; $j < $cols; $j++) {
            //         echo "<td>" . $data[$i] * $data2[$j] . "</td>";
            //     }

            //     echo "</tr>";
            // }






            ?>
        </tbody>

    </table>
</body>

</html>