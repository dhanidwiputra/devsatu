<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {


	public function search_lapangan($daerah,$tanggal,$jam,$durasi)
	{
    		$sql = "SELECT a.nama,a.daerah,a.picture,b.id_tipe,
                (SELECT (SELECT SUM(rating_sum) FROM rating_lapangan WHERE id_lapangan = a.id)
                /(SELECT COUNT(*) FROM rating_lapangan WHERE id_lapangan = a.id)) AS rating,
                (SELECT tarif FROM tipe_lapangan WHERE id_lapangan = a.id ORDER BY tarif ASC LIMIT 1) AS harga_mulai
                FROM lapangan a
                LEFT JOIN tipe_lapangan b ON a.id = b.id_lapangan
                LEFT JOIN rating_lapangan c ON a.id = c.id_lapangan
                WHERE b.id_tipe NOT IN (SELECT id_tipe FROM status_lapangan WHERE tanggal = ? AND jam = ?)
                and daerah like '%' ? '%' or kota like '%' ? '%'
                GROUP BY nama
                order by harga_mulai asc";

        $queryRec = $this->db->query($sql,array($tanggal,$jam,$daerah,$daerah))->result_array();
        return $queryRec;
	}
}
