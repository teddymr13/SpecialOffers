<div class="row">
    <div class="col">
        <pre>
<?php
foreach ($data_list as $item) {
    switch(intval($item['stat'])){
        case 1 : $urlEvent = 'hotels-resorts'; break;
        case 2 : $urlEvent = 'recreation'; break;
        case 3 : $urlEvent = 'gourmet'; break;
        case 4 : $urlEvent = 'dining'; break;
        case 5 : $urlEvent = 'beauty-wellness'; break;
        case 6 : $urlEvent = 'sport-leisure'; break;
        case 7 : $urlEvent = 'seasonal-gift'; break;
        case 8 : $urlEvent = 'other'; break;
        default : break;
    }
echo "&lt;url&gt;&lt;loc&gt;" . ROOT_URL_FE . strtolower($item['iso_country']) . "/" . $url_menu_str . "/" . $urlEvent . "/" . $item['url_kat'] . "/" . $item['id'] . "/" . $item['url_judul'] . ".html&lt;&#47;loc&gt;&lt;&#47;url&gt;<br/>";
}
?>
        </pre>
    </div>
</div>