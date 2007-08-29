<?php

class ZariliaCache {

	var $path;
	var $lprefix;

	function &getInstance($type) {
		static $obj = null;
		if (!$obj) {
			$obj = array();
		}
		if (!isset($obj[$type])) {
			if (class_exists($className = 'Zarilia'.ucfirst(strtolower($type)))) {
				$obj[$type] = new $className();
			} else {
				$obj[$type] = new ZariliaCache($type);
			}
		}
		return $obj[$type];
	}

	function ZariliaCache($type) {
		if (defined('ZAR_ROOT_PATH')) {
			$this->path = ZAR_ROOT_PATH.'/data/'.$type.'/';
			$this->lprefix = ZAR_ROOT_PATH.'/data/locks/'.$type.'_';		
		} else {
			global $zariliaOption;
			if (@$zariliaOption['isAdmin']) {
				$this->path = '../../data/'.$type.'/';
				$this->lprefix = '../../data/locks/'.$type.'_';
			} elseif (@$zariliaOption['isAjax']) {
				$this->path = '../../../data/'.$type.'/';
				$this->lprefix = '../../../data/locks/'.$type.'_';
			} else {
				$this->path = './data/'.$type.'/';
				$this->lprefix = './data/locks/'.$type.'_';
			}
		}
	}

	function read($id) {
		return substr(file_get_contents($this->path.$id.'.php'),16);
	}

	function write($id, $content='') {
		if ($this->_locked($id)) return false;
		$n = $this->path.$id.'.php';
		if (!file_exists($this->path)) {
			mkdir($this->path);
		}elseif (!is_dir($this->path)) {
			mkdir($this->path);
		}
		if (!($f=fopen($n,(file_exists($n)?'w':'w+')))){
		    return false;
		} else {
		    fwrite($f,'<'.'?php exit(); ?'.'>'."\n".$content);
		    fclose($f);
		    return true;
	    }
	}

	function delete() {
		if ($this->_locked($id)) return false;
		return touch($this->path.$id.'.php');
	}

	function _locked($id) {
		return file_exists($this->lprefix.$id);
	}

	function _lock($id) {
		if ($this->_locked($id)) return false;
		return touch($this->lprefix.$id);
	}

	function _unlock() {
		return unlink($this->lprefix.$id);
	}

}

?>