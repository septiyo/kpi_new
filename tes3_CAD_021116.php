<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>-->


<script src="chart/highcharts.js"></script>
<script src="chart/highcharts-3d.js"></script>
<script src="chart/exporting.js"></script>

<script>
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Diagram Jumlah Complain Bulan Agustus-September'
        },
        subtitle: {
            text: 'Source: <a href="https://septiyo.com">E-Apps</a>'
        },
        xAxis: {
            categories: ['RND', 'MAINTENANCE','SALES LOGISTIC', 'HR SALES', 'FINANCE','QA','PRODUKSI','PERSONALIA-LEGAL', 'TAC-GA','PURCHASING','EXPORT'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Complain dari Department',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' Qty'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [
		{
            name: 'Complain',
            data: [2, 0, 6, 0, 0, 5, 0, 3, 0, 0, 0]
            },
			/*{
            name: 'Year 1900',
            data: [133, 156, 947, 408, 6]
             },
			{
            name: 'Year 2012',
            data: [1052, 954, 4250, 740, 38]*/
        //}
		]
    });
});

</script>


</head>

<body>

<div id="container" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>

</body>
</html>