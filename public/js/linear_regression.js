let month_sum, year_sum, x_sum, y_sum, count;
let table = $('#example').DataTable();

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

$(document).ready(function() {
    
    $( "input:radio" ).on( "click", function() {
        toggleGetWhat();
    });

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
        $('#x_a_value').val(result);
        $('#y_a_value').val(result);

        return result;
    }

    function calculateA () {
        count = table.rows().count();
        let result = (1 / count) * (y_sum - calculateB()*x_sum);
        $('#x_b_value').val(result);
        $('#y_b_value').val(result);

        return result;
    }

    function calculateY () {
        let get_x_value = parseFloat($('#get_x_value').val());

        let result = calculateB() * get_x_value + calculateA();
        $('#y_value').val(result);
    }

    function calculateX() {
        let get_y_value = parseFloat($('#get_y_value').val());

        let result = (get_y_value - calculateA()) / calculateB();
        $('#x_value').val(result);
    }

    var table = $('#example').DataTable();
    
    $('#getY').click( function(e) {
        let get_x_value = $('#get_x_value').val();

        if ( get_x_value != '') calculateY();
        else alert('Please fill the X Value')
    });

    $('#getX').click( function(e) {
        let get_y_value = $('#get_y_value').val();
        if ( get_y_value != '') calculateX();
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

        x_sum = parseFloat(table.column( 2 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
        y_sum = parseFloat(table.column( 3 ).data().reduce( function (a,b) {return parseFloat(a) + parseFloat(b);} ) );
        
        $('#month').val("");
        $('#year').val("");
        $('#x').val("");
        $('#y').val("");

    } );
    
} );