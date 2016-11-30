 // Wrapping in nv.addGraph allows for '0 timeout render', stores rendered charts in nv.graphs,
    // and may do more in the future... it's NOT required
    nv.addGraph(function() {
        
        var formatCount = d3.format(".02f");
        var chart = nv.models.cumulativeLineChart()
            .useInteractiveGuideline(true)
            .x(function(d) { return d[0] })
            .y(function(d) { return d.y })
            .color(d3.scale.category10().range())
            //.average(function(d) { return d.mean/100; })
            .duration(300)
            .clipVoronoi(false);
        chart.dispatch.on('renderEnd', function() {
            console.log('render complete: cumulative line with guide line');
        });
        chart.xAxis.tickFormat(function(d) {
            return d3.time.format('%m/%d/%y')(new Date(d))
        });
        chart.yAxis
            //Modifier label Y
            .axisLabel('MESURE')
            .tickFormat(formatCount);
        d3.select('#chart1 svg')
            .datum(lireSonde())
            .call(chart);
        //TODO: Figure out a good way to do this automatically
        nv.utils.windowResize(chart.update);
        chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });
        chart.state.dispatch.on('change', function(state){
            nv.log('state', JSON.stringify(state));
        });
        return chart;
    });
    function flatTestData() {
        return [{
            key: "Snakes",
            values: [0,1,2,3,4,5,6,7,8,9].map(function(d) {
                var currentDate = new Date();
                currentDate.setDate(currentDate.getDate() + d);
                return [currentDate, 0]
            })
        }];
    }