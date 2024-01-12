<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Database Case Gamas Regional East</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Gamas</a></div>
                <div class="breadcrumb-item"><a href="#">Database Case Gamas Regional East</a></div>
                <div class="breadcrumb-item">Form Gamas</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-md-10 col-lg-8">
                    <div class="container">
                        <h2 class="section-title">Gamas</h2>
                        <?php echo form_open('gamas/save', 'id="gamas"'); ?>
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Gangguan Masal
                            </div>
                            <!--enctype="multipart/form-data"-->
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="date" id="case_datetime" name="datetime"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Case ID</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="number" class="form-control form-control-sm" step="0" min="0"
                                            name="caseId" id="caseId">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Teritory Name
                                        [City]</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" id="kota" name="kota"
                                            style="width: 100%">
                                            <option value=""></option>
                                            <?php foreach ($kota as $kota): ?>
                                            <option value="<?=$kota->ID?>"><?=$kota->Kota?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">ID Cluster Impact</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" id="cluster" multiple="multiple"
                                            name="clusterImpact[]" style="width: 100%;">

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Proses Waktu Aktifitas Trouble Ticket Gamas
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Down Time</label>
                                    <div class="col-sm-4 col-md-3 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="downT"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Open Ticket</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="openTT"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Time to Respon Field
                                        OPS</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tResF"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Time to Respon
                                        MS</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tResM"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Time to Visit</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tVisit"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Time on Site</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tOnsite"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Menemukan
                                        Masalah</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tFtrouble"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">First Up Time</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tUp"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Closed Ticket</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" id="datetime" name="tClose"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Apakah ada Stop Clock
                                        (Obstacle)</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="obs1"
                                                class="custom-control-input" onclick="showStopClock()" value="Yes">
                                            <label class="custom-control-label" for="customRadio1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="obs1"
                                                class="custom-control-input" onclick="hideStopClock()" value="No"
                                                checked>
                                            <label class="custom-control-label" for="customRadio2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--
                        <div id="obsta" class="card-header text-center"
                            style="display: none;">
                            Stop Clock
                        </div>
                        <div class="card" id="obsta" style="display: none;">
                            <div class="card-header font-weight-bold">
                                <h4>Stop Clock Form</h4>
                                <div class="card-header-action">
                                    <a id="addStopClock" class="btn btn-icon btn-primary"><i
                                            class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        -->

                        <div id="obst" class="card stop-clock-form" style="display: none;">
                            <div class="card-header font-weight-bold">
                                <h4>Stop Clock</h4>
                                <div class="card-header-action">
                                    <div class="btn-group">
                                        <a id="addStopClock" class="btn btn-icon btn-primary"><i
                                                class="fas fa-plus"></i>
                                        </a>
                                        <a class="btn btn-icon btn-danger close removeStopClock"><i
                                                class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Start Stop
                                        Clock</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" name="obsSt[]"
                                            class="form-control form-control-sm">
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">End Stop
                                        Clock</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="datetime-local" name="endSt[]"
                                            class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Root Cause Stop Clock</label>
                                    <textarea class="form-control form-control-sm" name="descObs[]"></textarea>
                                </div>
                                <!--
                                <div class="stop-clock-form" id="obs">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Start Stop
                                            Clock</label>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <input type="datetime-local" id="datetime" name="obsSt[]"
                                                class="form-control form-control-sm">
                                        </div>
                                        <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">End Stop
                                            Clock</label>
                                        <div class="col-sm-4 col-md-4 col-lg-4">
                                            <input type="datetime-local" id="datetime" name="endSt[]"
                                                class="form-control form-control-sm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Root Cause Stop Clock</label>
                                        <textarea class="form-control form-control-sm" name="descObs[]"></textarea>
                                    </div>
                                </div>
                            -->
                            </div>
                        </div>
                        <!--
                        <button type="button" class="btn btn-primary" style="display: none;" onclick="addStopClock()"
                            id="obst">Tambah
                            Stop Clock</button>
                        </div>

                            -->
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Topology & Standar Redaman di masing-masing Lokasi/titik
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="rc_segm" class="col-sm-2 col-md-2 col-lg-2 col-form-label">Segment
                                        Category</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" name="rc_segm" id="rc_segm">
                                            <option></option>
                                            <?php foreach ($segment as $segm): ?>
                                            <option value="<?=$segm->id?>"><?=$segm->segment_kategori?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <label for="coordinate"
                                        class="col-sm-2 col-md-2 col-lg-2 col-form-label">Coordinate:</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <input type="text" class="form-control" name="coordinate" id="coordinate"
                                            placeholder="Coordinate">
                                    </div>
                                </div>
                                <!--
                                <div class="form-group">
                                    <label for="gmaps">Gmaps URL</label>
                                    <input type="text" class="form-control" name="gmaps" id="gmaps"
                                        placeholder="URL Gmaps">
                                </div>

                                <div class="form-group">

                                </div>
                            -->
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Detail Problem & Root Cause
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Device</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" id="device" name="rc_dev"
                                            style="width: 100%">
                                            <option></option>
                                            <?php foreach ($device as $devi): ?>
                                            <option value="<?=$devi->id?>"><?=$devi->device?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Sub Device</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" id="sb" name="rc_sb"
                                            style="width: 100%">
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Case Category</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" id="case" name="rc_case"
                                            style="width: 100%">
                                            <option></option>
                                            <?php foreach ($case as $rr): ?>
                                            <option value="<?=$rr->id?>"><?=$rr->kategori?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Action Taken</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" name="rc_act" id="rc_act"
                                            style="width: 100%">
                                            <option></option>
                                            <?php foreach ($act as $r): ?>
                                            <option value="<?=$r->id?>">
                                                <?=$r->act?>
                                            </option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">Root Cause</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <select class="form-control form-control-sm" name="rc" id="rc"
                                            style="width: 100%">

                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-md-2 col-lg-2 col-form-label">CIR (Customer Incident
                                        Report)</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <textarea class="form-control form-control-sm" name="cir"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Photo Documentation</label>
                                    <div id="dropzone" class="dropzone dz-clickable">
                                        <div class="dz-default dz-message">
                                            <span>Drop files here to upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div id="preview-container" class="mt-3">
                                    <!-- Image Preview Container -->
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header font-weight-bold">
                                Justifikasi
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Apakah diperlukan Preventive
                                        After Corective ?</label>
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="corr1" name="corrective"
                                                class="custom-control-input" onclick="showjust()" value="1">
                                            <label class="custom-control-label" for="corr1">Yes</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="corr2" name="corrective"
                                                class="custom-control-input" onclick="hidejust()" value="0" checked>
                                            <label class="custom-control-label" for="corr2">No</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="just" style="display: none;">
                                <div class="form-group">
                                    <label>Justifikasi Preventive</label>
                                    <textarea class="form-control form-control-sm" name="justifikasi"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" id="submit-container">Submit</button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <!--
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/js');?>

