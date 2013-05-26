
function extraLoad(oTable){
	google.load("visualization", "1", {packages:["corechart"], callback:function(){
	    var data = google.visualization.arrayToDataTable(chartItems);
	
	        var options = {
	        };
	
	        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
	        chart.draw(data, options);
	}});
}