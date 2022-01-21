<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to semenras</title>
<a href="<?php echo site_url('home/login') ?>" class="button" style="margin-bottom: 200px; margin-top: 100px;
                                    margin-left: 600px;">Admin</a>
	</head>
	<h4><span>Obat Terkait</span></h4>
						<?php 
						$sql = "select * from foto_project";
						$result = $this->db->query($sql);
						$i =1;
						foreach ($result->result() as $d){
							if($i==1 || $i==5){
							echo '<ul class="items">';
							}
							echo '<li>
									<a href="'.base_url('project/project/'.$d->idfoto_project).'"> <img src="'.$d->foto.'" style="width:169px;height:168px;" alt="Img">'.$d->idproject.'</a>
							 	 </li>';
							echo '</ul>';
							}
							$i++;
						?>
						</ul>
</html>