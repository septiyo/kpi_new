<?php
include "koneksi.php";


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">

<!--    <script src="https://code.highcharts.com/highcharts.js"></script>-->
<!--    <script src="https://code.highcharts.com/modules/exporting.js"></script>-->

    <script src="chart/highcharts.js"></script>
    <script src="chart/exporting.js"></script>


    <script>
        $(function () {
            $('#container').highcharts({
                title: {
                    text: 'Jumlah Finish App tahun 2016',
                    x: -20 //center
                },
                subtitle: {
                    text: 'Source: E-Apps Department',
                    x: -20
                },
                xAxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                        'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                },
                yAxis: {
                    title: {
                        text: 'Nilai '
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: ' Score'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Aplikasi Selesai',
                    data: [0, 0, 1, 1, 1, 1, 1, 2, 6, 3, 3]
                }/*,
                 {
                 name: 'New York',
                 data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
                 },
                 {
                 name: 'Berlin',
                 data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
                 },
                 {
                 name: 'London',
                 data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
                 }*/]
            });
        });

    </script>


    <style>
        .table td {
            text-align: center;
        }
    </style>

</head>

<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<br><br>


<div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>BULAN</th>
            <th>NAMA APLIKASI</th>


        </tr>
        </thead>
        <tbody>
        <?php

        $sql = "SELECT bulan.`BULAN`,tahunan.`PROJECT` FROM bulan,tahunan WHERE bulan.`ID` = tahunan.`BULAN` AND tahunan.`PUBLISH` = '1';";
        $hasil = mysqli_query($mysqli, $sql);

//        $sql_total_selesai = "SELECT COUNT(SELESAI)AS total_SELESAI FROM apps WHERE SELESAI = 'YES' AND PUBLISH = '1';";
//        $hasil_selesai = mysqli_query($mysqli, $sql_total_selesai);
//        $data_selesai = mysqli_fetch_assoc($hasil_selesai);

        $n = 1;
        while($data=mysqli_fetch_assoc($hasil)){

            echo "<tr>

                  <td>$data[BULAN]</td>
                  <td class='center'>$data[PROJECT]</td>

                 </tr>";
            $n++;

        };

        ?>

<!--        <tfoot>-->
<!--        <tr>-->
<!--            <th></th>-->
<!--            <th></th>-->
<!--            <th>Total Selesai</th>-->
<!--            <th>--><?php //echo $data_selesai[total_SELESAI];?><!--</th>-->
<!---->
<!--        </tr>-->
<!--        </tfoot>-->


        </tbody>
    </table>
</div>


</body>
</html>