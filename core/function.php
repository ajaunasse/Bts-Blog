<?php
function debug($var)
{
	if(Conf::$debug>0)
	{
		$debug = debug_backtrace() ;
	echo '<p><a href="#" onclick="$(this).parent().next(\'ol\').slideToggle(); return false ;"><strong> '.$debug[0]['file'].'</strong>
	l.'.$debug[0]['line'].'</a></p>';
	echo '<ol style="display:none">' ;
	foreach ($debug as $k=>$v)
	{
		if($k>0)
		{
			echo '<li> <strong> '.$v['file'].'</strong>
	l.'.$v['line'].'</li>';
		}
	}
	echo '</ol>' ;
	echo '<pre>' ;
	print_r($var) ;
	echo '</pre>' ;
	}	
}

function parseDate($date)
{
	$monthsName = array(
		'Janvier',
		 'Fevrier',
		'Mars',
		'Avril',
		'Mai',
		 'Juin',
		 'Juillet',
		 'Aout',
		'Septembre',
		 'Octobre',
		 'Novembre',
		'Décembre'
		);
$monthsNum = array ('1','2','3','4','5','6','7','8','9','10','11','12') ;
	$split 	= explode('-', $date) ;
	$year 	= $split[0] ;
	$month	= $split[1] ;
	$day 	= $split[2] ;
	$day	= substr($day, 0,2) ;
	 if (substr($month,0,1) == '0')
	{
	$month 	= substr($month, 1, 2) ;
	}

	for ($i=0 ; $i< sizeof($monthsNum); $i++)
	 {
		
		if ($monthsNum[$i] == $month)
		{
			$month = $monthsName[$i];
		}
	}

	$date= $day.' '.$month.' '.$year ;
	return $date ;
}

function count_words($string) {
    // Return the number of words in a string.
    $string= str_replace("&#039;", "'", $string);
    $t= array(' ', "\t", '=', '+', '-', '*', '/', '\\', ',', '.', ';', ':', '[', ']', '{', '}', '(', ')', '<', '>', '&', '%', '$', '@', '#', '^', '!', '?', '~'); // separators
    $string= str_replace($t, " ", $string);
    $string= trim(preg_replace("/\s+/", " ", $string));
    echo $string ;
    $num= 0;
    if (my_strlen($string)>0) {
        $word_array= explode(" ", $string);
        $num= count($word_array);
    }
    return $num;
}
function my_strlen($s) {
    // Return mb_strlen with encoding UTF-8.
    return mb_strlen($s, "UTF-8");
}
