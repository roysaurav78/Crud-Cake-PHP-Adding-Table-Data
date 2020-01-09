<?php echo $this->Form->Create($posts);?>
<div class="row">
<?php echo $this->Flash->render('message');?>
<h2>View All Posts</h2>
<?php echo $this->Html->link('ADD NEW BOOK',['action'=>'add'],['class'=>'btn bt-primary']);?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th> 
    </tr>
  </thead>
  <tbody>
  <?php if(!empty($posts)): ?>
  <?php foreach($posts as $post):?>
    <tr class="table-active">
      <th scope="row">Active</th>
      <td><?php echo $post->title;?> </td>
      <td><?php echo $post->description;?> 
      </td>
      <td>
      <?php echo $this->html->link('View',['action'=>'view', $post->id], ['class'=>'btn btn-primary']);?>
       <?php echo $this->html->link('Edit',['action'=>'edit', $post->id], ['class'=>'btn btn-success']);?>
       <?php echo $this->Form->postLink('Delete',['action'=>'delete', $post->id], ['class'=>'btn btn-danger', 'confirm' =>'Are you sure?']);?>
      </td>
    </tr>
    <?php endforeach;?>
    <?php else:?>
    <td>No Record Found!</td>
    <?php endif;?>
  </tbody>
</table> 
</div>