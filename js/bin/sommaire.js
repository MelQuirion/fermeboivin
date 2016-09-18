 $( document ).ready(function(){

  	/****CHARTS****/
  	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(tracerGraphiques);
      
 })

  function tracerGraphiques() {

	$.getJSON( "json/litres-par-heure.json", function( donneesJson ) {
		 var donnees = new google.visualization.DataTable();
		 donnees.addColumn('string', 'Heures');
		 donnees.addColumn('number', 'Litres');


		 $.each(donneesJson, function(index, value) {
			donnees.addRows([ [value['hour'], value['total'] ] ]);
		 }); 

		 var mesOptions = {  'width':'100%',
							 'height':'100%',
							 'legend':'none',
							 'hAxis': {title: 'Heures'},
							 chartArea: {
							 	left:"5%",
							 	top:"5%",
							 	height:"65%",
							 	width:"85%"
							 }
							};

		var prodHeure = new google.visualization.AreaChart(document.getElementById('prodHeure'));

		 prodHeure.draw(donnees, mesOptions);
	});

	$.getJSON( "json/litres-par-vache.json", function( donneesJson ) {
		 var donnees = new google.visualization.DataTable();
		 donnees.addColumn('string', 'Nom');
		 donnees.addColumn('number', 'Total');


		 $.each(donneesJson, function(index, value) {
			donnees.addRows([ [value['name'], value['total'] ] ]);
		 }); 

		 var mesOptions = {  'width':'100%',
							 'height':'100%',
							 'legend' : 'bottom',
							 chartArea: {
							 	left:"5%",
							 	top:"2%",
							 	height:"80%",
							 	width:"90%"
							 }
							};

		var prodVache = new google.visualization.PieChart(document.getElementById('prodVache'));

		 prodVache.draw(donnees, mesOptions);
	})
 }