@include('autoload::autoload')

<!--suppress BadExpressionStatementJS -->
<script type="text/javascript">
    /**
     * This function is responsible for loading the window.load and instantiate our chart.
     * The parameters of data and options are passed directly to avoid conflict with the
     * variable names when using more than one report.
     */
    addLoadEvent(function() {
        var label = []; // graphic label array
		var dataset = [];
        var infor = []; // graphic data array

        // incremeting labels array
        <?php foreach($labels as $label): ?>
            label.push("<?php echo $label; ?>");
        <?php endforeach; ?>
		<?php foreach($dataset as $d): ?>
            dataset.push("<?php echo $d; ?>");
        <?php endforeach; ?>
        var <?php echo $element; ?> = document.getElementById("<?php echo $element; ?>").getContext("2d");
		// ---------------------------------------------------------------
		// Data sections
		// ---------------------------------------------------------------
		var data = {
			labels: label,
			datasets: [
				{
					label: "用户值",
					backgroundColor: '<?php echo $colours[0]; ?>',
					borderColor: '<?php echo $colours[6]; ?>',
					borderWidth: 2,
					yAxisID: "y-axis-1",
					data: dataset,
				},
				{
					label: "标准值",
					backgroundColor: '<?php echo $colours[1]; ?>',
					borderColor: '<?php echo $colours[7]; ?>',
					borderWidth: 2,
					yAxisID: "y-axis-2",
					data: dataset,
				}
			]
		};
        window.myBar = new Chart(<?php echo $element; ?>,
			{
				type: 'bar',
				data: data,
				options: {
                responsive: true,
                title:{
                    display:true,
                    text:"向前飞-最近30个交易日胜率"
                },
                tooltips: {
                    mode: 'index',
                    intersect: true
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",
                        gridLines: {
                            drawOnChartArea: false
                        }
                    }],
                }
            }
			});

    });
</script>




