<?php
echo $this->extend('templates/default/default'); 
echo $this->section('content'); 
?>
    <div id="form-moviment">
        <form action="<?php echo base_url() ?>/moviment/save" method="POST">
            <input type="hidden" name="moviment[id_moviment]" />
            <div class="input-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="date" name="moviment[date]" class="form-control" />
            </div>
            <div class="input-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Description</label>
                <input type="text" name="moviment[description]" class="form-control"  placeholder="" />
            </div>
            <div class="input-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Value</label>
                <span class="input-group-text" id="basic-addon1">R$</span>
                <input type="text" name="moviment[value]" class="form-control"  placeholder="" />
            </div>
            <div class="input-group mb-3">
                <label for="exampleFormControlInput1" class="form-label">Type</label>
                <select name="moviment[type]">
                    <option></option>
                    <option value="input">In</option>
                    <option value="output">Out</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <input type="submit" name="save_moviment" value="Save" />
            </div>
        </form>
    </div>
<?php echo $this->endSection();