<div id="main-header">
	<div id="logo"><a href="/"><img src="<?php print $logo; ?>" /></a></div>	
	<?php print render($page['header']); ?>
</div>
	
<div id="container" class="clearfix">
	<?php if ($messages): ?>
		<div id="messages">
			<?php print $messages; ?>
		</div>
	<?php endif; ?>
	
		
	<?php if ($tabs): ?>
		<div class="tabs">
			<?php print render($tabs); ?>
		</div>
	<?php endif; ?>
	
  
	<div id="main-content">
		<?php if ($title): ?>
			<h1 class="title"><?php print render($title); ?></h1>
		<?php endif; ?>
		<?php print render($page['content']); ?>
	</div>
		
</div>

<div id="footer" class="clearfix">
	
</div>





