<?
$source = imagecreatefromjpeg("template/images/header/$image");
if (!is_dir("template/images/header/thumbs/$i")) mkdir("template/images/header/thumbs/$i");

// Min width
$mini=false;
//echo '<hr>'.$i;

if ($i==480) $mini=true;
if ($i==420) $mini=true;
if ($i==360) $mini=true;

if ($mini==false){ // On traite une image header
	if ($i<=675){ // Si petit, on garde la forme 2:3
		$x=(1500-675) / 3;
		if ($i>500) $output=imagecrop ($source , ['x' => $x, 'y' => 0, 'width' => 675, 'height' => 450] );
		else $output=imagecrop ($source , ['x' => $x, 'y' => 0, 'width' => 675, 'height' => 405] );
		$output=imagescale($output, $i);
	}
	else{ // Si grand, on crop
		$x=(1500-$i) / 3;
		$output=imagecrop ($source , ['x' => $x, 'y' => 0, 'width' => $i, 'height' => 450] );
	}
}

else{ // On traite un mini / micro
	$output=imagescale($source, $i);
}
imagejpeg($output, "template/images/header/thumbs/$i/$image",  83);
?>