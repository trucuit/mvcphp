<?php
//BUTTON NEW
$linkNew = URL::createLink('admin', 'group', 'add');
$btnNew = Helper::cmsButton('toolbar-popup-new', $linkNew, 'icon-32-new', 'New');

//BUTTON PUBLISH
$linkPublish = URL::createLink('admin', 'group', 'index');
$btnPushlish = Helper::cmsButton('toolbar-publish', $linkPublish, 'icon-32-publish', 'Publish');

//BUTTON UNPUBLSIH
$linkUnpublish = URL::createLink('admin', 'group', 'index');
$btnUnpushlish = Helper::cmsButton('toolbar-unpublish', $linkUnpublish , 'icon-32-unpublish', 'Unpublish ');

//BUTTON TRASH
$linkTrash = URL::createLink('admin', 'group', 'index');
$btnTrash = Helper::cmsButton('toolbar-trash', $linkTrash , 'icon-32-trash', 'Trash ');

//BUTTON SAVE
$linkSave = URL::createLink('admin', 'group','form');
$btnSave = Helper::cmsButton('toolbar-apply', $linkSave, 'icon-32-apply', 'Save');

//BUTTON SAVE & CLOSE
$linkSaveClose = URL::createLink('admin', 'group','form');
$btnSaveClose = Helper::cmsButton('toolbar-save', $linkSaveClose, 'icon-32-save', 'Save & Close');

//BUTTON SAVE & NEW
$linkSaveNew = URL::createLink('admin', 'group','form');
$btnSaveNew = Helper::cmsButton('toolbar-save-new', $linkSaveNew, 'icon-32-save-new', 'Save & New');

//BUTTON CLOSE
$linkCancel = URL::createLink('admin', 'group','form');
$btnCancel = Helper::cmsButton('toolbar-cancel', $linkCancel, 'icon-32-cancel', 'Cancel');

switch ($this->arrParam['action']) {
    case 'index':
    $strBtn = $btnNew . $btnPushlish . $btnUnpushlish . $btnTrash;
    break;
    case 'add':
    $strBtn = $btnSave . $btnSaveClose . $btnSaveNew . $btnCancel;
    break;

}
?>
<div id="toolbar-box">
    <div class="m">
        <!-- TOOLBAR -->
        <div class="toolbar-list" id="toolbar">
            <ul>
                <?php echo $strBtn ?>
            </ul>
            <div class="clr"></div>
        </div>
        <!-- TITLE -->
        <div class="pagetitle icon-48-groups"><h2><?php echo $this->_title; ?></h2></div>
    </div>
</div>