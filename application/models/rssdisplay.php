<?php
class RssDisplay extends Model{

  protected $db;
  protected $feed_url;
  protected $num_feed;

  public function __construct($url){

    parent::__construct();
    $this->feed_url = $url;
  }

  public function getFeedItems($num_feed_items=0) {

    $this->num_feed = $num_feed_items;
    $rss = simplexml_load_file($this->feed_url);
    $x = 0;
    $rss_work = array();
    if($this->num_feed > 0) {
      foreach($rss->channel->item as $data) {
        $rss_work[] = $data;
        if($x >= ($this->num_feed - 1)) {
          break;
        }
        $x++;
      }
      return $rss_work;
    }
    else {
      return $rss;
    }

  }

  public function getChannelInfo() {

    $rss = simplexml_load_file($this->feed_url);
    return ($rss->channel);
  }
  
}

?>
