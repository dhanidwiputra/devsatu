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

                                <tr>
                                    <div class="ibox">
                        				<div class="ibox-content animated fadeInDown">
                        					<div class="row">
                        						<div class="col-lg-3">
					                                <div class="product-photo" style="width: 140px;height: 150px;background: url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSBeHo4Yuzyi5RCfR1gaT8RTbQbh-sGfH7b3s384IePErGpycal') center no-repeat;"></div>
					                            </div>
					                            <div class="col-lg-5">
					                                <h3>Lapangan A</h3>
					                                <div>
					                                	<a href="" style="font-size: 8pt;margin-bottom: 20px;"><span class="glyphicon glyphicon-map-marker"></span>Padang</a>
					                                </div>

					                                <div style="margin-top: 9px;">
					                                	<span class="stars">5</span>
					                                </div>
					                            </div>
					                            <div class="col-lg-4" >
					                                <span>
						                                mulai dari 
						                            </span>
						                            <h2 class="font-bold" style="color: #F77825;">
						                                Rp.390,000
						                            </h2>
						                            <br>
						                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Lihat Lapangan</strong></button>
					                            </div>
                        					</div>
                        				</div>
                        			</div>
                                </tr>
                                <tr>
                                    <div class="ibox">
                        				<div class="ibox-content animated fadeInDown">
                        					<div class="row">
                        						<div class="col-lg-3">
					                                <div class="product-photo" style="width: 140px;height: 150px;background: url('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRGbma1oLIrTqHv8D3Kj0mwBTuWamHnF_J9cU7-O-J34VWF8f8G') center no-repeat;"></div>
					                            </div>
					                            <div class="col-lg-5">
					                                <h3>Lapangan B</h3>
					                                <div>
					                                	<a href="" style="font-size: 8pt;margin-bottom: 20px;"><span class="glyphicon glyphicon-map-marker"></span>Padang</a>
					                                </div>

					                                <div style="margin-top: 9px;">
					                                	<span class="stars">5</span>
					                                </div>
					                            </div>
					                            <div class="col-lg-4" >
					                                <span>
						                                mulai dari 
						                            </span>
						                            <h2 class="font-bold" style="color: #F77825;">
						                                Rp.250,000
						                            </h2>
						                            <br>
						                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Lihat Lapangan</strong></button>
					                            </div>
                        					</div>
                        				</div>
                        			</div>
                                </tr>
                                <tr>
                                    <div class="ibox">
                        				<div class="ibox-content animated fadeInDown">
                        					<div class="row">
                        						<div class="col-lg-3">
					                                <div class="product-photo" style="width: 140px;height: 150px;background: url('http://www.brisbanemagicfutsal.com.au/wp-content/uploads/2011/07/club-action-300x225.jpg') center no-repeat;"></div>
					                            </div>
					                            <div class="col-lg-5">
					                                <h3>Lapangan C</h3>
					                                <div>
					                                	<a href="" style="font-size: 8pt;margin-bottom: 20px;"><span class="glyphicon glyphicon-map-marker"></span>Padang</a>
					                                </div>

					                                <div style="margin-top: 9px;">
					                                	<span class="stars">5</span>
					                                </div>
					                            </div>
					                            <div class="col-lg-4" >
					                                <span>
						                                mulai dari 
						                            </span>
						                            <h2 class="font-bold" style="color: #F77825;">
						                                Rp.230,000
						                            </h2>
						                            <br>
						                            <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Lihat Lapangan</strong></button>
					                            </div>	
                        					</div>
                        				</div>
                        			</div>
                                </tr>

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