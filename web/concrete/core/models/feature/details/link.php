<?
defined('C5_EXECUTE') or die("Access Denied.");
class Concrete5_Model_LinkFeatureDetail extends FeatureDetail {

	protected $link;
	protected $feHandle = 'link';


	public function setItemLink($link) {
		$this->link = $link;
	}

	public function getItemLink() {
		return $this->link;
	}

	public static function get($mixed) {
		$fd = new LinkFeatureDetail();
		$fd->setItemLink($mixed->getFeatureDataLink());
		return $fd;
	}

}