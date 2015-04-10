<?php

		class theParent{

			public $p1="I am a variable";

			function someFunction(){
					echo "I am a funky monkey";
			}

		}

		class theChild extends theParent {
		}


		$childObject = new theChild();

		echo $childObject->p1."\n";
		$childObject->someFunction();

?>		