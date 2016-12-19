<html>

   <head>
   
<script src="chart/highcharts.js"></script>
<!--<script src="chart/highcharts-3d.js"></script>-->
<script src="chart/exporting.js"></script>
     <style>
       .table td{
           text-align: center;

       }
         h2{

            text-align: center;
         }
		 h3{

            text-align: center;
         }
		 .jos{
			 
			 text-align: center;
			 
		 }

     </style>
	 
	 
	 <script>
	   $(document).ready(function(){
	       // $('.jos').fadeOut(500).fadeIn(500, blink); 
		   
		   	 (function blink() { 
				  $('.jos').fadeOut(500).fadeIn(500, blink); 
				})();
		   
	   });
	 
	 
	 /*grafik 2*/
$(function () {
    Highcharts.chart('container2', {
        title: {
            text: 'Grafik / 3 Bulan',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: E-Apps',
            x: -20
        },
        xAxis: {
            categories: ['September', 'October', 'November']
        },
        yAxis: {
            title: {
                text: 'Prosentase (%)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '%'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Training',
            data: [47.6,73,91.4]
        }, /*{
            name: 'New York',
            data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
        }, {
            name: 'Berlin',
            data: [-0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }*/]
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
	 
	 



   </head>



<h2>Capaian Training E-Apps Department</h2><br><br>
<h3>Persen Kehadiran Training Bulan September = 100 %</h3>

<div class="widget-content nopadding">
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>POSISI</th>
            <th>JUMLAH</th>
            <th>JUMLAH TNA</th>
            <th>TOTAL</th>
<!--            <th>Keterangan</th>-->
        </tr>
        </thead>
        <tbody>
        <tr class="odd gradeX">
            <td class="center">Spv</td>
            <td>1</td>
            <td>10</td>
            <td>10</td>

        </tr>
        <tr class="odd gradeX">
            <td class="center">Staff</td>
            <td>6</td>
            <td>10</td>
            <td>60</td>

        </tr>
        <tfoot>
        <tr class="odd gradeX">
            <td colspan="3" class="center">Total</td>
<!--            <td>6</td>-->
<!--            <td>10</td>-->
            <td>70</td>

        </tr>

        </tfoot>

        </tbody>
    </table>

    <br><br>

    <h2>Riwayat Training</h2>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Real</th>
        </tr>
        </thead>

        <tbody>
        <tr class="odd gradeX">
            <td>Septiyo</td>
            <td>10</td>

        </tr>
        <tr class="odd gradeX">
            <td>Fahmi</td>
            <td>9</td>

        </tr>
        <tr class="odd gradeX">
            <td>Zanur</td>
            <td>9</td>

        </tr>
        <tr class="odd gradeX">
            <td>Joko</td>
            <td>9</td>

        </tr>
        <tr class="odd gradeX">
            <td>Wanto</td>
            <td>9</td>

        </tr>
        <tr class="odd gradeX">
            <td>Suryo</td>
            <td>9</td>

        </tr>
        <tr class="odd gradeX">
            <td>Putra</td>
            <td>9</td>

        </tr>

         <tfoot>
	   
			<tr class="odd gradeX">
				<td><b>Total</b></td>
				<td><b>64</b></td>

			</tr>
 
        </tfoot>

        </tbody>
    </table>
	
	<div class='jos'>
	    64/70 * 100% = <blink><h1>91.4%</h1></blink>
	</div>
    
    
    <br>
    
      <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    
    
	

</div>

</html>