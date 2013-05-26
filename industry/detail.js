
function extraLoad(oTable){
	sorted = {};
	$.each(chartItems, function(){
	    if(sorted[this[0]] == undefined) sorted[this[0]] = new Array();
	    sorted[this[0]].push([Date.parse(this[1]), this[2]]);
	})
	series = []
	$.each(sorted, function(i){
		series.push({
			type: 'scatter',
            name: 'i',
            data: sorted,
            marker: {
                radius: 4
            }
		})
	})
        $('#chart_div').highcharts({
            chart: {
            },
            title: {
                text: ''
            },
            series: series
        });
}