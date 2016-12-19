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

<!--<script>
$(function () {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Capaian Pembuatan Aplikasi'
        },
        subtitle: {
            text: 'Source: E-Apps Department'
        },
        xAxis: [{
            categories: ['Timbangan BS digital (UMS)',
			'Timbangan BS digital (MGFI)',
			'Maintenance QR perawtan Mesin (MGFI)',
		    'Maintenance QR perawtan Mesin (UMS)',
			'KJ (WEB-ANDROID)', 
			'Festive Stock',
             'DDS',
			 'TSR',
			  'Exhibition',
			   'Mail Template',
			    'E-Product Spec',
				'Mail Finance',
				'(Oven-Adonan) (MGFI)',
				'(Oven-Adonan) (UMS)',
				'Krim kemas (MGFI)',
				'Krim kemas (UMS)',
				'Pre Process',
				'E-Cleaning (MGFI)',
				'C-App (UMS)',
				'C-App2 (MGFI)',
				'IO-Goods (Android)',
				'(M-Check) MGFI',
				'(M-Check) UMS',
				'5R Digital (MGFI)',
				'5R Digital (UMS)',
				'E-Suplier',
				'Kokola.co.id',
				'litelmaxx.com',
				'E-Trans'
				
				
				],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}°C',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Temperature',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Rainfall',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} mm',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'top',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Rainfall',
            type: 'column',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valueSuffix: ' mm'
            }

        }, {
            name: 'Temperature',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valueSuffix: '°C'
            }
        }]
    });
});
</script>-->



<style>
  .table td {
      text-align: center;   
    }
</style>

</head>

<body>
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