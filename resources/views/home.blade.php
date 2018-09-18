@extends('app')
@section('title', 'Homework')

@section('css')
    <style>
        #container {
            min-width: 310px;
            max-width: 800px;
            height: 400px;
            margin: 0 auto
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Data</h4>
                <p class="card-category">Please insert the data</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <label class="bmd-label-static">Month</label>
                            <select id="month" class="form-control">
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-static">Year</label>
                                <input id="year" type="number" onkeypress="return isNumberKey(event)"  class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-static">Revenue(X)</label>
                                <input id="x" type="number" onkeypress="return isNumberKey(event)"  class="form-control"/>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="bmd-label-static">Profit(m)(Y)</label>
                                <input id="y" type="number" onkeypress="return isNumberKey(event)"  class="form-control"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <button id="addData" class="btn btn-primary pull-right">Add New Data to Table</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Result</h4>
                <p class="card-category">Insert X or Y Value and get the result</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="getWhat" id="getY_radio" value="getY" checked>
                                <label class="form-check-label" for="getY_radio">
                                    Get Y
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="radio" name="getWhat" id="getX_radio" value="getX">
                                <label class="form-check-label" for="getX_radio">
                                Get X
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="div_get_y" class="d-block">
                        <div class="row" >
                            <div class="col-md-3">
                                <label class="bmd-label-floating">New Month</label>
                                <select id="get_y_new_month" class="form-control">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="bmd-label-floating">New Year</label>
                                <input id="get_y_new_year" type="number" onkeypress="return isNumberKey(event)" class="form-control"/>
                            </div>
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Insert X</label>
                                <input id="get_x_value" type="number" onkeypress="return isNumberKey(event)" class="form-control"/>
                            </div>
                            
                        </div>
                        <div class="row">
                            <button id="getY" class="btn btn-primary pull-right">Get Y</button>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="bmd-label-floating">A</label>
                                <input type="number" id="y_a_value" class="form-control" disabled/>
                            </div>
                            <div class="col-md-4">
                                <label class="bmd-label-floating">B</label>
                                <input type="number" id="y_b_value" class="form-control" disabled/>
                            </div>
                            <div class="col-md-4">
                                <label class="bmd-label-floating">Y</label>
                                <input type="number" id="y_value" class="form-control" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="bmd-label-floating">Equation</label>
                                <input type="text" id="y_equation" class="form-control" disabled/>
                            </div>
                        </div>
                    </div>
                    <div id="div_get_x" class="d-none">
                        <div class="row" >
                            <div class="col-md-3">
                                <label class="bmd-label-floating">New Month</label>
                                <select id="get_x_new_month" class="form-control">
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Year</label>
                                <input id="get_y_new_year" type="number" onkeypress="return isNumberKey(event)" class="form-control"/>
                            </div>
                            <div class="col-md-3">
                                <label class="bmd-label-floating">Insert Y</label>
                                <input id="get_y_value" type="number" onkeypress="return isNumberKey(event)" class="form-control"/>
                            </div>
                        </div>
                        <div class="row">
                            <button id="getX" class="btn btn-primary pull-right">Get X</button>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="bmd-label-floating">A</label>
                                <input type="number" id="x_a_value" class="form-control" disabled/>
                            </div>
                            <div class="col-md-4">
                                <label class="bmd-label-floating">B</label>
                                <input type="number" id="x_b_value" class="form-control" disabled/>
                            </div>
                            <div class="col-md-4">
                                <label class="bmd-label-floating">X</label>
                                <input type="number" id="x_value" class="form-control" disabled/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="bmd-label-floating">Equation</label>
                                <input type="text" id="x_equation" class="form-control" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Data Table</h4>
                    <p class="card-category">List of the data</p>
                </div>
                <div class="card-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Month</th>
                                <th>Year</th>
                                <th>X</th>
                                <th>Y</th>
                                <th>XY</th>
                                <th>X<sup>2</sup></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>January</td>
                                <td>2017</td>
                                <td>7</td>
                                <td>0.15</td>
                                <td><?php echo 7*0.15 ?></td>
                                <td><?php echo 7*7 ?></td>
                            </tr>
                            <tr>
                                <td>February</td>
                                <td>2017</td>
                                <td>2</td>
                                <td>0.10</td>
                                <td><?php echo 2*0.10 ?></td>
                                <td><?php echo 2*2 ?></td>
                            </tr>
                            <tr>
                                <td>March</td>
                                <td>2017</td>
                                <td>6</td>
                                <td>0.13</td>
                                <td><?php echo 6*0.13 ?></td>
                                <td><?php echo 6*6 ?></td>
                            </tr>
                            <tr>
                                <td>April</td>
                                <td>2017</td>
                                <td>4</td>
                                <td>0.15</td>
                                <td><?php echo 4*0.15 ?></td>
                                <td><?php echo 4*4 ?></td>
                            </tr>
                            <tr>
                                <td>May</td>
                                <td>2017</td>
                                <td>14</td>
                                <td>0.25</td>
                                <td><?php echo 14*0.25 ?></td>
                                <td><?php echo 14*14 ?></td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>2017</td>
                                <td>16</td>
                                <td>0.24</td>
                                <td><?php echo 16*0.24 ?></td>
                                <td><?php echo 16*16 ?></td>
                            </tr>
                            <tr>
                                <td>August</td>
                                <td>2017</td>
                                <td>12</td>
                                <td>0.20</td>
                                <td><?php echo 12*0.20 ?></td>
                                <td><?php echo 12*12 ?></td>
                            </tr>
                            <tr>
                                <td>September</td>
                                <td>2017</td>
                                <td>14</td>
                                <td>0.27</td>
                                <td><?php echo 14*0.27 ?></td>
                                <td><?php echo 14*14 ?></td>
                            </tr>
                            <tr>
                                <td>October</td>
                                <td>2017</td>
                                <td>20</td>
                                <td>0.44</td>
                                <td><?php echo 20*0.4 ?></td>
                                <td><?php echo 20*20 ?></td>
                            </tr>
                            <tr>
                                <td>November</td>
                                <td>2017</td>
                                <td>15</td>
                                <td>0.34</td>
                                <td><?php echo 15*0.34 ?></td>
                                <td><?php echo 15*15 ?></td>
                            </tr>
                            <tr>
                                <td>December</td>
                                <td>2017</td>
                                <td>7</td>
                                <td>0.17</td>
                                <td><?php echo 7*0.17 ?></td>
                                <td><?php echo 7*7 ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Highchart --}}
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Simple Linear Regression Model</h4>
                    <p class="card-category">Click the 'Add Linear Regression' button to see the line</p>
                    <button type="button" class="btn btn-info" id="addLinearBtn">Add Linear Regression</button>
                </div>
                <div class="card-body">
                    <div id="chart_container"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script>

        let month_sum, year_sum, x_sum, y_sum, count;
        let table = $('#example').DataTable();
        let xMinimal=2, xMaksimal=20;

        if(table.column(2).data().length) {
            x_sum = parseFloat(table.column( 2 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
            y_sum = parseFloat(table.column( 3 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
        }

        function toggleGetWhat() {
            $("#div_get_y").toggleClass('d-block d-none');
            $("#div_get_x").toggleClass('d-block d-none');

            $("#x_a_value").val("");
            $("#x_b_value").val("");

            $("#y_a_value").val("");
            $("#y_b_value").val("");

            $("#get_x_value").val("");
            $("#get_y_value").val("");

            $("#y_value").val("");
            $("#x_value").val("");
        }

        function round(value, decimals) {
            return Number(Math.round(value+'e'+decimals)+'e-'+decimals);
        }

        function sumXY() {
            let sum_xy = 0;

            for (let index = 0; index < count; index++) {
                let array = table.row(index).data();
                sum_xy += array[2] * array[3];
            }
            return sum_xy;
        }

        function sumXSquare() {
            let sum_x_square = 0;
            
            for (let index = 0; index < count; index++) {
                let array = table.row(index).data();
                sum_x_square += array[2] * array[2];
            }

            return sum_x_square;
        }

        function calculateB () {
            count = table.rows().count();
            let result = (count * sumXY() - x_sum * y_sum ) / ( count * sumXSquare() - x_sum*x_sum );
            $('#x_b_value').val(result);
            $('#y_b_value').val(result);
            
            return result;
        }

        function calculateA () {
            count = table.rows().count();
            let result = (1 / count) * (y_sum - calculateB()*x_sum);
            $('#x_a_value').val(result);
            $('#y_a_value').val(result);

            return result;
        }

        function calculateY () {
            let get_x_value = parseFloat($('#get_x_value').val());
            let result = calculateB() * get_x_value + calculateA();
            $('#y_value').val(result);
            $('#y_equation').val( round(calculateA(), 5) + ' + ' + round(calculateB(),5) + ' X ');

            return result;
        }

        function calculateX() {
            let get_y_value = parseFloat($('#get_y_value').val());

            let result = (get_y_value - calculateA()) / calculateB();
            $('#x_value').val(result);
            $('#x_equation').val(round(calculateA(), 5) + ' + ' + round(calculateB(),5) + ' X ' );
            return result;
        }

        $(document).ready(function() {
            
            $( "input:radio" ).on( "click", function() {
                toggleGetWhat();
            });

            var table = $('#example').DataTable();
            
            $('#getY').click( function(e) {
                let get_x_value = $('#get_x_value').val();

                if ( get_x_value != '') {
                    let new_y = calculateY();
                    //add new point
                    chartE.series[0].addPoint([parseFloat(get_x_value), parseFloat(new_y)]);
                    chartE.series[0].addPoint([parseFloat(get_x_value), null]);
                } 
                else alert('Please fill the X Value')
            });

            $('#getX').click( function(e) {
                let get_y_value = $('#get_y_value').val();
                if ( get_y_value != '') {
                    let new_x = calculateX();
                    chartE.series[0].addPoint([parseFloat(new_x), parseFloat(get_y_value)]);
                    chartE.series[0].addPoint([parseFloat(new_x), null]);
                }
                else alert('Please fill the Y Value')
            });

            $('#addData').click( function(e) {
                e.preventDefault();
                var month = $('#month').val();
                var year = $('#year').val();
                var x = $('#x').val();
                var y = $('#y').val();
                var xy = x*y;
                var x2 = x*x;
                if (month && year && x && y) {
                    table.row.add([
                        month,
                        year,
                        x,
                        y,
                        xy,
                        x2
                    ]).draw();
                } else {
                    alert('please fill all of the fields')
                }

                //get the sum of x
                x_sum = parseFloat(table.column( 2 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
                
                //get the sum of y                
                y_sum = parseFloat(table.column( 3 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
                
                $('#month').val("");
                $('#year').val("");
                $('#x').val("");
                $('#y').val("");

            } );
            
        } );

        
        var chartE = Highcharts.chart('chart_container', {
            chart: {
                type: 'scatter',
                margin: [70, 50, 60, 80],
                events: {
                    click: function (e) {
                        // find the clicked values and the series
                        var x = Profit,
                            y = Profit,
                            series = this.series[0];
        
                        // Add it
                        series.addPoint([x, y]);

                    }
                }
            },
            title: {
                text: 'Linear Regression'
            },
            subtitle: {
                text: 'Data Mining Application, Richard F.O. M10709801'
            },
            xAxis: {
            type:'number',
            min:0,
            max:25
            },
            yAxis: {
                title: {
                    text: 'Profit'
                },
                minPadding: 0.2,
                maxPadding: 0.2,
                maxZoom: 0.5,
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
            },
            exporting: {
                enabled: false
            },
            plotOptions: {
                line:{
                dashStyle: "DashDot"
                },
                series: {
                    lineWidth: 1,
                    point: {
                        events: {
                            'click': function () {
                                if (this.series.data.length > 1) {
                                    this.remove();
                                }
                            }
                        }
                    }
                }
            },
            series: [{
                name: 'Profit',
                data: []
            }, {
                name: 'Linear Regression',
                data: []
            }],
            responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
        });
    
    $(document).ready(function () {

        let dataY = new Array(0.15, 0.10, 0.13, 0.15, 0.25, 0.24, 0.20, 0.27, 0.44, 0.34, 0.17 );
        let dataX = new Array(7, 2, 6, 4, 14, 16, 12, 14, 20 , 15, 7);

        //for making line graph in the first render
        for (let index = 0; index < dataX.length; index++) {
            chartE.series[0].addPoint([parseFloat(dataX[index]), parseFloat(dataY[index])]);
            chartE.series[0].addPoint([parseFloat(dataX[index]), null]);
        }
    });

    $('#addData').click( function(e) {
        var x = $('#x').val();
        var y = $('#y').val();

        //add new line graph
        chartE.series[0].addPoint([parseFloat(x), parseFloat(y)]);
        chartE.series[0].addPoint([parseFloat(x), null]);

        if ( xMinimal >= x || xMinimal == 0) {
            xMinimal = x;
        }

        if ( xMaksimal <= x || xMaksimal == 0) {
            xMaksimal = x;
        }
    });


    $('#addLinearBtn').on('click', function(){
        let tempY = xMinimal * calculateB() + calculateA();
        //add point to draw the line
        chartE.series[1].addPoint([parseFloat(xMinimal), parseFloat(tempY)]);

        tempY = xMaksimal * calculateB() + calculateA();
        //add point to draw the line
        chartE.series[1].addPoint([parseFloat(xMaksimal), parseFloat(tempY)]);
    });
</script>
@endsection