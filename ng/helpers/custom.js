
	/** Json Stringify function */
	function js(jsonData) {
		return JSON.strigify(jsonData);
	}

	/** Helper function for showing message */

	/**
	| @elementId = element to be selected for messsage
	| @elementClass = error or success class to be applied to element 
	| @messageString = error message string
	*/
	/**
	| @arg1 = element to be selected for messsage
	| @arg2 = error or success class to be applied to element 
	| @arg3 = error message string
	*/
	function showMessage(elementId,elementClass,messageString) {
		var el = document.getElementById(elementId);
		if(el) {
			$("#"+elementId).addClass('alert alert-'+elementClass);
			$("#"+elementId).html(messageString);
			$("#"+elementId).fadeIn('slow/400/fast');
			// setTimeout(function(){
			// 	$("#"+elementId).fadeOut('slow/400/fast');
			// },10000);
		} else {
			alert(messageString);
		}
	}
	
	function getHtmlMessage(m){
		var msg='';
		$.each(m, function( index, value ) {
			msg+=value+" <br>   ";
			});
		return msg;
	}