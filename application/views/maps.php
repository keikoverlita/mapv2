<!DOCTYPE html>

<html>
<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" name="viewport" content="initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo $this->apps->title ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/ico" href="<?php echo base_url()."assets/sidebar/images/logoTelkom_icon.png" ?>" />
    <link href="<?php echo base_url()."assets/" ?>plugins/fontawesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>dist/css/AdminLTE.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>dist/css/skins/_all-skins.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>dist/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/" ?>jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/" ?>js/gritter/css/jquery.gritter.css" />
    <script src="<?php echo base_url('assets/js/jQuery-2.1.3.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
    <script src="<?php echo base_url('assets/js/ajaxfileupload.js')?>"></script>
    <script src="<?php echo base_url('assets/js/site.js')?>"></script>
    <script src="<?php echo base_url('assets/jquery-ui/jquery-ui.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/datatables/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/maps/maps.js')?>"></script>
</head>
<body class="hold-transition skin-red fixed sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="<?php echo base_url() ?>" class="logo">
          <span class="logo-mini"><b><?php echo $this->apps->title ?></b></span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <a class="btn btn-lg btn-warning fa fa-sign-out" style="margin:2px 2px 0 0;" href="<?php echo base_url()."access/logout"?>"> Log Out</a>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url()."assets/" ?>dist/img/avatar.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $username_logged ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
           <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Role: <?php echo $role ?></li>
              <li>
                <a href="#" onclick="hapuscariodp(),closeODP()">
                <i class="fa fa-map-marker"></i>
                <span>ODP by STO</span>
                <span class="label pull-right bg-blue"></span>
                </a>
                <ul class="treeview-menu">
                <li>
                  <a href="#" onclick="hapuscariodp(),closeSMY()">
                  <i class="fa fa-feed"></i>
                  <span>ODP SMY</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSMY_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('AKUPANSI 0% ')"><i id="aku_SMY_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('AKUPANSI 0,1%- 40%')"><i id="aku_SMY_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('AKUPANSI 41%- 80%')"><i id="aku_SMY_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('DIATAS 80%')"><i id="aku_SMY_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSMY_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('NORMAL')"><i id="stat_SMY_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('PENUH')"><i id="stat_SMY_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('LOSS/REDAMAN TINGGI')"><i id="stat_SMY_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('CLOSED')"><i id="stat_SMY_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('ON PROGRESS')"><i id="stat_SMY_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SMY('OTHER')"><i id="stat_SMY_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeSAU()">
                  <i class="fa fa-feed"></i>
                  <span>ODP SAU</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSAU_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('AKUPANSI 0% ')"><i id="aku_SAU_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('AKUPANSI 0,1%- 40%')"><i id="aku_SAU_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('AKUPANSI 41%- 80%')"><i id="aku_SAU_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('DIATAS 80%')"><i id="aku_SAU_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSAU_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('NORMAL')"><i id="stat_SAU_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('PENUH')"><i id="stat_SAU_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('LOSS/REDAMAN TINGGI')"><i id="stat_SAU_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('CLOSED')"><i id="stat_SAU_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('ON PROGRESS')"><i id="stat_SAU_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SAU('OTHER')"><i id="stat_SAU_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeBNO()">
                  <i class="fa fa-feed"></i>
                  <span>ODP BNO</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeBNO_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('AKUPANSI 0% ')"><i id="aku_BNO_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('AKUPANSI 0,1%- 40%')"><i id="aku_BNO_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('AKUPANSI 41%- 80%')"><i id="aku_BNO_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('DIATAS 80%')"><i id="aku_BNO_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeBNO_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('NORMAL')"><i id="stat_BNO_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('PENUH')"><i id="stat_BNO_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('LOSS/REDAMAN TINGGI')"><i id="stat_BNO_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('CLOSED')"><i id="stat_BNO_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('ON PROGRESS')"><i id="stat_BNO_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_BNO('OTHER')"><i id="stat_BNO_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeJBR()">
                  <i class="fa fa-feed"></i>
                  <span>ODP JBR</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeJBR_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('AKUPANSI 0% ')"><i id="aku_JBR_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('AKUPANSI 0,1%- 40%')"><i id="aku_JBR_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('AKUPANSI 41%- 80%')"><i id="aku_JBR_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('DIATAS 80%')"><i id="aku_JBR_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeJBR_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('NORMAL')"><i id="stat_JBR_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('PENUH')"><i id="stat_JBR_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('LOSS/REDAMAN TINGGI')"><i id="stat_JBR_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('CLOSED')"><i id="stat_JBR_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('ON PROGRESS')"><i id="stat_JBR_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_JBR('OTHER')"><i id="stat_JBR_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeKLM()">
                  <i class="fa fa-feed"></i>
                  <span>ODP KLM</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeKLM_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('AKUPANSI 0% ')"><i id="aku_KLM_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('AKUPANSI 0,1%- 40%')"><i id="aku_KLM_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('AKUPANSI 41%- 80%')"><i id="aku_KLM_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('DIATAS 80%')"><i id="aku_KLM_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeKLM_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('NORMAL')"><i id="stat_KLM_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('PENUH')"><i id="stat_KLM_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('LOSS/REDAMAN TINGGI')"><i id="stat_KLM_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('CLOSED')"><i id="stat_KLM_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('ON PROGRESS')"><i id="stat_KLM_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KLM('OTHER')"><i id="stat_KLM_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeKUT()">
                  <i class="fa fa-feed"></i>
                  <span>ODP KUT</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeKUT_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('AKUPANSI 0% ')"><i id="aku_KUT_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('AKUPANSI 0,1%- 40%')"><i id="aku_KUT_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('AKUPANSI 41%- 80%')"><i id="aku_KUT_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('DIATAS 80%')"><i id="aku_KUT_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeKUT_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('NORMAL')"><i id="stat_KUT_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('PENUH')"><i id="stat_KUT_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('LOSS/REDAMAN TINGGI')"><i id="stat_KUT_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('CLOSED')"><i id="stat_KUT_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('ON PROGRESS')"><i id="stat_KUT_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_KUT('OTHER')"><i id="stat_KUT_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeMMN()">
                  <i class="fa fa-feed"></i>
                  <span>ODP MMN</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeMMN_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('AKUPANSI 0% ')"><i id="aku_MMN_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('AKUPANSI 0,1%- 40%')"><i id="aku_MMN_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('AKUPANSI 41%- 80%')"><i id="aku_MMN_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('DIATAS 80%')"><i id="aku_MMN_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeMMN_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('NORMAL')"><i id="stat_MMN_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('PENUH')"><i id="stat_MMN_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('LOSS/REDAMAN TINGGI')"><i id="stat_MMN_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('CLOSED')"><i id="stat_MMN_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('ON PROGRESS')"><i id="stat_MMN_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_MMN('OTHER')"><i id="stat_MMN_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeNSD()">
                  <i class="fa fa-feed"></i>
                  <span>ODP NDA</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeNSD_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('AKUPANSI 0% ')"><i id="aku_NSD_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('AKUPANSI 0,1%- 40%')"><i id="aku_NSD_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('AKUPANSI 41%- 80%')"><i id="aku_NSD_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('DIATAS 80%')"><i id="aku_NSD_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeNSD_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('NORMAL')"><i id="stat_NSD_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('PENUH')"><i id="stat_NSD_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('LOSS/REDAMAN TINGGI')"><i id="stat_NSD_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('CLOSED')"><i id="stat_NSD_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('ON PROGRESS')"><i id="stat_NSD_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_NSD('OTHER')"><i id="stat_NSD_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeSWI()">
                  <i class="fa fa-feed"></i>
                  <span>ODP SWI</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSWI_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('AKUPANSI 0% ')"><i id="aku_SWI_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('AKUPANSI 0,1%- 40%')"><i id="aku_SWI_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('AKUPANSI 41%- 80%')"><i id="aku_SWI_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('DIATAS 80%')"><i id="aku_SWI_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeSWI_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('NORMAL')"><i id="stat_SWI_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('PENUH')"><i id="stat_SWI_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('LOSS/REDAMAN TINGGI')"><i id="stat_SWI_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('CLOSED')"><i id="stat_SWI_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('ON PROGRESS')"><i id="stat_SWI_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_SWI('OTHER')"><i id="stat_SWI_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeTOP()">
                  <i class="fa fa-feed"></i>
                  <span>ODP TOP</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeTOP_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('AKUPANSI 0% ')"><i id="aku_TOP_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('AKUPANSI 0,1%- 40%')"><i id="aku_TOP_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('AKUPANSI 41%- 80%')"><i id="aku_TOP_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('DIATAS 80%')"><i id="aku_TOP_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeTOP_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('NORMAL')"><i id="stat_TOP_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('PENUH')"><i id="stat_TOP_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('LOSS/REDAMAN TINGGI')"><i id="stat_TOP_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('CLOSED')"><i id="stat_TOP_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('ON PROGRESS')"><i id="stat_TOP_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_TOP('OTHER')"><i id="stat_TOP_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscariodp(),closeUBN()">
                  <i class="fa fa-feed"></i>
                  <span>ODP UBN</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeUBN_aku('aku')">
                    <i class="fa fa-bars"></i>
                    <span>AKUPANSI</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('AKUPANSI 0% ')"><i id="aku_UBN_0" class="fa fa-circle-o"></i>0%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('AKUPANSI 0,1%- 40%')"><i id="aku_UBN_1" class="fa fa-circle-o"></i>0,1% - 40%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('AKUPANSI 41%- 80%')"><i id="aku_UBN_2" class="fa fa-circle-o"></i>41% - 80%</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('DIATAS 80%')"><i id="aku_UBN_3" class="fa fa-circle-o"></i>> 80%</a></li>
                    </ul>
                    </li>
                    <li>
                    <a href="#" onclick="hapuscariodp(),closeUBN_stat('stat')">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('NORMAL')"><i id="stat_UBN_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('PENUH')"><i id="stat_UBN_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('LOSS/REDAMAN TINGGI')"><i id="stat_UBN_3" class="fa fa-circle-o"></i>LOSS/REDAMAN TINGGI</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('CLOSED')"><i id="stat_UBN_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('ON PROGRESS')"><i id="stat_UBN_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscariodp(),parseCreateMarker_UBN('OTHER')"><i id="stat_UBN_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              </li>
              <li>
                <a href="#" onclick="hapuscaridp(),closeDP()">
                <i class="fa fa-map-pin"></i>
                <span>DP by STO</span>
                <span class="label pull-right bg-blue"></span>
                </a>
                <ul class="treeview-menu">
                <li>
                  <a href="#" onclick="hapuscaridp(),closeSMYDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP SMY</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeSMYDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('NORMAL')"><i id="dp_SMY_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('PENUH')"><i id="dp_SMY_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('NO TONE')"><i id="dp_SMY_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('CLOSED')"><i id="dp_SMY_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('ON PROGRESS')"><i id="dp_SMY_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SMY('OTHER')"><i id="dp_SMY_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeSAUDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP SAU</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeSAUDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('NORMAL')"><i id="dp_SAU_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('PENUH')"><i id="dp_SAU_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('NO TONE')"><i id="dp_SAU_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('CLOSED')"><i id="dp_SAU_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('ON PROGRESS')"><i id="dp_SAU_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SAU('OTHER')"><i id="dp_SAU_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeBNODP()">
                  <i class="fa fa-feed"></i>
                  <span>DP BNO</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeBNODP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('NORMAL')"><i id="dp_BNO_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('PENUH')"><i id="dp_BNO_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('NO TONE')"><i id="dp_BNO_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('CLOSED')"><i id="dp_BNO_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('ON PROGRESS')"><i id="dp_BNO_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_BNO('OTHER')"><i id="dp_BNO_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeJBRDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP JBR</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeJBRDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('NORMAL')"><i id="dp_JBR_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('PENUH')"><i id="dp_JBR_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('NO TONE')"><i id="dp_JBR_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('CLOSED')"><i id="dp_JBR_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('ON PROGRESS')"><i id="dp_JBR_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_JBR('OTHER')"><i id="dp_JBR_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeKLMDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP KLM</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeKLMDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('NORMAL')"><i id="dp_KLM_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('PENUH')"><i id="dp_KLM_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('NO TONE')"><i id="dp_KLM_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('CLOSED')"><i id="dp_KLM_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('ON PROGRESS')"><i id="dp_KLM_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KLM('OTHER')"><i id="dp_KLM_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeKUTDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP KUT</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeKUTDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('NORMAL')"><i id="dp_KUT_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('PENUH')"><i id="dp_KUT_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('NO TONE')"><i id="dp_KUT_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('CLOSED')"><i id="dp_KUT_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('ON PROGRESS')"><i id="dp_KUT_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_KUT('OTHER')"><i id="dp_KUT_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeMMNDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP MMN</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeMMNDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('NORMAL')"><i id="dp_MMN_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('PENUH')"><i id="dp_MMN_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('NO TONE')"><i id="dp_MMN_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('CLOSED')"><i id="dp_MMN_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('ON PROGRESS')"><i id="dp_MMN_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_MMN('OTHER')"><i id="dp_MMN_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeNDADP()">
                  <i class="fa fa-feed"></i>
                  <span>DP NDA</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeNDADP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('NORMAL')"><i id="dp_NDA_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('PENUH')"><i id="dp_NDA_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('NO TONE')"><i id="dp_NDA_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('CLOSED')"><i id="dp_NDA_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('ON PROGRESS')"><i id="dp_NDA_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_NDA('OTHER')"><i id="dp_NDA_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeSWIDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP SWI</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeSWIDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('NORMAL')"><i id="dp_SWI_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('PENUH')"><i id="dp_SWI_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('NO TONE')"><i id="dp_SWI_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('CLOSED')"><i id="dp_SWI_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('ON PROGRESS')"><i id="dp_SWI_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_SWI('OTHER')"><i id="dp_SWI_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeTOPDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP TOP</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeTOPDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('NORMAL')"><i id="dp_TOP_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('PENUH')"><i id="dp_TOP_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('NO TONE')"><i id="dp_TOP_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('CLOSED')"><i id="dp_TOP_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('ON PROGRESS')"><i id="dp_TOP_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_TOP('OTHER')"><i id="dp_TOP_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#" onclick="hapuscaridp(),closeUBNDP()">
                  <i class="fa fa-feed"></i>
                  <span>DP UBN</span>
                  </a>
                  <ul class="treeview-menu">
                    <li>
                    <a href="#" onclick="hapuscaridp(),closeUBNDP_stat()">
                    <i class="fa fa-bars"></i>
                    <span>STATUS</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('NORMAL')"><i id="dp_UBN_1" class="fa fa-circle-o"></i>NORMAL</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('PENUH')"><i id="dp_UBN_2" class="fa fa-circle-o"></i>PENUH</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('NO TONE')"><i id="dp_UBN_3" class="fa fa-circle-o"></i>NO TONE</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('CLOSED')"><i id="dp_UBN_4" class="fa fa-circle-o"></i>CLOSED</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('ON PROGRESS')"><i id="dp_UBN_5" class="fa fa-circle-o"></i>ON PROGRESS</a></li>
                      <li><a href="#" onclick="hapuscaridp(),parseCreateMarkerDP_UBN('OTHER')"><i id="dp_UBN_6" class="fa fa-circle-o"></i>OTHER</a></li>
                    </ul>
                    </li>
                  </ul>
                </li>
               </ul>
              </li>
              <li>
                <a href="#" onclick="hapuscariodp(),hapuscaridp(),hapuscariKoordinat(),hapuscariCluster(),hapuscariND(),hapuscariClusterPolygon()">
                <i class="fa fa-search"></i>
                <span>Cari Alpro</span>
                <span class="label pull-right bg-blue"></span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#" onclick="cariODP()">
                    <i class="fa fa-map"></i>
                    <span>By ODP</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="cariDP()">
                    <i class="fa fa-map"></i>
                    <span>By DP</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="cariKoordinat()">
                    <i class="fa fa-map"></i>
                    <span>By Koordinat</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="cariCluster()">
                    <i class="fa fa-map"></i>
                    <span>By Cluster (ODC)</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="cariClusterPolygon()">
                    <i class="fa fa-map"></i>
                    <span>By Cluster (Polygon)</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                  <li>
                    <a href="#" onclick="cariND()">
                    <i class="fa fa-map"></i>
                    <span>By ND</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                  </li>
                </ul>
              </li>
              <li id="tambahalpro">
                <a href="#" onclick="hapuscariodp(),hapuscaridp()">
                <i class="fa fa-plus"></i>
                <span>Update Alpro</span>
                <span class="label pull-right bg-blue"></span>
                </a>
                <ul class="treeview-menu">
                  <li>
                    <a href="#" onclick="hapuscariodp()">
                    <i class="fa fa-angle-double-right"></i>
                    <span>By ODP</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#" onclick="hapuscariodp(),uploadCSV()">
                        <i class="fa fa-map"></i>
                        <span>Upload File By Status</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" onclick="hapuscariodp(),uploadCSVaku()">
                        <i class="fa fa-map"></i>
                        <span>Upload File By Akupansi</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" onclick="hapuscariodp(),modaltambahodp()">
                        <i class="fa fa-pencil"></i>
                        <span>Click On Map</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#" onclick="hapuscaridp()">
                    <i class="fa fa-angle-double-right"></i>
                    <span>By DP</span>
                    <span class="label pull-right bg-blue"></span>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <a href="#" onclick="hapuscaridp(),tambahdp()">
                        <i class="fa fa-pencil"></i>
                        <span>Click On Map</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li id="download_csv">
                <a href="<?php echo site_url('Maps/ExportCSVaku') ?>">
                <i class="fa fa-download"></i>
                <span>Download File ODP</span>
                </a>
              </li>
              <li>
                <a href="https://fusiontables.google.com/data?docid=1tJlcTkjjdqXkgDmKN_AA1S4CkRmEo2P1o5f2vadk#rows:id=1" target="_blank">
                <i class="fa fa-chrome"></i>
                <span>Route Kabel</span>
                <span class="label pull-right bg-blue"></span>
                </a>
              </li>
              <li id="updatecust">
                <a href="#" onclick="updateCust()">
                <i class="fa fa-users"></i>
                <span>Update Customer</span>
                <span class="label pull-right bg-blue"></span>
                </a>
              </li>
              <li id="manageuser">
                <a href="#" onclick="show_table_user()" data-toggle="modal" data-target="#ModalUser" data-dismiss="modal">
                <i class="fa fa-dashboard"></i>
                <span>Manage User</span>
                <span class="label pull-right bg-blue"></span>
                </a>
              </li>
              <li id="hit_count">
                <a href="#">
                <span id="hit_count_content">Hit Count : </span>
                </a>
              </li>
              <!--
              <li>
                <a href="#" onclick="get_curl()">
                <i class="fa fa-chrome"></i>
                <span>Get Curl</span>
                <span class="label pull-right bg-blue"></span>
                </a>
              </li>
              -->
          </ul>
           </section>
      </aside>
