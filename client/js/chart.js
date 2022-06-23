
window.onload = function() {
    var options1 = {
        animationEnabled: true,
        title: {
            text: ""
        },
        axisX: {
            labelFontSize: 14
        },
        axisY: {
            labelFontSize: 14
        },
        data: [{
            type: "spline", //change it to line, area, bar, pie, etc
            dataPoints: [
                { y: 10 },
                { y: 6 },
                { y: 14 },
                { y: 12 },
                { y: 19 },
                { y: 14 },
                { y: 26 },
                { y: 10 },
                { y: 22 }
            ]
        }]
    };
    
    var options2 = {
        title: {
            text: ""
        },
        axisX: {
            labelFontSize: 14
        },
        axisY: {
            labelFontSize: 14
        },
        data: [{
            type: "splineArea", //change it to line, area, bar, pie, etc
            dataPoints: [
                { y: 10 },
                { y: 6 },
                { y: 14 },
                { y: 12 },
                { y: 19 },
                { y: 14 },
                { y: 26 },
                { y: 10 },
                { y: 22 }
            ]
        }]
    };
    
    $("#tabs").tabs({
        create: function (event, ui) {
            //Render Charts after tabs have been created.
            $("#chartContainer1").CanvasJSChart(options1);
            $("#chartContainer2").CanvasJSChart(options2);
        },
        activate: function (event, ui) {
            //Updates the chart to its container size if it has changed.
            ui.newPanel.children().first().CanvasJSChart().render();
        }
    });
    
    }