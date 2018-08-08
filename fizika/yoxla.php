<?php
/*function date_diff($start, $end="NOW")
{
        $sdate = strtotime($start);
        $edate = strtotime($end);

        $time = $edate - $sdate;
        if($time>=0 && $time<=59) {
                // Seconds
                $timeshift = $time.' seconds ';

        } elseif($time>=60 && $time<=3599) {
                // Minutes + Seconds
                $pmin = ($edate - $sdate) / 60;
                $premin = explode('.', $pmin);
                
                $presec = $pmin-$premin[0];
                $sec = $presec*60;
                
                //$timeshift = $premin[0].' dq '.round($sec,0).' san ';
				$timeshift = $premin[0].' / '.round($sec,0).' / ';

        } elseif($time>=3600 && $time<=86399) {
                // Hours + Minutes
                $phour = ($edate - $sdate) / 3600;
                $prehour = explode('.',$phour);
                
                $premin = $phour-$prehour[0];
                $min = explode('.',$premin*60);
                
                $presec = '0.'.$min[1];
                $sec = $presec*60;

                //$timeshift = $prehour[0].' saat '.$min[0].' dq '.round($sec,0).' san ';
				$timeshift = $prehour[0].' / '.$min[0].' / '.round($sec,0).' / ';

        } elseif($time>=86400) {
                // Days + Hours + Minutes
                $pday = ($edate - $sdate) / 86400;
                $preday = explode('.',$pday);

                $phour = $pday-$preday[0];
                $prehour = explode('.',$phour*24); 

                $premin = ($phour*24)-$prehour[0];
                $min = explode('.',$premin*60);
                
                $presec = '0.'.$min[1];
                $sec = $presec*60;
                
                //$timeshift = $preday[0].' gun '.$prehour[0].' saat '.$min[0].' dq '.round($sec,0).' san ';
				$timeshift = $preday[0].' / '.$prehour[0].' / '.$min[0].' / '.round($sec,0).' / ';

        }
        return $timeshift;
}

// EXAMPLE:

$start_date = "2000-05-10 11:00:00";
$end_date = date("Y-m-d H:i:s");
$cavab = date_diff($start_date, $end_date);
echo "Tarix1: ".$start_date."<br>Tarix2: ".$end_date."<br>Ferq: ".$cavab;

$cavab = explode(" / ", $cavab);
echo "<br><br><br>Gun:".$cavab[0]."<br>Saat: ".$cavab[1]."<br>Deqiqe: ".$cavab[2];*/
$massiv= array(
			verilen1 => 1,
			verilen2 => true,
			verilen3 => "yazi 3"
		);
$json = json_encode($massiv);
echo $json;
?>