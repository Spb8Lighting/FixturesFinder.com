<?php
class Cache {
	public function AjaxSearch($File, $Save=FALSE) {
		global $data;
		$CacheName = CacheFile(_CacheSearch_.'-'.$File)._CacheExt_;
		if($Save) {
			$CacheFile = fopen($CacheName, 'w');
			fwrite($CacheFile, json_encode($Save));
			fclose($CacheFile);
			return TRUE;
		} else {
			if(file_exists($CacheName)) {
				$data = json_decode(file_get_contents($CacheName), true);
				return TRUE;
			} else {
				return FALSE;
			}
		}
	}
	public function CacheHead($File, $Title, $Description) {
		global $title, $description;
		$title = $Title;
		$description = $Description;
		$CacheName = CacheFile($File);
		$CacheNameHead = $CacheName._CacheHead_;
		if(file_exists($CacheNameHead)) {
			require_once($CacheNameHead);
		} else {
			$CacheContent = '<?php'."\n";
			$CacheContent.= '$title = \''.$title.'\';'."\n";
			$CacheContent.= '$description = \''.$description.'\';'."\n";
			$CacheContent.= '?>';
			$CacheFile = fopen($CacheNameHead, 'w');
			fwrite($CacheFile, $CacheContent);
			fclose($CacheFile);
		}
	}
	public function CacheBody($File) {
		global $DMXChartManager;
		$CacheName = CacheFile($File);
		$CacheNameBody = $CacheName._CacheBody_;
		if(file_exists($CacheNameBody)) {
			require_once($CacheNameBody);
		} else {
			ob_start();
			require_once('page.'.$File.'.php');
			$CacheFile = fopen($CacheNameBody, 'w');
				fwrite($CacheFile, ob_get_contents());
				fclose($CacheFile);
			ob_end_flush();
		}
	}
}
?>
