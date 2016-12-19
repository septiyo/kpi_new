<!doctype html>
<html>
<head>
<meta charset="utf-8">

<!--<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>-->


<script src="chart/highcharts.js"></script>
<!--<script src="chart/highcharts-3d.js"></script>-->
<script src="chart/exporting.js"></script>

<script>
  $(function () {
    $('#container').highcharts({
        title: {
            text: 'Nilai 5 R 2016',
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
            name: 'Nilai',
            data: [91, 94.5, 94.5, 92, 94.5, 91.5, 92.5, 94.5, 94, 93.5, 95]
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



</head>

<body>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

</body>
</html>