<!-- Run Shell Script and Return Result -->
<?php
sleep(1);
$output = shell_exec('sh genre.sh');
//system( "mpg123 -w ../uploads/output.wav ../uploads/upload.mp3" );
//system("y");
//chdir('/var/www/jAudio/');
//system( "java -jar jAudio.jar -s fixedsettings.xml output ../uploads/output.wav" );

//system("sed -i -e '110i @attribute genre {jazz,country,classical,indiefolk,pop,metal,rbhiphop,rock,reggae,electronica}\' output.arff");
//system("sed '112s/$/ ,?,/' output.arff");
//$output = system("java -jar jAudio.jar -s fixedsettings.xml output3.arff ../uploads/output.wav" , $retval);

// Printing additional info

//sleep(80);

$one = substr($output, strpos($output, ":") + 1);
$two = substr($one, strpos($one, ":") + 1);
$three = substr($two, strpos($two, ":") + 1);

$variable = substr($three, 0, strpos($three, " "));
echo $variable;
echo "<br>";

?>
