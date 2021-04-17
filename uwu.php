<?php

namespace Uwu;

class UwU {
	public function uwu($str) {
		$result = $this->replaceVocal($str);
		$result = $this->replaceConsonant($result);
		return $result;
	}
	public function replaceVocal($str) {
		$vocals = ["a","i","e","o"];

		foreach ($vocals as $vocal) {
			$str = str_replace($vocal, "u", $str);
		}

		return $str;
	}
	public function replaceConsonant($str) {
		$consonants = ["b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","x","y","z"];

		foreach ($consonants as $consonant) {
			$str = str_replace($consonant, "w", $str);
		}

		return $str;
	}
}

