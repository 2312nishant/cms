<div class="row">
	<div class="col-md-12">
		<div class="box">
            <div class="box-header">
                <h3 class="box-title">Posts</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            	<?php echo $this->session->flashdata('message');?>
            	<p><a class="btn btn-default" href="<?php echo site_url('admin/posts/add')?>">New post</a>
                <?php if($this->ion_auth->in_group(array('admin','editor-english'))):?>
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                       <!-- <th>Slug</th>-->
                        <th>Published</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php if(!empty($posts)):?>
                    	<?php foreach($posts as $post):?>
		                    <tr>
		                        <td><?php echo $post['id']?></td>
		                        <td><?php echo $post['title']?></td>
		                        <!--<td><?php //echo $post['slug']?></td>-->
                                <td><?php echo $post['published_at']?></td>
                                <td><?php echo $post['username']?></td>
		                        <td><?php echo $post_status[$post['status']]?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/posts/edit/'.$post['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/posts/delete/'.$post['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
                <?php endif;?>
                 <?php if($this->ion_auth->in_group(array('admin','editor-arabic','editor-english'))):?>
                 <br> <span> Arabic Article</span>
                 <table class="table table-bordered">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                       <!-- <th>Slug</th>-->
                        <th>Published</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php if(!empty($posts_arabic)):?>
                    	<?php foreach($posts_arabic as $post):?>
		                    <tr>
		                        <td><?php echo $post['id']?></td>
		                        <td><?php echo $post['title']?></td>
		                        <!--<td><?php //echo $post['slug']?></td>-->
                                <td><?php echo $post['published_at']?></td>
                                <td><?php echo $post['username']?></td>
		                        <td><?php echo $post_status[$post['status']]?></td>
		                        <td>
		                        	<a href="<?php echo site_url('admin/posts/edit/'.$post['id'])?>"><span class="badge bg-green">edit</span></a>
		                        	<a href="<?php echo site_url('admin/posts/delete/'.$post['id'])?>" onclick="return confirm('Are you sure?')"><span class="badge bg-red">delete</span></a>
		                        </td>
		                    </tr>
                    	<?php endforeach;?>
                	<?php else:?>
                		<tr><td colspan="5">No record found</td></tr>
                	<?php endif;?>
                </table>
             <?php endif;?>
            </div><!-- /.box-body -->
            <div class="box-footer clearfix">
                <?php echo $pagination ?>
            </div>
        </div><!-- /.box -->
	</div>
</div>

<script type="text/javascript">
        $(function(){
            $('#language').click(function(){
                $.ajax({
                    type: "POST",
                    url: "deleteAtc.php",
                    data: "id="+elem.attr('data-artid'),
                    dataType:"json",  
                    success: function(data) {
                        if(data.success){
                               elem.hide();
                               $('#message').html(data.message);
                        }
                    }
                });
                //return false;
            });
        });
        </script>