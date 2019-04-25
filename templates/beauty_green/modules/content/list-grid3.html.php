<?php  if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<div class="page news">
	<div class="row">
		<div class="col-md-12">
			<h2><?php echo $cat['title']; ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 pb-4">
			<?php
			if($cat['total_page'] > 1)
			{
				?>
				<span class="text text-muted text-justify"><?php echo lang('page').' '.($page+1).' '.lang('of').' '.items($cat['total_page'], 'page');?></span>
				<div class="clearfix"></div>
				<?php
			}
			?>
		</div>
	</div>
	<div class="product-index">
		<div class="row prod">
			<?php
			foreach((array)$cat['list'] as $k => $data)
			{
				$edit_data = (content_posted_permission() && $user->id == $data['created_by']) ? 1 : 0;
				$link = content_link($data['id'], $data['title']);
    		?>
        <div class="col-sm-4 flex-wrap l-prod">
          <div class="img-box value-img" align="center">
          	<?php
          	$image = (!empty($config['thumbnail']) && !empty($data['image'])) ? '<img src="'.content_src($data['image']).'" class="img-responsive img-circle" ratio="1:1" alt="'.$data['title'].'" title="'.$data['title'].'">' : '';
            if(!empty($config['title']))
						{
							if(!empty($config['title_link']))
							{
								?>
								<a href="<?php echo $link;?>" title="<?php echo $data['title'];?>">
									<?php echo $image; ?>
									<h4 class="text-center content_title"><?php echo $data['title'];?></h4>
								</a>
				        <?php
							}else{
								echo $image;
								?>
								<h4 class="text-center content_title"><?php echo $data['title'];?></h4>
								<?php
							}
						}
            ?>
            <p style="line-height: inherit;"><?php echo content_title(nl2br(strip_tags($data['intro'])),20);?></p>
          	
	          <?php echo (!empty($config['read_more'])) ? '<a href="'.$link.'" class="readmore">'.lang('Read more').'</a>' : '';?>
						<?php
						if( !empty($config['created']) || !empty($config['author'] ))
			      {
			        ?>
			        <div>
			          <?php echo (!empty($config['author'])) ? '<span class="text-muted pull-left">'.lang('author').$data['created_by_alias'].'</span>' : '';?>
			          <?php echo (!empty($config['created'])) ? '<span class="text-muted pull-right">'.lang('created').content_date($data['created']).'</span>' : '';?>
			          <div class="clearfix"></div>
			        </div>
			        <?php
			      }
				    if( !empty($config['tag']) )
				    {
				      ?>
				      <div class="text-left">
				        <?php
				        $r = content_category($data['id'], $config['tag_link']);
				        echo lang('Tags').implode(' ', $r);
				        ?>
				      </div>
				      <?php
				    }
				    if(empty($data['revised']))
				    {
				      $config['modified'] = 0;
				    }
				    if(!empty($config['rating']) || !empty($config['modified']) || !empty($edit_data))
				    {
				      ?>
				      <div class="row">
				        <?php
				        if($config['rating'])
				        {
				          echo '<div class="col-md-5">'.rating($data['rating']).'</div>';
				        }
				        if(!empty($edit_data))
				        {
				          ?>
				          <div class="col-md-7 text-right">
				            <?php echo ($config['modified']) ? '<span class="text-muted">'.lang('modified').content_date($data['modified']).'</span>' : '';?>
				            <a href="<?php echo $Bbc->mod['circuit'].'.posted_form&id='.$data['id'];?>" title="<?php echo lang('edit content');?>"><?php echo icon('edit');?></a>
				          </div>
				          <?php
				        } else {
				          echo ($config['modified']) ? '<div class="col-md-7 text-right"><span class="text-muted">'.lang('modified').content_date($data['modified']).'</span></div>' : '';?>
				          <div class="clearfix"></div>
				          <?php
				        }
				        ?>
				      </div>
				      <?php
				    }
				    ?>
				    <br />
          </div>
        </div>
    		<?php
			}
			?>
		</div>
	</div>
	<?php
	echo '<div class="text-center">'.page_list($cat['total'], $config['tot_list'], $page, 'page', $cat['link']).'</div>';
	if (!empty($cat['rss']))
	{
		?>
		<a href="<?php echo $cat['rss'];?>" class="btn btn-warning btn-sm pull-right" title="<?php echo lang('category feed');?>"><?php echo icon('fa-rss-square');?> <?php echo lang('category feed');?></a>
		<?php
	}
	?>
	<div class="clearfix"></div>
</div>