<div class="content-wrapper" id="map">
  <div class="container" style="margin-left:20px"></div>
</div>
<div id="repODP"></div>
<div id="repODP_aku"></div>
<div id="repDP"></div>
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">User Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Id User</label>
                            <div class="col-md-9">
                                <input name="id_user" placeholder="Id User" class="form-control" type="text" readonly="" >
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Role</label>
                            <div class="col-md-9">
                                <select name="role" class="form-control" placeholder="role">
                                    <option value=""></option>
                                    <option value="Admin">Admin</option>
                                    <option value="Help Desk">Help Desk</option>
                                    <option value="Teknisi">Teknisi</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Username</label>
                            <div class="col-md-9">
                                <input name="username" type="text" placeholder="username anda" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input name="password" type="Password" placeholder="password anda" class="form-control"></input>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-9">
                                <input name="nama" placeholder="Nama" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Kontak</label>
                            <div class="col-md-9">
                                <input name="kontak" placeholder="No Telepon" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" onclick="cancelBtn()" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="modal_formODP" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Customer Form</h3>
            </div>
            <div class="modal-body form" style="height: 400px; overflow-y: auto;">
                <form action="#" id="formUpODP" class="form-horizontal">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">ND LAMA</label>
                            <div class="col-md-9">
                                <input name="up_ND_temp" placeholder="ND LAMA" class="form-control" type="text" readonly>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">ND BARU</label>
                            <div class="col-md-9">
                                <input name="up_ND" placeholder="ND" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">ND REF</label>
                            <div class="col-md-9">
                                <input name="up_ND_REF" placeholder="ND REF" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">IPTV</label>
                            <div class="col-md-9">
                                <input name="up_IPTV" type="text" placeholder="IPTV" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NAMA</label>
                            <div class="col-md-9">
                                <input name="up_NAMA" type="text" placeholder="NAMA" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">RP TAGIHAN</label>
                            <div class="col-md-9">
                                <input name="up_RP_TAGIHAN" placeholder="RP TAGIHAN" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">RP TAGIHAN INET</label>
                            <div class="col-md-9">
                                <input name="up_RP_TAGIHAN_INET" placeholder="RP TAGIHAN INET" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">ALAMAT</label>
                            <div class="col-md-9">
                                <input name="up_ALAMAT" placeholder="ALAMAT" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">STP TARGET</label>
                            <div class="col-md-9">
                                <input name="up_STP_TARGET" placeholder="STP TARGET" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">CPE SN</label>
                            <div class="col-md-9">
                                <input name="up_CPE_SN" placeholder="CPE SN" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">RP TOTAL</label>
                            <div class="col-md-9">
                                <input name="up_RP_TOTAL" placeholder="RP TOTAL" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSaveUpODP" onclick="saveUpODP()" class="btn btn-primary">Save</button>
                <button type="button" onclick="cancelBtnODP()" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="ModalUser" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <button class="btn btn-success" onclick="add_user()"><i class="glyphicon glyphicon-plus"></i> Add user</button>
      </div>
      <div class="modal-body">
        <table id="table1" class="table table-striped table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>Role</th>
              <th>Username</th>
              <th>Nama</th>
              <th>Kontak</th>
              <th style="width:125px;">Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="ModalCust" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Customer</h4>
            </div>
            <div class="modal-body">
            <form action="" method="post" name="form2" id="form2" enctype="multipart/form-data">
              <table>
                <tr>Choose your file : </tr>
                <tr><input type="file" class="form-control" name="file2" id="file2"></tr>
                <tr>
                  <div class="modal-footer">
                    <button type="submit" id="submitBtn_cust" name="submit" class="btn btn-info">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </tr>
              </table>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCSV" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload File CSV by Status</h4>
            </div>
            <div class="modal-body">
            <form action="" method="post" name="form1" id="form1" enctype="multipart/form-data">
              <table>
                <tr>Choose your file : </tr>
                <tr><input type="file" class="form-control" name="file1" id="file1"></tr>
                <tr>
                  <div class="modal-footer">
                    <button type="submit" id="submitBtn" name="submit" class="btn btn-info">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </tr>
              </table>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCSVaku" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload File CSV by Akupansi</h4>
            </div>
            <div class="modal-body">
            <form action="" method="post" name="form3" id="form3" enctype="multipart/form-data">
              <table>
                <tr>Choose your file : </tr>
                <tr><input type="file" class="form-control" name="file3" id="file3"></tr>
                <tr>
                  <div class="modal-footer">
                    <button type="submit" id="submitBtnaku" name="submit" class="btn btn-info">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </tr>
              </table>
            </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariODP" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari ODP</h4>
            </div>
            <div class="modal-body">
              <select name="cariSTO_odp" id="cariSTO_odp">
                <option value="">Select STO</option>
                <?php foreach($sto_odp as $obj): ?>
                    <option value="<?php echo $obj->STO; ?>"><?php echo $obj->STO; ?></option>
                <?php endforeach; ?>
              </select>
              <br></br>
              <input type="text" name="cariODP" id="cariODP"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bg-green" onclick="findODP()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariDP" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari DP</h4>
            </div>
            <div class="modal-body">
              <select name="cariSTO_dp" id="cariSTO_dp">
                <option value="">Select STO</option>
                <?php foreach($sto_dp as $obj): ?>
                    <option value="<?php echo $obj->STO; ?>"><?php echo $obj->STO; ?></option>
                <?php endforeach; ?>
              </select>
              <br></br>
              <input type="text" name="cariDP" id="cariDP" disabled>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bg-green" onclick="findDP()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariND" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari ND</h4>
            </div>
            <div class="modal-body">
              <input type="text" name="cariND" id="cariND" placeholder="ND">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bg-green" onclick="findND()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariKoordinat" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Koordinat</h4>
            </div>
            <div class="modal-body">
              <input type="text" name="cariLat" id="cariLat" placeholder="LATITUDE">
              <br>
              <input type="text" name="cariLng" id="cariLng" placeholder="LONGITUDE">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default bg-green" onclick="findKoordinat()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariCluster" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Cluster (ODC)</h4>
            </div>
            <div class="modal-body">
              <select name="cariSTO_clu" id="cariSTO_clu">
                <option value="">Select STO</option>
                <?php foreach($sto_clus as $obj): ?>
                    <option value="<?php echo $obj->STO; ?>"><?php echo $obj->STO; ?></option>
                <?php endforeach; ?>
              </select>
              <br></br>
              <select name="cariODC_clu" id="cariODC_clu" disabled>
                <option value="">Select ODC</option>
              </select>
              <br></br>
              <select name="cariClus" id="cariClus" disabled>
                <option value="">Select Cluster</option>
              </select>
            </div>
            <div class="modal-footer">
                <button disabled type="button" class="btn btn-default bg-green" id="btnCluster" onclick="findCluster()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCariCluster_Polygon" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cari Cluster (Polygon)</h4>
            </div>
            <div class="modal-body">
              <select name="cariSTO_clu_polygon" id="cariSTO_clu_polygon">
                <option value="">Select STO</option>
                <?php foreach($sto_clus_polygon as $obj): ?>
                    <option value="<?php echo $obj->STO; ?>"><?php echo $obj->STO; ?></option>
                <?php endforeach; ?>
              </select>
              <br></br>
              <select name="cariClus_polygon" id="cariClus_polygon" disabled>
                <option value="">Select Cluster</option>
              </select>
            </div>
            <div class="modal-footer">
                <button disabled type="button" class="btn btn-default bg-green" id="btnCluster_Polygon" onclick="findCluster_Polygon()">Submit</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalCurl" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Get Curl</h4>
            </div>
            <div id="DivModalCurl" class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalPhotoDP" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Photo DP</h4>
            </div>
            <div class="modal-body">
            <form method="post" action="" id="upload_file1">
              <label for="userfile2">File</label>
              <input type="file" name="userfile2" id="userfile2" size="20" />
              <input type="submit" name="submit" id="submit" />
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalPhoto" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Photo</h4>
            </div>
            <div class="modal-body">
            <form method="post" action="" id="upload_file">
              <label for="userfile1">File</label>
              <input type="file" name="userfile1" id="userfile1" size="20" />
              <input type="submit" name="submit" id="submit" />
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalTambahODP" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Tambah ODP</h4>
            </div>
            <div class="modal-body">
              <button type="button" class="btn bg-green" onclick="tambahodp()">By STATUS</button>
              <button type="button" class="btn bg-green" onclick="tambahodp_aku()">By AKUPANSI</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalMapsDP" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Pelanggan</h4>
            </div>
            <div class="modal-body">
                <table id="tableDP" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>SERVICE NUMBER</th>
                            <th>SERVICE TYPE</th>
                            <th>SERVICE ADMINSTATE</th>
                            <th>SERVICE PARTY NAME</th>
                            <th>ADDRESS</th>
                            <th>STP TARGET</th>
                            <th>DP NAME</th>
                            <th>PACKAGE NAME</th>
                            <th>UPLOAD SPEED</th>
                            <th>DOWNLOAD SPEED</th>
                            <th>VOICE SWITCH</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalMaps" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Pelanggan</h4>
            </div>
            <div class="modal-body">
                <table id="table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ND</th>
                            <th>ND REF</th>
                            <th>IPTV</th>
                            <th>NAMA</th>
                            <th>RP_TAGIHAN</th>
                            <th>RP_TAGIHAN_INET</th>
                            <th>ALAMAT</th>
                            <th>STP_TARGET</th>
                            <th>CPE_SN</th>
                            <th>RP_TOTAL</th>
                            <th id="act2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ModalMapsPolygon" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Detail Pelanggan</h4>
            </div>
            <div class="modal-body">
                <table id="table_polygon" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ND</th>
                            <th>ND REF</th>
                            <th>IPTV</th>
                            <th>NAMA</th>
                            <th>RP_TAGIHAN</th>
                            <th>RP_TAGIHAN_INET</th>
                            <th>ALAMAT</th>
                            <th>STP_TARGET</th>
                            <th>CPE_SN</th>
                            <th>RP_TOTAL</th>
                            <th id="act3">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <?php echo $this->apps->ver ?> &nbsp;&nbsp;
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <strong><a href=""> <?php echo $this->apps->copyright ?></a>.</strong> All rights reserved.
    </footer>
    </div>
    <script src="<?php echo base_url()."assets/" ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>plugins/fastclick/fastclick.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>dist/js/app.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>dist/js/demo.js"></script>
    <script src="<?php echo base_url()."assets/" ?>plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()."assets/" ?>plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()."assets/" ?>plugins/datatables/js/dataTables.bootstrap.min.js"></script>

  </body>
