
			

		$.get("obtenir_cookie.php", function(data, status){

		//jquery Lo que ponga aqui a dentro es lo que me va a mostrar en cualquier ul de la pagina-->
		$("ul").html(data);
		});	
	

	


    
        function clearPlaceholder(input) {
            input.placeholder = "";
        }

        function restorePlaceholder(input) {
            input.placeholder = "Introdueix tasca";
        }
   