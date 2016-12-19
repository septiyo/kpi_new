<html>
<head>
<meta charset="utf-8">

<script>
   $(document).ready(function(){
	   
	   //alert('x');
	   $("jos").hide();
	   $("jos2").hide();
	   $("jos3").hide();
	   $("jos4").hide();
	   $("jos5").hide();
	   $("jos6").hide();
	   $("jos7").hide();



	   
	   
	   $("#JOS1").click(function(){
		   $("jos").toggle();
	   });
	   
	   $("#JOS2").click(function(){
		   $("jos2").toggle();
	   });
	   
	   $("#JOS3").click(function(){
		   $("jos3").toggle();
	   });
	   
	   $("#JOS4").click(function(){
		   $("jos4").toggle();
	   });
       $("#JOS5").click(function(){
		   $("jos5").toggle();
	   });
       $("#JOS6").click(function(){
		   $("jos6").toggle();
	   });
	   
    
   });

</script>
<style>
  .hidden{
       display:none;
    }
	
	.table td {
      text-align: center;   
    }
</style>

</head>
<body>

<h2>Indikator KPI 2016 - E-Apps</h2>
<div class="widget-content nopadding">
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Indikator</th>
                  <th>Now</th>
                  <th>Target</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr class="odd gradeX">
                  <td class="center">1</td>
                  <td>Capaian Pembuatan Aplikasi</td>
                  <td class="center">61%</td>
                  <td class="center">90%</td>
                  <td>
                      <button id='JOS1'>Show</button>
                       <jos>
                          <b>(Jumlah Aplikasi yg Selesai Di Kerjakan / Jumlah Total Aplikasi)x100%</b>
                       </jos>
                  </td>
                </tr>
                <tr class="odd gradeX">
                  <td>2</td>
                  <td>Laporan Implementasi Aplikasi</td>
                  <td class="center">79 %</td>
                  <td class="center">100 %</td>
                  <td>
                      <button id='JOS2'>Show</button>
                       <jos2>
                          <b>(Jumlah Aplikasi yg Telah Diimplementasi / Jumlah Aplikasi yg Telah Selesai)x100%</b>
                       </jos2>
                  </td>
                </tr>
                <tr class="odd gradeX">
                  <td>3</td>
                  <td>Complaint</td>
                  <td class="center">16 Kasus</td>
                  <td class="center">30 Kasus</td>
                  <td>
                      <button id='JOS3'>Show</button>
                       <jos3>
                          <b>Jumlah Kasus</b>
                       </jos3>
                  </td>
                  
                </tr>
                <tr class="odd gradeX">
                  <td>4</td>
                  <td>Audit 5 R</td>
                  <td class="center">94</td>
                  <td class="center">Minimal 90</td>
                  <td>
                      <button id='JOS4'>Show</button>
                       <jos4>
                          <b>Minimal nilai audit 90</b>
                       </jos4>
                  </td>
                </tr>
                <tr class="odd gradeX">
                  <td>5</td>
                  <td>Capaian Training</td>
                  <td class="center">Capain Training Bulan September 100%</td>
                  <td class="center">100% sesuai jadwal</td>
                  <td>
                      <button id='JOS5'>Show</button>
                       <jos5>
                          <b>% Pemenuhan jumlah kehadiran training</b>
                       </jos5>
                  </td>
                </tr>
                <tr class="odd gradeX">
                  <td>6</td>
                  <td>Struktur Organisasi</td>
                  <td class="center">-</td>
                  <td class="center">Update 3 bulan sekali</td>
                  <td>
                      <button id='JOS6'>Show</button>
                       <jos6>
                          <b> Struktur Organisasi yg di TTD Managing Director</b>
                       </jos6>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
</body>
</html>










