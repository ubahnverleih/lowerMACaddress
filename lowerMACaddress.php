<?
function lowerMAC($macaddr)
{
	$hexarray = explode(':',$macaddr);
	for ($i=0;$i<=5;$i++)
	{
		$decarray[$i] = hexdec($hexarray[$i]);
		$hexarray[$i] = dechex($decarray[$i]);
	}
	$newmac = implode(':',$hexarray);
	return $newmac;
}
?>