</html>
<script type="text/javascript">

var rp_total = 0;
var stp_target=[];
var toogle=0;
var infoWindow= true;
var data_parsing = [];
var polygonku=null;
var polygons_ku=[];
var save_method; //for save method string
var table;
var prev_win = false;
var count;
var icon;

function get_curl(){
  $.ajax({
    url: '<?php echo site_url('Maps/get_curl') ?>',
    type: 'POST',
    dataType: 'JSON',
    success: function(data){
      $('#DivModalCurl').empty();
      $('#DivModalCurl').append("Database yang diinput<br>");
      for (var i = 0; i < data['insert'].length; i++){
        $('#DivModalCurl').append(data['insert'][i]['Nama Alternatif']+"<br>");
      }
      $('#ModalCurl').modal('show');

      $('#DivModalCurl').append("<br>Database yang diupdate<br>");
      for (var i = 0; i < data['update'].length; i++){
        $('#DivModalCurl').append(data['update'][i]['Nama Alternatif']+"<br>");
      }
      $('#ModalCurl').modal('show');
    },
    error:function(){
      alert('lele');
    }
  });
}

$(document).ready(function(){
  $.ajax({
    url: '<?php echo site_url('Access/get_row') ?>',
    type: 'POST',
    dataType: 'JSON',
    success:function(data){
      $('#hit_count_content').html("Hit Count : "+data[0].login_count);
    },

  });
  var sto1 = '';
  $('#cariSTO_dp').on('change', function(){
    sto1 = $(this).val();
    if(sto1 == '')
    {
      $('#cariDP').prop('disabled', true);
    }
    else
    {
      $('#cariDP').prop('disabled', false);
    }
  });
  var sto2 = '';
  $('#cariSTO_odp').on('change', function(){
    sto2 = $(this).val();
    if(sto2 == '')
    {
      $('#cariODP').prop('disabled', true);
    }
    else
    {
      $('#cariODP').prop('disabled', false);
    }
  });
  var sto3 = '';
  $('#cariSTO_clu').on('change', function(){
    sto3 = $(this).val();
    if(sto3 == '')
    {
      $('#cariODC_clu').prop('disabled', true);
      $('#cariClus').prop('disabled', true);
    }
    else
    {
      $('#cariODC_clu').prop('disabled', false);
      $('#cariClus').prop('disabled', true);
      $.ajax({
        url:"<?php echo base_url() ?>Maps/getODC",
        type: "POST",
        data: {'sto' : sto3},
        dataType: 'json',
        success: function(data){
          $('#cariODC_clu').html(data);
        },
        error: function(){
          alert('Error occur...!!');
        }
      });
    }
  });
  $('#cariODC_clu').on('change', function(){
    odc = $(this).val();
    if(odc == '')
    {
      $('#cariClus').prop('disabled', true);
    }
    else
    {
      $('#cariClus').prop('disabled', false);
      $.ajax({
        url:"<?php echo base_url() ?>Maps/getClus",
        type: "POST",
        data: {'sto' : sto3, 'odc' : odc},
        dataType: 'json',
        success: function(data){
          $('#cariClus').html(data);
        },
        error: function(){
          alert('Error occur...!!');
        }
      });
    }
  });
  $('#cariClus').on('change', function(){
    clus = $(this).val();
    if(clus == ''){
      $('#btnCluster').attr('disabled', true);
    }
    else
    {
      $('#btnCluster').attr('disabled', false);
    }
  });
  var sto4 = '';
  $('#cariSTO_clu_polygon').on('change', function(){
    sto4 = $(this).val();
    if(sto4 == '')
    {
      $('#cariClus_polygon').prop('disabled', true);
    }
    else
    {
      $('#cariClus_polygon').prop('disabled', false);
      $.ajax({
        url:"<?php echo base_url() ?>Maps/getPolygon",
        type: "POST",
        data: {'sto' : sto4},
        dataType: 'json',
        success: function(data){
          $('#cariClus_polygon').html(data);
        },
        error: function(){
          alert('Error occur...!!');
        }
      });
    }
  });
  $('#cariClus_polygon').on('change', function(){
    clus = $(this).val();
    if(clus == ''){
      $('#btnCluster_Polygon').attr('disabled', true);
    }
    else
    {
      $('#btnCluster_Polygon').attr('disabled', false);
    }
  });
});


$(document).ready(function(){
  if('<?php echo $role ?>' == "Teknisi"){
    $('#act2').remove();
    $('#act3').remove();
    $('#download_csv').remove();
  }
  else if('<?php echo $role ?>' == "Help Desk"){
    $('#download_csv').remove();
  }
});

function closeDP(){
  closeSMYDP();
  closeSAUDP();
  closeBNODP();
  closeJBRDP();
  closeKLMDP();
  closeKUTDP();
  closeMMNDP();
  closeNDADP();
  closeSWIDP();
  closeTOPDP();
  closeUBNDP();
}

function closeODP(){
  closeSMY();
  closeSAU();
  closeBNO();
  closeJBR();
  closeKLM();
  closeKUT();
  closeMMN();
  closeNSD();
  closeSWI();
  closeTOP();
  closeUBN();
}

function cariODP(){
  $('#ModalCariODP').modal('show');
}

function cariDP(){
  $('#ModalCariDP').modal('show');
}

function cariCluster(){
  $('#ModalCariCluster').modal('show');
}

function cariClusterPolygon(){
  $('#ModalCariCluster_Polygon').modal('show');
}

function cariND(){
  $('#ModalCariND').modal('show');
}

function cariKoordinat(){
  $('#ModalCariKoordinat').modal('show');
}

function cancelBtnODP(){
  $('#ModalMaps').modal('show');
}

function cancelBtn(){
  $('#ModalUser').modal('show');
}

function show_table_user(){
   table = $('#table1').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true,
        "order": [], //Initial no order.

        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Maps/ajax_list_user')?>",
            "type": "POST"
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

}

function add_user()
{
    save_method = 'add';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string
    $('#ModalUser').modal('hide');
    $('#modal_form').modal('show'); // show bootstrap modal
    $('.modal-title').text('Add user'); // Set Title to Bootstrap modal title
}

function edit_user(id_user)
{
    save_method = 'update';
    $('#form')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Maps/ajax_edit_user/')?>/" + id_user,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="id_user"]').val(data.id_user);
            $('[name="role"]').val(data.role);
            $('[name="username"]').val(data.username);
            $('[name="password"]').val(null);
            $('[name="nama"]').val(data.nama);
            $('[name="kontak"]').val(data.kontak);
            $('#ModalUser').modal('hide');
            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit user'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function edit_cust(ND)
{
    $('#formUpODP')[0].reset(); // reset form on modals
    $('.form-group').removeClass('has-error'); // clear error class
    $('.help-block').empty(); // clear error string

    //Ajax Load data from ajax
    $.ajax({
        url : "<?php echo site_url('Maps/ajax_edit_cust/')?>/" + ND,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="up_ND_temp"]').val(data.ND);
            $('[name="up_ND"]').val(data.ND);
            $('[name="up_ND_REF"]').val(data.ND_REF);
            $('[name="up_IPTV"]').val(data.IPTV);
            $('[name="up_NAMA"]').val(data.NAMA);
            $('[name="up_RP_TAGIHAN"]').val(data.RP_TAGIHAN);
            $('[name="up_RP_TAGIHAN_INET"]').val(data.RP_TAGIHAN_INET);
            $('[name="up_ALAMAT"]').val(data.ALAMAT);
            $('[name="up_STP_TARGET"]').val(data.STP_TARGET);
            $('[name="up_CPE_SN"]').val(data.CPE_SN);
            $('[name="up_RP_TOTAL"]').val(data.RP_TOTAL);
            $('#ModalMaps').modal('hide');
            $('#modal_formODP').modal('show'); // show bootstrap modal when complete loaded
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
}

function reload_table()
{
    table.ajax.reload(null,false); //reload datatable ajax
}

function saveUpODP()
{
    $('#btnSaveUpODP').text('saving...'); //change button text
    $('#btnSaveUpODP').attr('disabled',true); //set button disable
    $.ajax({
        url : "<?php echo site_url('Maps/ajax_update_cust') ?>",
        type: "POST",
        data: $('#formUpODP').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_formODP').modal('hide');
                $('#ModalMaps').modal('show');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSaveUpODP').text('save'); //change button text
            $('#btnSaveUpODP').attr('disabled',false); //set button enable
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSaveUpODP').text('save'); //change button text
            $('#btnSaveUpODP').attr('disabled',false); //set button enable
        }
    });
}

function save()
{
    $('#btnSave').text('saving...'); //change button text
    $('#btnSave').attr('disabled',true); //set button disable
    var url;

    if(save_method == 'add') {
        url = "<?php echo site_url('Maps/ajax_add_user')?>";
    } else {
        url = "<?php echo site_url('Maps/ajax_update_user')?>";
    }

    // ajax adding data to database
    $.ajax({
        url : url,
        type: "POST",
        data: $('#form').serialize(),
        dataType: "JSON",
        success: function(data)
        {

            if(data.status) //if success close modal and reload ajax table
            {
                $('#modal_form').modal('hide');
                $('#ModalUser').modal('show');
                reload_table();
            }
            else
            {
                for (var i = 0; i < data.inputerror.length; i++)
                {
                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                }
            }
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable


        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
            $('#btnSave').text('save'); //change button text
            $('#btnSave').attr('disabled',false); //set button enable

        }
    });
}

function delete_cust(ND)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Maps/ajax_delete_cust')?>/"+ND,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_formODP').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

function delete_user(id_user)
{
    if(confirm('Are you sure delete this data?'))
    {
        // ajax delete data to database
        $.ajax({
            url : "<?php echo site_url('Maps/ajax_delete_user')?>/"+id_user,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
                //if success reload ajax table
                $('#modal_form').modal('hide');
                reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

    }
}

$(document).ready(function(){
  if("<?php echo $role ?>" == "Teknisi"){
    $('#tambahalpro').remove();
    $('#manageuser').remove();
    $('#updatecust').remove();
  }
  else if("<?php echo $role ?>" == "Help Desk"){
    $('#manageuser').remove();
    $('#updatecust').remove();
  }
});

$(function() {
  $('#form1').submit(function(e) {
    e.preventDefault();
    $('#submitBtn').text('Saving...'); //change button text
    $('#submitBtn').attr('disabled',true); //set button disable
    var data = new FormData();
    data.append('file1',$('#file1')[0].files[0]);
    $.ajax({
      url : "<?php echo site_url('Maps/upload_sampledata') ?>",
      data: data,
      type: "POST",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {

        alert('Berhasil');
        $('#submitBtn').text('Save'); //change button text
        $('#submitBtn').attr('disabled',false); //set button disable
        showCSV();
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
    });
  });
  $('#form3').submit(function(e) {
    e.preventDefault();
    $('#submitBtnaku').text('Saving...'); //change button text
    $('#submitBtnaku').attr('disabled',true); //set button disable
    var data = new FormData();
    data.append('file3',$('#file3')[0].files[0]);
    $.ajax({
      url : "<?php echo site_url('Maps/upload_sampledataaku') ?>",
      data: data,
      type: "POST",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {

        alert('Berhasil');
        $('#submitBtnaku').text('Save'); //change button text
        $('#submitBtnaku').attr('disabled',false); //set button disable
        $('#ModalCSVaku').modal('hide');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
    });
  });
});

$(function() {
  $('#form2').submit(function(e) {
    e.preventDefault();
    $('#submitBtn_cust').text('Saving...'); //change button text
    $('#submitBtn_cust').attr('disabled',true); //set button disable
    var data = new FormData();
    data.append('file2',$('#file2')[0].files[0]);
    $.ajax({
      url : "<?php echo site_url('Maps/upload_customer') ?>",
      data: data,
      type: "POST",
      cache: false,
      contentType: false,
      processData: false,
      success: function(data)
      {
        alert('Berhasil');
        $('#submitBtn_cust').text('Save'); //change button text
        $('#submitBtn_cust').attr('disabled',false); //set button disable
        $('#ModalCust').modal('hide');
      },
      error: function (jqXHR, textStatus, errorThrown)
      {
          alert('Error get data from ajax');
      }
    });
  });
});

function showCSV(){
  $('#ModalCSV').modal('hide');
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_csv')?>",
    type: "GET",
    data: {
      csv: 1
    },
    dataType: "JSON",
    success: function(data)
    {

      if(data == ''){
        alert('ODP tidak ditemukan');
      }
      else{
        for (var i = 0; i < data.length; i++){
          icon = getIcon(data[i].STATUS,"odp");
          var lat = data[i].LATITUDE;
          var lng = data[i].LONGITUDE;
          var latLng = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data[i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarker(marker);
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function updateCust(){
  $('#ModalCust').modal('show');
}

function uploadCSV(){
  $('#ModalCSV').modal('show');
}

function uploadCSVaku(){
  $('#ModalCSVaku').modal('show');
}

function hapuscariCluster(){
  setMapOnAllCluster(null);
  setMarkerCluster();
}

function hapuscariClusterPolygon(){
  setMapOnAllPolygon(null);
  setMarkerPolygon();
  if (polygons_ku!=null) {
    close_polygon();
    for (var i = 0; i < polygons_ku.length; i++) {
      polygons_ku[i].setMap(null);
    }
  }
}

function hapuscariND(){
  setMapOnAllND(null);
  setMarkerND();
}

function hapuscariKoordinat(){
  setMapOnAllKoordinat(null);
  setMarkerKoordinat();
}

function hapuscaridp(){
  setMapOnAllDP(null);
  setMarkerDP();
}

function hapuscariodp(){
  setMapOnAll(null);
  setMarker();
}


function closeSMY_aku(nilai){
  setMapOnAll_SMY(null,nilai);
  setMarker(null);
  document.getElementById("aku_SMY_0").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_1").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_2").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_3").className = "fa fa-circle-o";
}

function closeSMY_stat(nilai){
  setMapOnAll_SMY(null,nilai);
  setMarker(null);
  document.getElementById("stat_SMY_1").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_2").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_3").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_4").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_5").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_6").className = "fa fa-circle-o";
}

function closeSMY(){
  setMapOnAll_SMY(null,null);
  setMarker(null);
  document.getElementById("aku_SMY_0").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_1").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_2").className = "fa fa-circle-o";
  document.getElementById("aku_SMY_3").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_1").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_2").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_3").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_4").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_5").className = "fa fa-circle-o";
  document.getElementById("stat_SMY_6").className = "fa fa-circle-o";
}

function closeBNO_aku(nilai){
  setMapOnAll_BNO(null,nilai);
  setMarker(null);
  document.getElementById("aku_BNO_0").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_1").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_2").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_3").className = "fa fa-circle-o";
}

function closeBNO_stat(nilai){
  setMapOnAll_BNO(null,nilai);
  setMarker(null);
  document.getElementById("stat_BNO_1").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_2").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_3").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_4").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_5").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_6").className = "fa fa-circle-o";
}

