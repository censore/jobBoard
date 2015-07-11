{foreach from=$errors item=error}
	<p class="error">{$error}</p>
{foreachelse}

	{literal}
	<style>
	.package_text_diff {
		background-color: #FAFAFA;
		border: 1px solid #CCCCCC;
		border-collapse: collapse;
		width: 98%;
	}

	.inner_table {
		width: 480px;
		height: 600px;
		overflow: scroll;
	}

	.package_text_diff .package_text_diff_line {
		background-color: #EEEEEE;
		border: 1px solid #D7D7D7;
		color: #999999;
		font-family: verdana,arial,helvetica,"sans-serif";
		font-size: 0.8em;
		padding-right: 3px;
		text-align: right;
		width: 2%;
	}

	.text_diff_op_line.text_diff_op_change .package_text_diff_left,
	.text_diff_op_line.text_diff_op_delete .package_text_diff_left {
		background: none repeat scroll 0 0 #FFCCCC;
	}

	.text_diff_op_line.text_diff_op_add .package_text_diff_right,
	.text_diff_op_line.text_diff_op_change .package_text_diff_right {
		background: none repeat scroll 0 0 #CCFFCC;
	}

	</style>
	{/literal}

		<h3>Left: <span style="color: gray;">{$current_file}</span></h3>
		<h3>Right: <span style="color: gray;">{$update_file}</span></h3>

	<br />
	<br />

	{$diffTbl}

{/foreach}

<script>
	{literal}
	$(function() {
		$(".inner_table").scroll(function() {
			var scrollTopValue = $(this).scrollTop();
			var scrollLeftValue = $(this).scrollLeft();
			$(".inner_table").scrollTop(scrollTopValue);
			$(".inner_table").scrollLeft(scrollLeftValue);
		});
	});
	{/literal}
</script>