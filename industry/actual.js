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
            reg = regression('polynomial', this, 8)
            first = reg.points[0][0];
            last = reg.points[reg.points.length-1][0];
            incr = (last-first)/1000;
            for(x=first;x<last;x+=incr)
            {
            	reg.points.push([x,(
            		reg.equation[8] * Math.pow(x,8) +
            		reg.equation[7] * Math.pow(x,7) +
            		reg.equation[6] * Math.pow(x,6) +
            		reg.equation[5] * Math.pow(x,5) +
            		reg.equation[4] * Math.pow(x,4) +
            		reg.equation[3] * Math.pow(x,3) +
            		reg.equation[2] * Math.pow(x,2) +
            		reg.equation[1] * x +
            		reg.equation[0]
            	)])
            }
            reg.points = $(reg.points).sort(function(a,b){ return a[0] - b[0] })
            series.push({
	            type: 'spline',
	            name: i,
	            data: reg.points,
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
