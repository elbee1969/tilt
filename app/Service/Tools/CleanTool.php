<?php
// app/Security/CleanTools.php
namespace Service\Tools;

class CleanTool
{
	/**
	 * cleanPost
	 * @param array $_POST
	 * @return array $post
	 */

	public function cleanPost($post)
	{
		$post = array_map('trim', $post);
		$post = array_map('strip_tags', $post);
		return $post;
	}

			public function isAjax()
			{
				if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
		        {
		        	return true;
		        }
		        return false;
			}

			public function slugify($text)
		{
		  // replace non letter or digits by -
		  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

		  // transliterate
		  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

		  // remove unwanted characters
		  $text = preg_replace('~[^-\w]+~', '', $text);

		  // trim
		  $text = trim($text, '-');

		  // remove duplicate -
		  $text = preg_replace('~-+~', '-', $text);

		  // lowercase
		  $text = strtolower($text);

		  if (empty($text)) {
		    return 'n-a';
		  }

		  return $text;
		}


public function deleteextension($filename)
{
		$withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
		return $withoutExt;

}


public function getExtension($path)
{
	$ext = pathinfo($path, PATHINFO_EXTENSION);
	return $ext;
}


}
