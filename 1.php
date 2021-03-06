<?php 
// KEGUNAAN JSON PADAREST API : untuk saling bertukar data antar aplikasi

	function fungsi($nama="Mohamad Diki Alfin", $umur=21)
	{

		$biodata = [
			"Name" => $nama,
			"Age" => $umur,
			"Address" => "Jl.Raya citayam perum permata depok sektor kumala blok E4 No.7",
			"Hobbies" => ['coding','gaming','olahraga'],
			"Is Married" => false,
			"List School" => [
								"SMK" => ["Name" => "SMK Nasional Depok", "Major" => "Teknik Komputer Dan Jaringan", "Year In" => 2013,"Year Out" => 2016],
								"SMP" => ["Name" => "SMP Bintara Depok", "Major" => null , "Year In" => 2010,"Year Out" => 2013],
								"SD" =>  ["Name" => "SDN Depok Jaya 2", "Major" => null , "Year In" => 2004,"Year Out" => 2010]
							],
			"Skills" => [
							["Skill_Name" => "CSS", "Level" => "Advance"],
							["Skill_Name" => "HTML", "Level" => "Advance"],
							["Skill_Name" => "PHP", "Level" => "Advance"],
							["Skill_Name" => "Java", "Level" => "Beginner"],
							["Skill_Name" => "JQUERY", "Level" => "Beginer"],
							["Skill_Name" => "Bootstrap", "Level" => "Advance"],
							["Skill_Name" => "Codeigniter", "Level" => "Beginner"]
						],
			"Interest Coding" => true
		];
		
		 return json_encode($biodata);
	}

	file_put_contents('json.json', fungsi());
	header("Location: json.json");

 ?>