

<div class="row">



<!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <!-- push-5 -->
    <div class="large-7 large-push-5 columns">

        <form method='POST' action=''>
            <fieldset>
                <legend>Ajouter un point d'interet</legend>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="type_input" class="right"> Type </label>
                    </div>
                    <div class="small-6 columns">
                        <select id="type_select" name="type" required="required">
                            <option value="parc">Parc</option>
                            <option value="musee">Musée</option>
                            <option value="autres">Autres</option>
                        </select>
                    </div>
                    <div class="small-1 columns">
                        <i id="save_point"  class="fa fa-save fa-2x right"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="name_input" class="right"> Nom </label>
                    </div>
                    <div class="small-6 columns">
                        <input id="name_input" type="text" name="name" required="required"/>
                    </div>
                    <div class="small-1 columns"></div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="price_input" class="right"> Prix </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="price_input" type="text" name="price"/>
                    </div>
                    <div class="small-1 columns"><i class="fa fa-eur"></i></div>
                    <div class="small-5 columns"></div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="date_input" class="right"> Date ouverture </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="date_input"  type="text" name="date" placeholder="JJ/MM/YYYY"/>
                    </div>
                    <div class="small-4 columns"></div>

                    <!-- <i id="datepickerImage" class="fa fa-calendar fa-2x"></i> -->

                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="location_input" class="right"> Position </label>
                    </div>
                    <div class="small-8 columns">
                        <input id="location_input" type='text' name='location' required="required"/>

                    </div>
                    <i id="add_location_link"  class="fa fa-plus-circle fa-2x"></i>
                    <div class="small-1 columns">

                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="dragandrop" class="right"> Photo(s) </label>
                    </div>
                    <div class="small-9 columns">
                        <div id="dragandrop">Glissez vos photos ici</div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label id="dialog_video" for="http_title" class="right"> Vidéo </label>
                    </div>
                    <div id="dialog" title="Aide">
                        <p>Vous pouvez coller le lien ici et le tester.</p>
                    </div>
                    <div class="small-8 columns">
                        <input id="video_input" type="text" name="video" placeholder="http://" />
                    </div>
                    <i id="add_video_link"  class="fa fa-plus-circle fa-2x"></i>
                    <div class="small-1 column"></div>

                </div>


                <div class="row">
                    <div class="small-3 columns">
                        <label for="description_input" class="right"> Description </label>
                    </div>
                    <div class="small-9 columns">
                        <textarea id="description_input" rows="4" cols="45" name="description" required="required"/></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="rating" class="right"> Note </label>
                    </div>
                    <div class="small-9 columns">
                        <span class="rating"></span>
                        <div id="rating"/></div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-7 columns"></div>
                    <div class="small-2 columns">
                        <input type="hidden" name="send" value="1" />
                        <input class="button" type="submit"/>
                    </div>
                </div>
            </fieldset>
        </form>


    </div>


    <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <!-- pull-7 -->
    <div class="large-5 large-pull-7 columns">
        <div class="flex-video" id="map-canvas" >
        </div>
        <div id="location_cpt_div">2</div>
        <div id="id_location_div"></div>
        <div class="flex-video">
            <iframe src="//www.youtube.com/embed/VcoiUt6KpZU" frameborder="0" allowfullscreen></iframe>
        </div>

    </div>

</div>
