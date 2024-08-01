 
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kateqoriya
                        </label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          
                          <?php if($xeberCek['xeber_kateqoriya']=="Texnoloji"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Texnoloji">Texnoloji</option>
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Təhsil">Təhsil</option>
                            <option value="Günlük">Günlük</option>
                            <option value="İdman">İdman</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Proqramlaşdırma"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>
                            <option value="Təhsil">Təhsil</option>
                            <option value="Günlük">Günlük</option>
                            <option value="İdman">İdman</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Təhsil"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                           <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>
                            <option value="İdman">İdman</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Günlük"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>
                            <option value="İdman">İdman</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="İdman"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="İdman">İdman</option>
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>                            
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Siyasət"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Siyasət">Siyasət</option>
                            <option value="İdman">İdman</option>
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>                                                  
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Hərbi"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Hərbi">Hərbi</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="İdman">İdman</option>
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>                                                  
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Sənət"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Sənət">Sənət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="İdman">İdman</option>
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>                            
                            <option value="Günlük">Günlük</option>                                                  
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } elseif($xeberCek['xeber_kateqoriya']=="Digər"){ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Digər">Digər</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="İdman">İdman</option>
                            <option value="Günlük">Günlük</option>
                            <option value="Təhsil">Təhsil</option>                            
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Texnoloji">Texnoloji</option>
                            <option value="Sənət">Sənət</option>                            
                            <option value="Günlük">Günlük</option>                                                  
                            <?php } else{ ?>
                          <select name="xeber_kateqoriya" class="form-control">
                            <option value="Texnoloji">Texnoloji</option>
                            <option value="Proqramlaşdırma">Proqramlaşdırma</option>
                            <option value="Təhsil">Təhsil</option>
                            <option value="Günlük">Günlük</option>
                            <option value="İdman">İdman</option>
                            <option value="Siyasət">Siyasət</option>
                            <option value="Hərbi">Hərbi</option>
                            <option value="Sənət">Sənət</option>
                            <option value="Digər">Digər</option>
                          </select>
                          <?php } ?>
                        </div>
                      </div>


