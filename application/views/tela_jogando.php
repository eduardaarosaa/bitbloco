			<div class="col-1 divEspaco">
				

			</div>
				

			<div class="col-7">
            <div class="jumbotron">

                <?php
               
                $array = get_object_vars($dados[0]);

                //var_dump($array);
                
                foreach($array as $row){
                    echo $row;
                   
                }
                ?>
        </div>
				
			</div>
			<div class="col-1 divEspaco"></div>

        <!-- fechando a linha que inicia no arquivo menu.php -->
        </div>
        <div class="row">
            <div class="col-12 divEspaço"></div>

        </div>
