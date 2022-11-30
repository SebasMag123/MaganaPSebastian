if(isset($_COOKIE['ultimaVisita'])){
                printf("Su ultima vista fue: %s",$_COOKIE['ultimaVisita']);
            $fechaHoy = date('Y/m/d H:1:s');
            setcookie("ultimaVisita",$fechaHoy,time()+(7 *24*60*60));
            }
            else{
                printf("No se encontro cookie de ultima visita<br>");

                $fechaHoy = date('Y/m/d H:1:s');
                $siguienteSemana = time() +(7*24*60*60);
                $fechaExpira = date('Y/m/d H:1:s',$siguienteSemana),"<br>";

                echo '<b>Fecha de Creacion de Cookie:</b>'.$fechaHoy.'<br>';
                echo '<b>Fecha de Vencimiento de Cookie:</b>',$fechaExpira,'<br>'
            }