<?php
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
class ModelToolCapture404Occurrence extends Model {
	public function get404Occurrences($sort,$order,$start,$limit) {
		$q="select * from ".DB_PREFIX."capture_404_occurrence order by $sort $order limit $start,$limit";
		$query=$this->db->query($q);
		return $query->rows;
	}
		
	public function delete404Occurrence($capture_404_occurrence_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "capture_404_occurrence WHERE id = '" . (int)$capture_404_occurrence_id . "'");
	}

	
	public function getTotal404Occurrence() {
		$sql = "SELECT COUNT(*) AS total FROM " . DB_PREFIX . "capture_404_occurrence";

		$query = $this->db->query($sql);

		return $query->row['total'];
	}
}
