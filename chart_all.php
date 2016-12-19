<!DOCTYPE html>
<html lang="en">
<head>


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
              
<!--<script src="https://code.highcharts.com/highcharts.js"></script>-->
<!--<script src="https://code.highcharts.com/modules/exporting.js"></script>-->
<script src="chart/highcharts.js"></script>
<script src="chart/exporting.js"></script>

<script>
$(document).ready(function(){
	//alert('x');
	
	 
    $('.jos').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Chart Request Software / Departement v Develop v Penggunaan'
        },
        subtitle: {
            text: 'Source: E-Apps Department'
        },
        xAxis: [{
            categories: ['RND', 'MAINTENANCE', 'SALES LOGISTIC', 'HR SALES', 'FINANCE', 'QA',
                'PRODUKSI', 'PERSONALIA-LEGAL', 'TAC-GA', 'PURCHASING', 'EXPORT', 'SPECIAL REQUEST'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            title: {
                text: 'Digunakan User',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            opposite: true

        }, { // Secondary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Request',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            }

        }, { // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                text: 'Develop',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
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
            x: 80,
            verticalAlign: 'top',
            y: 55,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Request',
            type: 'column',
            yAxis: 1,
            data: [2, 2, 3, 3, 1, 2, 2, 1, 2, 1, 2, 5],
            tooltip: {
                valueSuffix: ''
            }

        }, {
            name: 'Develop',
            type: 'spline',
            yAxis: 2,
            data: [2,2,4,3,1,2,2,1,1,1,1,5],
            marker: {
                enabled: false
            },
            dashStyle: 'shortdot',
            tooltip: {
                valueSuffix: ''
            }

        }, {
            name: 'Implementasi',
            type: 'spline',
            data: [2,2,5,3,1,3,3,2,2,1,2,5],
            tooltip: {
                valueSuffix: ''
            }
        }]
 
});

});
  



        
        
        </script>


</head>
<body>
   
	
    <div class="jos" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
     

</body>
</html>






