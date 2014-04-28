
    <!-- Main Content Section -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-9 push-3 columns">

        <form method='POST' action=''>
            <fieldset>
                <legend>Ajouter un point d'interet</legend>
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
                        <label for="price_input" class="right"> Coût </label>
                    </div>
                    <div class="small-3 columns">
                        <input id="price_input" type="text" name="price"/>
                    </div>
                    <div class="small-6 columns"></div>
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
                    <div class="small-3 columns">
                        <input id="location_input" type='text' name='location' required="required"/>

                    </div>
                    <a class="various fancybox.iframe" href="http://maps.google.com/?output=embed&amp;f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=London+Eye,+County+Hall,+Westminster+Bridge+Road,+London,+United+Kingdom&amp;hl=lv&amp;ll=51.504155,-0.117749&amp;spn=0.00571,0.016512&amp;sll=56.879635,24.603189&amp;sspn=10.280244,33.815918&amp;vpsrc=6&amp;hq=London+Eye&amp;radius=15000&amp;t=h&amp;z=17">
                        <i class="fa fa-globe fa-2x"></i>
                    </a>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="dragandrop" class="right"> Photo(s) </label>
                    </div>
                    <div class="small-9 columns">
                        <div id="dragandrop">Déposez vos photos ici</div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="http_title" class="right"> Vidéo </label>
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

