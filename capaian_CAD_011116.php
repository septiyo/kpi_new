<?php
include "koneksi.php";


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script src="chart/highcharts.js"></script>
<script src="chart/exporting.js"></script>

<style>
    #bar{:style => "width: 100%; height: auto; "}

</style>
<script>
   // #bar{:style => "width: 100%; height: auto; "}
    $(function () {
        $('#bar').highcharts({
            chart: {
                zoomType: 'xy'
            },
            title: {
                text: 'Capain Pembuatan Aplikasi / Dept vs Selesai'
            },
            subtitle: {
                text: 'Source: E-Apps'
            },
            xAxis: [{
                categories: ['Export', 'Finance', 'HR-Sales', 'Maintenance', 'Personalia-Legal','PPI','Procurement','QA','R&D','Sales Logistic','TAC-GA','Teknik'],
                crosshair: true
            }],
            yAxis: [{ // Primary yAxis
                labels: {
                    format: '',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                },
                title: {
                    text: 'Selesai',
                    style: {
                        color: Highcharts.getOptions().colors[1]
                    }
                }
            }, { // Secondary yAxis
                title: {
                    text: 'Permintaan Aplikasi',
                    style: {
                        color: Highcharts.getOptions().colors[0]
                    }
                },
                labels: {
                    format: '',
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
			/*xAxis: {       
				ordinal: false
			},*/
            series: [{
                name: 'Permintaan Aplikasi',
                type: 'column',
               // yAxis: 1,
                data: [3, 1, 3, 2, 1, 4, 1, 2, 6, 1, 2, 1],
                tooltip: {
                    valueSuffix: '  Aplikasi'
                }

            }, {
                name: 'Selesai',
                type: 'spline',
				//yAxis: 1,
                data: [2, 1, 3, 1, 1, 2, 1, 2, 3, 1, 1, 0],
                tooltip: {
                    valueSuffix: '  Aplikasi'
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
            text: 'Prosentase Pembuatan Aplikasi'
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
                ['Aplikasi Selesai', 66.67],
                ['Belum Selesai', 33.33],
         
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

<!--<div id="bar" style="min-width:300px; height:400px;margin:0 auto"></div>-->
<!--<div id="bar" style="min-width: 310px; height: 400px; margin: 0 auto"></div>-->
<div id="bar"></div><br>


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
              
			    $sql = "SELECT * FROM apps WHERE PUBLISH = '1' ORDER BY DEPART";
				$hasil = mysqli_query($mysqli, $sql);
				
				$sql_total_selesai = "SELECT COUNT(SELESAI)AS total_SELESAI FROM apps WHERE SELESAI = 'YES' AND PUBLISH = '1';";
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