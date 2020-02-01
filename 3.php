<?php 

	function acak($input=null)
	{
		switch (true) {
			case is_null($input):
				echo "Anda Harus Memasukan Inputan Terlebih Dahulu";
				break;

			case is_int($input) :
				echo "Inputan Harus Berupa String";
				break;
			
			default:
				return str_shuffle($input);
				break;
		}
	}

	echo acak('Diki');

 ?>