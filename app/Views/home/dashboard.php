<?= $this->extend('templates/default/default') ?>

<?= $this->section('content') ?>

<div style="display:flex;justify-content:space-around">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Input</h5>
            <h6 class="card-subtitle mb-2 text-muted">R$<?php echo $cashBalance->input?></h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Output</h5>
            <h6 class="card-subtitle mb-2 text-muted">R$<?php echo $cashBalance->output?></h6>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Balance</h5>
            <h6 class="card-subtitle mb-2 text-muted">R$<?php echo $cashBalance->input-$cashBalance->output?></h6>
        </div>
    </div>
</div>
<hr/>
<div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        let rows=[
          ['Date', 'input', 'output'],
          <?php
            $rows="";
            foreach($moviments AS $moviment){
                $rows.="['{$moviment->date}',{$moviment->input} ,{$moviment->output}],";
            }
            ?>
         
        ];
        
        var data = google.visualization.arrayToDataTable([
          ['Date', 'input', 'output'],
          <?php  echo substr($rows, 0, -1); ?>
          
        ]);

        var options = {
          title: 'Moviments',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <div id="curve_chart" style="width:90vwpx; height:60vh"></div>
</div>
    
<?= $this->endSection() ?>