function closeBNO(){
  setMapOnAll_BNO(null,null);
  setMarker(null);
  document.getElementById("aku_BNO_0").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_1").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_2").className = "fa fa-circle-o";
  document.getElementById("aku_BNO_3").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_1").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_2").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_3").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_4").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_5").className = "fa fa-circle-o";
  document.getElementById("stat_BNO_6").className = "fa fa-circle-o";
}

function closeJBR_aku(nilai){
  setMapOnAll_JBR(null,nilai);
  setMarker(null);
  document.getElementById("aku_JBR_0").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_1").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_2").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_3").className = "fa fa-circle-o";
}

function closeJBR_stat(nilai){
  setMapOnAll_JBR(null,nilai);
  setMarker(null);
  document.getElementById("stat_JBR_1").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_2").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_3").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_4").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_5").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_6").className = "fa fa-circle-o";
}

function closeJBR(){
  setMapOnAll_JBR(null,null);
  setMarker(null);
  document.getElementById("aku_JBR_0").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_1").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_2").className = "fa fa-circle-o";
  document.getElementById("aku_JBR_3").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_1").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_2").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_3").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_4").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_5").className = "fa fa-circle-o";
  document.getElementById("stat_JBR_6").className = "fa fa-circle-o";
}

function closeKLM_aku(nilai){
  setMapOnAll_KLM(null,nilai);
  setMarker(null);
  document.getElementById("aku_KLM_0").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_1").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_2").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_3").className = "fa fa-circle-o";
}

function closeKLM_stat(nilai){
  setMapOnAll_KLM(null,nilai);
  setMarker(null);
  document.getElementById("stat_KLM_1").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_2").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_3").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_4").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_5").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_6").className = "fa fa-circle-o";
}

function closeKLM(){
  setMapOnAll_KLM(null,null);
  setMarker(null);
  document.getElementById("aku_KLM_0").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_1").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_2").className = "fa fa-circle-o";
  document.getElementById("aku_KLM_3").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_1").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_2").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_3").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_4").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_5").className = "fa fa-circle-o";
  document.getElementById("stat_KLM_6").className = "fa fa-circle-o";
}

function closeKUT_aku(nilai){
  setMapOnAll_KUT(null,nilai);
  setMarker(null);
  document.getElementById("aku_KUT_0").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_1").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_2").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_3").className = "fa fa-circle-o";
}

function closeKUT_stat(nilai){
  setMapOnAll_KUT(null,nilai);
  setMarker(null);
  document.getElementById("stat_KUT_1").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_2").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_3").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_4").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_5").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_6").className = "fa fa-circle-o";
}

function closeKUT(){
  setMapOnAll_KUT(null,null);
  setMarker(null);
  document.getElementById("aku_KUT_0").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_1").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_2").className = "fa fa-circle-o";
  document.getElementById("aku_KUT_3").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_1").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_2").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_3").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_4").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_5").className = "fa fa-circle-o";
  document.getElementById("stat_KUT_6").className = "fa fa-circle-o";
}

function closeMMN_aku(nilai){
  setMapOnAll_MMN(null,nilai);
  setMarker(null);
  document.getElementById("aku_MMN_0").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_1").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_2").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_3").className = "fa fa-circle-o";
}

function closeMMN_stat(nilai){
  setMapOnAll_MMN(null,nilai);
  setMarker(null);
  document.getElementById("stat_MMN_1").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_2").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_3").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_4").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_5").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_6").className = "fa fa-circle-o";
}

function closeMMN(){
  setMapOnAll_MMN(null,null);
  setMarker(null);
  document.getElementById("aku_MMN_0").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_1").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_2").className = "fa fa-circle-o";
  document.getElementById("aku_MMN_3").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_1").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_2").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_3").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_4").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_5").className = "fa fa-circle-o";
  document.getElementById("stat_MMN_6").className = "fa fa-circle-o";
}

function closeNSD_aku(nilai){
  setMapOnAll_NSD(null,nilai);
  setMarker(null);
  document.getElementById("aku_NSD_0").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_1").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_2").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_3").className = "fa fa-circle-o";
}

function closeNSD_stat(nilai){
  setMapOnAll_NSD(null,nilai);
  setMarker(null);
  document.getElementById("stat_NSD_1").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_2").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_3").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_4").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_5").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_6").className = "fa fa-circle-o";
}

function closeNSD(){
  setMapOnAll_NSD(null,null);
  setMarker(null);
  document.getElementById("aku_NSD_0").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_1").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_2").className = "fa fa-circle-o";
  document.getElementById("aku_NSD_3").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_1").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_2").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_3").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_4").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_5").className = "fa fa-circle-o";
  document.getElementById("stat_NSD_6").className = "fa fa-circle-o";
}

function closeSWI_aku(nilai){
  setMapOnAll_SWI(null,nilai);
  setMarker(null);
  document.getElementById("aku_SWI_0").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_1").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_2").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_3").className = "fa fa-circle-o";
}

function closeSWI_stat(nilai){
  setMapOnAll_SWI(null,nilai);
  setMarker(null);
  document.getElementById("stat_SWI_1").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_2").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_3").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_4").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_5").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_6").className = "fa fa-circle-o";
}

function closeSWI(){
  setMapOnAll_SWI(null,null);
  setMarker(null);
  document.getElementById("aku_SWI_0").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_1").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_2").className = "fa fa-circle-o";
  document.getElementById("aku_SWI_3").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_1").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_2").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_3").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_4").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_5").className = "fa fa-circle-o";
  document.getElementById("stat_SWI_6").className = "fa fa-circle-o";
}

function closeTOP_aku(nilai){
  setMapOnAll_TOP(null,nilai);
  setMarker(null);
  document.getElementById("aku_TOP_0").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_1").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_2").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_3").className = "fa fa-circle-o";
}

function closeTOP_stat(nilai){
  setMapOnAll_TOP(null,nilai);
  setMarker(null);
  document.getElementById("stat_TOP_1").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_2").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_3").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_4").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_5").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_6").className = "fa fa-circle-o";
}

function closeTOP(){
  setMapOnAll_TOP(null,null);
  setMarker(null);
  document.getElementById("aku_TOP_0").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_1").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_2").className = "fa fa-circle-o";
  document.getElementById("aku_TOP_3").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_1").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_2").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_3").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_4").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_5").className = "fa fa-circle-o";
  document.getElementById("stat_TOP_6").className = "fa fa-circle-o";
}

function closeUBN_aku(nilai){
  setMapOnAll_UBN(null,nilai);
  setMarker(null);
  document.getElementById("aku_UBN_0").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_1").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_2").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_3").className = "fa fa-circle-o";
}

function closeUBN_stat(nilai){
  setMapOnAll_UBN(null,nilai);
  setMarker(null);
  document.getElementById("stat_UBN_1").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_2").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_3").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_4").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_5").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_6").className = "fa fa-circle-o";
}

function closeUBN(){
  setMapOnAll_UBN(null,null);
  setMarker(null);
  document.getElementById("aku_UBN_0").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_1").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_2").className = "fa fa-circle-o";
  document.getElementById("aku_UBN_3").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_1").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_2").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_3").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_4").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_5").className = "fa fa-circle-o";
  document.getElementById("stat_UBN_6").className = "fa fa-circle-o";
}

function closeSAU_aku(nilai){
  setMapOnAll_SAU(null,nilai);
  setMarker(null);
  document.getElementById("aku_SAU_0").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_1").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_2").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_3").className = "fa fa-circle-o";
}

function closeSAU_stat(nilai){
  setMapOnAll_SAU(null,nilai);
  setMarker(null);
  document.getElementById("stat_SAU_1").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_2").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_3").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_4").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_5").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_6").className = "fa fa-circle-o";
}

function closeSAU(){
  setMapOnAll_SAU(null,null);
  setMarker(null);
  document.getElementById("aku_SAU_0").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_1").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_2").className = "fa fa-circle-o";
  document.getElementById("aku_SAU_3").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_1").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_2").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_3").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_4").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_5").className = "fa fa-circle-o";
  document.getElementById("stat_SAU_6").className = "fa fa-circle-o";
}

function closeSMYDP_stat(nilai){
  setMapOnAllDP_SMY(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_SMY_1").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_2").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_3").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_4").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_5").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_6").className = "fa fa-circle-o";
}

function closeSMYDP(){
  setMapOnAllDP_SMY(null,null);
  setMarkerDP(null);
  document.getElementById("dp_SMY_1").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_2").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_3").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_4").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_5").className = "fa fa-circle-o";
  document.getElementById("dp_SMY_6").className = "fa fa-circle-o";
}

function closeSAUDP_stat(nilai){
  setMapOnAllDP_SAU(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_SAU_1").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_2").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_3").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_4").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_5").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_6").className = "fa fa-circle-o";
}

function closeSAUDP(){
  setMapOnAllDP_SAU(null,null);
  setMarkerDP(null);
  document.getElementById("dp_SAU_1").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_2").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_3").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_4").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_5").className = "fa fa-circle-o";
  document.getElementById("dp_SAU_6").className = "fa fa-circle-o";
}

function closeBNODP_stat(nilai){
  setMapOnAllDP_BNO(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_BNO_1").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_2").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_3").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_4").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_5").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_6").className = "fa fa-circle-o";
}

function closeBNODP(){
  setMapOnAllDP_BNO(null,null);
  setMarkerDP(null);
  document.getElementById("dp_BNO_1").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_2").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_3").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_4").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_5").className = "fa fa-circle-o";
  document.getElementById("dp_BNO_6").className = "fa fa-circle-o";
}

function closeJBRDP_stat(nilai){
  setMapOnAllDP_JBR(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_JBR_1").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_2").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_3").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_4").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_5").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_6").className = "fa fa-circle-o";
}

function closeJBRDP(){
  setMapOnAllDP_JBR(null,null);
  setMarkerDP(null);
  document.getElementById("dp_JBR_1").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_2").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_3").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_4").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_5").className = "fa fa-circle-o";
  document.getElementById("dp_JBR_6").className = "fa fa-circle-o";
}

function closeKLMDP_stat(nilai){
  setMapOnAllDP_KLM(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_KLM_1").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_2").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_3").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_4").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_5").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_6").className = "fa fa-circle-o";
}

function closeKLMDP(){
  setMapOnAllDP_KLM(null,null);
  setMarkerDP(null);
  document.getElementById("dp_KLM_1").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_2").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_3").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_4").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_5").className = "fa fa-circle-o";
  document.getElementById("dp_KLM_6").className = "fa fa-circle-o";
}

function closeKUTDP_stat(nilai){
  setMapOnAllDP_KUT(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_KUT_1").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_2").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_3").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_4").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_5").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_6").className = "fa fa-circle-o";
}

function closeKUTDP(){
  setMapOnAllDP_KUT(null,null);
  setMarkerDP(null);
  document.getElementById("dp_KUT_1").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_2").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_3").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_4").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_5").className = "fa fa-circle-o";
  document.getElementById("dp_KUT_6").className = "fa fa-circle-o";
}

function closeMMNDP_stat(nilai){
  setMapOnAllDP_MMN(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_MMN_1").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_2").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_3").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_4").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_5").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_6").className = "fa fa-circle-o";
}

function closeMMNDP(){
  setMapOnAllDP_MMN(null,null);
  setMarkerDP(null);
  document.getElementById("dp_MMN_1").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_2").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_3").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_4").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_5").className = "fa fa-circle-o";
  document.getElementById("dp_MMN_6").className = "fa fa-circle-o";
}

function closeNDADP_stat(nilai){
  setMapOnAllDP_NDA(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_NDA_1").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_2").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_3").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_4").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_5").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_6").className = "fa fa-circle-o";
}

function closeNDADP(){
  setMapOnAllDP_NDA(null,null);
  setMarkerDP(null);
  document.getElementById("dp_NDA_1").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_2").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_3").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_4").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_5").className = "fa fa-circle-o";
  document.getElementById("dp_NDA_6").className = "fa fa-circle-o";
}

function closeSWIDP_stat(nilai){
  setMapOnAllDP_SWI(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_SWI_1").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_2").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_3").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_4").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_5").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_6").className = "fa fa-circle-o";
}

function closeSWIDP(){
  setMapOnAllDP_SWI(null,null);
  setMarkerDP(null);
  document.getElementById("dp_SWI_1").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_2").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_3").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_4").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_5").className = "fa fa-circle-o";
  document.getElementById("dp_SWI_6").className = "fa fa-circle-o";
}

function closeTOPDP_stat(nilai){
  setMapOnAllDP_TOP(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_TOP_1").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_2").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_3").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_4").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_5").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_6").className = "fa fa-circle-o";
}

function closeTOPDP(){
  setMapOnAllDP_TOP(null,null);
  setMarkerDP(null);
  document.getElementById("dp_TOP_1").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_2").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_3").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_4").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_5").className = "fa fa-circle-o";
  document.getElementById("dp_TOP_6").className = "fa fa-circle-o";
}

function closeUBNDP_stat(nilai){
  setMapOnAllDP_UBN(null,nilai);
  setMarkerDP(null);
  document.getElementById("dp_UBN_1").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_2").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_3").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_4").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_5").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_6").className = "fa fa-circle-o";
}

function closeUBNDP(){
  setMapOnAllDP_UBN(null,null);
  setMarkerDP(null);
  document.getElementById("dp_UBN_1").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_2").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_3").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_4").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_5").className = "fa fa-circle-o";
  document.getElementById("dp_UBN_6").className = "fa fa-circle-o";
}

