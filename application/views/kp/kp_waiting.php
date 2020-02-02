<!doctype html>
<html lang="en" class="no-focus">
    <head>
        
        <?php $this->load->view('layouts/head.php') ?>
        <title>Portal Elektro - Pengajuan KP</title>
        <link href="http://ajax.aspnetcdn.com/ajax/jquery.ui/1.12.1/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
        <style>
            .pdfobject-container { height: 30rem; border: 1rem solid rgba(0,0,0,.1); }
        </style>
       
    </head>
    <body>
        <div id="page-container" class="sidebar-o enable-cookies sidebar-inverse enable-page-overlay side-scroll page-header-fixed page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <?php $this->load->view('layouts/aside.php') ?>
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <nav id="sidebar">
                <?php $this->load->view('layouts/sidebar.php') ?>
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <?php $this->load->view('layouts/navbar.php') ?>
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Labels on top -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h1 class="block-title" style="text-align: center; color:orange ;">Pengajuan Menunggu Balasan Kerja Praktek<br><b>Mohon Upload Balasan<b></h1>
                        </div>
                    </div>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-info alert-dismissable mt-20" role="alert">
                        <b> <?php echo $this->session->flashdata('success'); ?> </b>
                        </div>
                    <?php endif; ?> 
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Form Balasan Kerja Praktek</h3>
                        </div>
                        <div class="block-content block-content-full">
                        <!-- <h4>Dokumen Balasan Kerja Praktek</h4> -->
                        <br><br>
                            <div class="row">
                            <div class="col-lg-3"></div>    
                                <div class="col-md-8 justify-content-center">
                                    <?php if ($error): ?>
                                        <div class="alert alert-danger col-sm-8" role="alert">
                                            <b><?php echo $error;?></b>
                                        </div>
                                    <?php endif; ?>
                                    <?php echo form_open_multipart('kerjapraktek/kp/upload_file'); ?>
                                    <div class="form-group row">
                                        <label class="col-12">Upload File Balasan (PDF)</label>
                                        <div class="col-8">
                                            <div class="custom-file">
                                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                <input type="file" class="custom-file-input" id="example-file-input-custom" name="dokumen" data-toggle="custom-file-input">
                                                <label class="custom-file-label" for="example-file-input-custom">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <!-- <button type="submit" class="btn btn-alt-primary">Submit</button> -->
                                            <input type="submit" class="btn btn-alt-primary" value="upload" />
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="id_kp" value="<?php echo $waiting->id_kp ?>">
                                    </form>
                                    <?php if ($waiting->file_balasan != null):?>
                                        <!-- <div id="example1"></div> -->
                                        <input id="btnShow" type="button" value="Show PDF" class="btn btn-warning mr-5 mb-5"/>
                                        <div id="dialog" style="display: none">
                                        </div>
                                        <!-- <img src="<-?php echo base_url('upload/balasankp/'.$waiting->file_balasan) ?>" width="500" height="450" /> -->
                                        <!-- <a value="<-?php echo $waiting->file_balasan ?>"></a> -->
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>    <!-- END Labels on top -->
                </div>

                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
                <?php $this->load->view('layouts/footer.php')?>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--Codebase JS Core-->
        <?php $this->load->view('layouts/js.php') ?>
        <script>
            var example = flatpickr('#flatpickr',{
                dateFormat: 'Y-m-d'
            });
        </script>
        <!-- <script src="<-?php echo base_url('assets/js/pdfobject.min.js')?>"></script> -->
        <!-- <script>PDFObject.embed("<-?php echo base_url('upload/balasankp/'.$waiting->file_balasan)?>", "#example1");</script> -->
        <script src="<?php echo base_url('assets/js/plugins/jquery-ui/jquery-ui.min.js')?>" type="text/javascript"></script>
        <script type="text/javascript">
                $(function () {
                    var fileName = "<?php echo $waiting->file_balasan?>";
                    $("#btnShow").click(function () {
                        $("#dialog").dialog({
                            modal: true,
                            title: fileName,
                            width: 650,
                            height: 550,
                            buttons: {
                                Close: function () {
                                    $(this).dialog('close');
                                }
                            },
                            open: function () {
                                var object = "<object data=\"{FileName}\" type=\"application/pdf\" width=\"610px\" height=\"400px\">";
                                object += "If you are unable to view file, you can download from <a style = \"color:blue\"  href=\"<?php echo base_url('upload/balasankp/'.$waiting->file_balasan)?>\">here</a>";
                                object += " or download <a target = \"_blank\" href = \"http://get.adobe.com/reader/\">Adobe PDF Reader</a> to view the file.";
                                object += "</object>";
                                object = object.replace(/{FileName}/g, "<?php echo base_url('upload/balasankp/'.$waiting->file_balasan)?>"    );
                                $("#dialog").html(object);
                            }
                        });
                    });
                });
            </script>
    </body>
</html>