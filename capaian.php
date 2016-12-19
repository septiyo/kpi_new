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
            name: 'qty',
            data: [
                ['Waiting Approval', 14],
                ['Analysis Requirement', 4],
                ['Process', 3],
				['Finish', 1],
                ['Handover', 19],
				['Rejected', 7],
                




            ]
        }]
    });
});
/*=====================================*/

$(function () {
    Highcharts.chart('container2', {
        chart: {
            type: 'area'
        },
        title: {
            text: 'Grafik / 3 Bulan'
        },
        subtitle: {
            text: 'Source: E-Apps Kokolagroup'
        },
        xAxis: {
            categories: ['September','Oktober','November'],
            tickmarkPlacement: 'on',
            title: {
                enabled: false
            }
        },
        yAxis: {
            title: {
                text: 'Billions'
            },
            labels: {
                formatter: function () {
                    return this.value / 1000;
                }
            }
        },
        tooltip: {
            split: true,
            valueSuffix: ' %'
        },
        plotOptions: {
            area: {
                stacking: 'normal',
                lineColor: '#666666',
                lineWidth: 1,
                marker: {
                    lineWidth: 1,
                    lineColor: '#666666'
                }
            }
        },
        series: [{
            name: 'Persentase',
            data: [67, 89.5, 74]
        } ,/*{
            name: 'Africa',
            data: [106, 107, 111, 133, 221, 767, 1766]
        },*//* {
            name: 'Europe',
            data: [163, 203, 276, 408, 547, 729, 628]
        },*//* {
            name: 'America',
            data: [18, 31, 54, 156, 339, 818, 1201]
        },*//* {
            name: 'Oceania',
            data: [2, 2, 2, 6, 13, 30, 46]
        }*/]
    });
});




</script>




    <script>
         $(document).ready(function(){

           // alert('x');

             $(".cumi").hide();


             $(".cumi_but").click(function(){

                  // alert('x');
                 $(".cumi").toggle();


             })

         });


    </script>





<style>
  .table td {
      text-align: center;   
    }

    .jos{
        text-align: center;

    }

  .cumi_but{

      text-align: center;

  }



</style>

</head>

<body>

<!--<div id="bar" style="min-width:300px; height:400px;margin:0 auto"></div>-->
<!--<div id="bar" style="min-width: 310px; height: 400px; margin: 0 auto"></div>-->
<!--<div id="bar"></div>-->


<br>


  <div id="container" style="height: 400px"></div><br><br>

<button class='cumi_but btn-primary btn-md'>Show</button><br><br>
<div class="cumi">

    <h2>Capaian = (19+1) / (4+3) + 20 = 20/27 * 100% = 74%</h2>

</div>

<br><br>

<div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<!--<div class="jos">
<iframe src="http://www.kokolagroup.com/e-proposal/adminx.php" width="1000" height="800"></iframe>
</div>-->


<!---->
<!--<div class="text-center">-->
<!---->
<!--      <b>List Aplikasi</b>-->
<!--  </div>-->

</body>
</html>