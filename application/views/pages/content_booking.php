<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		span.stars, span.stars>* {
		    display: inline-block;
		    background: url(http://i.imgur.com/YsyS5y8.png) 0 -16px repeat-x;
		    width: 80px;
		    height: 16px;
		}
		span.stars>*{
		    max-width:80px;
		    background-position: 0 0;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="width: 80%;">
		<br>
		<div class="row">
			<div class="col-lg-4">
				<div class="ibox animated fadeInLeftBig" >
                    <div class="ibox-content">
                    	Urutkan hasil pencarian lapangan <br>
                    	<div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> harga tertinggi </label></div>
                    	<div class="i-checks"><label> <input type="radio" checked="" value="option2" name="a"> <i></i> harga terendah </label></div>
                    	<div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> popularitas </label></div>
                    </div>
            	</div>
			</div>

			<div class="col-lg-8">
				<div class="ibox animated fadeInRightBig" >
					<div class="row">
	                	<div class="form-group">
		                    <input type="text" placeholder="Search lapangan ..." class="form-control" name="top-search" id="top-search">
		                </div>
                 	</div>
                 	<div class="row">

                            <table class="footable table" data-page-size="15">
                                <tbody>
									<?php foreach ($hasil_lapangan as $key => $value) {  ?>
		                                <tr>
		                                    <div class="ibox">
		                        				<div class="ibox-content animated fadeInDown">
		                        					<div class="row">
		                        						<div class="col-lg-3">
							                                <div class="product-photo" style="width: 140px;height: 150px;background: url('<?php echo base_url().$value['picture']; ?>') center no-repeat;background-size:cover; "></div>
							                            </div>
							                            <div class="col-lg-5">
							                                <h3><?php echo $value['nama']; ?></h3>
							                                <div>
							                                	<a href="" style="font-size: 8pt;margin-bottom: 20px;"><span class="glyphicon glyphicon-map-marker"></span><?php echo $value['daerah']; ?></a>
							                                </div>

							                                <div style="margin-top: 9px;">
							                                	<span class="stars"><?php echo $value['rating']; ?></span>
							                                </div>
							                            </div>
							                            <div class="col-lg-4" >
							                                <span>
								                                mulai dari
								                            </span>
								                            <h2 class="font-bold" style="color: #F77825;">Rp. 
								                                <?php echo number_format($value['harga_mulai']); ?><small style="color: #36BBA6;"><b>/jam</b></small>
								                            </h2>
								                            <br>
								                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Lihat Lapangan</strong></button>
							                            </div>
		                        					</div>
		                        				</div>
		                        			</div>
		                                </tr>
									<?php } ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <ul class="pagination pull-right"></ul>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                 	</div>
				</div>
			</div>
		</div>

	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript">
		$.fn.stars = function() {
		    return this.each(function(i,e){$(e).html($('<span/>').width($(e).text()*16));});
		};

		$('.stars').stars();

	</script>
</body>
</html>
