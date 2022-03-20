function addfriend(uid)
{
	var base_url_val = localStorage.getItem("base_url_val");
     $.ajax({
            url: base_url_val+"dashboard/addfriend",
            data: {
                'user_id': uid,
            }, // change this to send js object
            type: "post",
            success: function(data)
            {
            	if (data == "success") 
            	{
            		swal({   
		                title: "Added as friend",   
		                timer: 1500
		            });
		            $("#btn_add_frnd").html('<a class="prof_view_btn_after btn notika-btn-bluegray btn-reco-mg btn-button-mg waves-effect" onclick="addedfriend()">Added</a>');
            	}
		    }
		});
}

function addedfriend()
{
	swal({   
		 title: "Already Added as friend!",   
		 timer: 1500
		});
}

function srchdata(e) 
{
	var srch_val = e.value;
  	var base_url_val = localStorage.getItem("base_url_val");
     $.ajax({
            url: base_url_val+"dashboard/searchfrnd",
            data: {
                'srch_val': srch_val,
            }, // change this to send js object
            type: "post",
            success: function(data)
            {
            	var myArray = JSON.parse(data);
            	$("#showfrnds").html("");
            	for (var i = 0; i < myArray.length; i++) 
            	{
            		var num = parseInt(i)+1;
            		$("#showfrnds").append("<tr><td>"+num+"</td><td>"+myArray[i].user_name+"</td><td>"+myArray[i].user_email+"</td><td>"+myArray[i].designation+"</td><td>"+myArray[i].user_gender+"</td></tr>");
            	}
            	

		    }
		});
}