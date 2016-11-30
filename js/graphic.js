
nv.addGraph(function () {

    var chart = nv.models.lineChart()
            
            .x(function (d) {
                return d.x
            })
            .y(function (d) {
                return d.y
            }).forceY([erangeMin,erangeMax]);
            
            //console.log("erangeMax---------"+lireSonde());
    
   
 
    var fitScreen = false;
    var width = 1000;
    var height = 800;
    var margin = 40;
    var zoom = 1;
    

    //var max = d3.max(data, function(d) { return d.value });
    var margin = {top: 10, right: 50, bottom: 100, left: 80},
    width = 1100 - margin.left - margin.right,
            height = 900 - margin.top - margin.bottom;

    var formatCount = d3.format(".02f");

    chart.xScale(d3.time.scale())
            .useInteractiveGuideline(true)
            .margin({"left": 80, "right": 50, "top": 5, "bottom": 100});

    var x = d3.time.scale();
    var y = d3.scale.linear();
    
    

    chart.xAxis
            //Modifier label X
            .axisLabel('TIME (dd/mm HH:MM)')
            .scale(x)
            .rotateLabels(50)
            .axisLabelDistance(500)
            .orient("bottom").tickSize(height - margin * 2).tickPadding(2).ticks(7)
            .tickFormat(function (d) {
                return d3.time.format('%d/%m %H:%M')(new Date(d))
            });

    chart.lines.dispatch.on("elementClick", function (evt) {
        console.log(evt);
    });
    chart.yAxis
            //Modifier label Y
            .axisLabel('MESURE')
            //.scale(y)
            .tickFormat(formatCount);
    axisLabelDistance: -5;

    d3.select('#chart1 svg')
            .attr('perserveAspectRatio', 'xMinYMid')
            .attr('width', width + margin.left + margin.right)
            .attr('height', height + margin.top + margin.bottom)
            .datum(lireSonde);
    


    setChartViewBox();
    resizeChart();

   /* var tsFormat = d3.time.format('%d/%m, %H:%M'); 
     var contentGenerator = chart.interactiveLayer.tooltip.contentGenerator(); 
     var tooltip = chart.interactiveLayer.tooltip; 
     tooltip.contentGenerator(function (d) { d.value = d.series[0].data.x; return contentGenerator(d); }); 
     tooltip.headerFormatter(function (d) { return tsFormat(new Date(d)); }); */


    nv.utils.windowResize(resizeChart);

    d3.select('#zoomIn').on('click', zoomIn);
    d3.select('#zoomOut').on('click', zoomOut);


    function setChartViewBox() {
        var w = width * zoom,
                h = height * zoom;
        chart
                .width(w)
                .height(h);
        d3.select('#chart1 svg')
                .attr('viewBox', '0 0 ' + w + ' ' + h)
                .transition().duration(500)
                .call(chart);
    }
    function zoomOut() {
        zoom += .25;
        setChartViewBox();
    }
    function zoomIn() {
        if (zoom <= .5)
            return;
        zoom -= .25;
        setChartViewBox();
    }
    // This resize simply sets the SVG's dimensions, without a need to recall the chart code
    // Resizing because of the viewbox and perserveAspectRatio settings
    // This scales the interior of the chart unlike the above
    function resizeChart() {
        var container = d3.select('#chart1');
        var svg = container.select('svg');
        if (fitScreen) {
            // resize based on container's width AND HEIGHT
            var windowSize = nv.utils.windowSize();
            svg.attr("width", windowSize.width);
            svg.attr("height", windowSize.height);


        } else {
            // resize based on container's width
            var aspect = chart.width() / chart.height();
            var targetWidth = parseInt(container.style('width'));
            svg.attr("width", targetWidth);
            svg.attr("height", Math.round(targetWidth / aspect));
        }
    }



    return chart;

});


