<?php
include "koneksi.php";


?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">

<script src="chart/highcharts.js"></script>
<!--<script src="chart/highcharts-3d.js"></script>-->
<script src="chart/exporting.js"></script>





    <style>
        #bar{:style => "width: 100%; height:auto;"}

    </style>
    <script>

        $(function () {
            $('#bar').highcharts({
                chart: {
                    zoomType: 'xy'
                },
                title: {
                    text: 'Aplikasi yg Sudah Selesai / Dept vs Yang Sudah Implementasi'
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
                        text: 'Sudah Implementasi',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }, { // Secondary yAxis
                    title: {
                        text: 'Sudah Selesai',
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
                series: [{
                    name: 'Aplikasi Selesai',
                    type: 'column',
                    //yAxis: 1,
                    data: [2, 1, 3, 1, 1, 2, 1, 2, 3, 1, 1, 1],
                    tooltip: {
                        valueSuffix: '  Aplikasi'
                    }

                }, {
                    name: 'Implementasi',
                    type: 'spline',
                    data: [2, 1, 3, 1, 1, 2, 1, 2, 2, 1, 1, 0],
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
            text: 'Laporan Implementasi Aplikasi'
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
                ['Sudah Implementasi', 88.9],
                ['Belum Implementasi', 11.1],
         
            ]
        }]
    });
});

/*ganti thema*/
/**
 * Dark theme for Highcharts JS
 * @author Torstein Honsi
 */

// Load the fonts
Highcharts.createElement('link', {
   //href: 'https://fonts.googleapis.com/css?family=Unica+One',
   rel: 'stylesheet',
   type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

Highcharts.theme = {
   colors: ["#2b908f", "#90ee7e", "#f45b5b", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
      "#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
   chart: {
      backgroundColor: {
         linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
         stops: [
            [0, '#2a2a2b'],
            [1, '#3e3e40']
         ]
      },
      style: {
         fontFamily: "'Unica One', sans-serif"
      },
      plotBorderColor: '#606063'
   },
   title: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase',
         fontSize: '20px'
      }
   },
   subtitle: {
      style: {
         color: '#E0E0E3',
         textTransform: 'uppercase'
      }
   },
   xAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      title: {
         style: {
            color: '#A0A0A3'

         }
      }
   },
   yAxis: {
      gridLineColor: '#707073',
      labels: {
         style: {
            color: '#E0E0E3'
         }
      },
      lineColor: '#707073',
      minorGridLineColor: '#505053',
      tickColor: '#707073',
      tickWidth: 1,
      title: {
         style: {
            color: '#A0A0A3'
         }
      }
   },
   tooltip: {
      backgroundColor: 'rgba(0, 0, 0, 0.85)',
      style: {
         color: '#F0F0F0'
      }
   },
   plotOptions: {
      series: {
         dataLabels: {
            color: '#B0B0B3'
         },
         marker: {
            lineColor: '#333'
         }
      },
      boxplot: {
         fillColor: '#505053'
      },
      candlestick: {
         lineColor: 'white'
      },
      errorbar: {
         color: 'white'
      }
   },
   legend: {
      itemStyle: {
         color: '#E0E0E3'
      },
      itemHoverStyle: {
         color: '#FFF'
      },
      itemHiddenStyle: {
         color: '#606063'
      }
   },
   credits: {
      style: {
         color: '#666'
      }
   },
   labels: {
      style: {
         color: '#707073'
      }
   },

   drilldown: {
      activeAxisLabelStyle: {
         color: '#F0F0F3'
      },
      activeDataLabelStyle: {
         color: '#F0F0F3'
      }
   },

   navigation: {
      buttonOptions: {
         symbolStroke: '#DDDDDD',
         theme: {
            fill: '#505053'
         }
      }
   },

   // scroll charts
   rangeSelector: {
      buttonTheme: {
         fill: '#505053',
         stroke: '#000000',
         style: {
            color: '#CCC'
         },
         states: {
            hover: {
               fill: '#707073',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            },
            select: {
               fill: '#000003',
               stroke: '#000000',
               style: {
                  color: 'white'
               }
            }
         }
      },
      inputBoxBorderColor: '#505053',
      inputStyle: {
         backgroundColor: '#333',
         color: 'silver'
      },
      labelStyle: {
         color: 'silver'
      }
   },

   navigator: {
      handles: {
         backgroundColor: '#666',
         borderColor: '#AAA'
      },
      outlineColor: '#CCC',
      maskFill: 'rgba(255,255,255,0.1)',
      series: {
         color: '#7798BF',
         lineColor: '#A6C7ED'
      },
      xAxis: {
         gridLineColor: '#505053'
      }
   },

   scrollbar: {
      barBackgroundColor: '#808083',
      barBorderColor: '#808083',
      buttonArrowColor: '#CCC',
      buttonBackgroundColor: '#606063',
      buttonBorderColor: '#606063',
      rifleColor: '#FFF',
      trackBackgroundColor: '#404043',
      trackBorderColor: '#404043'
   },

   // special colors for some of the
   legendBackgroundColor: 'rgba(0, 0, 0, 0.5)',
   background2: '#505053',
   dataLabelsColor: '#B0B0B3',
   textColor: '#C0C0C0',
   contrastTextColor: '#F0F0F3',
   maskColor: 'rgba(255,255,255,0.3)'
};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);


</script>





<style>
  .table td {
      text-align: center;   
    }
</style>

</head>

<body>

<div id="bar"></div><br>



  <div id="container" style="height: 400px"></div>
  
  <br>
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
                  <th>IMPLEMENTASI</th>
                  
                </tr>
              </thead>
              <tbody>
              <?php
              
			    $sql = "SELECT * FROM apps WHERE PUBLISH = '1' ORDER BY DEPART";
				$hasil = mysqli_query($mysqli, $sql);
				
				$sql_total_selesai = "SELECT COUNT(SELESAI)AS SELESAI, COUNT(IMPLEMENTASI)AS IMPLEMENTASI  FROM apps  WHERE SELESAI = 'YES' AND PUBLISH = '1';";
				$hasil_selesai = mysqli_query($mysqli, $sql_total_selesai);
				$data_selesai = mysqli_fetch_assoc($hasil_selesai);
				
				$selesai      = $data_selesai[SELESAI];
				$implementasi = $data_selesai[IMPLEMENTASI];
				
				
				$n = 1;
				while($data=mysqli_fetch_assoc($hasil)){
			    
				echo "<tr class='odd gradeX'>
                  <td class='center'>$n</td>
                  <td>$data[NAMA_APLIKASI]</td>
                  <td class='center'>$data[DEPART]</td>
				  <td class='center'>$data[SELESAI]</td>
                  <td class='center'>$data[IMPLEMENTASI]</td>
                 </tr>";
				 $n++;
					
				};
				
			  
			  
			  
			  ?>
              
                <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th>Total </th>
                  <th><?php echo $selesai;?></th>
                  <th><?php echo $implementasi;?></th>
                  
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