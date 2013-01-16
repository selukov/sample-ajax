<div id="comments">  <!-- главное ID-->
	<?php foreach($comments as $comment): ?> 
	<div class="comment">
		<p><b><?php echo $comment['Comment']['title'];?></b></p> 
		<p><?php echo $comment['Comment']['body'];?></p> 
	</div> 
	<?php endforeach;?>
	<?php echo $this->Form->create('Comment',array('action'=>'add','onSubmit'=>'return false;'));
	      echo $this->Form->input('Comment.title');
		  echo $this->Form->input('Comment.body');
		  echo $this->Form->input('Comment.post_id',array('type'=>'hidden','value'=>$comment['Comment']['post_id']));
		  echo $this->Js->submit('Add Comment',array('url'=>'/comments/add_ajax','update'=>'#comments','evalScripts'=>'true'));
		  echo $this->Js->writeBuffer(); 
		  echo $this->Form->end(); ?>		 
</div>