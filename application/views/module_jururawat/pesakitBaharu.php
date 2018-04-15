<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jururawat | Tambah Pesakit @ <?php echo $app_title; ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php $this->load->view('include/stylesheet');?>

    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
</head>

<body>
<!--</div>-->

<div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="<?php echo base_url();?>plugins/img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div>
    <div class="bg-dark" id="wrap">

        <?php $this->load->view('module_jururawat/nav'); ?>

        <div id="content" class="bg-container">
          <header class="head">

              <div class="main-bar">
                  <div class="row">
                      <div class="col-lg-6">
                          <h4 class="nav_top_align">
                              <i class="fa fa-plus"></i>
                              Tambah Pesakit
                          </h4>
                      </div>

                  </div>
              </div>
            </header>

          <div class="outer">

            <div class="inner bg-light lter bg-container">

              <!-- Content Body-->
              <div class="row" style="margin:10px;">

                <form action="<?php echo base_url(); ?>jururawat/prosesPesakitBaharu" method="post" enctype="multipart/form-data" class="col-lg-12" id="form-pesakit-baru">

                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Nama Pertama:</label>
                      <input type="text" class="form-control" name="pb-nama1" required/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>Nama Kedua:</label>
                      <input type="text" class="form-control" name="pb-nama2" required/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label>No. IC:</label>
                      <input type="text" class="form-control" name="pb-ic" required/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>Tarikh Lahir:</label>
                      <input type="date" class="form-control" name="pb-tlh" required/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Email:</label>
                      <input type="email" class="form-control" name="pb-em" required/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>No. Telefon:</label>
                      <input type="text" class="form-control" name="pb-tlf" required/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label>No. Mrn:</label>
                      <input type="number" class="form-control" name="pb-mrn" required/>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>Berat (KG):</label>
                      <input type="number" class="form-control" name="pb-brt" required/>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-lg-6">
                      <label>Jantina:</label>
                      <select name="pb-jnt" class="form-control">
                        <option value="" selected>Lelaki</option>
                        <option value="" selected>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-6">
                      <label>No. Insurans:</label>
                      <input type="number" class="form-control" name="pb-ins" required/>
                    </div>
                  </div>

                  <br/>
                  <input type="hidden" value="<?php echo $this->session->userdata('roleID'); ?>" name="pb-jid"/>
                  <input type="hidden" value="" name="pb-umu"/>
                  <input type="hidden" value="" name="pb-umuD"/>
                  <input type="submit" value="Tambah Pesakit" class="btn btn-lg btn-success float-right"/>
                </form>

              </div>

              <!-- /Content Body-->

            </div>

              <!-- /.inner -->
          </div>
        <!-- /.outer -->
        </div>
    <!-- /#content -->
        <div id="right">
            <div class="right_content">
                <div class="alert alert-success white_txt">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Welcome <?php echo $this->session->userdata('firstName'); ?>
                        <br/></strong>
                    Set Your Skin Here. Checkout Admin Statistics. Good Day!.
                </div>
                <div class="well well-small dark">
                    <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                        Skins
                    </h4>
                    <br/>

                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                        <div class="skin_blue skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                        <div class="skin_green skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                        <div class="skin_purple skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                        <div class="skin_orange skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                        <div class="skin_red skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                        <div class="skin_mint skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
                        <div class="skin_brown skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
                        <div class="skin_black skin_size"></div>
                        <div class="skin_black skin_size"></div>
                    </div>
                    <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                    <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                    <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                    <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                    <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                    <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                    <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
                    <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>

                </div>
                <div class="well well-small dark">
                    <h4 class="brown_txt margin15_bottom">
                        <img src="<?php echo base_url();?>plugins/img/admin.jpg" width="32" height="32" class="rounded-circle avatar-img" alt="avatar"> &nbsp;Admin
                        Statistics</h4>
                    <br/>
                    <ul class="list-unstyled">
                        <li class="green_txt margin15_bottom">
                <span class="fa-stack fa-sm">
                    <i class="fa fa-circle fa-stack-2x text-mint"></i>
                    <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                            &nbsp; Last Login
                            <span class="inlinesparkline float-right">2hrs Back</span>
                        </li>
                        <li class="warning_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                    </span>
                            &nbsp; Pending Tasks
                            <span class="dynamicsparkline float-right">12</span>
                        </li>
                        <li class="primary_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-primary"></i>
                      <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span>
                            &nbsp; Weather Today
                            <span class="dynamicbar float-right">Rainy</span>
                        </li>
                        <li class="margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
                    </span>
                            &nbsp; Events
                            <span class="inlinebar float-right">Team Out</span>
                        </li>
                        <li class="success_txt margin15_bottom">
                        <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-success"></i>
                      <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
                    </span>
                            &nbsp; Notifications
                            <span class="inlinebar float-right">5</span>
                        </li>
                    </ul>
                </div>
                <div class="well well-small dark right_progressbar_section">
                    <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                      <i class="fa fa-circle fa-stack-2x text-brown"></i>
                      <i class="fa fa-hand-o-down fa-stack-1x fa-inverse"></i>
                    </span>
                        Alerts
                    </h4>
                    <br/>
                    <span>Sales Improvement</span>
                    <span class="float-right">
                <small>20%</small>
            </span>

                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Server Load</span>
                    <span class="float-right">
                <small>80%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-mint" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>Traffic Improvement</span>
                    <span class="float-right">
                <small>55%</small>
            </span>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- # right side -->
</div>
<!-- /#wrap -->

<!-- global scripts-->
<?php $this->load->view('include/script'); ?>
<!-- end of global scripts-->
</body>
</html>

<?php
  if ($this->session->flashdata('statusTambahPesakit') == 'berjaya') { ?>
  <script type="text/javascript">
    swal("Berjaya!", "<?php echo $this->session->flashdata('statusTambahPesakit'); ?>", "success");
  </script>
<?php }
?>

<?php
  if ($this->session->flashdata('statusTambahPesakit') == 'gagal') { ?>
  <script type="text/javascript">
   swal("Gagal!", "<?php echo $this->session->flashdata('statusTambahPesakit'); ?>", "error");
  </script>
<?php }
?>

<script>

  $(document).ready(function(){

    $("#form-pesakit-baru").submit(function(e){

      var date = $('input[name=pb-tlh]').val();

      var age = moment().diff(date, 'years', true);
      age = Math.floor(age);

      var ageDay = moment().diff(date, 'days', true);
      ageDay = Math.floor(ageDay);

      $('input[name=pb-umu]').val(age);
      $('input[name=pb-umuD]').val(ageDay);

    });

  });

</script>
