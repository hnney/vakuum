<?php $this->title='比赛列表' ?>
<?php $this->display('header.php') ?>

<table border="1">
	<tr>
		<td>编号</td>
		<td>名称</td>
		<td>简介</td>
		<td></td>
	</tr>
<?php foreach($this->list->getList() as $contest): ?>
	<?php $contest_id = $contest->getID() ?>
	<?php $contest_config = $contest->getConfig() ?>
	<?php $contest_name = $contest_config->getName() ?>
	<?php $contest_desc = $contest_config->getDesc() ?>
	<?php $contest_path = $this->locator->getURL('contest/entry').'/'. $contest_id ?>
	<tr>
		<td><?php echo $contest_id?></td>
		<td><?php echo $this->escape($contest_name) ?></td>
		<td><?php echo $this->escape($contest_desc) ?></td>
		<td>
			<a href="<?php echo $contest_path ?>">进入比赛</a>
		</td>
	</tr>
<?php endforeach?>
</table>

<div style="padding-top: 1em">
<?php echo list_navigation::show($this->list->getPageCount(),$this->list->getCurrentPage()) ?>
</div>

<?php $this->display('footer.php') ?>
