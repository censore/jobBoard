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
			{if $filter == 'subscribed'}
				[[Number of Guest "{$listingTypeID}" Alerts subscribed per Period for]]
			{elseif $filter == 'sent'}
				[[Number of Guest "{$listingTypeID}" Alerts sent per Period]]
			{/if}
		</h3>
		<div>
			{if $periodView.from}
				[[from]]  {tr type="date"}{$periodView.from}{/tr}
			{/if}
			{if $periodView.to}
				[[to]]  {tr type="date"}{$periodView.to}{/tr}
			{/if}
		</div>
	<table  align="center" style="font-size: 12px; text-align: left;">
		<thead>
			<tr>
                <th>[[{$columnTitle}]]</th>
                <th>[[Total]]</th>
                <th>%</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$statistics item=statistic key=key}
				<tr>
					<td><strong>{$statistic.generalColumn}</strong></td>
					<td>{$statistic.total}</td>
					<td>{$statistic.percent}%</td>
				</tr>
			{/foreach}
		</tbody>
	</table>
	{/if}
	<div class="clr"><br/><br/></div>
	<table align="center" style="border: 0 !important;">
		<tr><td style="border: 0 !important;"><div id="chart_div" style="width: 700px; height: 500px;"></div></td></tr>
		<tr><td style="border: 0 !important;"><input type=button value="[[Print]]" onClick="this.style.display='none';window.print();"></td></tr>
	</table>
</div>