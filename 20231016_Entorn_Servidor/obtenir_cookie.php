<?php
				//si la cookie "tarea_cookie" existe, la divide en valores separados por coma y espacio y luego construye 
				//elementos de lista en HTML para cada valor.
	
				if (isset($_COOKIE['tarea_cookie'])) {
					$valores = explode(', ', $_COOKIE['tarea_cookie']);
					foreach ($valores as $valor) {
						echo '<li class="list-group-item list-group-item-secondary col-12">' . htmlspecialchars($valor) . '</li>';
					}
				}
				?>