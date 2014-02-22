          <form role="form" method="POST">
            <div class="row posuntop90">
              <div class="form-group col-md-4">
                <label for="namesong" tabindex="1" >Jméno písničky : </label>
<<<<<<< HEAD
                <input type="text" name="name-song" class="form-control" id="namesong" >
=======
                <input type="text" name="name-song" class="form-control font-size16" value="<?php echo $song['name'] ?>" id="namesong" >
>>>>>>> 5f3d4986c27d676cc43d52a49c84f90c53db0903
              </div>
              <div class="form-group col-md-6">
                <br/><br/>
              </div>              
              <div class="form-group col-md-2 hover3" id="active1">
                <br/>
                <button type="submit" name="action" value="delete" class="btn btn-danger delete-button" tabindex="0" >Smazat písničku</button>               
              </div>
            </div>            <!-- end of row -->                    
            <br/>
            <div class="row" >
              <div class="form-group col-md-4" >
                <label for="newsong" >Vložit písničku : </label>
                <input type="file" src="#" name="new-song" class="form-control margin-bottom-7" id="newsong" tabindex="2" >
               <label for="datenewsong">Datum vložení nové písničky : </label>
<<<<<<< HEAD
                <input type="date" name="date-new-song" class="form-control" id="datenewsong" tabindex="4">
=======
                <input type="date" name="date-new-song" class="form-control font-size16" id="datenewsong" value="<?php echo $song['date'] ?>" tabindex="4">
>>>>>>> 5f3d4986c27d676cc43d52a49c84f90c53db0903
              </div>
              <div class="form-group col-md-4 padding-top-64" >
                
                <label for="newimage" " >Vložit nový obrázek : </label>
                <input type="file" src="#" name="new-image" class="form-control" id="newimage" tabindex="3" >  
              </div>  
              <div class="form-group col-md-2">
                <label for="topicalimage" >Vybraný obrázek : </label>
                <input type="text" src="#" name="topical-image" class="form-control image-word" id="topicalimage" readonly tabindex="0" />
              </div>
              <div class="form-group col-md-2 hover4">                               
                <br/><br/><br/><br/>
                <button type="submit" name="action" class="btn btn-default button-odeslat" value="<?php if (isset($song['id'])) echo 'update'; else echo 'insert'; ?>" >Odeslat</button>
              </div>
            </div>            <!-- end of row -->

            <div class="row" >
              <div class="col-md-4" >
                <label for="label1"> Vyber téma : </label>
                <div  class="checks-border" id="label1">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-tema1"  type="checkbox" >
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
                      <input name="vyber-tema6"  type="checkbox" >
                      &nbsp;&nbsp;Téma x 
                    </label>
                  </div >
                </div>          <!-- end of class="checks-border"  -->
              </div>      <!-- end of class="col-md-4"  -->     
           
              <div class="col-md-4" >
                <label for="label1"> Vyber slovíčka : </label>
                <div  class="checks-border" id="label1">
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko6"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko7"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko8"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko9"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko10"  type="checkbox" >
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
				  <div class="checks-label" >
                    <label class="checks-label"> 
                      <input name="vyber-slovicko1"  type="checkbox">
                      &nbsp;&nbsp;Slovíčko x 
                    </label>
                  </div >
                </div>          <!-- end of class="checks-border"  -->
              </div>      <!-- end of class="col-md-4"  -->              
            </div>        <!-- end of row -->     
          </form>        
          