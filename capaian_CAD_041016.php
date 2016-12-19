<?php
include "koneksi.php";


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script src="chart/highcharts.js"></script>
<script src="chart/highcharts-3d.js"></script>
<script src="chart/exporting.js"></script>

<!--<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
</script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>-->

<script>
$(function () {
    $('#bar').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Capaian Pembuatan Applikasi'
        },
        subtitle: {
            text: 'Source: E-Apps'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Qty Aplikasi Selesai'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Qty Aplikasi Selesai: <b>{point.y:.1f}</b>'
        },
        series: [{
            name: 'Aplkasi Terselesaikan',
            data: [
                ['Januari', 0],
                ['Februai', 0],
                ['Maret', 0],
                ['April', 0],
                ['Mei', 0],
                ['Juni', 0],
                ['Juli', 0],
                ['Agustus', 0],
                ['September', 0],
                ['Oktober', 11.1],
                ['November', 10.5],
                ['Desember', 10.4],
                
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});

</script>


<script>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Capaian Pembuatan Aplikasi'
        },
        subtitle: {
            text: 'E-Apps'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: '%',
            data: [
                ['Aplikasi Selesai', 83],
                ['Belum Selesai', 17],
         
            ]
        }]
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

<div id="bar" style="min-width:300px; height:400px;margin:0 auto"></div>


  <div id="container" style="height: 400px"></div><br>
  <div class="text-center">
  <b>List Aplikasi</b>
  </div>
  <div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>NAMA APLIKASI</th>
                  <th>DEPARTMENT</th>
                  <th>SELESAI</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              
			    $sql = "SELECT * FROM apps";
				$hasil = mysqli_query($mysqli, $sql);
				
				$sql_total_selesai = "SELECT COUNT(SELESAI)AS total_SELESAI FROM apps;";
				$hasil_selesai = mysqli_query($mysqli, $sql_total_selesai);
				$data_selesai = mysqli_fetch_assoc($hasil_selesai);
				
				$n = 1;
				while($data=mysqli_fetch_assoc($hasil)){
			    
				echo "<tr class='odd gradeX'>
                  <td class='center'>$n</td>
                  <td>$data[NAMA_APLIKASI]</td>
                  <td class='center'>$data[DEPART]</td>
                  <td class='center'>$data[SELESAI]</td>
                 </tr>";
				 $n++;
					
				};
				
			  
			  
			  
			  ?>
              
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Total Selesai</th>
                  <th><?php echo $data_selesai[total_SELESAI];?></th>
                  
                </tr>
              </tfoot>
              
              <!--  <tr class="odd gradeX">
                  <td class="center">1</td>
                  <td>Capaian Pembuatan Aplikasi</td>
                  <td class="center">83.33%</td>
                  <td class="center">90%</td>
                 </tr>
               -->
              </tbody>
            </table>
          </div>
</body>
</html>