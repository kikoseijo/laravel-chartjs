@include('autoload::autoload')

<!--suppress BadExpressionStatementJS -->
<script type="text/javascript">

    /**
     * This function is responsible for loading the window.load and instantiate our chart.
     * The parameters of data and options are passed directly to avoid conflict with the
     * variable names when using more than one report.
     */
    addLoadEvent(function() {
        var labels = []; // graphic label array
        var infor = []; // graphic data array
        // incremeting labels array
        <?php foreach($labels as $label): ?>
        labels.push("<?php echo $label; ?>");
        <?php endforeach; ?>
        <?php $i=0; ?>
		var data = {
			labels: labels,
			datasets: [
				<?php foreach($dataset as $d): ?>
				{	
					label: "<?php echo $d['label']; ?>",
					fill: false,
					lineTension: 0.1,
					backgroundColor: "<?php echo $colours[$i]; ?>",
					borderColor: "<?php echo $colours[$i+6]; ?>",
					borderCapStyle: 'butt',
					borderDash: [],
					borderDashOffset: 0.0,
					borderJoinStyle: 'miter',
					pointBorderColor: "<?php echo $colours[$i+6]; ?>",
					pointBackgroundColor: "#fff",
					pointBorderWidth: 3,
					pointHoverRadius: 5,
					pointHoverBackgroundColor: "<?php echo $colours[$i+6]; ?>",
					pointHoverBorderColor: "<?php echo $colours[$i+6]; ?>",
					pointHoverBorderWidth: 2,
					pointRadius: 5,
					pointHitRadius: 10,
					data: <?php echo json_encode($d['data']); ?>,
					spanGaps: false,
				},
				<?php $i++; ?>
				<?php endforeach; ?>
			]
		};
        var ctx = document.getElementById("<?php echo $element; ?>").getContext("2d");
		window.myLine = new Chart(ctx, {
			type: 'line',
			data: data
		});
		//document.getElementById('js-legend-line').innerHTML = myLine.generateLegend();
		// End options section

    });
</script>




