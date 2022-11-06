<div id='msg' style="width:100vw;height:3vh;">
  <?php
    
    if(isset($msgs)){
        foreach($msgs AS $msg){
            echo "<div class='alert alert-{$msg['class']}' role='alert'>";
            echo $msg['msg'];
            echo "</div>";
        }
        unset($msgs);
    }
  ?>  
</div>
<script>
    setTimeout(()=>{document.querySelector('#msg')
    .innerHTML=''},
    3000)
</script>
