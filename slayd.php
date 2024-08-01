<div class="slider-container rev_slider_wrapper" style="height: 650px;">
	<div id="revolutionSlider" class="slider rev_slider manual">
		<ul>
			<?php 
			$say=0;
			$slaydSorgu=$db->prepare("SELECT * FROM slaydlar ORDER BY slayd_sira ASC");
			$slaydSorgu->execute();
			while($slaydCek=$slaydSorgu->fetch(PDO::FETCH_ASSOC)){
				if($slaydCek['slayd_status']=="1"){$say++;
					?>
					<li data-transition="zoom" data-title="<?php echo $slaydCek['slayd_ad']; ?>" data-thumb="<?php echo substr($slaydCek['slayd_yol'],6); ?>">

						<img src="<?php echo substr($slaydCek['slayd_yol'],6); ?>"  
						alt=""
						data-bgposition="center center" 
						data-bgfit="cover" 
						data-bgrepeat="no-repeat"
						class="rev-slidebg">
						<?php 
						if($say==1){ ?>
							<div class="tp-caption main-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="-205"
							data-start="1000"
							style="z-index: 5; font-size: 40px;"
							data-transform_in="y:[-300%];opacity:0;s:500;">AzCoder</div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="-145"
							data-start="1500"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Web Saytlar</div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="-100"
							data-start="1800"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Haqqımızda hər şey</div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="-55"
							data-start="2100"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Web saytların hazırlanması</div>

							

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="-10"
							data-start="2400"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i>Müxtəlif Xidmətlər </div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="35"
							data-start="2700"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Bloq</div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="80"
							data-start="3000"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> Bizimlə birbaşa əlaqə</div>

							<div class="tp-caption tp-caption-overlay-opacity bottom-label"
							data-x="right" data-hoffset="100"
							data-y="center" data-voffset="125"
							data-start="3300"
							data-transform_in="x:[-100%];opacity:0;s:500;"><i class="fa fa-check"></i> FAQ</div>
						<?php } ?>		
					</li>
				<?php }} ?>
			</ul>
		</div>
	</div>