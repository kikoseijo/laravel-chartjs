@include('autoload::autoload')

<!--suppress BadExpressionStatementJS -->
<script type="text/javascript">

    addLoadEvent(function() {
        var <?php echo $element; ?> = document.getElementById("<?php echo $element; ?>").getContext("2d");
		var data = {
			labels: [
				"空头",
				"多头"
			],
			datasets: [
				{
					data: [312, 50],
					
					backgroundColor: [
						"<?php echo $colours[0]['colour']; ?>",
						"<?php echo $colours[1]['colour']; ?>",
						"<?php echo $colours[2]['colour']; ?>"
					],
					hoverBackgroundColor: [
						"<?php echo $colours[0]['colour']; ?>",
						"<?php echo $colours[1]['colour']; ?>",
						"<?php echo $colours[2]['colour']; ?>"
					]
				}]
		};
		var PizzaChart = new Chart(PieChart,{
			type: 'pie',
			data:data
		});

		// End options section
		//document.getElementById('js-legend-pie').innerHTML = PizzaChart.generateLegend();
    });
</script>