<section id="main" class="column">
<?php if(isset($msg)):?>
<h4 class="alert_warning" id="msg" style="color: #BB6616;text-indent: 32px;font-size: 14px;line-height: 28px;" >
<style type="text/css">
a:hover {text-decoration: underline }
</style> 
	 <?php echo lang('plg_get_keysecret1')?><a href="http://dev.cobub.com/users/index.php?/help/userkey" target="_blank"><?php echo lang('plg_get_keysecret2')?></a><?php echo lang('plg_get_keysecret3')?>
	 <?php echo lang('plg_get_keysecret4')?><?php echo lang('plg_get_keysecret5')?>
	 <?php echo lang('plg_get_keysecret6')?><a href="http://dev.cobub.com/users/index.php?/help/userkey" target="_blank"><?php echo lang('plg_get_keysecret7')?></a></h4>
<?php endif;?>

	<!-- end of show user key&secret-->
	<?php if(isset($puserkey) && isset($pusersecret)): ?>
	<article class="module width_full">
		<header>
		    <style type="text/css">
				 a:hover {text-decoration: underline }
		    </style>
			<h3 class="tabs_involved"><?php echo lang('plg_pluginlist') ?></h3>
			<ul class="tabs">
				<li><a href="#tab1"><?php echo lang('plg_myplugins') ?></a></li>
				<li><a href="#tab2"><?php echo lang('plg_usable_plugins') ?></a></li>
			</ul>
		</header>
		<div class="tab_container">
			<div id="tab1" class="tab_content">
				<table class="tablesorter" cellspacing="0">
					<thead>
						<tr>
							<th width="20%"><?php echo lang('plg_name') ?></th>
							<th width="80%"><?php echo lang('plg_description') ?></th>
						</tr>
					</thead>
					<tbody id="myplug">
					<?php if(isset($myPlugins) && count($myPlugins)>0):?>
						<?php foreach($myPlugins as $plugin){?>
						<?php if(isset($plugin['new_version'])): ?>
						<tr>
							<td colspan="2"><p style="font-size: 14px;"><?php echo $plugin['name'] ?><?php echo lang('v_plugins_new_version')?><?php echo lang('v_plugins_version')?><?php echo $plugin['new_version'] ?></p></td>
						</tr>
						<?php endif; ?>
						<tr>
							<td ><p style="font-weight: bold;font-size: 14px;"><?php echo $plugin['name']?></p><br />&nbsp
						<?php if($plugin['status'] == 0):?>
						<a style="color:green"
								href="<?php echo site_url().'/manage/pluginlist/activePlug/'.$plugin['identifier'];?>"><?php echo lang('v_plugins_active')?></a>
						<?php else:?>
						<a style="color:red"
								href="<?php echo site_url().'/manage/pluginlist/disablePlug/'.$plugin['identifier'];?>" ><?php echo lang('v_plugins_forbidden')?></a>
						<?php endif;?>
						</td>
							<td><p style="font:14px arial, sans-serif;"><?php echo $plugin['description']?></p><br /><?php echo lang('v_plugins_version')?><?php echo $plugin['version']?>&nbsp &nbsp|&nbsp &nbsp<?php echo lang('v_plugins_provider')?><?php echo $plugin['provider']?>&nbsp &nbsp |&nbsp &nbsp<a href="<?php echo $plugin['detail']?>" target="_blank"><?php echo lang('plg_use_instruct')?></a>&nbsp &nbsp|&nbsp &nbsp<?php echo $plugin['date']?></td>
						</tr>
						<?php }?>
					<?php endif;?>
					</tbody>
				</table>
			</div>
			<!-- end of #tab1 -->

			<div id="tab2" class="tab_content">
					<table class="tablesorter" cellspacing="0">
						<thead>
							<tr>
								<th width="20%"><?php echo lang('plg_name') ?></th>
								<th width="80%"><?php echo lang('plg_description') ?></th>
							</tr>
						</thead>
						<tbody id="allplug">
						<?php if(isset($allplugins) && count($allplugins)>0):?>
						<?php foreach ($allplugins as $row) {?>
						<tr>
							<td><p style="font-weight: bold;font-size: 14px;"><?php echo $row->plugin_name?></p></td>
							<td><p style="font:14px arial, sans-serif;"><?php echo $row->plugin_describe?></p><br /><?php echo lang('v_plugins_version')?><?php echo $row->plugin_version?>&nbsp &nbsp|&nbsp &nbsp<?php echo lang('v_plugins_provider')?><?php echo $row->plugin_provider?>&nbsp &nbsp|&nbsp &nbsp<a href="<?php echo $row->plugin_detail?>" target="_blank"><?php echo lang('head_plugin_m')?></a>&nbsp &nbsp|&nbsp &nbsp<?php echo $row->plugin_upload_date?></td>
						</tr>
						<?php }?>
					<?php endif;?>
						
						</tbody>
					</table>
				<!-- end of post new article -->
			</div>
			<!-- end of #tab5 -->
		</div>
		<!-- end of .tab_container -->
	</article>
	<?php endif;?>
