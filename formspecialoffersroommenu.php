<?php $isEdit = (isset($data_edit)); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form id="form_room_menu" method="post">
                    <ul class="nav nav-tabs" id="form_tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general_tab" data-toggle="tab" href="#general_content" role="tab" aria-controls="general_content" aria-selected="true">Main Data</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" id="datamenus_tab" data-toggle="tab" href="#datamenus_content" role="tab" aria-controls="datamenus_content" aria-selected="false">Data Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="other_tab" data-toggle="tab" href="#other_content" role="tab" aria-controls="other_content" aria-selected="false">Data Benefit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="conditions_tab" data-toggle="tab" href="#conditions_content" role="tab" aria-controls="conditions_content" aria-selected="false">Terms & Coditions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="cancelpolicy_tab" data-toggle="tab" href="#cancelpolicy_content" role="tab" aria-controls="cancelpolicy_content" aria-selected="false"> Canceled Policy</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-3" id="article_tab_content">
                        <div class="tab-pane fade show active" id="general_content" role="tabpanel" aria-labelledby="general_tab">
                            <div class="form-group">
                                <label for="judul_menu" class="label_required_field">Judul</label>
                                <input id="judul_menu" name="judul_menu" type="text" maxlength="75" class="form-control" value="<?php if($isEdit) echo $data_edit['judul_menu']; ?>" >
                            </div>
                        </div>


                        <div class="tab-pane fade" id="datamenus_content" role="tabpanel" aria-labelledby="datamenus_tab">
                            <div class="form-group">
                                <label>Specialoffers: <?php echo $specialoffers_id.' - '.$specialoffers_name;?></label>
                            </div>
                            <div class="form-group">
                                <label for="title_menu">Title Menu</label>
                                <input id="title_menu" name="title_menu" type="text" maxlength="100" class="form-control" value="<?php if($isEdit) echo $data_edit['title_menu']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="text_view">Text Bottom View</label>
                                <input id="text_view" name="text_view" type="text" maxlength="100" class="form-control" value="<?php if($isEdit) echo $data_edit['text_view']; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="deksripsi_menu">Data Menu</label>
                                <textarea id="deksripsi_menu" name="deksripsi_menu" class="tinymce"><?php if($isEdit) echo $data_edit['deksripsi_menu']; ?></textarea>
                            </div> 
                            <div class="form-row">
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail1" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr1'])) echo $data_edit['url_gbr1']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail1">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail1" name="thumbnail1" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr1']; ?>" >
                                    </div>
                                </div>
                                 <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail2" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr2'])) echo $data_edit['url_gbr2']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail2">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail2" name="thumbnail2" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr2']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail3" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr3'])) echo $data_edit['url_gbr3']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail3">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail3" name="thumbnail3" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr3']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail4" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr4'])) echo $data_edit['url_gbr4']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail4">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail4" name="thumbnail4" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr4']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail5" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr5'])) echo $data_edit['url_gbr5']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail5">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail5" name="thumbnail5" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr5']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail6" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr6'])) echo $data_edit['url_gbr6']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail6">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail6" name="thumbnail6" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr6']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail7" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr7'])) echo $data_edit['url_gbr7']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail7">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail7" name="thumbnail7" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr7']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail8" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr8'])) echo $data_edit['url_gbr8']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail8">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail8" name="thumbnail8" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr8']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail9" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr9'])) echo $data_edit['url_gbr9']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail9">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail9" name="thumbnail9" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr9']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail10" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr10'])) echo $data_edit['url_gbr10']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail10">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail10" name="thumbnail10" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr10']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail11" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr11'])) echo $data_edit['url_gbr11']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail11">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail11" name="thumbnail11" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr11']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail12" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr12'])) echo $data_edit['url_gbr12']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail12">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail12" name="thumbnail12" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr12']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail13" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr13'])) echo $data_edit['url_gbr13']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail13">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail13" name="thumbnail13" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr13']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail14" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr14'])) echo $data_edit['url_gbr14']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail14">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail14" name="thumbnail14" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr14']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail15" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr15'])) echo $data_edit['url_gbr15']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail15">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail15" name="thumbnail15" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr15']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail16" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr16'])) echo $data_edit['url_gbr16']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail16">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail16" name="thumbnail16" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr16']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail17" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr17'])) echo $data_edit['url_gbr17']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail17">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail17" name="thumbnail17" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr17']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail18" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr18'])) echo $data_edit['url_gbr18']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail18">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail18" name="thumbnail18" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr18']; ?>" >
                                    </div>
                                </div>

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail19" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr19'])) echo $data_edit['url_gbr19']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail19">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail19" name="thumbnail19" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr19']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail20" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr20'])) echo $data_edit['url_gbr20']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail20">Picture Thumbnail (URL)</label>
                                        <input id="thumbnail20" name="thumbnail20" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr20']; ?>" >
                                    </div>
                                </div>


                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail21" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr21'])) echo $data_edit['url_gbr21']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail21">Picture Menu (URL)</label>
                                        <input id="thumbnail21" name="thumbnail21" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr21']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail22" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr22'])) echo $data_edit['url_gbr22']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail22">Picture Menu (URL)</label>
                                        <input id="thumbnail22" name="thumbnail22" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr22']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail23" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr23'])) echo $data_edit['url_gbr23']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail23">Picture Menu (URL)</label>
                                        <input id="thumbnail23" name="thumbnail23" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr23']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail24" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr24'])) echo $data_edit['url_gbr24']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail24">Picture Menu (URL)</label>
                                        <input id="thumbnail24" name="thumbnail24" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr24']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail25" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr25'])) echo $data_edit['url_gbr25']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail25">Picture Menu (URL)</label>
                                        <input id="thumbnail25" name="thumbnail25" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr25']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail26" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr26'])) echo $data_edit['url_gbr26']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail26">Picture Menu (URL)</label>
                                        <input id="thumbnail26" name="thumbnail26" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr26']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail27" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr27'])) echo $data_edit['url_gbr27']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail27">Picture Menu (URL)</label>
                                        <input id="thumbnail27" name="thumbnail27" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr27']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail28" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr28'])) echo $data_edit['url_gbr28']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail28">Picture Menu (URL)</label>
                                        <input id="thumbnail28" name="thumbnail28" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr28']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail29" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr29'])) echo $data_edit['url_gbr29']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail29">Picture Menu (URL)</label>
                                        <input id="thumbnail29" name="thumbnail29" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr29']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail30" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr30'])) echo $data_edit['url_gbr30']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail30">Picture Menu (URL)</label>
                                        <input id="thumbnail30" name="thumbnail30" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr30']; ?>" >
                                    </div>
                                </div>
                                
                            </div>                           
                        </div>

                        <div class="tab-pane fade" id="other_content" role="tabpanel" aria-labelledby="other_tab">

                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                        <label for="title_deskripsi_benefit_menu">Title Benefit</label>
                                        <input id="title_deskripsi_benefit_menu" name="title_deskripsi_benefit_menu" type="text" maxlength="30" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_deskripsi_benefit_menu'])) echo $data_edit['title_deskripsi_benefit_menu']; ?>"/>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama1"></label>
                                                        <input id="title_utama1" name="title_utama1" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama1'])) echo $data_edit['title_utama1']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title1"></label>
                                                        <input id="sub_text_title1" name="sub_text_title1" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title1'])) echo $data_edit['sub_text_title1']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu1">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu1" name="benefit_package_menu1" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu1']; ?></textarea>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu1">List Benefit</label>
                                    <input id="benefit_menu1" name="benefit_menu1" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu1'])) echo $data_edit['benefit_menu1']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu2">List Benefit</label>
                                    <input id="benefit_menu2" name="benefit_menu2" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu2'])) echo $data_edit['benefit_menu2']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu3">List Benefit</label>
                                    <input id="benefit_menu3" name="benefit_menu3" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu3'])) echo $data_edit['benefit_menu3']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu4">List Benefit</label>
                                    <input id="benefit_menu4" name="benefit_menu4" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu4'])) echo $data_edit['benefit_menu4']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu5">List Benefit</label>
                                    <input id="benefit_menu5" name="benefit_menu5" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu5'])) echo $data_edit['benefit_menu5']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu6">List Benefit</label>
                                    <input id="benefit_menu6" name="benefit_menu6" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu6'])) echo $data_edit['benefit_menu6']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu7">List Benefit</label>
                                    <input id="benefit_menu7" name="benefit_menu7" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu7'])) echo $data_edit['benefit_menu7']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu8">List Benefit</label>
                                    <input id="benefit_menu8" name="benefit_menu8" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu8'])) echo $data_edit['benefit_menu8']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu9">List Benefit</label>
                                    <input id="benefit_menu9" name="benefit_menu9" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu9'])) echo $data_edit['benefit_menu9']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu10">List Benefit</label>
                                    <input id="benefit_menu10" name="benefit_menu10" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu10'])) echo $data_edit['benefit_menu10']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu11">List Benefit</label>
                                    <input id="benefit_menu11" name="benefit_menu11" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu11'])) echo $data_edit['benefit_menu11']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu12">List Benefit</label>
                                    <input id="benefit_menu12" name="benefit_menu12" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu12'])) echo $data_edit['benefit_menu12']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text1">Note text</label>
                                    <input id="note_text1" name="note_text1" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text1'])) echo $data_edit['note_text1']; ?>"/>
                                </div>

                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama2"></label>
                                                        <input id="title_utama2" name="title_utama2" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama2'])) echo $data_edit['title_utama2']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title2"></label>
                                                        <input id="sub_text_title2" name="sub_text_title2" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title2'])) echo $data_edit['sub_text_title2']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu2">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu2" name="benefit_package_menu2" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu2']; ?></textarea>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu13">List Benefit</label>
                                    <input id="benefit_menu13" name="benefit_menu13" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu13'])) echo $data_edit['benefit_menu13']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu14">List Benefit</label>
                                    <input id="benefit_menu14" name="benefit_menu14" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu14'])) echo $data_edit['benefit_menu14']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu15">List Benefit</label>
                                    <input id="benefit_menu15" name="benefit_menu15" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu15'])) echo $data_edit['benefit_menu15']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu16">List Benefit</label>
                                    <input id="benefit_menu16" name="benefit_menu16" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu16'])) echo $data_edit['benefit_menu16']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu17">List Benefit</label>
                                    <input id="benefit_menu17" name="benefit_menu17" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu17'])) echo $data_edit['benefit_menu17']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu18">List Benefit</label>
                                    <input id="benefit_menu18" name="benefit_menu18" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu18'])) echo $data_edit['benefit_menu18']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu19">List Benefit</label>
                                    <input id="benefit_menu19" name="benefit_menu19" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu19'])) echo $data_edit['benefit_menu19']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu20">List Benefit</label>
                                    <input id="benefit_menu20" name="benefit_menu20" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu20'])) echo $data_edit['benefit_menu20']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu21">List Benefit</label>
                                    <input id="benefit_menu21" name="benefit_menu21" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu21'])) echo $data_edit['benefit_menu21']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu22">List Benefit</label>
                                    <input id="benefit_menu22" name="benefit_menu22" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu22'])) echo $data_edit['benefit_menu22']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu23">List Benefit</label>
                                    <input id="benefit_menu23" name="benefit_menu23" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu23'])) echo $data_edit['benefit_menu23']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu24">List Benefit</label>
                                    <input id="benefit_menu24" name="benefit_menu24" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu24'])) echo $data_edit['benefit_menu24']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text2">Note text</label>
                                    <input id="note_text2" name="note_text2" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text2'])) echo $data_edit['note_text2']; ?>"/>
                                </div>
                                <!-- dasda -->
                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama3"></label>
                                                        <input id="title_utama3" name="title_utama3" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama3'])) echo $data_edit['title_utama3']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title3"></label>
                                                        <input id="sub_text_title3" name="sub_text_title3" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title3'])) echo $data_edit['sub_text_title3']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu3">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu3" name="benefit_package_menu3" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu3']; ?></textarea>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu25">List Benefit</label>
                                    <input id="benefit_menu25" name="benefit_menu25" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu25'])) echo $data_edit['benefit_menu25']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu26">List Benefit</label>
                                    <input id="benefit_menu26" name="benefit_menu26" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu26'])) echo $data_edit['benefit_menu26']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu27">List Benefit</label>
                                    <input id="benefit_menu27" name="benefit_menu27" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu27'])) echo $data_edit['benefit_menu27']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu28">List Benefit</label>
                                    <input id="benefit_menu28" name="benefit_menu28" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu28'])) echo $data_edit['benefit_menu28']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu29">List Benefit</label>
                                    <input id="benefit_menu29" name="benefit_menu29" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu29'])) echo $data_edit['benefit_menu29']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu30">List Benefit</label>
                                    <input id="benefit_menu30" name="benefit_menu30" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu30'])) echo $data_edit['benefit_menu30']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu31">List Benefit</label>
                                    <input id="benefit_menu31" name="benefit_menu31" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu31'])) echo $data_edit['benefit_menu31']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu32">List Benefit</label>
                                    <input id="benefit_menu32" name="benefit_menu32" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu32'])) echo $data_edit['benefit_menu32']; ?>"/>
                                </div>

                                 <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu33">List Benefit</label>
                                    <input id="benefit_menu33" name="benefit_menu33" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu33'])) echo $data_edit['benefit_menu33']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu34">List Benefit</label>
                                    <input id="benefit_menu34" name="benefit_menu34" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu34'])) echo $data_edit['benefit_menu34']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu35">List Benefit</label>
                                    <input id="benefit_menu35" name="benefit_menu35" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu35'])) echo $data_edit['benefit_menu35']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu36">List Benefit</label>
                                    <input id="benefit_menu36" name="benefit_menu36" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu36'])) echo $data_edit['benefit_menu36']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text3">Note text</label>
                                    <input id="note_text3" name="note_text3" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text3'])) echo $data_edit['note_text3']; ?>"/>
                                </div>
                                <!-- Deskripsi -->
                               
                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama4"></label>
                                                        <input id="title_utama4" name="title_utama4" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama4'])) echo $data_edit['title_utama4']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title4"></label>
                                                        <input id="sub_text_title4" name="sub_text_title4" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title4'])) echo $data_edit['sub_text_title4']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu4">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu4" name="benefit_package_menu4" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu4']; ?></textarea>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu37">List Benefit</label>
                                    <input id="benefit_menu37" name="benefit_menu37" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu37'])) echo $data_edit['benefit_menu37']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu38">List Benefit</label>
                                    <input id="benefit_menu38" name="benefit_menu38" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu38'])) echo $data_edit['benefit_menu38']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu39">List Benefit</label>
                                    <input id="benefit_menu39" name="benefit_menu39" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu39'])) echo $data_edit['benefit_menu39']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu40">List Benefit</label>
                                    <input id="benefit_menu40" name="benefit_menu40" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu40'])) echo $data_edit['benefit_menu40']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu41">List Benefit</label>
                                    <input id="benefit_menu41" name="benefit_menu40" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu41'])) echo $data_edit['benefit_menu41']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu42">List Benefit</label>
                                    <input id="benefit_menu42" name="benefit_menu41" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu42'])) echo $data_edit['benefit_menu42']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu43">List Benefit</label>
                                    <input id="benefit_menu43" name="benefit_menu43" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu43'])) echo $data_edit['benefit_menu43']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu44">List Benefit</label>
                                    <input id="benefit_menu44" name="benefit_menu44" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu44'])) echo $data_edit['benefit_menu44']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu45">List Benefit</label>
                                    <input id="benefit_menu45" name="benefit_menu45" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu45'])) echo $data_edit['benefit_menu45']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu46">List Benefit</label>
                                    <input id="benefit_menu46" name="benefit_menu46" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu46'])) echo $data_edit['benefit_menu46']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu47">List Benefit</label>
                                    <input id="benefit_menu47" name="benefit_menu47" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu47'])) echo $data_edit['benefit_menu47']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu48">List Benefit</label>
                                    <input id="benefit_menu48" name="benefit_menu48" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu48'])) echo $data_edit['benefit_menu48']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text4">Note text</label>
                                    <input id="note_text4" name="note_text4" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text4'])) echo $data_edit['note_text4']; ?>"/>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama5"></label>
                                                        <input id="title_utama5" name="title_utama5" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama5'])) echo $data_edit['title_utama5']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title5"></label>
                                                        <input id="sub_text_title5" name="sub_text_title5" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title5'])) echo $data_edit['sub_text_title5']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu5">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu5" name="benefit_package_menu5" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu5']; ?></textarea>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu49">List Benefit</label>
                                    <input id="benefit_menu49" name="benefit_menu49" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu49'])) echo $data_edit['benefit_menu49']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu50">List Benefit</label>
                                    <input id="benefit_menu50" name="benefit_menu50" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu50'])) echo $data_edit['benefit_menu50']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu51">List Benefit</label>
                                    <input id="benefit_menu51" name="benefit_menu51" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu51'])) echo $data_edit['benefit_menu51']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu52">List Benefit</label>
                                    <input id="benefit_menu52" name="benefit_menu52" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu52'])) echo $data_edit['benefit_menu52']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu53">List Benefit</label>
                                    <input id="benefit_menu53" name="benefit_menu53" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu53'])) echo $data_edit['benefit_menu53']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu54">List Benefit</label>
                                    <input id="benefit_menu54" name="benefit_menu54" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu54'])) echo $data_edit['benefit_menu54']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu55">List Benefit</label>
                                    <input id="benefit_menu55" name="benefit_menu55" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu55'])) echo $data_edit['benefit_menu55']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu56">List Benefit</label>
                                    <input id="benefit_menu56" name="benefit_menu56" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu56'])) echo $data_edit['benefit_menu56']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu57">List Benefit</label>
                                    <input id="benefit_menu57" name="benefit_menu57" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu57'])) echo $data_edit['benefit_menu57']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu58">List Benefit</label>
                                    <input id="benefit_menu58" name="benefit_menu58" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu58'])) echo $data_edit['benefit_menu58']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu59">List Benefit</label>
                                    <input id="benefit_menu59" name="benefit_menu59" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu59'])) echo $data_edit['benefit_menu59']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu60">List Benefit</label>
                                    <input id="benefit_menu60" name="benefit_menu60" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu60'])) echo $data_edit['benefit_menu60']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text5">Note text</label>
                                    <input id="note_text5" name="note_text5" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text5'])) echo $data_edit['note_text5']; ?>"/>
                                </div>
                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama6"></label>
                                                        <input id="title_utama6" name="title_utama6" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama6'])) echo $data_edit['title_utama6']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title6"></label>
                                                        <input id="sub_text_title6" name="sub_text_title6" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title6'])) echo $data_edit['sub_text_title6']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                     
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu6">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu6" name="benefit_package_menu6" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu6']; ?></textarea>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu61">List Benefit</label>
                                    <input id="benefit_menu61" name="benefit_menu61" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu61'])) echo $data_edit['benefit_menu61']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu62">List Benefit</label>
                                    <input id="benefit_menu62" name="benefit_menu62" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu62'])) echo $data_edit['benefit_menu62']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu63">List Benefit</label>
                                    <input id="benefit_menu63" name="benefit_menu63" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu63'])) echo $data_edit['benefit_menu63']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu64">List Benefit</label>
                                    <input id="benefit_menu64" name="benefit_menu64" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu64'])) echo $data_edit['benefit_menu64']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu65">List Benefit</label>
                                    <input id="benefit_menu65" name="benefit_menu65" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu65'])) echo $data_edit['benefit_menu65']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu66">List Benefit</label>
                                    <input id="benefit_menu66" name="benefit_menu66" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu66'])) echo $data_edit['benefit_menu66']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu67">List Benefit</label>
                                    <input id="benefit_menu67" name="benefit_menu67" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu67'])) echo $data_edit['benefit_menu67']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu68">List Benefit</label>
                                    <input id="benefit_menu68" name="benefit_menu68" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu68'])) echo $data_edit['benefit_menu68']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu69">List Benefit</label>
                                    <input id="benefit_menu69" name="benefit_menu69" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu69'])) echo $data_edit['benefit_menu69']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu70">List Benefit</label>
                                    <input id="benefit_menu70" name="benefit_menu70" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu70'])) echo $data_edit['benefit_menu70']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu71">List Benefit</label>
                                    <input id="benefit_menu71" name="benefit_menu71" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu71'])) echo $data_edit['benefit_menu71']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu72">List Benefit</label>
                                    <input id="benefit_menu72" name="benefit_menu72" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu72'])) echo $data_edit['benefit_menu72']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text6">Note text</label>
                                    <input id="note_text6" name="note_text6" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text6'])) echo $data_edit['note_text6']; ?>"/>
                                </div>

                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama7"></label>
                                                        <input id="title_utama7" name="title_utama7" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama7'])) echo $data_edit['title_utama7']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title7"></label>
                                                        <input id="sub_text_title7" name="sub_text_title7" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title7'])) echo $data_edit['sub_text_title7']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                     
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu7">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu7" name="benefit_package_menu7" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu7']; ?></textarea>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu73">List Benefit</label>
                                    <input id="benefit_menu73" name="benefit_menu73" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu73'])) echo $data_edit['benefit_menu73']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu74">List Benefit</label>
                                    <input id="benefit_menu74" name="benefit_menu74" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu74'])) echo $data_edit['benefit_menu74']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu75">List Benefit</label>
                                    <input id="benefit_menu75" name="benefit_menu75" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu75'])) echo $data_edit['benefit_menu75']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu76">List Benefit</label>
                                    <input id="benefit_menu76" name="benefit_menu76" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu76'])) echo $data_edit['benefit_menu76']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu77">List Benefit</label>
                                    <input id="benefit_menu77" name="benefit_menu77" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu77'])) echo $data_edit['benefit_menu77']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu78">List Benefit</label>
                                    <input id="benefit_menu78" name="benefit_menu78" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu78'])) echo $data_edit['benefit_menu78']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu79">List Benefit</label>
                                    <input id="benefit_menu79" name="benefit_menu79" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu79'])) echo $data_edit['benefit_menu79']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu80">List Benefit</label>
                                    <input id="benefit_menu80" name="benefit_menu80" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu80'])) echo $data_edit['benefit_menu80']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu81">List Benefit</label>
                                    <input id="benefit_menu81" name="benefit_menu81" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu81'])) echo $data_edit['benefit_menu81']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu82">List Benefit</label>
                                    <input id="benefit_menu82" name="benefit_menu82" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu82'])) echo $data_edit['benefit_menu82']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu83">List Benefit</label>
                                    <input id="benefit_menu83" name="benefit_menu83" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu83'])) echo $data_edit['benefit_menu83']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu84">List Benefit</label>
                                    <input id="benefit_menu84" name="benefit_menu84" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu84'])) echo $data_edit['benefit_menu84']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text7">Note text</label>
                                    <input id="note_text7" name="note_text7" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text7'])) echo $data_edit['note_text7']; ?>"/>
                                </div>

                                <div class="table-responsive">
                                    <table id="table_slide" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Text Title</th>
                                                <th scope="col">Sub Text Title</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td scope="row">
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="title_utama8"></label>
                                                        <input id="title_utama8" name="title_utama8" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_utama8'])) echo $data_edit['title_utama8']; ?>"/>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-12 col-md-12 mb-3">
                                                        <label for="sub_text_title8"></label>
                                                        <input id="sub_text_title8" name="sub_text_title8" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['sub_text_title8'])) echo $data_edit['sub_text_title8']; ?>"/>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>                     
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="benefit_package_menu8">Description</label>
                                    <textarea class="form-control" id="benefit_package_menu8" name="benefit_package_menu8" rows="4"><?php if($isEdit) echo $data_edit['benefit_package_menu8']; ?></textarea>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu85">List Benefit</label>
                                    <input id="benefit_menu85" name="benefit_menu85" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu85'])) echo $data_edit['benefit_menu85']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu86">List Benefit</label>
                                    <input id="benefit_menu86" name="benefit_menu86" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu86'])) echo $data_edit['benefit_menu86']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu87">List Benefit</label>
                                    <input id="benefit_menu87" name="benefit_menu87" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu87'])) echo $data_edit['benefit_menu87']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu88">List Benefit</label>
                                    <input id="benefit_menu88" name="benefit_menu88" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu88'])) echo $data_edit['benefit_menu88']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu89">List Benefit</label>
                                    <input id="benefit_menu89" name="benefit_menu89" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu89'])) echo $data_edit['benefit_menu89']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu90">List Benefit</label>
                                    <input id="benefit_menu90" name="benefit_menu90" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu90'])) echo $data_edit['benefit_menu90']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu91">List Benefit</label>
                                    <input id="benefit_menu91" name="benefit_menu91" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu91'])) echo $data_edit['benefit_menu91']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu92">List Benefit</label>
                                    <input id="benefit_menu92" name="benefit_menu92" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu92'])) echo $data_edit['benefit_menu92']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu93">List Benefit</label>
                                    <input id="benefit_menu93" name="benefit_menu93" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu93'])) echo $data_edit['benefit_menu93']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu94">List Benefit</label>
                                    <input id="benefit_menu94" name="benefit_menu94" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu94'])) echo $data_edit['benefit_menu94']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu95">List Benefit</label>
                                    <input id="benefit_menu95" name="benefit_menu95" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu95'])) echo $data_edit['benefit_menu95']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="benefit_menu96">List Benefit</label>
                                    <input id="benefit_menu96" name="benefit_menu96" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['benefit_menu96'])) echo $data_edit['benefit_menu96']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text8">Note text</label>
                                    <input id="note_text8" name="note_text8" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text8'])) echo $data_edit['note_text8']; ?>"/>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="conditions_content" role="tabpanel" aria-labelledby="conditions_tab">
                            <div class="form-group">
                                <label for="title_deskripsitermconditions_menu">Title Term Condotion</label>
                                <input id="title_deskripsitermconditions_menu" name="title_deskripsitermconditions_menu" type="text" maxlength="30" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_deskripsitermconditions_menu'])) echo $data_edit['title_deskripsitermconditions_menu']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="term_conditions_menu">Terms &amp; Conditions</label>
                                <textarea id="term_conditions_menu" name="term_conditions_menu" class="tinymce"><?php if($isEdit) echo $data_edit['term_conditions_menu']; ?></textarea>
                            </div> 
                            <div class="form-row">
                               <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions1">Term & Conditions</label>
                                    <input id="termsandconditions1" name="termsandconditions1" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions1'])) echo $data_edit['termsandconditions1']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions2">Term & Conditions</label>
                                    <input id="termsandconditions2" name="termsandconditions2" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions2'])) echo $data_edit['termsandconditions2']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions3">Term & Conditions</label>
                                    <input id="termsandconditions3" name="termsandconditions3" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions3'])) echo $data_edit['termsandconditions3']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions4">Term & Conditions</label>
                                    <input id="termsandconditions4" name="termsandconditions4" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions4'])) echo $data_edit['termsandconditions4']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions5">Term & Conditions</label>
                                    <input id="termsandconditions5" name="termsandconditions5" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions5'])) echo $data_edit['termsandconditions5']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions6">Term & Conditions</label>
                                    <input id="termsandconditions6" name="termsandconditions6" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions6'])) echo $data_edit['termsandconditions6']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions7">Term & Conditions</label>
                                    <input id="termsandconditions7" name="termsandconditions7" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions7'])) echo $data_edit['termsandconditions7']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions8">Term & Conditions</label>
                                    <input id="termsandconditions8" name="termsandconditions8" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions8'])) echo $data_edit['termsandconditions8']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions9">Term & Conditions</label>
                                    <input id="termsandconditions9" name="termsandconditions9" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions9'])) echo $data_edit['termsandconditions9']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions10">Term & Conditions</label>
                                    <input id="termsandconditions10" name="termsandconditions10" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions10'])) echo $data_edit['termsandconditions10']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions11">Term & Conditions</label>
                                    <input id="termsandconditions11" name="termsandconditions11" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions11'])) echo $data_edit['termsandconditions11']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions12">Term & Conditions</label>
                                    <input id="termsandconditions12" name="termsandconditions12" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions12'])) echo $data_edit['termsandconditions12']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions13">Term & Conditions</label>
                                    <input id="termsandconditions13" name="termsandconditions13" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions13'])) echo $data_edit['termsandconditions13']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions14">Term & Conditions</label>
                                    <input id="termsandconditions14" name="termsandconditions14" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions14'])) echo $data_edit['termsandconditions14']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions15">Term & Conditions</label>
                                    <input id="termsandconditions15" name="termsandconditions15" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions15'])) echo $data_edit['termsandconditions15']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions16">Term & Conditions</label>
                                    <input id="termsandconditions16" name="termsandconditions16" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions16'])) echo $data_edit['termsandconditions16']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions17">Term & Conditions</label>
                                    <input id="termsandconditions17" name="termsandconditions17" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions17'])) echo $data_edit['termsandconditions17']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions18">Term & Conditions</label>
                                    <input id="termsandconditions18" name="termsandconditions18" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions18'])) echo $data_edit['termsandconditions18']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions19">Term & Conditions</label>
                                    <input id="termsandconditions19" name="termsandconditions19" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions19'])) echo $data_edit['termsandconditions19']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions20">Term & Conditions</label>
                                    <input id="termsandconditions20" name="termsandconditions20" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions20'])) echo $data_edit['termsandconditions20']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions21">Term & Conditions</label>
                                    <input id="termsandconditions21" name="termsandconditions21" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions21'])) echo $data_edit['termsandconditions21']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions22">Term & Conditions</label>
                                    <input id="termsandconditions22" name="termsandconditions22" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions22'])) echo $data_edit['termsandconditions22']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions23">Term & Conditions</label>
                                    <input id="termsandconditions23" name="termsandconditions23" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions23'])) echo $data_edit['termsandconditions23']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions24">Term & Conditions</label>
                                    <input id="termsandconditions24" name="termsandconditions24" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions24'])) echo $data_edit['termsandconditions24']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions25">Term & Conditions</label>
                                    <input id="termsandconditions25" name="termsandconditions25" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions25'])) echo $data_edit['termsandconditions25']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions26">Term & Conditions</label>
                                    <input id="termsandconditions26" name="termsandconditions26" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions26'])) echo $data_edit['termsandconditions26']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions27">Term & Conditions</label>
                                    <input id="termsandconditions27" name="termsandconditions27" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions27'])) echo $data_edit['termsandconditions27']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions28">Term & Conditions</label>
                                    <input id="termsandconditions28" name="termsandconditions28" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions28'])) echo $data_edit['termsandconditions28']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions29">Term & Conditions</label>
                                    <input id="termsandconditions29" name="termsandconditions29" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions29'])) echo $data_edit['termsandconditions29']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="termsandconditions30">Term & Conditions</label>
                                    <input id="termsandconditions30" name="termsandconditions30" type="text" maxlength="250" class="form-control" value="<?php if($isEdit && !empty($data_edit['termsandconditions30'])) echo $data_edit['termsandconditions30']; ?>"/>
                                </div> 
                            </div>         
                        </div>

                        <div class="tab-pane fade" id="cancelpolicy_content" role="tabpanel" aria-labelledby="cancelpolicy_tab">
                            <div class="form-group">
                                <label for="title_deskripsicancelpolicy_menu">Title Cancellation Policy</label>
                                <input id="title_deskripsicancelpolicy_menu" name="title_deskripsicancelpolicy_menu" type="text" maxlength="30" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_deskripsicancelpolicy_menu'])) echo $data_edit['title_deskripsicancelpolicy_menu']; ?>"/>
                            </div>
                            <div class="form-group">
                                <label for="cancel_policy_menu">Cancellation Policy</label>
                                <textarea id="cancel_policy_menu" name="cancel_policy_menu" class="tinymce"><?php if($isEdit) echo $data_edit['cancel_policy_menu']; ?></textarea>
                            </div>                            
                        </div>



                    </div>
                    <?php require_once 'views/includes/form-submit-buttons.php'; ?>
                </form>
            </div>
        </div>
    </div>
</div>