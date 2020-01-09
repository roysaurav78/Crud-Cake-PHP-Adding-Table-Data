<?php echo $this->Form->Create($post);?>
<fieldset>
    <legend>Legend</legend>
    <div class="form-group">
      <div class="col-sm-10">
      <?php echo $this->Form->input('title',['class'=>'form-control','Placeholder'=>'Title']);?>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-sm-10">
      <?php echo $this->Form->input('description',['class'=>'form-control','Description'=>'Title']);?>
      </div>
    </div>
    
    <div class ="form-group">
    <div class ="col-lg-10 col-lg-offset-2">
    <?php echo $this->Form -> button(__('Add Post'), ['class'=>'btn btn-primary']);?>
    <?php echo $this->html->link('Back', ['action'=>'index'], ['class'=>'btn btn-primary']);?>
    </div>
    </div>
  </fieldset>
  <?php echo $this->Form->end();?>