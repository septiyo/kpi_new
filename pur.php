<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />



<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
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
            text: 'Aplikasi E-Supplier'
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
                ['Digunakan', 60],
                //['Error', 10],
                ['Upgrade',40],
 
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
    <h4>Chart Tingkat Error dalam 30 hari terakhir (PROCUREMENT)</h4><br><br>
     Aplikasi E-Suplier (Penawaran Online) <br>
      <div class="span6">
        <div class="widget-box">   
<!--<div style="width: 600px; height: 400px;">-->
    <div id="container" style="height: 400px"></div>
    <!--<div id="container-speed" style="width: 300px; height: 200px; float: left"></div>-->
    <!--<div id="container-rpm" style="width: 300px; height: 200px; float: left"></div>-->
<!--</div>--><!--end width-->
</div>
</div>
     <div class="span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-list"></i> </span>
            <h5>Error / Bug</h5>
          </div>
          <div class="widget-content"> Aplikasi ini Online, digunakan untuk supplier sebelum datang menemui Procurement, dia harus mengisi dulu Form yg ada. Sehingga bisa menghemat waktu. Lalu Form yg diisi akan dikirimkan  melalui Email<br><br>
          
          Aplikasi ini setelah di Upgrade mempunyai fitur me-link-kan antar Departement seperti Procurement-RND-KAHI-HACCAP-MR-MD untuk persetujuan Spec barang.<br><br>
          
          
          
          <b>Corrective Action:</b><br><br>
          Aplikasi ini baru memasuki Tahap Trial, jadi belum diketahui mempunya Bug apa.
          
           </div>
        </div>
      </div>
        
 </div><!--end text-center-->   

     
    
  </body>
</html>
