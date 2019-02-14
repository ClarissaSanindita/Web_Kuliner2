
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    @font-face {
      src: url(../assets/font/tayo.ttf);
      font-family: tayo;
    }
    @font-face {
      src: url(../assets/font/hiya.ttf);
      font-family: aa;
    }

    h1{
      font-family: aa;
      text-align: center;
      margin-top: -5px;
      margin-bottom: 30px;
    }
    </style>
  </head>
  <body>
    <h1>Daftar Makanan Kami</h1>
    <div class="container" style="background-color:white;">

    </div>
    <div class="container-fluid" style="background-color:white">
    		<?php foreach($tampil_makanan as $tb):?>
                          	<div class="col-md-4 col-sm-4 mb" >
                          		<div class="white-panel pn" style="margin:20px;width:auto;height:350px;">
                          			<div class="white-header" style="color:black!important;background-color:orange !important;font-weight:bold!important;">
    						  			<h5 style="background-color:white; font-size:20px; font-family:tayo;"><?=$tb->nama_makanan?></h5>
                          			</div>
    								<div class="row">
    									<div class="col-sm-6 col-xs-6 goleft">
    										<p><i class="fa fa-heart"></i> Stok makanan <?=$tb->stok?></p>
    									</div>

    	                      		</div>
    	                      		<div class="centered">
    										<img src="<?=base_url('assets/img/')?><?=$tb->foto_cover?>" width="160" height="160">
    	                      		</div>
    								  <div class="white-header" style="height:auto;margin-top:40px;color:black!important;">
    								  <h3><?="Rp. ".number_format($tb->harga,0,",",".")?></h3>
                          			</div>
                          		</div>

                          	</div>
    		<?php endforeach ?>
    </div>

  </body>
</html>
