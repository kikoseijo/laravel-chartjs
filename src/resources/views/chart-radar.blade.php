@include('autoload::autoload')

<!--suppress BadExpressionStatementJS -->
<script type="text/javascript">

    var label = []; // graphic label array
    var infor = []; // graphic data array

    // incremeting labels array
    <?php foreach($labels as $label): ?>
        label.push("<?php echo $label; ?>");
    <?php endforeach; ?>


    /**
     * This function is responsible for loading the window.load and instantiate our chart.
     * The parameters of data and options are passed directly to avoid conflict with the
     * variable names when using more than one report.
     */
    addLoadEvent(function() {
        var <?php echo $element; ?> = document.getElementById("<?php echo $element; ?>").getContext("2d");
		var data = {
			labels: ["胜率", "收益率", "净收益", "持仓时间", "加仓次数", "减仓次数", "波动率"],
			datasets: [
				{
					label: "实际值",
					backgroundColor: "<?php echo $colours[0]; ?>",
					borderColor: "<?php echo $colours[6]; ?>",
					pointBackgroundColor: "<?php echo $colours[0]; ?>",
					pointBorderColor: "#fff",
					pointHoverBackgroundColor: "#fff",
					pointHoverBorderColor: "<?php echo $colours[0]; ?>",
					data: [35, 85, 50, 81, 56, 55, 55]
				},
				{
					label: "最优值",
					backgroundColor: "<?php echo $colours[1]; ?>",
					borderColor: "<?php echo $colours[7]; ?>",
					pointBackgroundColor: "<?php echo $colours[1]; ?>",
					pointBorderColor: "<?php echo $colours[1]; ?>",
					pointHoverBackgroundColor: "<?php echo $colours[1]; ?>",
					pointHoverBorderColor: "<?php echo $colours[1]; ?>",
					data: [75, 85, 80, 89, 96, 87, 80]
				}
			]
		};
		var myRadarChart = new Chart(<?php echo $element; ?>, {
			type: 'radar',
			data: data
			//options: options
		});

        
                    //document.getElementById('js-legend-radar').innerHTML = myRadar.generateLegend();
                    // End options section

    });
</script>




