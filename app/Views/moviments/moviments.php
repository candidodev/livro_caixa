<?php
echo $this->extend('templates/default/default'); 
echo $this->section('content'); 
$data=date("Y");
$mes=date("m");
?>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<div class="input-group">
    <a class="btn btn-primary" href="<?php echo base_url() ?>/moviment/add"> Add </a>
</div>
<hr/>
<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Cash Balance</h5>
        <h6 class="card-subtitle mb-2 text-muted">R$<?php echo $cashBalance->input - $cashBalance->output?></h6>
    </div>
</div>
<form>   
<div id="header-moviment">

    <div class="input-group">
        <label class="input-group-text" for="inputGroupSelect01">Year</label>
        <select class="form-select" id="inputGroupSelect01">
            <?php  
                echo "<option value='$data' selected>$data</option>";
                $data=$data-1;
                echo "<option value='$data' >$data</option>";
                $data=$data-1;
                echo "<option value='$data' >$data</option>";
                $data=$data-1;
                echo "<option value='$data' >$data</option>";
            ?>
            
        </select>
    </div>
    <div class="input-group">
        <label class="input-group-text" for="inputGroupSelect01">Month</label>
        <select class="form-select" id="inputGroupSelect01">
            <?php  
                echo "<option value='$mes'>Mes Atual </option>";
            ?>

            <option value="1">Janeiro</option>
            <option value="2">Fevereiro</option>
            <option value="3">Março</option>
            <option value="4">Abril</option>
            <option value="5">Maio</option>
            <option value="6">Junho</option>
            <option value="7">Julho</option>
            <option value="8">Agosto</option>
            <option value="9">Setembro</option>
            <option value="10">Outubro</option>
            <option value="11">Novembro</option>
            <option value="12">Dezembro</option>
        </select>
    </div>
    <div class="input-group">
        <button type="button" class="btn btn-default btn-sm">
        <i class='fas fa-search' style='font-size:36px'></i>
        </button>
    </div>
      
</div>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Description</th>
      <th scope="col">Value</th>
      <th scope="col">Input</th>
      <th scope="col">Output</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    foreach($moviments AS $moviment){
        
        echo "<tr>
        <td>{$moviment['id']}</td>
        <td>{$moviment['date']}</td>
        <td>{$moviment['description']}</td>
        <td>{$moviment['value']}</td>";
        if($moviment['type']=="input"){
            echo "<td><i class='fa fa-check' style='font-size:22px;color:green'></i></td><td>  </td>";
        }else{
            echo "<td>  </td><td> <i class='fa fa-check' style='font-size:22px;color:red'></i> </td>";
        }
        echo "</tr>";
    }
    ?>
  </tbody>
<table>
<?php echo $this->endSection();