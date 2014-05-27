<?php
if(realpath(__FILE__) === realpath($_SERVER["SCRIPT_FILENAME"]))
	exit("Do not access this file directly.");

$v = '%%v%%';
$dimensions = '';

switch($v)
{
	case 'v2':
		$dimensions = 'width="180" height="58"';
		break;
	case 'v3':
		$dimensions = 'width="80" height="15"';
		break;
	default:
		$dimensions = 'width="200" height="55"';
		break;
}
?>

<div class="ws-plugin--s2member-s-badge">
	<a href="http://www.s2member.com/" onclick="window.open('http://www.s2member.com/s-badges/s-details.php?v=%%v%%&amp;site_url=%%site_url%%%%no_cache%%%%display_on_failure%%', '_popup', 'width=770,height=720,left='+((screen.width/2)-(770/2))+',screenX='+((screen.width/2)-(770/2))+',top='+((screen.height/2)-(720/2))+',screenY='+((screen.height/2)-(720/2))+',location=0,menubar=0,toolbar=0,scrollbars=0,resizable=1'); return false;" title="s2Member&reg;"><img src="//www.s2member.com/s-badges/s-badge.php?v=%%v%%&amp;site_url=%%site_url%%%%no_cache%%%%display_on_failure%%" style="border:0;" alt="s2Member&reg;" <?php echo $dimensions; ?> title="<?php echo esc_attr(_x("s2Member&reg; ( Security for WordPress&reg; )", "s2member-front", "s2member")); ?>" /></a>
</div>