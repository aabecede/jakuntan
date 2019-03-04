<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {

	public function index()
	{
		#$data = array('1','2','3','4','5','6');#,'7','8','9','10','11','12','13','14');
		$data = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14');
		echo "Matrik Normal<br>";
		$result_matrix = $this->matrix($data);
		echo '<br>Matrik Transpose<br>';
		$result_matrix_transpose =$this->matrixtranspose($data);
		#echo $result_matrix;
		#$this->pre($result_matrix);
		#$this->pre($result_matrix_transpose);
		#echo '<br> INi matrik 2';
		echo 'Perkalian matrix<br>';
		$result = $this->perkalianmatrix($result_matrix,$result_matrix_transpose);

	}

	public function matrixtranspose($data)
	{
		# code...
		$no_m1 =0;
		$no=0;
		while ($no_m1<2) {
			# code...
			$no_m2=0;
			while ($no_m2<count($data)/2) {
				# code...
				$resulttranspose[$no_m2][$no_m1] = $data[$no];
				#echo $resulttranspose[$no_m2][$no_m1];
								
				$no++;
				$no_m2++;
			}
			#echo '<br>';
			$no_m1++;
		}

		$i=0;
		while ($i<count($resulttranspose)) {
			# code...
			$j=0;
			while ($j<count($resulttranspose[$i])) {
				# code...
				echo $resulttranspose[$i][$j];
				$j++;
			}
			echo '<br>';
			$i++;
		}
		
		


		#$this->pre($resulttranspose);
		return $resulttranspose;
		
	}

	public function matrix($data)
	{
		# code...
		$no_m1 =0;
		$no=0;
		while ($no_m1<2) {
			# code...
			$no_m2=0;
			while ($no_m2<(count($data)/2)) {
				# code...
				$matrix2[$no_m1][$no_m2] = $data[$no];
				echo $matrix2[$no_m1][$no_m2];
				$no++;
				$no_m2++;
			}
			echo '<br>';
			$no_m1++;
		}
		return $matrix2;
		#$this->pre($matrix2);
	}

	function pre($var){
		echo '<pre>';
		print_r($var);
		echo '</pre>';
	}

	function perkalianmatrix($normal,$transpose){
		
		$hasil = array();
		for ($i=0; $i<sizeof($normal); $i++) {
			for ($j=0; $j<sizeof($transpose[0]); $j++) {
				$temp = 0;
				for ($k=0; $k<sizeof($transpose); $k++) {
					$temp += $normal[$i][$k] * $transpose[$k][$j];
				}
				$hasil[$i][$j] = $temp;
			}
		}
		return $hasil;
		#echo $transpose[0][1];
		#$this->pre($hasil);

	}


}

/* End of file Coba.php */
/* Location: ./application/controllers/Coba.php */