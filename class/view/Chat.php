<?php
	class Chat{
		public function solicitarUsuario(){
			
		}
		public function mostrarChat(array $msgs){
			$i=0;
			/*while($i<count($msgs)){
				echo "A mensagem é ".$msgs[$i]."<br>";
				//$i = $i +1;
				//$i += 1;
				$i++;
			}	*/
			foreach ($msgs as $msgAtual){
				echo "Mensagem: ".$msgAtual."<br>";
			}
		}
	}
?>