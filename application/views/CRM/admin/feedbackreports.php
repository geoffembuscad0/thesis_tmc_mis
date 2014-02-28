<?php echo $head; ?>
<div class='wrapper'>
	<div class='pure-g'>
		<div class='pure-u-1-3' style='width:100%;text-align:right;'>
			<p style='float:right;'>Date: <?php echo $time;?></p>
		</div>
	</div>
	<div class='pure-g'>
		<div class='pure-u-1-3' style='width:100%;text-align:center;'>
			<h1>Teresa Marble Corporation</h1>
			<h3>Customers Survey Statistics Reports</h3>
		</div>
	</div>
	<div class='pure-g'>
		<div class='pure-u-1-3' style='width:50%;'>
			<div id='ajaxsurveyrates'></div>
		</div>
		<div class='pure-u-1-3' style='width:50%;'>
			<div id='ajaxsurveysatisfaction'></div>
		</div>
	</div><br>
	<div class='pure-g'>
		<div class='pure-u-1-3' style='width:50%;'><div id='ajaxorderedProducts'></div></div>
		<div class='pure-u-1-3' style='width:50%;'><div id='ajaxrecommends'></div></div>
	</div>
</div>
<script>
$(document).ready(function(){

	window.print();
	
	// Gets Business Ratings
	var businessrates = [['Answered "Excellent"', <?php echo $statistics['rate_bussiness']['five'];?>],['Answered "Great"', <?php echo $statistics['rate_bussiness']['four'];?>],['Answered "Good"', <?php echo $statistics['rate_bussiness']['three'];?>],['Answered "Poor"', <?php echo $statistics['rate_bussiness']['two'];?>],['Answered "Terrible"', <?php echo $statistics['rate_bussiness']['one'];?>]];
	var plot1 = jQuery.jqplot ('ajaxsurveyrates', [businessrates],{
		title: 'Business Services Ratings',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
		location: 'e'
		}
	});

	// Gets Survey Satisfaction
	var satisfaction = [['Answered "Excellent"', <?php echo $statistics['rate_satisfaction']['five'];?>],['Answered "Great"', <?php echo $statistics['rate_satisfaction']['four'];?>],['Answered "Good"', <?php echo $statistics['rate_satisfaction']['three'];?>],['Answered "Poor"', <?php echo $statistics['rate_satisfaction']['two'];?>],['Answered "Terrible"', <?php echo $statistics['rate_satisfaction']['one'];?>]];
	var plot2 = jQuery.jqplot ('ajaxsurveysatisfaction', [satisfaction],{
		title: 'Customer\'s Satisfaction Ratings',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
		location: 'e'
		}
	});

	// Gets Recommends
	var recommends = [['Answered "Yes"', 70],['Answered "No"', 30]];
	var plot3 = jQuery.jqplot ('ajaxrecommends', [recommends],{
		title: 'Customers Recommendations to Friends',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
	},legend: {
		show:true,
		location: 'e'
		}
	});

	// Gets Ordered Products
	var orderedproducts = [['Answered "Yes"', 90],['Answered "No"', 10]];
	var plot4 = jQuery.jqplot ('ajaxorderedProducts', [orderedproducts],{
		title: 'Customers who Ordered Products Before.',
		seriesDefaults: {
			renderer: jQuery.jqplot.PieRenderer,
			rendererOptions: {
				showDataLabels: true
			}
		},legend:{
			show:true,
			location: 'e'
		}
	});
});
</script>
