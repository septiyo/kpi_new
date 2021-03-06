<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->

<!--<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
              -->


<script src="chart/highcharts.js"></script>
<script src="chart/highcharts-3d.js"></script>
<script src="chart/exporting.js"></script>


<script>
$(document).ready(function(){
	//alert('x');

});

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
            text: 'Aplikasi M-Check'
        },
        subtitle: {
            text: 'Source: By E-Apps'
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
                ['Digunakan', 100],
                //['Error', 1],
                //['Upgrade', 1],
     
            ]
        }]
    });
});

/**************************/
$(function () {
    $('#container2').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Aplikasi 5R'
        },
        subtitle: {
            text: 'Source: By E-Apps'
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
                ['Trial', 70],
                //['Error', 1],
                ['Develop', 30],
     
            ]
        }]
    });
});

/**************************/
$(function () {
    $('#container3').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Aplikasi TSR'
        },
        subtitle: {
            text: 'Source: By E-Apps'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Qty',
            data: [
                ['Digunakan', 1],
                ['Error', 1],
                ['Upgrade', 1],
				['Develop', 5],
     
            ]
        }]
    });
});











/*theme*/
// Load the fonts
Highcharts.createElement('link', {
	href: 'https://fonts.googleapis.com/css?family=Signika:400,700',
	rel: 'stylesheet',
	type: 'text/css'
}, null, document.getElementsByTagName('head')[0]);

// Add the background image to the container
Highcharts.wrap(Highcharts.Chart.prototype, 'getContainer', function (proceed) {
	proceed.call(this);
	this.container.style.background = 'url(http://www.highcharts.com/samples/graphics/sand.png)';
});


Highcharts.theme = {
	colors: ["#f45b5b", "#8085e9", "#8d4654", "#7798BF", "#aaeeee", "#ff0066", "#eeaaee",
		"#55BF3B", "#DF5353", "#7798BF", "#aaeeee"],
	chart: {
		backgroundColor: null,
		style: {
			fontFamily: "Signika, serif"
		}
	},
	title: {
		style: {
			color: 'black',
			fontSize: '16px',
			fontWeight: 'bold'
		}
	},
	subtitle: {
		style: {
			color: 'black'
		}
	},
	tooltip: {
		borderWidth: 0
	},
	legend: {
		itemStyle: {
			fontWeight: 'bold',
			fontSize: '13px'
		}
	},
	xAxis: {
		labels: {
			style: {
				color: '#6e6e70'
			}
		}
	},
	yAxis: {
		labels: {
			style: {

				color: '#6e6e70'
			}
		}
	},
	plotOptions: {
		series: {
			shadow: true
		},
		candlestick: {
			lineColor: '#404048'
		},
		map: {
			shadow: false
		}
	},

	// Highstock specific
	navigator: {
		xAxis: {
			gridLineColor: '#D0D0D8'
		}
	},
	rangeSelector: {
		buttonTheme: {
			fill: 'white',
			stroke: '#C0C0C8',
			'stroke-width': 1,
			states: {
				select: {
					fill: '#D0D0D8'
				}
			}
		}
	},
	scrollbar: {
		trackBorderColor: '#C0C0C8'
	},

	// General
	background2: '#E0E0E8'

};

// Apply the theme
Highcharts.setOptions(Highcharts.theme);

		
		   

        
        
        </script>


</head>
<body>


<div class="text-center">  
   <!-- <img src="logo.png">-->
    <h4>Chart Tingkat Error dalam 30 hari terakhir (TAC-GA)</h4><br><br>
     <br>
      <div class="span5">
        <div class="widget-box">   
            <div id="container" style="height: 400px"></div>
        </div>
        </div>
        <div class="span5">
        <div class="widget-box">   
            <div id="container2" style="height: 400px"></div>
        </div>
        </div>
       <!-- <div class="span4">
        <div class="widget-box">   
            <div id="container3" style="height: 400px"></div>
        </div>
        </div>-->
    <!-- <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i></span>
            <h5>Error / Bug</h5>
          </div>
          <div class="widget-content">Aplikasi C-App / C-App2 
           <br><br>
           
           C-App, dan C-App2 berjalan dengan Baik, kendala hanya tedapat di Perangkat. kadang Lemot dan Lain-lain bisa ditanggulangi dengan cara Di Restart atau DI Reset. Begitu juga dengan Jaringannya. Walau tergolong aplikasi lama, C-APP dan C-APP2 tetap diUpgrade secara berkala.
           
           Untuk Aplikasi IO-Goods Android tergolong aplikasi baru, sudah berjalan di security UNimos dan MGFI, hanya terdapat Bug-bug kecil dan bisa ditangani setelah ada laporan.<br><br>

          
          <b>Corrective Action:</b><br><br>
         Menangani Bug Program dan Upgrade yang ada.
          
           </div>
        </div>
      </div>-->
      
        <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i></span>
            <h5>Error / Bug</h5>
          </div>
          <div class="widget-content">Aplikasi M-Check
           <br><br>
           
           Aplikasi ini sebenarnya digunakan memantau hasil Kerja secara bersama-sama. Misal untuk ceklist kebersihan area tertentu. Lalu User di area tersebut bisa ikut menilai hasil perkerjaan orang lain dengan memberikan Like. (10.3.3.88/m-check).
           hanya 1 orang saja yg menggunakan Program ini, yaitu Pak Slamet.<br><br>
           
           
           Untuk Aplikasi 5 R, ini nantinya akan digunakan untuk Mereplace Penilaian 5R yg sekarang ini menggunakan Manual.
           
           <br><br>

          
          <b>Corrective Action:</b><br><br>
         Menangani Bug Program dan Upgrade yang ada.
          
           </div>
        </div>
      </div>
        
 </div><!--end text-center-->   

     
    
  </div>
</body>
</html>
