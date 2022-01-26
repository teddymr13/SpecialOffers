<?php $isEdit = (isset($data_edit)); ?>
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form id="form_room" method="post">
                    <ul class="nav nav-tabs" id="form_tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general_tab" data-toggle="tab" href="#general_content" role="tab" aria-controls="general_content" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="data_tab" data-toggle="tab" href="#data_content" role="tab" aria-controls="data_content" aria-selected="false">Data Main</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="fasilitas_tab" data-toggle="tab" href="#fasilitas_content" role="tab" aria-controls="fasilitas_content" aria-selected="false">Data Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="roomservice_tab" data-toggle="tab" href="#roomservice_content" role="tab" aria-controls="roomservice_content" aria-selected="false">Data Room Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="image_tab" data-toggle="tab" href="#image_content" role="tab" aria-controls="image_content" aria-selected="false">Main Image</a>
                        </li>
                    </ul>
                    <div class="tab-content pt-3" id="article_tab_content">
                        <div class="tab-pane fade show active" id="general_content" role="tabpanel" aria-labelledby="general_tab">
                            <div class="form-group">
                                <label for="title" class="label_required_field">Name</label>
                                <input id="title" name="title" type="text" maxlength="75" class="form-control" value="<?php if($isEdit) echo $data_edit['judul_room']; ?>" >
                            </div>
                            <div class="form-group">
                                <label for="short_description" class="label_required_field">Type</label>
                                <textarea class="form-control" id="short_description" name="short_description" rows="1" maxlength="30" required><?php if($isEdit) echo $data_edit['deskp']; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="roomsize">Description</label>
                                <textarea class="form-control" id="roomsize" name="roomsize" rows="4"><?php if($isEdit) echo $data_edit['room_size']; ?></textarea>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="data_content" role="tabpanel" aria-labelledby="data_tab">
                             <div class="form-group">
                                <label>Specialoffers: <?php echo $specialoffers_id.' - '.$specialoffers_name;?></label>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="capasityroom">additional rooms/menu</label>
                                    <input id="capasityroom" name="capasityroom" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['capasity_room'])) echo $data_edit['capasity_room']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="bed_room">additional rooms/menu</label>
                                    <input id="bed_room" name="bed_room" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['bedroom'])) echo $data_edit['bedroom']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="bath_room">additional rooms/menu</label>
                                    <input id="bath_room" name="bath_room" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['bathroom'])) echo $data_edit['bathroom']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="capasityguest">additional rooms/menu</label>
                                    <input id="capasityguest" name="capasityguest" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['capasity_guest'])) echo $data_edit['capasity_guest']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="additionalrooms1">additional rooms/menu</label>
                                    <input id="additionalrooms1" name="additionalrooms1" maxlength="100" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['additional_rooms1'])) echo $data_edit['additional_rooms1']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="additionalrooms2">additional rooms/menu</label>
                                    <input id="additionalrooms2" name="additionalrooms2" maxlength="100" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['additional_rooms2'])) echo $data_edit['additional_rooms2']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="additionalrooms3">additional rooms/menu</label>
                                    <input id="additionalrooms3" name="additionalrooms3" maxlength="100" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['additional_rooms3'])) echo $data_edit['additional_rooms3']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="additionalrooms4">additional rooms/menu</label>
                                    <input id="additionalrooms4" name="additionalrooms4" maxlength="100" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['additional_rooms4'])) echo $data_edit['additional_rooms4']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="roomview">additional rooms/menu</label>
                                    <input id="roomview" name="roomview" maxlength="100" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['room_view'])) echo $data_edit['room_view']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="day_oprasional">Hari/Day</label>
                                    <input id="day_oprasional" name="day_oprasional" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['day_oprasional'])) echo $data_edit['day_oprasional']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="jam_oprasional">Jam Oprasional</label>
                                    <input id="jam_oprasional" name="jam_oprasional" type="text" class="form-control" value="<?php if($isEdit && !empty($data_edit['jam_oprasional'])) echo $data_edit['jam_oprasional']; ?>"/>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-12 col-md-2 mb-3">
                                    <label for="price" class="label_required_field">Price</label>
                                    <input id="price" name="price" type="number" min="0" step="0.01" class="form-control" value="<?php if($isEdit && !empty($data_edit['harga'])) echo $data_edit['harga']; ?>" aria-describedby="price_help" />
                                </div>
                                <div class="col-12 col-md-2 mb-3">
                                    <label for="discounted_price">Discounted Price</label>
                                    <input id="discounted_price" name="discounted_price" type="number" min="0" step="0.01" class="form-control" value="<?php if($isEdit && !empty($data_edit['harga_promo'])) echo $data_edit['harga_promo']; ?>" />
                                </div>
                                <div class="col-12 col-md-2 mb-3">
                                    <label for="presentasehargapromo">Presentase Discount %</label>
                                    <input id="presentasehargapromo" name="presentasehargapromo" maxlength="3" type="number" min="0" step="0.01" class="form-control" value="<?php if($isEdit && !empty($data_edit['presentase_harga_promo'])) echo $data_edit['presentase_harga_promo']; ?>" aria-describedby="price_help" />
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label>Batas Tanggal Promo</label>
                                     <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Date</div>
                                        </div>
                                        <input id="tgl_tempo" name="tgl_tempo" type="date" class="form-control" value="<?php if($isEdit && !empty($data_edit['tgl_tempo'])) echo $data_edit['tgl_tempo']; ?>" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="deksripsihargaroom">Description Price Book Room</label>
                                    <input id="deksripsihargaroom" name="deksripsihargaroom" type="text" maxlength="25" class="form-control" value="<?php if($isEdit && !empty($data_edit['deksripsi_harga_room'])) echo $data_edit['deksripsi_harga_room']; ?>"/>
                                </div>
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="tlp_book">Phone Book</label>
                                    <input id="tlp_book" name="tlp_book" type="text" class="form-control" maxlength="25" value="<?php if($isEdit && !empty($data_edit['tlp_book'])) echo $data_edit['tlp_book']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="textbtnbook">Pesan Ajakan Buttom</label>
                                    <input id="textbtnbook" name="textbtnbook" type="text" class="form-control" maxlength="45" value="<?php if($isEdit && !empty($data_edit['textbtnbook'])) echo $data_edit['textbtnbook']; ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="fasilitas_content" role="tabpanel" aria-labelledby="fasilitas_tab">
                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="title_deskripsifasilitas">Title Fasilitas</label>
                                    <input id="title_deskripsifasilitas" name="title_deskripsifasilitas" type="text" maxlength="30" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_deskripsifasilitas'])) echo $data_edit['title_deskripsifasilitas']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3"> 
                                    <label for="deksripsi_fasilitas">Decriptions Fasilitas</label>
                                    <textarea id="deksripsi_fasilitas" name="deksripsi_fasilitas" class="tinymce"><?php if($isEdit) echo $data_edit['deksripsi_fasilitas']; ?></textarea>
                                </div>
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="note_text">Sub Text Title</label>
                                    <input id="note_text" name="note_text" type="text" maxlength="150" class="form-control" value="<?php if($isEdit && !empty($data_edit['note_text'])) echo $data_edit['note_text']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas1">Facility/Amenities</label>
                                    <input id="fasilitas1" name="fasilitas1" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas1'])) echo $data_edit['fasilitas1']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas2">Facility/Amenities</label>
                                    <input id="fasilitas2" name="fasilitas2" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas2'])) echo $data_edit['fasilitas2']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas3">Facility/Amenities</label>
                                    <input id="fasilitas3" name="fasilitas3" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas3'])) echo $data_edit['fasilitas3']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas4">Facility/Amenities</label>
                                    <input id="fasilitas4" name="fasilitas4" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas4'])) echo $data_edit['fasilitas4']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas5">Facility/Amenities</label>
                                    <input id="fasilitas5" name="fasilitas5" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas5'])) echo $data_edit['fasilitas5']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas6">Facility/Amenities</label>
                                    <input id="fasilitas6" name="fasilitas6" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas6'])) echo $data_edit['fasilitas6']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas7">Facility/Amenities</label>
                                    <input id="fasilitas7" name="fasilitas7" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas7'])) echo $data_edit['fasilitas7']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas8">Facility/Amenities</label>
                                    <input id="fasilitas8" name="fasilitas8" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas8'])) echo $data_edit['fasilitas8']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas9">Facility/Amenities</label>
                                    <input id="fasilitas9" name="fasilitas9" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas9'])) echo $data_edit['fasilitas9']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas10">Facility/Amenities</label>
                                    <input id="fasilitas10" name="fasilitas10" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas10'])) echo $data_edit['fasilitas10']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas11">Facility/Amenities</label>
                                    <input id="fasilitas11" name="fasilitas11" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas11'])) echo $data_edit['fasilitas11']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas12">Facility/Amenities</label>
                                    <input id="fasilitas12" name="fasilitas12" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas12'])) echo $data_edit['fasilitas12']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas13">Facility/Amenities</label>
                                    <input id="fasilitas13" name="fasilitas13" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas13'])) echo $data_edit['fasilitas13']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas14">Facility/Amenities</label>
                                    <input id="fasilitas14" name="fasilitas14" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas14'])) echo $data_edit['fasilitas14']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas15">Facility/Amenities</label>
                                    <input id="fasilitas15" name="fasilitas15" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas15'])) echo $data_edit['fasilitas15']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas16">Facility/Amenities</label>
                                    <input id="fasilitas16" name="fasilitas16" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas16'])) echo $data_edit['fasilitas16']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas17">Facility/Amenities</label>
                                    <input id="fasilitas17" name="fasilitas17" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas17'])) echo $data_edit['fasilitas17']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas18">Facility/Amenities</label>
                                    <input id="fasilitas18" name="fasilitas18" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas18'])) echo $data_edit['fasilitas18']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas19">Facility/Amenities</label>
                                    <input id="fasilitas19" name="fasilitas19" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas19'])) echo $data_edit['fasilitas19']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas20">Facility/Amenities</label>
                                    <input id="fasilitas20" name="fasilitas20" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas20'])) echo $data_edit['fasilitas20']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas21">Facility/Amenities</label>
                                    <input id="fasilitas21" name="fasilitas21" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas21'])) echo $data_edit['fasilitas21']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas22">Facility/Amenities</label>
                                    <input id="fasilitas22" name="fasilitas22" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas22'])) echo $data_edit['fasilitas22']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas23">Facility/Amenities</label>
                                    <input id="fasilitas23" name="fasilitas23" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas23'])) echo $data_edit['fasilitas23']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas24">Facility/Amenities</label>
                                    <input id="fasilitas24" name="fasilitas24" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas24'])) echo $data_edit['fasilitas24']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas25">Facility/Amenities</label>
                                    <input id="fasilitas25" name="fasilitas25" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas25'])) echo $data_edit['fasilitas25']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas26">Facility/Amenities</label>
                                    <input id="fasilitas26" name="fasilitas26" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas26'])) echo $data_edit['fasilitas26']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas27">Facility/Amenities</label>
                                    <input id="fasilitas27" name="fasilitas27" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas27'])) echo $data_edit['fasilitas27']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas28">Facility/Amenities</label>
                                    <input id="fasilitas28" name="fasilitas28" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas28'])) echo $data_edit['fasilitas28']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas29">Facility/Amenities</label>
                                    <input id="fasilitas29" name="fasilitas29" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas29'])) echo $data_edit['fasilitas29']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas30">Facility/Amenities</label>
                                    <input id="fasilitas30" name="fasilitas30" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas30'])) echo $data_edit['fasilitas30']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas31">Facility/Amenities</label>
                                    <input id="fasilitas31" name="fasilitas31" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas31'])) echo $data_edit['fasilitas31']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas32">Facility/Amenities</label>
                                    <input id="fasilitas32" name="fasilitas32" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas32'])) echo $data_edit['fasilitas32']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="fasilitas33">Facility/Amenities</label>
                                    <input id="fasilitas33" name="fasilitas33" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['fasilitas33'])) echo $data_edit['fasilitas33']; ?>"/>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="roomservice_content" role="tabpanel" aria-labelledby="roomservice_tab">
                            <div class="form-row">
                                <div class="col-12 col-md-12 mb-3">
                                    <label for="title_roomservice">Title Room Service</label>
                                    <input id="title_roomservice" name="title_roomservice" type="text" maxlength="30" class="form-control" value="<?php if($isEdit && !empty($data_edit['title_roomservice'])) echo $data_edit['title_roomservice']; ?>"/>
                                </div>
                                <div class="col-12 col-md-12 mb-3"> 
                                    <label for="deksripsi_roomservice">Decriptions Room Service</label>
                                    <textarea id="deksripsi_roomservice" name="deksripsi_roomservice" class="tinymce"><?php if($isEdit) echo $data_edit['deksripsi_roomservice']; ?></textarea>
                                </div>
                              
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice1">Room Service</label>
                                    <input id="roomservice1" name="roomservice1" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice1'])) echo $data_edit['roomservice1']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice2">Room Service</label>
                                    <input id="roomservice2" name="roomservice2" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice2'])) echo $data_edit['roomservice2']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice3">Room Service</label>
                                    <input id="roomservice3" name="roomservice3" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice3'])) echo $data_edit['roomservice3']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice4">Room Service</label>
                                    <input id="roomservice4" name="roomservice4" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice4'])) echo $data_edit['roomservice4']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice5">Room Service</label>
                                    <input id="roomservice5" name="roomservice5" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice5'])) echo $data_edit['roomservice5']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice6">Room Service</label>
                                    <input id="roomservice6" name="roomservice6" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice6'])) echo $data_edit['roomservice6']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice7">Room Service</label>
                                    <input id="roomservice7" name="roomservice7" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice7'])) echo $data_edit['roomservice7']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice8">Room Service</label>
                                    <input id="roomservice8" name="roomservice8" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice8'])) echo $data_edit['roomservice8']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice9">Room Service</label>
                                    <input id="roomservice9" name="roomservice9" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice9'])) echo $data_edit['roomservice9']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice10">Room Service</label>
                                    <input id="roomservice10" name="roomservice10" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice10'])) echo $data_edit['roomservice10']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice11">Room Service</label>
                                    <input id="roomservice11" name="roomservice11" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice11'])) echo $data_edit['roomservice11']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice12">Room Service</label>
                                    <input id="roomservice12" name="roomservice12" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice12'])) echo $data_edit['roomservice12']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice13">Room Service</label>
                                    <input id="roomservice13" name="roomservice13" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice13'])) echo $data_edit['roomservice13']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice14">Room Service</label>
                                    <input id="roomservice14" name="roomservice14" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice14'])) echo $data_edit['roomservice14']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice15">Room Service</label>
                                    <input id="roomservice15" name="roomservice15" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice15'])) echo $data_edit['roomservice15']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice16">Room Service</label>
                                    <input id="roomservice16" name="roomservice16" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice16'])) echo $data_edit['roomservice16']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice17">Room Service</label>
                                    <input id="roomservice17" name="roomservice17" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice17'])) echo $data_edit['roomservice17']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice18">Room Service</label>
                                    <input id="roomservice18" name="roomservice18" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice18'])) echo $data_edit['roomservice18']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice19">Room Service</label>
                                    <input id="roomservice19" name="roomservice19" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice19'])) echo $data_edit['roomservice19']; ?>"/>
                                </div>

                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice20">Room Service</label>
                                    <input id="roomservice20" name="roomservice20" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice20'])) echo $data_edit['roomservice20']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice21">Room Service</label>
                                    <input id="roomservice21" name="roomservice21" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice21'])) echo $data_edit['roomservice21']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice22">Room Service</label>
                                    <input id="roomservice22" name="roomservice22" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice22'])) echo $data_edit['roomservice22']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice23">Room Service</label>
                                    <input id="roomservice23" name="roomservice23" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice23'])) echo $data_edit['roomservice23']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice24">Room Service</label>
                                    <input id="roomservice24" name="roomservice24" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice24'])) echo $data_edit['roomservice24']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice25">Room Service</label>
                                    <input id="roomservice25" name="roomservice25" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice25'])) echo $data_edit['roomservice25']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice26">Room Service</label>
                                    <input id="roomservice26" name="roomservice26" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice26'])) echo $data_edit['roomservice26']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice27">Room Service</label>
                                    <input id="roomservice27" name="roomservice27" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice27'])) echo $data_edit['roomservice27']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice28">Room Service</label>
                                    <input id="roomservice28" name="roomservice28" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice28'])) echo $data_edit['roomservice28']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice29">Room Service</label>
                                    <input id="roomservice29" name="roomservice29" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice29'])) echo $data_edit['roomservice29']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice30">Room Service</label>
                                    <input id="roomservice30" name="roomservice30" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice30'])) echo $data_edit['roomservice30']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice31">Room Service</label>
                                    <input id="roomservice31" name="roomservice31" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice31'])) echo $data_edit['roomservice31']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice32">Room Service</label>
                                    <input id="roomservice32" name="roomservice32" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice32'])) echo $data_edit['roomservice32']; ?>"/>
                                </div>
                                <div class="col-12 col-md-4 mb-3">
                                    <label for="roomservice33">Room Service</label>
                                    <input id="roomservice33" name="roomservice33" type="text" maxlength="100" class="form-control" value="<?php if($isEdit && !empty($data_edit['roomservice33'])) echo $data_edit['roomservice33']; ?>"/>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="image_content" role="tabpanel" aria-labelledby="image_tab">
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

                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail31" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr31'])) echo $data_edit['url_gbr31']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail31">Picture Menu (URL)</label>
                                        <input id="thumbnail31" name="thumbnail31" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr31']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail32" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr32'])) echo $data_edit['url_gbr32']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail32">Picture Menu (URL)</label>
                                        <input id="thumbnail32" name="thumbnail32" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr32']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail33" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr33'])) echo $data_edit['url_gbr33']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail33">Picture Menu (URL)</label>
                                        <input id="thumbnail33" name="thumbnail33" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr33']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail34" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr34'])) echo $data_edit['url_gbr34']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail34">Picture Menu (URL)</label>
                                        <input id="thumbnail34" name="thumbnail34" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr34']; ?>" >
                                    </div>
                                </div>
                                <div class="media col-12 col-md-6 mb-3">
                                    <img id="preview_thumbnail35" class="img-thumbnail align-self-center" src="<?php if($isEdit && !empty($data_edit['url_gbr35'])) echo $data_edit['url_gbr35']; else echo DEFAULT_NO_IMAGE; ?>" />
                                    <div class="media-body align-self-center pl-3">
                                        <label for="thumbnail35">Picture Menu (URL)</label>
                                        <input id="thumbnail35" name="thumbnail35" type="url" class="form-control" maxlength="255" value="<?php if($isEdit) echo $data_edit['url_gbr35']; ?>" >
                                    </div>
                                </div>
                            </div>        
                        </div>

                    </div>
                    <?php require_once 'views/includes/form-submit-buttons.php'; ?>
                </form>
            </div>
        </div>
    </div>
</div>