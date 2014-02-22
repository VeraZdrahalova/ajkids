          <form role="form">
            <div class="row posuntop90">
              <div class="form-group col-md-4">
                <label for="nameword">Slovíčko : </label>
                <input type="text" name="name-word" class="form-control font-size16" id="nameword" placeholder="Jedno-slovo">
              </div>
              <div class="form-group col-md-6">
              </div>                                                          
              <div class="form-group col-md-2 hover3" id="active1">
                <br/>
                <button type="button" name="delete" class="btn btn-danger delete-button "  >Smazat slovíčko</button>               
              </div>
            </div>            <!-- end of row -->            
            <br/>
            <div class="row" >
              <div class="form-group col-md-4">
                <label for="namewordcz">Slovíčko česky : </label>
                <input type="text" name="name-word-cz" class="form-control font-size16 margin-bottom-7" id="namewordcz" >
                <label for="newsound" >Vložit zvukový soubor : </label>
                <input type="file" src="#" name="new-sound" class="form-control font-size16" id="newsound" >
              </div>             
              <div class="form-group col-md-4">
                <label for="datenewword">Datum vložení nového slovíčka : </label>
                <input type="date" name="date-new-word" class="form-control font-size16 margin-bottom-7" id="datenewword" >
                <label for="newimage" >Vložit nový obrázek : </label>
                <input type="file" src="#" name="new-image" class="form-control font-size16" id="newimage" >                            
              </div>
              <div class="form-group col-md-2 " >
                <label for="topicalimage" >Vybraný obrázek : </label>
                <input type="text" src="#" name="topical-image" class="form-control image-word" id="topicalimage" readonly />
              </div>
              <div class="form-group col-md-2 hover4"> 
                <br/><br/><br/><br/>                              
                <button type="submit" class="btn btn-default button-odeslat">Odeslat</button>
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
                <label for="label2"> Vyber téma : </label>
                <div  class="checks-border" id="label2">
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
                </div>          <!-- end of class="checks-border"  -->
              </div>      <!-- end of class="col-md-4"  -->     

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
              </div>
            </div>        <!-- end of row -->
         </form>        