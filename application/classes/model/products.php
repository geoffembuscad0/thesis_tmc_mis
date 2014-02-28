<?php // GE December 27 2013 updated
class Model_Products extends Model_Database
{
	public function get_color_swatches()
	{
		return DB::select()->from('crm_cs')->execute();
	}
	
	public function get_products()
	{
		$datas = array();
		$counted_data = 0;		
		foreach(DB::query(DATABASE::SELECT, "SELECT * FROM crm_products ORDER BY product_no ASC")->execute()->as_array() AS $product)
		{
			$datas[$counted_data]['product_no']		= $product['product_no'];
			$datas[$counted_data]['product_name']	= $product['product_name'];
			$datas[$counted_data]['description']	= $product['description'];
			$datas[$counted_data]['price']			= $product['price'];
			$datas[$counted_data]['filename']		= $product['filename'];
			$datas[$counted_data]['scores']			= $this->get_product_overall_score($product['product_no']);
			$counted_data++;
		}
		return $datas;
	}
	public function get_product_overall_score($product_no = 0)
	{
		return DB::query(DATABASE::SELECT, "SELECT ROUND(AVG(score)) AS overall FROM crm_product_scores WHERE product_no = '".$product_no."'")->execute()->as_array();
	}
	public function get_simple_products()
	{
		return DB::query(DATABASE::SELECT, "SELECT product_name, price FROM crm_products ORDER BY product_no ASC")->execute()->as_array();
	}
	
	public function get_overall_rate($product_no)
	{
		return DB::query(DATABASE::SELECT, "SELECT ROUND(AVG(score)) AS overall FROM crm_product_scores WHERE product_id = '".$product_no."'")->execute();
	}
	
	public function set_product_score($data = array())
	{
		DB::query(DATABASE::INSERT, "INSERT INTO crm_product_scores VALUES(null,'".$data['score']."','".$data['ip']."',NOW(),'".$data['product_id']."')")->execute();
	}

}