function tambahdp(){
  map.setOptions({ draggableCursor: 'crosshair' });
  var listener = google.maps.event.addListener(map, 'click', function(event) {
    placeMarkerDP(event.latLng.lat(),event.latLng.lng());
    addDP(event.latLng.lat(),event.latLng.lng());
    google.maps.event.removeListener(listener);
    map.setOptions({ draggableCursor: 'url(http://maps.google.com/mapfiles/openhand.cur), move' });
  });
}

function modaltambahodp() {
  $('#ModalTambahODP').modal('show');
}

function tambahodp(){
 $('#ModalTambahODP').modal('hide'); 
  map.setOptions({ draggableCursor: 'crosshair' });
  var listener = google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng.lat(),event.latLng.lng());
    addODP(event.latLng.lat(),event.latLng.lng());
    google.maps.event.removeListener(listener);
    map.setOptions({ draggableCursor: 'url(http://maps.google.com/mapfiles/openhand.cur), move' });
  });
}

function tambahodp_aku(){
 $('#ModalTambahODP').modal('hide'); 
  map.setOptions({ draggableCursor: 'crosshair' });
  var listener = google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(event.latLng.lat(),event.latLng.lng());
    addODP_aku(event.latLng.lat(),event.latLng.lng());
    google.maps.event.removeListener(listener);
    map.setOptions({ draggableCursor: 'url(http://maps.google.com/mapfiles/openhand.cur), move' });
  });
}

function placeMarkerDP(lat,lng) {
  var location = new google.maps.LatLng(lat,lng);
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    icon: 'http://labs.google.com/ridefinder/images/mm_20_black.png'
  });
  pushMarkerDP(marker);
}

function placeMarker(lat,lng) {
  var location = new google.maps.LatLng(lat,lng);
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    icon: 'http://labs.google.com/ridefinder/images/mm_20_black.png'
  });
  pushMarker(marker);
}

function addDP(lat,lng){
  var modal =
  '<div class="modal fade" id="ModalDP" role="dialog">'+
    '<div class="modal-dialog">'+
      '<div class="modal-content">'+
        '<div class="modal-header">'+
          '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
          '<h4 class="modal-title">Tambah DP</h4>'+
        '</div>'+
        '<div class="modal-body">'+
        '<form action="#" id="formAdd_DP" class="form-horizontal">'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LATITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LAT" id="add_LAT" style="width: 300px;" value="'+lat+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LONGITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LONG" id="add_LONG" style="width: 300px;" value="'+lng+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_STO_DP" id="add_STO_DP" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">DP</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_DP" id="add_DP" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STATUS</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_STATUS_DP" name="add_STATUS_DP">'+
                  '<option value="">-----</option>'+
                  '<option value="NORMAL">NORMAL</option>'+
                  '<option value="PENUH">PENUH</option>'+
                  '<option value="NO TONE">NO TONE</option>'+
                  '<option value="CLOSED">CLOSED</option>'+
                  '<option value="ON PROGRESS">ON PROGRESS</option>'+
                '</select>'+
                '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
        '</form>'+
        '</div>'+
        '<div class="modal-footer">'+
          '<button id="addDP_btn" onclick="submit_addDP()" class="btn btn-sm btn-primary">Submit</button>'+
          '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
        '</div>'+
      '</div>'+
    '</div>'+
  '</div>';
  $('#repDP').replaceWith(modal);
  $('#formAdd_DP')[0].reset();
  $('.form-group').removeClass('has-error');
  $('.help-block').empty();
  $('#ModalDP').modal('show');
}

function addODP(lat,lng){
  var modal =
  '<div class="modal fade" id="ModalODP" role="dialog">'+
    '<div class="modal-dialog">'+
      '<div class="modal-content">'+
        '<div class="modal-header">'+
          '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
          '<h4 class="modal-title">Tambah ODP</h4>'+
        '</div>'+
        '<div class="modal-body">'+
        '<form action="#" id="formAdd_ODP" class="form-horizontal">'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LATITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LAT" id="add_LAT" style="width: 300px;" value="'+lat+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LONGITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LONG" id="add_LONG" style="width: 300px;" value="'+lng+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_STO" name="add_STO">'+
                  '<option value="">-----</option>'+
                  '<option value="BNO">BNO</option>'+
                  '<option value="JBR">JBR</option>'+
                  '<option value="KUT">KUT</option>'+
                  '<option value="KLM">KLM</option>'+
                  '<option value="UBN">UBN</option>'+
                  '<option value="TOP">TOP</option>'+
                  '<option value="SWI">SWI</option>'+
                  '<option value="SMY">SMY</option>'+
                  '<option value="SAU">SAU</option>'+
                  '<option value="MMN">MMN</option>'+
                  '<option value="NDA">NDA</option>'+
                '</select>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">ODP NAME</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_ODP_NAME" id="add_ODP_NAME" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">PD NAME</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_PD_NAME" id="add_PD_NAME" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">PELAKSANAAN</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_PELAKSANAAN" maxlength="10" style="width: 200px;" value="" name="add_PELAKSANAAN" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">PIC BENJAR</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_PIC_BENJAR" maxlength="70" style="width: 300px;" value="" name="add_PIC_BENJAR" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STATUS</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_STATUS" name="add_STATUS">'+
                  '<option value="">-----</option>'+
                  '<option value="NORMAL">NORMAL</option>'+
                  '<option value="PENUH">PENUH</option>'+
                  '<option value="LOSS/REDAMAN TINGGI">LOSS/REDAMAN TINGGI</option>'+
                  '<option value="CLOSED">CLOSED</option>'+
                  '<option value="ON PROGRESS">ON PROGRESS</option>'+
                '</select>'+
                '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">DESKRIPSI</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<textarea id="add_DESKRIPSI" maxlength="200" style="width: 300px;" name="add_DESKRIPSI" class="form-control" type="text" rows="5"></textarea>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">ESTIMASI BIAYA</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_EST_BIAYA" maxlength="10" style="width: 200px;" value="" name="add_EST_BIAYA" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">MATERIAL</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<textarea id="add_MATERIAL" maxlength="200" style="width: 200px;" name="add_MATERIAL" class="form-control" type="text" rows="5"></textarea>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
        '</form>'+
        '</div>'+
        '<div class="modal-footer">'+
          '<button id="addODP_btn" onclick="submit_addODP()" class="btn btn-sm btn-primary">Submit</button>'+
          '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
        '</div>'+
      '</div>'+
    '</div>'+
  '</div>';
  $('#repODP_aku').replaceWith(modal);
  $('#formAdd_ODP')[0].reset();
  $('.form-group').removeClass('has-error');
  $('.help-block').empty();
  $('#ModalODP').modal('show');
  $("#add_PELAKSANAAN").datepicker({
    autoclose: true,
    format: "yyyy-mm-dd",
    orientation: "top auto",
    todayHighlight: true,
  });
}

function addODP_aku(lat,lng){
  var modal =
  '<div class="modal fade" id="ModalODP_aku" role="dialog">'+
    '<div class="modal-dialog">'+
      '<div class="modal-content">'+
        '<div class="modal-header">'+
          '<button type="button" class="close" data-dismiss="modal">&times;</button>'+
          '<h4 class="modal-title">Tambah ODP</h4>'+
        '</div>'+
        '<div class="modal-body">'+
        '<form action="#" id="formAdd_ODP_aku" class="form-horizontal">'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LATITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LAT" id="add_LAT" style="width: 300px;" value="'+lat+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">LONGITUDE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_LONG" id="add_LONG" style="width: 300px;" value="'+lng+'" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_STO" name="add_STO">'+
                  '<option value="">-----</option>'+
                  '<option value="BNO">BNO</option>'+
                  '<option value="JBR">JBR</option>'+
                  '<option value="KUT">KUT</option>'+
                  '<option value="KLM">KLM</option>'+
                  '<option value="UBN">UBN</option>'+
                  '<option value="TOP">TOP</option>'+
                  '<option value="SWI">SWI</option>'+
                  '<option value="SMY">SMY</option>'+
                  '<option value="SAU">SAU</option>'+
                  '<option value="MMN">MMN</option>'+
                  '<option value="NDA">NDA</option>'+
                '</select>'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">ODP NAME</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_ODP_NAME" id="add_ODP_NAME" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">PD NAME</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input name="add_PD_NAME" id="add_PD_NAME" maxlength="70" style="width: 300px;" value="" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">ODP INDEX</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_INDEX" maxlength="50" style="width: 200px;" value="" name="add_INDEX" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">F OLT</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_OLT" maxlength="70" style="width: 300px;" value="" name="add_OLT" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">STATUS ODP</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_STATUS" name="add_STATUS">'+
                  '<option value="">-----</option>'+
                  '<option value="BELUM GOLIVE">BELUM GOLIVE</option>'+
                  '<option value="GOLIVE">GOLIVE</option>'+
                '</select>'+
                '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">QR CODE ODP</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_QR" maxlength="200" style="width: 200px;" value="" name="add_QR" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">TIPE GPON</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_TIPE_GPON" maxlength="100" style="width: 200px;" value="" name="add_TIPE_GPON" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">IP GPON</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_IP_GPON" maxlength="100" style="width: 200px;" value="" name="add_IP_GPON" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">PORT GPON</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_PORT_GPON" maxlength="100" style="width: 200px;" value="" name="add_PORT_GPON" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">IS AVAILABLE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_avail" maxlength="100" style="width: 200px;" value="" name="add_avail" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">IS SERVICE</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_service" maxlength="100" style="width: 200px;" value="" name="add_service" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">IS TOTAL</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
              '<input id="add_total" maxlength="100" style="width: 200px;" value="" name="add_total" class="form-control" type="text">'+
              '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
          '<div class="form-group">'+
            '<label class="control-label pull-left" style="margin-left: 15px">KETERANGAN</label>'+
            '<div class="col-md-9 pull-right" style="margin-right: 15px">'+
                '<select id="add_KETERANGAN" name="add_KETERANGAN">'+
                  '<option value="">-----</option>'+
                  '<option value="AKUPANSI 0% ">AKUPANSI 0%</option>'+
                  '<option value="AKUPANSI 0,1%- 40%">AKUPANSI 0,1%- 40%</option>'+
                  '<option value="AKUPANSI 41%- 80%">AKUPANSI 41%- 80%</option>'+
                  '<option value="DIATAS 80%">DIATAS 80%</option>'+
                '</select>'+
                '<span class="help-block"></span>'+
            '</div>'+
          '</div>'+
        '</form>'+
        '</div>'+
        '<div class="modal-footer">'+
          '<button id="addODPaku_btn" onclick="submit_addODP_aku()" class="btn btn-sm btn-primary">Submit</button>'+
          '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'+
        '</div>'+
      '</div>'+
    '</div>'+
  '</div>';
  $('#repODP').replaceWith(modal);
  $('#formAdd_ODP_aku')[0].reset();
  $('.form-group').removeClass('has-error');
  $('.help-block').empty();
  $('#ModalODP_aku').modal('show');
}

