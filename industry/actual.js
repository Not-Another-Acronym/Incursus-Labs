function extraLoad(oTable){
        sorted = {};
        $.each(chartItems, function(){
            if(sorted[this[0]] == undefined) sorted[this[0]] = new Array();
            sorted[this[0]].push([Date.parse(this[1]), parseFloat(this[2])]);
        })
        series = []
        $.each(sorted, function(i){
            series.push({
                type: 'scatter',
	            name: i,
	            data: this,
	            marker: {
	                radius: 4
	            }
            })
            reg = regression('polynomial', this, 10)
            series.push({
	            type: 'spline',
	            name: i,
	            data: reg[1],
	            marker: {
	                radius: 0
	            }
            })
        })
        $('#chart_div').highcharts({
            chart: {
                renderTo: 'container',
		height: 1000
            },
            title: {
                text: ''
            },
            xAxis: {
                type: 'datetime',
                dateTimeLabelFormats: {
                    month: '%b %e',
                    year: '%b'
                }
            },
            yAxis: {
                title: {
                    text: 'Profit/Min'
                },
                plotBands: [{
                   from: -100000000,
                   to: 0,
                   color: 'rgba(255, 0, 0, 0.5)'
                }]
            },
            series: series
        });
}
