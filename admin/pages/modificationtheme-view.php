
          <form role="form" method="POST">
            <div class="row posuntop90">
              <div class="form-group col-md-4">
                <label for="nametheme">Jméno téma : </label>
                <input type="text" name="name-theme" class="form-control font-size16" id="nametheme" value="<?php echo $theme['name'] ?>">
              </div>
              <div class="form-group col-md-6">
                <br/><br/>
              </div>              
              <div class="form-group col-md-2 hover3" id="active1">
                <br/>
                <button type="submit" name="action" class="btn btn-danger delete-button" value="delete" >Smazat téma</button>               
              </div>
            </div>            <!-- end of row -->            
            <br/>
            <div class="row" >
              <div class="form-group col-md-4 " >
                <label for="newword" >Vložit nový obrázek : </label>
                <input type="file" src="#" name="new-image" class="form-control font-size16" id="newimage" >
                <br />
                <label for="datenewtheme">Datum vložení nového videa : </label>
                <input type="date" name="date-new-theme" class="form-control font-size16" id="datenewtheme" value="<?php echo $theme['date'] ?>">
              </div>  
              <div class="form-group col-md-4 " >
                <label for="topicalimage" >Vybraný obrázek : </label>
                <input type="text" src="#" name="topical-image" class="form-control image-theme" id="topicalimage" readonly />                
              </div>
              <div class="form-group col-md-2">
                <br/><br/>
              </div>                          
              <div class="form-group col-md-2 hover4">
                <br/><br/><br/><br/><br/>
                <button type="submit" class="btn btn-default button-odeslat" name="action" value="<?php if (isset ($theme['id'])) echo 'update'; else echo 'insert'; ?>" >Odeslat</button>
              </div>  
            </div>            <!-- end of row -->

            <div class="row" >
              <div class="col-md-4 " >
                <label for="label1"> Vyber video : </label>
                <div  class="checks-border" id="label1">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-video1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-video2"  type="checkbox" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-video3" type="checkbox" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-video4" type="checkbox" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-video5" type="checkbox" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div>
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-video6"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-video7"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-video8"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;video x 
                    </label>
                  </div >
                </div>            <!-- end of class="checks-border"  -->
              </div>              <!-- end of class="col-md-4"  -->  
           
              <div class="col-md-4" >
                <label for="label2"> Vyber slovíčka : </label>
                <div  class="checks-border" id="label2">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko2"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko3" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko4" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko5" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko6"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko7"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko8"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko9"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko10"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
				  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko2"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko3" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko4" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko5" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko6"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko7"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko8"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko9"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko10"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
				  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko2"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko3" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko4" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko5" type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div>
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko6"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko7"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko8"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko9"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko10"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
	            </div>          <!-- end of class="checks-border"  -->
              </div>			<!-- end of class="col-md-4"  -->
              
              <div class="form-group col-md-4">
                <label for="label3"> Vyber písničku : </label>
                <div  class="checks-border" id="label3">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-song1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Písnička x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-song2"  type="checkbox" >
                      &nbsp;&nbsp;Písnička x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-song3" type="checkbox" >
                      &nbsp;&nbsp;Písnička x 
                    </label>
                  </div>
                </div>          <!-- end of class="checks-border"  -->              			
              </div>            <!-- end of class="col-md-4"  -->                
            </div>        <!-- end of row -->
          </form>        