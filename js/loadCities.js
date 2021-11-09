// JavaScript Document By Hashan Wickramasinghe

function showCitiesWindow()
{
    var distID = document.getElementById("SelectDistrict").value;

    if (distID != '0') 
    {
	    var dataString = 'id=' + distID +'&window=MainSrch';

	    $.ajax({
	        type: "GET",
	        url: "classes/GetCities.php",
	        data: dataString,
	        cache: false,
	        success: function (result) {
	            $("#cityBox #citiesContaner").empty();
	            $("#cityBox #citiesContaner").html(result);

	            //alert('sdasd');
	            $("#cityBox").css("height", "402px");
	            $("#cityBox").show();
	            //$("#supplierWindow").center();
	            //$("#SupSearch").model('toggle');
	            $("#cityBox").css("display", "block");
	        }
	    });

	    
	}
}

function showCitiesWindowCrtPG()
{
    var distID = document.getElementById("SlctDistrict").value;

    if (distID != '0') 
    {
	    var dataString = 'id=' + distID +'&window=CrtPG';

	    $.ajax({
	        type: "GET",
	        url: "classes/GetCities.php",
	        data: dataString,
	        cache: false,
	        success: function (result) {
	            $("#cityBox #citiesContaner").empty();
	            $("#cityBox #citiesContaner").html(result);

	            //alert('sdasd');
	            $("#cityBox").css("height", "402px");
	            $("#cityBox").show();
	            //$("#supplierWindow").center();
	            //$("#SupSearch").model('toggle');
	            $("#cityBox").css("display", "block");
	        }
	    });

	    
	}
}
