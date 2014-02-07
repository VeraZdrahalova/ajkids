         
          <form role="form" method="POST">
            <div class="row posuntop90">
              <div class="form-group col-md-4">
                <label for="namevideo">Jméno videa : </label>
                <input type="text" name="name-video" class="form-control font-size16" id="namevideo" value="<?php echo $video['name'] ?>" >
              </div>
              <div class="form-group col-md-6">
                <br/><br/>
              </div>
              <div class="form-group col-md-2 hover3" id="active1">
                <br/>
                <button type="submit" name="action" value="delete" class="btn btn-danger delete-button "  >Smazat video</button>               
              </div>
            </div>            <!-- end of row -->
            <br/>
            <div class="row ">
              <div class="form-group col-md-12 " >
                <label for="urlvideo" >URL videa : </label>
                <input type="text" name="url-video" class="form-control font-size16" id="urlvideo" placeholder="Vložit celý &lt;iframe .....&gt; &lt;/iframe&gt; jako na příkladu níže" value="<?php echo $video['url'] ?>">
                <span class="help-block black"> &nbsp;Příklad: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;iframe width="560" height="315" src="http://www.youtube-nocookie.com/embed/rnV4EEKXw-g?rel=0" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;</span>
              </div>
            </div>            <!-- end of row -->

            <div class="row ">
              <div class="col-md-4 " >
                <label for="label1"> Vyber téma : </label>
                <div  class="checks-border" id="label1">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema1"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-tema2"  type="checkbox" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-tema3" type="checkbox" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-tema4" type="checkbox" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div>
                  <div >
                    <label class="checks-label"> 
                      <input name="vyber-tema5" type="checkbox" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div>
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema6"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema7"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema8"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema"  type="checkbox" class="font-size16" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                </div>            <!-- end of class="checks-border"  -->
              </div>              <!-- end of class="col-md-4"  -->  
           
              <div class="col-md-4" >
                <label for="label1"> Vyber slovíčka : </label>
                <div  class="checks-border" id="label1">
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
                <label for="datenewvideo">Datum vložení nového videa : </label>
                <input type="date" name="date-new-video" class="form-control font-size16" id="datenewvideo" >
                <br/><br/><br/>
              </div>

              <div class="form-group col-md-2"></div>             
              <div class="form-group col-md-2 hover4">                                
                <button type="submit" class="btn btn-default button-odeslat" name="action" value="<?php if (isset($video['id'])) echo 'update'; else echo 'insert'; ?>">Odeslat</button>
              </div>  
            </div>        <!-- end of row -->
          </form>        