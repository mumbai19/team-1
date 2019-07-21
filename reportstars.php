<!DOCTYPE html>
<html>
<head>
    
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 550PX;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js1/jquery.min.js"></script>
<script type="text/javascript" src="js1/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        function showGraph()

        {console.log("hi");
            
                $.get("data.php",
                function (data)
                {
                    console.log(data);
                     var parametername = [];
                    var stars = [];
                    var i = 0;
                    for (i=0;i<data.length; i++) {
                        //console.log("hi",i[0]);
                        console.log(data[0][1]);
                        
                        parametername.push(data[0][0]);
                        //console.log("foo",data[i].parametername);
                        stars.push(data[0][1]);

                    }
                    console.log(stars);
                        
                    

                    var chartdata = {
                        labels: parametername,
                        datasets: [
                            {
                                label: 'stars',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: stars
                            }
                        ]

                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                
                });

            
        }
        $(document).ready(function () {
            showGraph();
        });


        
        </script>

</body>
</html>