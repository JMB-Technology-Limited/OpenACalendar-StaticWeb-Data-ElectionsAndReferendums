<?php

foreach(explode("\n", file_get_contents(__DIR__.'/balletopedia2016data.txt')) as $line) {
	if (trim($line)) {
		$lineBits = explode("\t", $line);
		
		// Add Area
		$folder = __DIR__.'/data/us/'.strtolower(trim($lineBits[0]));
		if (!is_dir($folder)) {
			mkdir ($folder);
			$out = "[area]\n";
			$out .= 'slug="'.strtolower(trim($lineBits[0])).'"'."\n";
			$out .= 'title="'.trim($lineBits[0]).'"'."\n";
			file_put_contents(__DIR__.'/data/us/'.strtolower(trim($lineBits[0])).'/data.ini', $out);
		}
		
		
		$slug = strtolower("us-".strtolower(str_replace(' ','-',trim($lineBits[0])))."-".trim(str_replace(' ','-',strtolower(trim($lineBits[3]))))."-2016");

		$out = "[event]\n";
		$out .= 'slug="'.$slug.'"'."\n";
		$out .= 'title="'.trim($lineBits[0]).' '.trim($lineBits[3]).'"'."\n";
		$out .= 'description="'.trim($lineBits[0]).' '.trim($lineBits[3]).' '.trim($lineBits[4]).'"'."\n";
		$out .= 'url="https://ballotpedia.org/Important_dates_in_the_2016_presidential_race"'."\n";
		$out .= 'start="'.$lineBits[1].' 09:00:00"'."\n";
		$out .= 'end="'.$lineBits[1].' 17:00:00"'."\n";
		file_put_contents(__DIR__.'/data/us/'.strtolower(trim($lineBits[0])).'/2016_'. trim(str_replace(' ','_',strtolower(trim($lineBits[3])))).'.ini', $out);
		
		
		
	}
}