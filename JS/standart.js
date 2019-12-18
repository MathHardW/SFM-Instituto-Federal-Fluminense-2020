$('.dropdown-button').dropdown({
    container: document.body
});

$('#tabelaAtividade').pageMe({
    pagerSelector: '#paginaAtividade',
    activeColor: 'green darken-4',
    prevText: 'Anterior',
    nextText: 'Siguiente',
    showPrevNext: true,
    hidePageNumbers: false,
    perPage: 5
});

$('#tabelaFicha').pageMe({
    pagerSelector: '#paginaFicha',
    activeColor: 'green darken-4',
    prevText: 'Anterior',
    nextText: 'Siguiente',
    showPrevNext: true,
    hidePageNumbers: false,
    perPage: 5
});

$(document).ready(function () {
    $('select').formSelect();
    $('.sidenav').sidenav();
    $('.collapsible').collapsible();
    $('.tooltipped').tooltip();
    $('.modal').modal();
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
    $('.dropdown-trigger').dropdown();
    $('.tap-target').tapTarget();
    $('.tabs').tabs();

});

// Load the Visualization API and the corechart package.
google.charts.load('current', {'packages': ['corechart']});

// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 1],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
    ]);

    // Set chart options
    var options = {'title': 'How Much Pizza I Ate Last Night',
        'width': 400,
        'height': 300,
        is3D: true};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
}




// Set a callback to run when the Google Visualization API is loaded.
google.charts.setOnLoadCallback(drawChart2);

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
function drawChart2() {

    // Create the data table.
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    data.addRows([
        ['Mushrooms', 1],
        ['Onions', 1],
        ['Olives', 1],
        ['Zucchini', 1],
        ['Pepperoni', 2]
    ]);

    // Set chart options
    var options = {'title': 'How Much Pizza I Ate Last Night',
        'width': 400,
        'height': 300,
        is3D: true};

    // Instantiate and draw our chart, passing in some options.
    var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
    chart.draw(data, options);
}




google.charts.load('current', {
    'packages': ['geochart'],
    // Note: you will need to get a mapsApiKey for your project.
    // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
    'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {
    var data = google.visualization.arrayToDataTable([
        ['Country', 'Popularity'],
        ['Germany', 200],
        ['United States', 300],
        ['Brazil', 400],
        ['Canada', 500],
        ['France', 600],
        ['RU', 700]
    ]);

    var options = {
        'width': 400,
        'height': 300
    };

    var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

    chart.draw(data, options);
}