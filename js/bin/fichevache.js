 $( document ).ready(function(){

  	/****CHARTS****/
  	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(tracerGraphique);
      
 })

  function tracerGraphique() {

	$.getJSON( "json/vache1.json", function( donneesJson ) {
		 var donnees = new google.visualization.DataTable();
		 donnees.addColumn('string', 'Jour');
		 donnees.addColumn('number', 'Total');


		 $.each(donneesJson, function(index, value) {
			donnees.addRows([ [value['day'], value['total'] ] ]);
		 }); 

		 var mesOptions = {  'width':'100%',
							 'height':'100%',
							 'legend':'none',
							 'hAxis': {title: 'Jour'},
							 chartArea: {
							 	left:"8%",
							 	top:"5%",
							 	height:"70%",
							 	width:"85%"
							 },
							 vAxis: {
							    viewWindow: {
							        min: 0,
							        max: 40
							    },
							    ticks: [0, 10, 20, 30, 40]
}
							};

		var prodJour = new google.visualization.ColumnChart(document.getElementById('prodJour'));

		prodJour.draw(donnees, mesOptions);
	});

 }