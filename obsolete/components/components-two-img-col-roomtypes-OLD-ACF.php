<?php

    $rooms = get_field('rooms');
    if ($rooms) {
        foreach ($rooms as $room) {
        echo '
        <section class="acc-two-col">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">

                            <div class="col-md-6 ">
                                <img class="img-responsive" src="' . $room['left-main-img'] . '">
                                <h3 class="acc-two-heading">' . $room['left-heading'] . '</h3>
                                <ul class="acc-bullet-list">' . $room['left-list'] . '</ul>
                                                                  <a href="#" class="" data-toggle="modal" data-target="#condolet">


                                   <img class="img-responsive bottom" src="' . $room['left-img'] . '">
                                   </a>
                                           <div class="modal fade" id="condolet" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">


                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h3 class="modal-title">Floorplans</h3>
                                              </div>
                                              <div class="modal-body">
                                                <div class="tabbable">
                                                 <!-- Only required for left/right tabs -->
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1" data-toggle="tab"><h3>Condolets</h3></a></li>
                                                        <li><a href="#tab2" data-toggle="tab"><h3>Vintage Cottages</h3></a></li>
                                                        <li><a href="#tab3" data-toggle="tab"><h3>Cedar Lodge Rooms</h3></a></li>
                                                        <li><a href="#tab4" data-toggle="tab"><h3>Briar Creek Chalet</h3></a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab1">
                                                        <img class="img-responsive" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/condolets_3x.png">
                                                        </div>
                                                        <div class="tab-pane active" id="tab2">
                                                            <img class="img-responsive" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/willowcreek@3x.png.png">
                                                        </div>
                                                        <div class="tab-pane active" id="tab3">
                                                            <img class="img-responsive" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/cedar_3x.png">
                                                        </div>
                                                        <div class="tab-pane active" id="tab4">
                                                            <img class="img-responsive" src="https://lakearrowheadconferencecenter.ucla.edu/wp-content/uploads/2017/05/condolets_3x.png">
                                                        </div>
                                                    </div>
                                                  </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                              </div>
                                            </div><!-- /.modal-content -->
                                          </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->



                            </div>
                                <div class="col-md-6 ">
                                <img class="img-responsive" src="' . $room['right-main-img'] . '">
                                <h3 class="acc-two-heading">' . $room['right-heading'] . '</h3>
                                <ul class="acc-bullet-list">' . $room['right-list'] . '</ul>
                                 <img class="img-responsive bottom" src="' . $room['right-img'] . '">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>';

    }
}
?>


