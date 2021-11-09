// JavaScript Document By Hashan Wickramasinghe



function getComAdds(cityId)
{
	var dataString ='id='+cityId;
	 $.ajax({
			type: "POST",
			url: "classes/GetComAdds.php", 
			data:dataString,
			cache: false,
			success: function(result){$("#DivRight").html(result);}
			});
}
