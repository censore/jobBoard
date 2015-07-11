<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script>
{literal}
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
		var dataArr = new Array();
		var i = 0;
		data.addColumn('string', 'Title');
		data.addColumn('number', 'Percent');
        {/literal}
        {foreach from=$statistics item=statistic key=key}
       		var total = parseInt('{$statistic.total}');
       		dataArr[i] = ['{$statistic.generalColumn}', total];
       		i++;
        {/foreach}
            
        {literal}

        data.addRows(dataArr);

        var options = {
          title: ''
        };
		if ('{/literal}{$countResult}{literal}' > 0) {
	        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
		}
    }
{/literal}
</script>
<div class="InContent" style="text-align: center;">
{if !$errors  && $statistics}
<h3>
	Sales per Period by 
	{if $filter == 'sid'}
		Product
	{elseif $filter == 'Location_Country'}
		Country
	{elseif $filter == 'Location_State'}
		State
	{elseif $filter == 'Location_City'}
		City
	{else}
		{foreach from=$userGroups item=userGroup}
			{assign var=userGroupId value=$userGroup.id}
			{assign var=filterValue value="userGroup_$userGroupId"}
			{if $filter == $filterValue}
				{$userGroup.caption}
			{/if}
		{/foreach}
	{/if}
</h3>
<div>
	{if $periodView.from}
		from  {tr type="date"}{$periodView.from}{/tr}
	{/if}
	{if $periodView.to}
		to  {tr type="date"}{$periodView.to}{/tr}
	{/if}
</div>
<table align="center" style="font-size: 12px; text-align: left;">
	<thead>
		<tr>
			<th>{$columnTitle}</th>
			{if $filter == 'sid'}
			<th>Product Type</th>
			{/if}
			<th>Units Sold</th>
			<th>Income</th>
			<th>%</th>
		</tr>
	</thead>
	<tbody>
		{foreach from=$statistics item=statistic key=key}
			<tr>
				<td>
					<strong>{$statistic.generalColumn}</strong>
				</td>
				{if $filter == 'sid'}
					<td>{$statistic.product_type}</td>
				{/if}
				<td>{$statistic.units_sold}</td>
				<td>
					{capture assign="statisticTotal"}{tr type="float"}{$statistic.total}{/tr}{/capture}
					{currencyFormat amount=$statisticTotal}
				</td>
				<td>{$statistic.percent}%</td>
			</tr>
		{/foreach}
	</tbody>
</table>
{/if}
<div class="clr"><br/><br/></div>
<table align="center" style="border: 0px!important;">
	<tr><td style="border: 0px!important;"><div id="chart_div" style="width: 600px; height: 400px;"></div></td></tr>
	<tr><td style="border: 0px!important; padding-left:50px;"><input type=button value="[[Print]]" onClick="this.style.display='none';window.print();"></td></tr>
</table>
</div>