function findALPRO(a,b){
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_alpro')?>",
    type: "GET",
    data: {
      lat: a,
      lng: b
    },
    dataType: "JSON",
    success: function(data)
    {
      if(data == ''){
        alert('Tidak ada ODP terdekat');
      }
      else{
        for (var i = 0; i < data.length; i++){
          icon = getIcon(data[i].KETERANGAN,"odp");
          var lat = data[i].LATITUDE;
          var lng = data[i].LONGITUDE;
          var latLng = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data[i],data[i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerDP(marker);
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function findALPRO_DP(a,b){
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_alpro_dp')?>",
    type: "GET",
    data: {
      lat: a,
      lng: b
    },
    dataType: "JSON",
    success: function(data)
    {
      if(data == ''){
        alert('Tidak ada DP terdekat');
      }
      else{
        for (var i = 0; i < data.length; i++){
          icon = getIcon(data[i].STATUS,"dp");
          var lat = data[i].LATITUDE;
          var lng = data[i].LONGITUDE;
          var latLng = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data[i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarker(marker);
        }
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function findCluster(){
  var a = $('#cariODC_clu').val();
  var b = $('#cariSTO_clu').val();
  var c = $('#cariClus').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_clus')?>",
    type: "GET",
    data: {
      odc: a,
      sto: b,
      alamat: c
    },
    dataType: "JSON",
    success: function(data)
    {
      if(data['DP'] == ''){
        alert('Tidak ada DP disekitar koordinat');
      }
      else if(data['ODP'] == ''){
        alert('Tidak ada ODP disekitar koordinat');
      }
      else if(data['ODC'] == ''){
        alert('Tidak ada ODC disekitar koordinat');
      }
      else{
        for (var i = 0; i < data['ODP'].length; i++){
          icon = getIcon(data['ODP'][i].KETERANGAN,"odp");
          var lat = data['ODP'][i].LATITUDE;
          var lng = data['ODP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data['ODP'][i],data['ODP'][i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
        }
        for (var i = 0; i < data['DP'].length; i++){
          icon = getIcon(data['DP'][i].STATUS,"dp");
          var lat = data['DP'][i].LATITUDE;
          var lng = data['DP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data['DP'][i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
        }
        for (var i = 0; i < data['MSAN'].length; i++){
          var lat = data['MSAN'][i].LATITUDE;
          var lng = data['MSAN'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: 'http://maps.google.com/mapfiles/kml/pal4/icon60.png',
            zIndex: 1000
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentOther(data['MSAN'][i]),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
        }
        for (var i = 0; i < data['ONU'].length; i++){
          var lat = data['ONU'][i].LATITUDE;
          var lng = data['ONU'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: 'http://maps.google.com/mapfiles/kml/pal4/icon58.png',
            zIndex: 1000
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentOther(data['ONU'][i]),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
        }
        for (var i = 0; i < data['RK'].length; i++){
          var lat = data['RK'][i].LATITUDE;
          var lng = data['RK'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: 'http://maps.google.com/mapfiles/kml/pal4/icon47.png',
            zIndex: 1000
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentOther(data['RK'][i]),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
        }
        for (var i = 0; i < data['ODC'].length; i++){
          var lat = data['ODC'][i].LATITUDE;
          var lng = data['ODC'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: 'http://maps.google.com/mapfiles/ms/micons/red-pushpin.png',
            zIndex: 1000
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentODC(data['ODC'][i]),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerCluster(marker);
          map.setCenter(latLng1);
          map.setZoom(17);
        }
        $('#ModalCariCluster').modal('hide');
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function findCluster_Polygon(){
  var b = $('#cariSTO_clu_polygon').val();
  var a = $('#cariClus_polygon').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_clus_polygon')?>",
    type: "GET",
    data: {
      sto: b,
      name: a
    },
    dataType: "JSON",
    success: function(data)
    {
      polygonku = createPolygon(data['polygon']);
      polygons_ku.push(polygonku);
      polygonku.setMap(map);
      var latLng2 = new google.maps.LatLng(data['polygon'][0].LATITUDE,data['polygon'][0].LONGITUDE);
      map.setCenter(latLng2);
      map.setZoom(15);
      var jum_odp=0;
      var jum_dp=0;
      var jum_msan=0;
      var jum_onu=0;
      var jum_rk=0;
      var jum_odc=0;
      var jum_serv=0;
      var jum_tot=0;
      var jum_avail=0;
      $('#ModalCariCluster_Polygon').modal('hide');
      for (var i = 0; i < data['ODP'].length; i++){
        icon = getIcon(data['ODP'][i].KETERANGAN,"odp");
        var lat = data['ODP'][i].LATITUDE;
        var lng = data['ODP'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) {
          jum_serv+=parseInt(data['ODP'][i].IS_SERVICE);
          jum_tot+=parseInt(data['ODP'][i].IS_TOTAL);
          jum_avail+=parseInt(data['ODP'][i].IS_AVAIL);
          jum_odp++;
          stp_target.push(data['ODP'][i].PD_NAME);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data['ODP'][i],data['ODP'][i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerPolygon(marker);
        }
      }
      // console.log(stp_target);
      for (var i = 0; i < data['DP'].length; i++){
        icon = getIcon(data['DP'][i].STATUS,"dp");
        var lat = data['DP'][i].LATITUDE;
        var lng = data['DP'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) {
          jum_dp++;
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data['DP'][i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerPolygon(marker);
          }
      }
      for (var i = 0; i < data['ODC'].length; i++){
        icon = 'http://maps.google.com/mapfiles/ms/micons/red-pushpin.png';
        var lat = data['ODC'][i].LATITUDE;
        var lng = data['ODC'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) {
          jum_odc++;
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentODC(data['ODC'][i]),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerPolygon(marker);
        }
      }
      for (var i = 0; i < data['MSAN'].length; i++){
        var lat = data['MSAN'][i].LATITUDE;
        var lng = data['MSAN'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) jum_msan++;
      }
      for (var i = 0; i < data['ONU'].length; i++){
        var lat = data['ONU'][i].LATITUDE;
        var lng = data['ONU'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) jum_onu++;
      }
      for (var i = 0; i < data['RK'].length; i++){
        var lat = data['RK'][i].LATITUDE;
        var lng = data['RK'][i].LONGITUDE;
        var latLng1 = new google.maps.LatLng(lat,lng);
        var lele = google.maps.geometry.poly.containsLocation(latLng1, polygonku);
        if (lele) jum_rk++;
      }
      data_parsing={
        name:a,
        odp:jum_odp,
        dp:jum_dp,
        odc:jum_odc,
        msan:jum_msan,
        onu:jum_onu,
        rk:jum_rk,
        serv:jum_serv,
        tot:jum_tot,
        avail:jum_avail
      };
      PolygonContentIW(data_parsing,stp_target,polygonku);
      //
      // if(data['DP'] == ''){
      //   alert('Tidak ada DP disekitar koordinat');
      // }
      // else if(data['ODP'] == ''){
      //   alert('Tidak ada ODP disekitar koordinat');
      // }
      // else if(data['ODC'] == ''){
      //   alert('Tidak ada ODC disekitar koordinat');
      // }
      // else{
      //
        $('#ModalCariCluster_Polygon').modal('hide');
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function PolygonContentIW(data_parsing,stp_target,polygonku) {
  $.ajax({
    url: "<?php echo site_url('Maps/ajax_get_rp_total')?>",
    type: 'POST',
    dataType: 'JSON',
    data: {stp_target: stp_target},
    success: function(data){
      rp_total = data[0].RP_TOTAL;
      infoWindow = new google.maps.InfoWindow;
      polygonku.addListener('click',setContentPolygon);
    },
    error: function() {
      alert('LELE ERROR!');
    }
  })
}

function setContentPolygon(event){
  var contentString =
  '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
    '<form class="form-horizontal">'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Nama Cluster</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['name']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah ODP</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['odp']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah DP</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['dp']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah MSAN</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['msan']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah ONU</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['onu']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah RK</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['rk']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah ODC</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['odc']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah Pelanggan</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['serv']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Port ODP Idle</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['avail']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah Total</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+data_parsing['tot']+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Jumlah RP Total</label>'+
        '<div style="margin-left: 150px">'+
            '<input style="width: 200px;" value="'+rp_total+'" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
    '</form>'+
    '<a class="btn btn-default" onclick="show_table_polygon()" data-toggle="modal" data-target="#ModalMapsPolygon" data-dismiss="modal"><i class="fa fa-calendar"></i> Detail Pelanggan</a>'+
  '</div>';
  // Replace the info window's content and position.
  google.maps.event.addListener(map, 'click', function() {
    close_polygon();
  });
  infoWindow.setContent(contentString);
  infoWindow.setPosition(event.latLng);
  infoWindow.open(map);
  toogle=1;
}

function close_polygon(){
  if (toogle==1) {
    infoWindow.close();
    toogle=0;
  }
}

function getpoly(data){
  var poly = [];
  for (var i = 0; i < data.length; i++){
    poly[i]={
      lat:parseFloat(data[i].LATITUDE),
      lng:parseFloat(data[i].LONGITUDE)
    }
  }
  return poly;
}
function createPolygon(data){
  var polygon_saya = getpoly(data);
  return new google.maps.Polygon({
    paths: polygon_saya,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
    fillColor: '#FF0000',
    fillOpacity: 0.35
  });
}

function findND(){
  var a = $('#cariND').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_nd')?>",
    type: "GET",
    data: {
      nd: a
    },
    dataType: "JSON",
    success: function(data)
    {
      if((data['ODP'] == '')&&(data['DP'] == '')){
        alert('ND tidak ditemukan');
      }
      else if(data['ODP'] == ''){
        alert('Tidak ada ODP terdeteksi');
      }
      else if(data['DP'] == ''){
        alert('Tidak ada DP terdeteksi');
      }
      if((data['ODP'] != '')||(data['DP'] != '')){
        for (var i = 0; i < data['ODP'].length; i++){
          icon = getIcon(data['ODP'][i].KETERANGAN,"odp");
          var lat = data['ODP'][i].LATITUDE;
          var lng = data['ODP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data['ODP'][i],data['ODP'][i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerND(marker);
        }
        for (var i = 0; i < data['DP'].length; i++){
          icon = getIcon(data['DP'][i].STATUS,"dp");
          var lat = data['DP'][i].LATITUDE;
          var lng = data['DP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data['DP'][i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerND(marker);
        }
        map.setCenter(latLng1);
        map.setZoom(17);
        $('#ModalCariND').modal('hide');
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}
function ExportCSVaku(){
  $.ajax({
    url: '<?php echo site_url('Maps/ExportCSVaku()') ?>',
    type: 'POST',
    dataType: 'JSON',
    success:function(){
      alert('Berhasil');
    },
    error:function(){
      alert('gagal');
    }
  });
}
function findKoordinat(){
  var a = $('#cariLat').val();
  var b = $('#cariLng').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_koor')?>",
    type: "GET",
    data: {
      lat: a,
      lng: b
    },
    dataType: "JSON",
    success: function(data)
    {
      if((data['ODP'] == '')&&(data['DP'] == '')){
        alert('Tidak ada ALPRO disekitar koordinat');
      }
      else if(data['DP'] == ''){
        alert('Tidak ada DP disekitar koordinat');
      }
      else if(data['ODP'] == ''){
        alert('Tidak ada ODP disekitar koordinat');
      }
      if((data['ODP'] != '')||(data['DP'] != '')){
        for (var i = 0; i < data['ODP'].length; i++){
          icon = getIcon(data['ODP'][i].KETERANGAN,"odp");
          var lat = data['ODP'][i].LATITUDE;
          var lng = data['ODP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var latLng2 = new google.maps.LatLng(a,b);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data['ODP'][i],data['ODP'][i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerKoordinat(marker);
        }
        for (var i = 0; i < data['DP'].length; i++){
          icon = getIcon(data['DP'][i].STATUS,"dp");
          var lat = data['DP'][i].LATITUDE;
          var lng = data['DP'][i].LONGITUDE;
          var latLng1 = new google.maps.LatLng(lat,lng);
          var latLng2 = new google.maps.LatLng(a,b);
          var marker = new google.maps.Marker({
            position: latLng1,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data['DP'][i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerKoordinat(marker);
        }
        var marker = new google.maps.Marker({
          position: latLng2,
          map: map,
          icon: 'http://maps.google.com/mapfiles/ms/micons/red-pushpin.png',
          zIndex: 1000,
        });
        pushMarkerKoordinat(marker);
        map.setCenter(latLng2);
        map.setZoom(17);
        $('#ModalCariKoordinat').modal('hide');
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function findDP(){
  var a = $('#cariDP').val();
  var b = $('#cariSTO_dp').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_dp')?>",
    type: "GET",
    data: {
      dp: a,
      sto: b
    },
    dataType: "JSON",
    success: function(data)
    {

      if(data == ''){
        alert('DP tidak ditemukan');
      }
      else{
        for (var i = 0; i < data.length; i++){
          icon = getIcon(data[i].STATUS,"dp");
          var lat = data[i].LATITUDE;
          var lng = data[i].LONGITUDE;
          var latLng = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContentDP(data[i],null),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarkerDP(marker);
          map.setCenter(latLng);
        }
        $('#ModalCariDP').modal('hide');
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function findODP(){
  var a = $('#cariODP').val();
  var b = $('#cariSTO_odp').val();
  $.ajax({
    url : "<?php echo site_url('Maps/ajax_get_odp')?>",
    type: "GET",
    data: {
      odp: a,
      sto: b
    },
    dataType: "JSON",
    success: function(data)
    {

      if(data == ''){
        alert('ODP tidak ditemukan');
      }
      else{
        for (var i = 0; i < data.length; i++){
          icon = getIcon(data[i].KETERANGAN,"odp");
          var lat = data[i].LATITUDE;
          var lng = data[i].LONGITUDE;
          var latLng = new google.maps.LatLng(lat,lng);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            icon: icon
          });
          marker.infowindow = new google.maps.InfoWindow({
            content: setContent(data[i],data[i].KETERANGAN),
            maxWidth: 400
          });
          infowindow_event(map,marker);
          pushMarker(marker);
          map.setCenter(latLng);
        }
        $('#ModalCariODP').modal('hide');
      }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function getIcon(n,m){
  if(n == "AKUPANSI 0% "){
    icon = 'http://labs.google.com/ridefinder/images/mm_20_white.png';
  }
  else if(n == "AKUPANSI 0,1%- 40%"){
    icon = 'http://labs.google.com/ridefinder/images/mm_20_green.png';
  }
  else if(n == "AKUPANSI 41%- 80%"){
    icon = 'http://labs.google.com/ridefinder/images/mm_20_yellow.png';
  }
  else if(n == "DIATAS 80%"){
    icon = 'http://labs.google.com/ridefinder/images/mm_20_red.png';
  }
  else if(n == "NORMAL"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/yellow.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/yellow-dot.png';
    }
  }
  else if(n == "PENUH"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/red.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/red-dot.png';
    }
  }
  else if(n == "LOSS/REDAMAN TINGGI"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/orange.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/orange-dot.png';
    }
  }
  else if(n == "NO TONE"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/orange.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/orange-dot.png';
    }
  }
  else if(n == "CLOSED"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/green.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/green-dot.png';
    }
  }
  else if(n == "ON PROGRESS"){
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/blue.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/blue-dot.png';
    }
  }
  else{
    if(m == "odp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/purple.png';
    }
    else if(m == "dp"){
      icon = 'http://maps.google.com/mapfiles/ms/micons/purple-dot.png';
    }
  }
  return icon;
}

function createMarkerDP_SMY(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "SMY"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SMY(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "SMY"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SMY(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_SMY(null,nilai);
    setMarkerDP_SMY(nilai);
  }
}

function createMarkerDP_SAU(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "SAU"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SAU(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "SAU"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SAU(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_SAU(null,nilai);
    setMarkerDP_SAU(nilai);
  }
}

function createMarkerDP_BNO(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "BNO"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_BNO(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "BNO"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_BNO(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_BNO(null,nilai);
    setMarkerDP_BNO(nilai);
  }
}

function createMarkerDP_JBR(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "JBR"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_JBR(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "JBR"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_JBR(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_JBR(null,nilai);
    setMarkerDP_JBR(nilai);
  }
}

function createMarkerDP_KLM(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "KLM"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_KLM(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "KLM"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_KLM(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_KLM(null,nilai);
    setMarkerDP_KLM(nilai);
  }
}

function createMarkerDP_KUT(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "KUT"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_KUT(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "KUT"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_KUT(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_KUT(null,nilai);
    setMarkerDP_KUT(nilai);
  }
}

function createMarkerDP_MMN(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "MMN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_MMN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "MMN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_MMN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_MMN(null,nilai);
    setMarkerDP_MMN(nilai);
  }
}

function createMarkerDP_NDA(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "NDA"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_NDA(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "NDA"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_NDA(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_NDA(null,nilai);
    setMarkerDP_NDA(nilai);
  }
}

function createMarkerDP_SWI(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "SWI"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SWI(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "SWI"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_SWI(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_SWI(null,nilai);
    setMarkerDP_SWI(nilai);
  }
}

function createMarkerDP_TOP(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "TOP"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_TOP(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "TOP"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_TOP(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_TOP(null,nilai);
    setMarkerDP_TOP(nilai);
  }
}

function createMarkerDP_UBN(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "NO TONE")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_stat')?>",
        type: "GET",
        data: {
          dp: nilai,
          sto: "UBN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_UBN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_dp_oth')?>",
        type: "GET",
        data: {
          sto: "UBN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada DP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP_UBN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAllDP_UBN(null,nilai);
    setMarkerDP_UBN(nilai);
  }
}

function createMarker_SMY(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "SMY"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SMY(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "SMY"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SMY(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "SMY"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SMY(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_SMY(null,nilai);
    setMarker_SMY(nilai);
  }
}

function createMarker_SAU(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "SAU"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SAU(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "SAU"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SAU(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "SAU"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SAU(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_SAU(null,nilai);
    setMarker_SAU(nilai);
  }
}

function createMarker_BNO(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "BNO"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_BNO(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "BNO"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_BNO(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "BNO"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_BNO(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_BNO(null,nilai);
    setMarker_BNO(nilai);
  }
}

function createMarker_JBR(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "JBR"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_JBR(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "JBR"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_JBR(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "JBR"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_JBR(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_JBR(null,nilai);
    setMarker_JBR(nilai);
  }
}

function createMarker_UBN(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "UBN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_UBN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "UBN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_UBN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "UBN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_UBN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_UBN(null,nilai);
    setMarker_UBN(nilai);
  }
}

function createMarker_KLM(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "KLM"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KLM(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "KLM"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KLM(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "KLM"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KLM(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_KLM(null,nilai);
    setMarker_KLM(nilai);
  }
}

function createMarker_KUT(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "KUT"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KUT(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "KUT"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KUT(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "KUT"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_KUT(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_KUT(null,nilai);
    setMarker_KUT(nilai);
  }
}

function createMarker_MMN(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "MMN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_MMN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "MMN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_MMN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "MMN"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_MMN(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_MMN(null,nilai);
    setMarker_MMN(nilai);
  }
}

function createMarker_NSD(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "NSD"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_NSD(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "NSD"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_NSD(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "NSD"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_NSD(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_NSD(null,nilai);
    setMarker_NSD(nilai);
  }
}

function createMarker_SWI(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "SWI"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SWI(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "SWI"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SWI(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "SWI"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_SWI(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_SWI(null,nilai);
    setMarker_SWI(nilai);
  }
}

function createMarker_TOP(nama_kelas,nilai){
  if(nama_kelas.className == "fa fa-circle-o"){
    if ((nilai == "AKUPANSI 0% ")
      ||(nilai == "AKUPANSI 0,1%- 40%")
      ||(nilai == "AKUPANSI 41%- 80%")
      ||(nilai == "DIATAS 80%"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_aku')?>",
        type: "GET",
        data: {
          odp_aku: nilai,
          sto: "TOP"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan akupansi '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_TOP(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else if ((nilai == "NORMAL")
      ||(nilai == "PENUH")
      ||(nilai == "LOSS/REDAMAN TINGGI")
      ||(nilai == "CLOSED")
      ||(nilai == "ON PROGRESS"))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_stat')?>",
        type: "GET",
        data: {
          odp_stat: nilai,
          sto: "TOP"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_TOP(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
    else
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_get_odp_oth')?>",
        type: "GET",
        data: {
          sto: "TOP"
        },
        dataType: "JSON",
        success: function(data)
        {

          if(data == ''){
            alert('Tidak ada ODP dengan status '+nilai);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],nilai),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker_TOP(nilai,marker);
              nama_kelas.className = "fa fa-check-circle-o";
            }
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }
  }
  else
  {
    nama_kelas.className = "fa fa-circle-o";
    setMapOnAll_TOP(null,nilai);
    setMarker_TOP(nilai);
  }
}

function setContent(data,n){
  if((n == "NORMAL")
    ||(n == "PENUH")
    ||(n == "LOSS/REDAMAN TINGGI")
    ||(n == "CLOSED")
    ||(n == "ON PROGRESS"))
  {
    var content_status =
    '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
      '<form action="#" id="formODPStatus" class="form-horizontal">'+
        '<div class="form-group">'+
          '<h4 align="center"><input name="PD_NAME" id="PD_NAME" maxlength="70" style="width: 300px; text-align: center;" value="'+ data.PD_NAME +'" class="form-control" type="text" readonly></h4>'+
        '</div>'+
        '<img src="images/'+ data.IMAGES +'" style="display: block; max-width: 350px; max-height: 300px; margin: auto;"></img><br></br>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">PIC Benjar</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PIC_BENJAR" maxlength="70" style="width: 200px;" value="'+ data.PIC_BENJAR +'" name="PIC_BENJAR" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Status</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STATUS" maxlength="70" style="width: 200px;" value="'+ data.STATUS +'" name="STATUS" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Deskripsi</label>'+
          '<div style="margin-left: 150px">'+
              '<textarea id="DESKRIPSI" maxlength="200" style="width: 200px;" name="DESKRIPSI" class="form-control" type="text" readonly rows="5">'+data.DESKRIPSI+'</textarea>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Estimasi Biaya</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="EST_BIAYA" maxlength="10" style="width: 100px;" value="'+ data.EST_BIAYA +'" name="EST_BIAYA" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Pelaksanaan</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PELAKSANAAN" maxlength="10" style="width: 100px;" value="'+ data.PELAKSANAAN +'" name="PELAKSANAAN" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Material</label>'+
          '<div style="margin-left: 150px">'+
              '<textarea id="MATERIAL" maxlength="200" style="width: 200px;" name="MATERIAL" class="form-control" type="text" readonly rows="5">'+data.MATERIAL+'</textarea>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="show_table(\''+data.PD_NAME+'\')" data-toggle="modal" data-target="#ModalMaps" data-dismiss="modal"><i class="fa fa-table"></i> Detail Pelanggan</a></label>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="findALPRO_DP(\''+data.LATITUDE+'\',\''+data.LONGITUDE+'\')"><i class="fa fa-wifi"></i> DP Terdekat</a></label>'+
        '</div>'+
      '</form>'+
      '<div id="123" class="btn-group pull-right" style="margin-right: 20px">'+
          '<button id="addPhotoODP" onclick="addPhoto()" class="btn btn-sm bg-blue"><i class="fa fa-camera"></i> Add Photo</button>'+
          '<button id="btnDeleteODP" onclick="deleteODP(\''+data.PD_NAME+'\')" class="btn btn-sm bg-black"><i class="fa fa-trash"></i> Delete</button>'+
          '<button id="btnEditODP" onclick="editODP_btn()" class="btn btn-sm bg-red"><i class="glyphicon glyphicon-pencil"></i> Edit</button>'+
      '</div>'+
      '<div class="btn-group pull-left">'+
          '<button style="display: none;" id="btnSaveODP" onclick="saveODP()" class="btn btn-sm bg-green"><i class="fa fa-book"></i> Save</button>'+
      '</div>'+
    '</div>';
    return content_status;
  }
  else if((n == "AKUPANSI 0% ")
    ||(n == "AKUPANSI 0,1%- 40%")
    ||(n == "AKUPANSI 41%- 80%")
    ||(n == "DIATAS 80%"))
  {
    var content_akupansi =
    '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
      '<form action="#" id="formODPaku" class="form-horizontal">'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Tanggal Update</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="UPDATE_DATE" style="width: 150px;" value="'+data.UPDATE_DATE+'" name="UPDATE_DATE" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Nama ODP</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="ODP_NAME" style="width: 150px;" value="'+data.ODP_NAME+'" name="ODP_NAME" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Indeks</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PD_NAME" style="width: 230px;" value="'+data.PD_NAME+'" name="PD_NAME" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">QR Code</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="QR_CODE_ODP" style="width: 100px;" value="'+data.QR_CODE_ODP+'" name="QR_CODE_ODP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Status</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STATUS_ODP" style="width: 100px;" value="'+data.STATUS_ODP+'" name="STATUS_ODP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Idle</label>'+
            '<div style="margin-left: 150px">'+
              '<input id="IS_AVAIL" style="width: 50px;" value="'+data.IS_AVAIL+'" name="IS_AVAIL" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Pelanggan Aktif</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="IS_SERVICE" style="width: 50px;" value="'+data.IS_SERVICE+'" name="IS_SERVICE" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Kapasitas Total</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="IS_TOTAL" style="width: 50px;" value="'+data.IS_TOTAL+'" name="IS_TOTAL" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Akupansi</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="KETERANGAN" style="width: 200px;" value="'+data.KETERANGAN+'" name="KETERANGAN" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">IP GPON</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="IP_GPON" style="width: 200px;" value="'+data.IP_GPON+'" name="IP_GPON" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Port GPON</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PORT_GPON" style="width: 200px;" value="'+data.PORT_GPON+'" name="PORT_GPON" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Tipe GPON</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="TIPE_GPON" style="width: 200px;" value="'+data.TIPE_GPON+'" name="TIPE_GPON" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="findALPRO_DP(\''+data.LATITUDE+'\',\''+data.LONGITUDE+'\')"><i class="fa fa-wifi"></i> DP Terdekat</a></label>'+
        '</div>'+
      '</form>'+
      '<a class="btn btn-default" onclick="show_table(\''+data.PD_NAME+'\')" data-toggle="modal" data-target="#ModalMaps" data-dismiss="modal"><i class="fa fa-calendar"></i> Detail Pelanggan</a>'+
      '<div id="12345" class="btn-group pull-right" style="margin-right: 20px">'+
          '<button id="btnEditODPaku" onclick="editODPaku_btn()" class="btn btn-sm bg-red"><i class="glyphicon glyphicon-pencil"></i> Edit</button>'+
      '</div>'+
      '<div class="btn-group pull-left">'+
          '<button style="display: none;" id="btnSaveODPaku" onclick="saveODPaku()" class="btn btn-sm bg-green"><i class="fa fa-book"></i> Save</button>'+
      '</div>'+
    '</div>';
    return content_akupansi;
  }
  else
  {
    var content_status =
    '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
      '<form action="#" id="formODPStatus" class="form-horizontal">'+
        '<div class="form-group">'+
          '<h4 align="center"><input name="PD_NAME" id="PD_NAME" maxlength="70" style="width: 300px; text-align: center;" value="'+ data.PD_NAME +'" class="form-control" type="text" readonly></h4>'+
        '</div>'+
        '<img src="images/'+ data.IMAGES +'" style="display: block; max-width: 350px; max-height: 300px; margin: auto;"></img><br></br>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">PIC Benjar</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PIC_BENJAR" maxlength="70" style="width: 200px;" value="'+ data.PIC_BENJAR +'" name="PIC_BENJAR" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Status</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STATUS" maxlength="70" style="width: 200px;" value="'+ data.STATUS +'" name="STATUS" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Deskripsi</label>'+
          '<div style="margin-left: 150px">'+
              '<textarea id="DESKRIPSI" maxlength="200" style="width: 200px;" name="DESKRIPSI" class="form-control" type="text" readonly rows="5">'+data.DESKRIPSI+'</textarea>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Estimasi Biaya</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="EST_BIAYA" maxlength="10" style="width: 100px;" value="'+ data.EST_BIAYA +'" name="EST_BIAYA" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Pelaksanaan</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="PELAKSANAAN" maxlength="10" style="width: 100px;" value="'+ data.PELAKSANAAN +'" name="PELAKSANAAN" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Material</label>'+
          '<div style="margin-left: 150px">'+
              '<textarea id="MATERIAL" maxlength="200" style="width: 200px;" name="MATERIAL" class="form-control" type="text" readonly rows="5">'+data.MATERIAL+'</textarea>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="show_table(\''+data.PD_NAME+'\')" data-toggle="modal" data-target="#ModalMaps" data-dismiss="modal"><i class="fa fa-table"></i> Detail Pelanggan</a></label>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="findALPRO_DP(\''+data.LATITUDE+'\',\''+data.LONGITUDE+'\')"><i class="fa fa-wifi"></i> DP Terdekat</a></label>'+
        '</div>'+
      '</form>'+
      '<div id="123" class="btn-group pull-right" style="margin-right: 20px">'+
          '<button id="addPhotoODP" onclick="addPhoto()" class="btn btn-sm bg-blue"><i class="fa fa-camera"></i> Add Photo</button>'+
          '<button id="btnDeleteODP" onclick="deleteODP(\''+data.PD_NAME+'\')" class="btn btn-sm bg-black"><i class="fa fa-trash"></i> Delete</button>'+
          '<button id="btnEditODP" onclick="editODP_btn()" class="btn btn-sm bg-red"><i class="glyphicon glyphicon-pencil"></i> Edit</button>'+
      '</div>'+
      '<div class="btn-group pull-left">'+
          '<button style="display: none;" id="btnSaveODP" onclick="saveODP()" class="btn btn-sm bg-green"><i class="fa fa-book"></i> Save</button>'+
      '</div>'+
    '</div>';
    return content_status;
  }
}

function setContentDP(data,n){
  if((n == "NORMAL")
    ||(n == "PENUH")
    ||(n == "NO TONE")
    ||(n == "CLOSED")
    ||(n == "ON PROGRESS"))
  {
    var content_status =
    '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
      '<form action="#" id="formDPStatus" class="form-horizontal">'+
        '<div class="form-group">'+
          '<h4 align="center"><input name="DP" id="DP" maxlength="70" style="width: 300px; text-align: center;" value="'+ data.DP +'" class="form-control" type="text" readonly></h4>'+
        '</div>'+
        '<img src="images/'+ data.IMAGES +'" style="display: block; max-width: 350px; max-height: 300px; margin: auto;"></img><br></br>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STO_DP" maxlength="70" style="width: 100px;" value="'+ data.STO +'" name="STO_DP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Status</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STATUS_DP" maxlength="70" style="width: 200px;" value="'+ data.STATUS +'" name="STATUS_DP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="show_tableDP(\''+data.DP+'\',\''+data.STO+'\')" data-toggle="modal" data-target="#ModalMapsDP" data-dismiss="modal"><i class="fa fa-table"></i> Detail Pelanggan</a></label>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="findALPRO(\''+data.LATITUDE+'\',\''+data.LONGITUDE+'\')"><i class="fa fa-wifi"></i> ODP Terdekat</a></label>'+
        '</div>'+
      '</form>'+
      '<div id="1234" class="btn-group pull-right" style="margin-right: 20px">'+
          '<button id="addPhotoDP" onclick="addPhotoDP()" class="btn btn-sm bg-blue"><i class="fa fa-camera"></i> Add Photo</button>'+
          '<button id="btnDeleteDP" onclick="deleteDP(\''+data.DP+'\',\''+data.STO+'\')" class="btn btn-sm bg-black"><i class="fa fa-trash"></i> Delete</button>'+
          '<button id="btnEditDP" onclick="editDP_btn()" class="btn btn-sm bg-red"><i class="glyphicon glyphicon-pencil"></i> Edit</button>'+
      '</div>'+
      '<div class="btn-group pull-left">'+
          '<button style="display: none;" id="btnSaveDP" onclick="saveDP()" class="btn btn-sm bg-green"><i class="fa fa-book"></i> Save</button>'+
      '</div>'+
    '</div>';
    return content_status;
  }
  else
  {
    var content_status =
    '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
      '<form action="#" id="formDPStatus" class="form-horizontal">'+
        '<div class="form-group">'+
          '<h4 align="center"><input name="DP" id="DP" maxlength="70" style="width: 300px; text-align: center;" value="'+ data.DP +'" class="form-control" type="text" readonly></h4>'+
        '</div>'+
        '<img src="images/'+ data.IMAGES +'" style="display: block; max-width: 350px; max-height: 300px; margin: auto;"></img><br></br>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STO_DP" maxlength="70" style="width: 100px;" value="'+ data.STO +'" name="STO_DP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">Status</label>'+
          '<div style="margin-left: 150px">'+
              '<input id="STATUS_DP" maxlength="70" style="width: 200px;" value="'+ data.STATUS +'" name="STATUS_DP" class="form-control" type="text" readonly>'+
              '<span class="help-block"></span>'+
          '</div>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="show_tableDP(\''+data.DP+'\',\''+data.STO+'\')" data-toggle="modal" data-target="#ModalMapsDP" data-dismiss="modal"><i class="fa fa-table"></i> Detail Pelanggan</a></label>'+
        '</div>'+
        '<div class="form-group">'+
          '<label class="control-label pull-left" style="margin-left: 15px">'+
          '<a class="btn btn-default" onclick="findALPRO(\''+data.LATITUDE+'\',\''+data.LONGITUDE+'\')"><i class="fa fa-wifi"></i> ODP Terdekat</a></label>'+
        '</div>'+
      '</form>'+
      '<div id="1234" class="btn-group pull-right" style="margin-right: 20px">'+
          '<button id="addPhotoDP" onclick="addPhotoDP()" class="btn btn-sm bg-blue"><i class="fa fa-camera"></i> Add Photo</button>'+
          '<button id="btnDeleteDP" onclick="deleteDP(\''+data.DP+'\',\''+data.STO+'\')" class="btn btn-sm bg-black"><i class="fa fa-trash"></i> Delete</button>'+
          '<button id="btnEditDP" onclick="editDP_btn()" class="btn btn-sm bg-red"><i class="glyphicon glyphicon-pencil"></i> Edit</button>'+
      '</div>'+
      '<div class="btn-group pull-left">'+
          '<button style="display: none;" id="btnSaveDP" onclick="saveDP()" class="btn btn-sm bg-green"><i class="fa fa-book"></i> Save</button>'+
      '</div>'+
    '</div>';
    return content_status;
  }
}

function setContentODC(data){
  var content =
  '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
    '<form action="#" id="formDPStatus" class="form-horizontal">'+
      '<div class="form-group">'+
        '<h4 align="center"><input name="ODC" id="ODC" maxlength="70" style="width: 300px; text-align: center;" value="'+ data.NAME +'" class="form-control" type="text" readonly></h4>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
        '<div style="margin-left: 150px">'+
            '<input id="STO_C" maxlength="70" style="width: 100px;" value="'+ data.STO +'" name="STO_C" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Alamat</label>'+
        '<div style="margin-left: 150px">'+
            '<textarea id="ALAMAT_C" rows="5" maxlength="70" style="width: 200px;" name="ALAMAT_C" class="form-control" type="text" readonly>'+ data.ALAMAT +'</textarea>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
    '</form>'+
  '</div>';
  return content;
}

function setContentOther(data){
  var content =
  '<div style="width: 400px; overflow:hidden !important; line-height: 1.35;white-space: nowrap;">'+
    '<form action="#" id="formDPStatus" class="form-horizontal">'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">STO</label>'+
        '<div style="margin-left: 150px">'+
            '<input id="STO_C" maxlength="70" style="width: 100px;" value="'+ data.STO +'" name="STO_C" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
      '<div class="form-group">'+
        '<label class="control-label pull-left" style="margin-left: 15px">Name</label>'+
        '<div style="margin-left: 150px">'+
            '<input id="NAME_C" maxlength="70" style="width: 200px;" value="'+ data.NAME +'" name="NAME_C" class="form-control" type="text" readonly>'+
            '<span class="help-block"></span>'+
        '</div>'+
      '</div>'+
    '</form>'+
  '</div>';
  return content;
}

function infowindow_event(mapp,mark){
  google.maps.event.addListener(mark, 'click', function() {
    if(prev_win){
      prev_win.close();
    }
    if((prev_win == this.infowindow)&&(count==1)){
      prev_win.close();
      count = 0;
    }
    else
    {
      prev_win = this.infowindow;
      this.infowindow.open(mapp, this);
      count = 1;
    }
  });
  google.maps.event.addListener(mark.infowindow, 'domready', function() {
    if("<?php echo $role ?>" == "Teknisi"){
      $('#123').remove();
      $('#1234').remove();
      $('#12345').remove();
    }
    if ("<?php echo $role ?>" == "Help Desk") {
      $('#12345').remove();
    }
    else{
      $("#PELAKSANAAN").datepicker({
        autoclose: true,
        format: "yyyy-mm-dd",
        todayHighlight: true,
        orientation: "top auto",
        todayBtn: true,
        todayHighlight: true,
      });
    }
  });
  google.maps.event.addListener(mapp, 'click', function() {
    if(prev_win){
      prev_win.close();
    }
  });
}

function addPhoto(){
  $('#ModalPhoto').modal('show');
}

function addPhotoDP(){
  $('#ModalPhotoDP').modal('show');
}

function saveDP_btn(){
  document.getElementById("btnSaveDP").style.display = "none";
  document.getElementById("btnEditDP").disabled = false;
  document.getElementById("STATUS_DP").disabled = true;
}

function saveODP_btn(){
  document.getElementById("btnSaveODP").style.display = "none";
  document.getElementById("btnEditODP").disabled = false;
  document.getElementById("PIC_BENJAR").readOnly = true;
  document.getElementById("DESKRIPSI").readOnly = true;
  document.getElementById("EST_BIAYA").readOnly = true;
  document.getElementById("PELAKSANAAN").readOnly = true;
  document.getElementById("MATERIAL").readOnly = true;
  document.getElementById("STATUS").disabled = true;
}

function saveODPaku_btn(){
  document.getElementById("btnSaveODPaku").style.display = "none";
  document.getElementById("btnEditODPaku").disabled = false;
  document.getElementById("QR_CODE_ODP").readOnly = true;
  document.getElementById("STATUS_ODP").readOnly = true;
  document.getElementById("IP_GPON").readOnly = true;
  document.getElementById("PORT_GPON").readOnly = true;
  document.getElementById("TIPE_GPON").readOnly = true;
}

function editDP_btn(){
  document.getElementById("btnSaveDP").style.display = "block";
  document.getElementById("btnEditDP").disabled = true;
  var select =
  '<select id="STATUS_DP" name="STATUS_DP">'+
    '<option value="">-----</option>'+
    '<option value="NORMAL">NORMAL</option>'+
    '<option value="PENUH">PENUH</option>'+
    '<option value="NO TONE">NO TONE</option>'+
    '<option value="CLOSED">CLOSED</option>'+
    '<option value="ON PROGRESS">ON PROGRESS</option>'+
  '</select>';
  $('#STATUS_DP').replaceWith(select);
}

function editODP_btn(){
  document.getElementById("btnSaveODP").style.display = "block";
  document.getElementById("btnEditODP").disabled = true;
  document.getElementById("PIC_BENJAR").readOnly = false;
  document.getElementById("DESKRIPSI").readOnly = false;
  document.getElementById("EST_BIAYA").readOnly = false;
  document.getElementById("PELAKSANAAN").readOnly = false;
  document.getElementById("MATERIAL").readOnly = false;
  var select =
  '<select id="STATUS" name="STATUS">'+
    '<option value="">-----</option>'+
    '<option value="NORMAL">NORMAL</option>'+
    '<option value="PENUH">PENUH</option>'+
    '<option value="LOSS/REDAMAN TINGGI">LOSS/REDAMAN TINGGI</option>'+
    '<option value="CLOSED">CLOSED</option>'+
    '<option value="ON PROGRESS">ON PROGRESS</option>'+
  '</select>';
  $('#STATUS').replaceWith(select);
}

function editODPaku_btn(){
  document.getElementById("btnSaveODPaku").style.display = "block";
  document.getElementById("btnEditODPaku").disabled = true;
  document.getElementById("QR_CODE_ODP").readOnly = false;
  document.getElementById("STATUS_ODP").readOnly = false;
  document.getElementById("IP_GPON").readOnly = false;
  document.getElementById("PORT_GPON").readOnly = false;
  document.getElementById("TIPE_GPON").readOnly = false;
}

function deleteDP(dp,sto)
{
    if(confirm('Anda yakin hapus DP ini?'))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_delete_dp')?>/",
        type: "POST",
        data:{
          dp: dp,
          sto: sto
        },
        dataType: "JSON",
        success: function(data)
        {
          if (data.status) {
            alert('DP berhasil dihapus');
            hapuscariodp();
          }
          else
          {
            alert('Gagal hapus DP');
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          alert('Error deleting data');
        }
      });
    }
}

function deleteODP(odp)
{
    if(confirm('Anda yakin hapus ODP ini?'))
    {
      $.ajax({
        url : "<?php echo site_url('Maps/ajax_delete_odp')?>/",
        type: "POST",
        data:{
          odp: odp
        },
        dataType: "JSON",
        success: function(data)
        {
          if (data.status) {
            alert('ODP berhasil dihapus');
            hapuscariodp();
          }
          else
          {
            alert('Gagal hapus ODP');
          }
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          alert('Error deleting data');
        }
      });
    }
}

function refreshMarkerDP(dp,sto){
  $.ajax({
    url: "<?php echo site_url("Maps/ajax_refresh_dp")?>",
    type: "GET",
    data:{
      dp: dp,
      sto: sto
    },
    dataType: "JSON",
    success: function(data){

          if(data == ''){
            alert('Tidak ada DP dengan nama '+dp+'pada STO '+sto);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"dp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContentDP(data[i],null),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarkerDP(marker);
            }
          }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function refreshMarker_aku(pd1){
  $.ajax({
    url: "<?php echo site_url("Maps/ajax_refresh_odp_aku")?>",
    type: "GET",
    data:{
      pd: pd1
    },
    dataType: "JSON",
    success: function(data){

          if(data == ''){
            alert('Tidak ada ODP dengan nama '+pd1);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].KETERANGAN,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],data[i].KETERANGAN),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker(marker);
            }
          }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function refreshMarker(pd1){
  $.ajax({
    url: "<?php echo site_url("Maps/ajax_refresh_odp")?>",
    type: "GET",
    data:{
      pd: pd1
    },
    dataType: "JSON",
    success: function(data){

          if(data == ''){
            alert('Tidak ada ODP dengan nama '+pd1);
          }
          else{
            for (var i = 0; i < data.length; i++){
              icon = getIcon(data[i].STATUS,"odp");
              var lat = data[i].LATITUDE;
              var lng = data[i].LONGITUDE;
              var latLng = new google.maps.LatLng(lat,lng);
              var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon
              });
              marker.infowindow = new google.maps.InfoWindow({
                content: setContent(data[i],null),
                maxWidth: 400
              });
              infowindow_event(map,marker);
              pushMarker(marker);
            }
          }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function submit_addDP(){
  var dp = $('#add_DP').val();
  var sto = $('#add_STO_DP').val();
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_add_dp")?>",
    type: "POST",
    data: $('#formAdd_DP').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        alert('Data berhasil diupdate');
        refreshMarkerDP(dp,sto);
        $('#ModalDP').modal('hide');
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function submit_addODP_aku(){
  var pd1 = $('#add_PD_NAME').val();
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_add_odp_aku")?>",
    type: "POST",
    data: $('#formAdd_ODP_aku').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        alert('Data berhasil diupdate');
        refreshMarker_aku(pd1);
        $('#ModalODP_aku').modal('hide');
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function submit_addODP(){
  var pd1 = $('#add_PD_NAME').val();
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_add_odp")?>",
    type: "POST",
    data: $('#formAdd_ODP').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        alert('Data berhasil diupdate');
        refreshMarker(pd1);
        $('#ModalODP').modal('hide');
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function saveDP(){
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_update_dp")?>",
    type: "POST",
    data: $('#formDPStatus').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        saveDP_btn();
        alert('Data berhasil diupdate');
        refreshMarkerDP($('#DP').val(),$('#STO_DP').val());
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function saveODP(){
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_update_odp")?>",
    type: "POST",
    data: $('#formODPStatus').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        saveODP_btn();
        alert('Data berhasil diupdate');
        refreshMarker($('#PD_NAME').val());
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function saveODPaku(){
  $.ajax({
    url : "<?php echo site_url("Maps/ajax_update_odp_aku")?>",
    type: "POST",
    data: $('#formODPaku').serialize(),
    dataType: "JSON",
    success: function(data)
    {
      if(data.status) //if success close modal and reload ajax table
      {
        saveODPaku_btn();
        alert('Data berhasil diupdate');
      }
      else
      {
        for (var i = 0; i < data.inputerror.length; i++)
        {
          $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
          $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
        }
    }
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert('Error adding / update data');
    }
  });
}

function show_tableDP(dp,sto){
    //datatables
   table = $('#tableDP').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true,
        "order": [], //Initial no order.
        "scrollY": 320,
        "scrollX": true,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Maps/ajax_list_mapsDP')?>",
            "type": "POST",
            "data": function (data){
              data.dp = dp;
              data.sto = sto;
              data.role = '<?php echo $role ?>';
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
}

function show_table(odp){
    //datatables
   table = $('#table').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true,
        "order": [], //Initial no order.
        "scrollY": 320,
        "scrollX": true,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Maps/ajax_list_maps')?>",
            "type": "POST",
            "data": function (data){
              data.odp = odp;
              data.role = '<?php echo $role ?>';
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
}

function show_table_polygon(){
    //datatables
   table = $('#table_polygon').DataTable({

        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "bDestroy": true,
        "order": [], //Initial no order.
        "scrollY": 320,
        "scrollX": true,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('Maps/ajax_list_maps_polygon')?>",
            "type": "POST",
            "data": function (data){
              data.stp_target = stp_target;
              data.role = '<?php echo $role ?>';
            }
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
        },
        ],

    });

    //set input/textarea/select event when change value, remove class error and remove text help block
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBb4ThyMb8dBaJ6-g_NN9GMFk1sxupL-Uw&callback=initMap&libraries=geometry">
</script>