<script>
    $(document).ready(function () {
        /*
        $('#datetime').on('change', function () {
            // Get the value from the datetime-local input
            var originalValue = $(this).val();

            // Parse the original value into a JavaScript Date object
            var originalDate = new Date(originalValue);

            // Format the date and time components as needed
            var formattedDate = originalDate.toLocaleDateString('en-US');
            var formattedTime = originalDate.toLocaleTimeString('en-US');

            // Combine the formatted date and time
            var formattedDateTime = formattedDate + ' ' + formattedTime;

            // Log or use the formattedDateTime as needed
            console.log('Original Value:', originalValue);
            console.log('Formatted Value:', formattedDateTime);
        });
        $('#datetime,#case_datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'fas fa-clock',
                date: 'fas fa-calendar-alt',
                up: 'fas fa-chevron-up',
                down: 'fas fa-chevron-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check-o',
                clear: 'fas fa-trash',
                close: 'fas fa-times'
            }
        });
        */

        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone("#dropzone", {
            url: "<?php echo base_url('upload/upload_image'); ?>",
            paramName: "file",
            maxFilesize: 2,
            acceptedFiles: 'image/*',
            addRemoveLinks: true,
            dictRemoveFile: 'Remove',

            success: function (file, response) {
                // File berhasil diunggah, response berisi data dari server
                console.log(response);

                // Tampilkan pratinjau kustom

                var inputValue = $('#caseId').val();

                if (inputValue === '') {
                    // Jika input field masih kosong, batalkan upload dan nonaktifkan Dropzone
                    iziToast.error({
                        title: 'Error',
                        message: 'Mohon lengkapi semua field terlebih dahulu, untuk dokumentasi lakukan di akhir proses input',
                        position: 'topRight'
                    });
                    this.removeFile(file);
                } else {
                    var $previewElement = $('<div class="dz-preview">');
                    var $previewImage = $('<img>').attr('src', response.url);
                    $previewElement.append($previewImage);

                    $('#preview-container').append($previewElement);
                }
            },

            sending: function (file, xhr, formData) {
                // Mengirim data tambahan ke server jika diperlukan
                formData.append('caseId', $('#caseId').val());
            },
        });

        myDropzone.on("removedfile", function (file) {
            // Handle file removal
            deleteImage(file.name);
        });

        function deleteImage(fileName) {
            $.ajax({
                url: '<?=base_url("upload/deleteImage/")?>',
                type: 'POST',
                data: { file_name: fileName },
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        iziToast.success({
                            title: 'Success',
                            message: response.message,
                            position: 'topRight'
                        });
                    }
                }
            });
        }

        /*
        function showToast(response) {
            if (response.status === 'success') {
                
            } else {
                iziToast.error({
                    title: 'Error',
                    message: response.message,
                    position: 'topRight'
                });
            }
        }
        */
        // Fungsi untuk mereset formulir dan menghapus tampilan preview Dropzone

        // Contoh menggunakan AJAX untuk mengirim data ke server
        $('#gamas').submit(function (e) {
            e.preventDefault();
            var formData = $(this).serialize(); // Serialisasi data form

            formData += '&csrf_token_name=' + '<?= $this->security->get_csrf_token_name(); ?>';
            formData += '&csrf_token_value=' + '<?= $this->security->get_csrf_hash(); ?>';

            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>gamas/save',
                data: formData,
                dataType: 'json',
                success: function (response) {
                    if (response.status === 'success') {
                        iziToast.success({
                            title: 'Success',
                            message: response.message,
                            position: 'topRight'
                        });
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else {
                        if (response.errors) {
                            $.each(response.errors, function (key, value) {
                                iziToast.warning({
                                    title: 'Warning',
                                    message: value,
                                    position: 'topRight'
                                });
                            });
                        } else {
                            iziToast.error({
                                title: 'Error',
                                message: response.message,
                                position: 'topRight'
                            });
                        }
                    }
                },
                error: function () {
                    iziToast.error({
                        title: 'Error',
                        message: response.message,
                        position: 'topRight'
                    });
                }
            });
        });

        $("#cluster,#kota,#sb,#case,#rc,#device,#rc_act,#rc_segm").select2({
            placeholder: 'Select an option',
        });

        $("#kota").on('change', function () {

            var selectedValue = $(this).val();

            $.ajax({
                type: "POST",
                url: "<?=base_url()?>gamas/get_detail",
                data: { id: selectedValue },
                dataType: "json",
                success: function (data) {
                    $("#cluster").empty();
                    for (let i = 0; i < data.length; i++) {
                        $("#cluster").append('<option value="' + data[i].cluster_id_apd + ' ">' + data[i].cluster_id_apd + '-' + data[i].cluster_name_apd + '</option>');
                    }
                },
                error: function () {
                    console.log('Error in AJAX request.');
                }
            });
        })

        $("#rc_act").on('change', function () {
            var selectedValue = $(this).val();

            $.ajax({
                type: "POST",
                url: "<?=base_url()?>rc/r_c",
                data: { id: selectedValue },
                dataType: "json",
                success: function (data) {
                    $("#rc").empty();
                    for (let i = 0; i < data.length; i++) {
                        $("#rc").append('<option value="' + data[i].id + '">' + data[i].r_cause + '</option>');
                    }
                },
                error: function () {
                    console.log('Error in AJAX request.');
                }
            });
        });

        $("#device").on('change', function () {
            var selectedValue = $(this).val();

            $.ajax({
                type: "POST",
                url: "<?=base_url()?>rc/s_dev",
                data: { id: selectedValue },
                dataType: "json",
                success: function (data) {
                    $("#sb").empty();
                    for (let i = 0; i < data.length; i++) {
                        $("#sb").append('<option value="' + data[i].id + '">' + data[i].sub_device + '</option>');
                    }
                },
                error: function () {
                    console.log('Error in AJAX request.');
                }
            });
        });
    });
</script>