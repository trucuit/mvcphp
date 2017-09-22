<?php 
class Helper
{
	public static function cmsButton($id, $link, $icon, $name)
	{
		$xhtml = "<li class='button' id='$id'>
		<a class='modal' href='$link'><span class='$icon'></span>$name</a>
		</li>";
		return $xhtml;
	}
}
?>