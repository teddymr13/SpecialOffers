<?php
$isCanAdd = true;
$isCanRemove = true;
$cardTitle = 'Menu List - ' . $specialoffers_id;
$urlAddPage = 'specialoffers/add-specialoffersroommenu?specialoffersid='.$specialoffers_id;

require_once 'views/includes/list-top-part.php';

if($is_valid_data) {
    if ($count_row > 0) {
        ?>
        <table class="table table-hover">
            <?php require_once 'views/includes/list-table-caption.php'; ?>
            <thead>
            <tr>
                <th scope="col">
                    <!-- <div class="custom-control custom-checkbox"> 
                        <input type="checkbox" class="custom-control-input" name="check_all"
                               id="check_all">
                        <label class="custom-control-label" for="check_all"></label>
                    </div>-->
                </th>
                <th scope="col"><?php ViewHelper::thLink($main_url, $hlm, $orderby, $order, 1, 'ID',$filter_param); ?></th>
                <th scope="col"><?php ViewHelper::thLink($main_url, $hlm, $orderby, $order, 2, 'Judul Menu',$filter_param); ?></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data_list as $item) {
                ?>
                <tr>
                    <td scope="row">
                         <!-- <div class="custom-control custom-checkbox"> 
                            <input type="checkbox" class="custom-control-input"
                                   name="check_row" value="<?php //echo $item['id']; ?>"
                                   id="check_row_<?php //echo $item['id']; ?>">
                            <label class="custom-control-label"
                                   for="check_row_<?php //echo $item['id']; ?>"></label>
                        </div>-->
                    </td>
                    <td><?php echo $item['id']; ?></td>
                    <td><?php echo $item['judul_menu']; ?></td>
                    <td class="td_button_action">
                        <a role="button" class="btn btn-outline-warning btn-sm"
                           href="specialoffers/edit-specialoffersroommenu-<?php echo $item['id'] ?>?specialoffersid=<?php echo $specialoffers_id; ?>"
                           data-toggle="tooltip" title="Edit">
                            <i class="far fa-fw fa-edit"></i>
                        </a>
                        <!--<button type="button" name="button_remove" 
                                data-id-row="<?php //echo $item['id']; ?>"
                                class="btn btn-outline-danger btn-sm" data-toggle="tooltip"
                                title="Remove">
                            <i class="far fa-fw fa-trash-alt"></i>
                        </button>-->
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

        <?php
        require_once 'views/includes/list-pager.php';
    }
    else echo "No Data Found.";
}
else echo "Invalid array data.";

require_once 'views/includes/list-bottom-part.php';
?>