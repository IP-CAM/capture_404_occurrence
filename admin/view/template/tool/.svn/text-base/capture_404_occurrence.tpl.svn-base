<!--
/*
 * @support
 * http://www.opensourcetechnologies.com/contactus.html
 * sales@opensourcetechnologies.com
 * */
-->
<?php echo $header; ?><?php echo $column_left; ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" data-toggle="tooltip" title="<?php echo $button_delete; ?>" class="btn btn-danger" onclick="confirm('<?php echo $text_confirm; ?>') ? $('#form-capture_404_occurrence').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo $heading_title; ?></h1>
      <ul class="breadcrumb">
        <?php foreach ($breadcrumbs as $breadcrumb) { ?>
        <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
        <?php } ?>
      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php if ($success) { ?>
    <div class="alert alert-success"><i class="fa fa-check-circle"></i> <?php echo $success; ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php } ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo $text_list; ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo $delete; ?>" method="post" enctype="multipart/form-data" id="form-capture_404_occurrence">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php echo $column_serial_no; ?></td>
                  <td class="text-left"><?php if ($sort == 'request_uri') { ?>
                    <a href="<?php echo $sort_request_uri; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_request_uri; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_request_uri; ?>"><?php echo $column_request_uri; ?></a>
                    <?php } ?></td>
                 <td class="text-left"><?php if ($sort == 'occurrence') { ?>
                    <a href="<?php echo $sort_occurrence; ?>" class="<?php echo strtolower($order); ?>"><?php echo $column_occurrence; ?></a>
                    <?php } else { ?>
                    <a href="<?php echo $sort_occurrence; ?>"><?php echo $column_occurrence; ?></a>
                    <?php } ?></td>
                </tr>
              </thead>
              <tbody>
                <?php if ($capture_404_occurrences) { $i=0;?>
                <?php foreach ($capture_404_occurrences as $capture_404_occurrence) { $i++;?>
                <tr>
                  <td class="text-center"><?php if (in_array($capture_404_occurrence['id'], $selected)) { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $capture_404_occurrence['id']; ?>" checked="checked" />
                    <?php } else { ?>
                    <input type="checkbox" name="selected[]" value="<?php echo $capture_404_occurrence['id']; ?>" />
                    <?php } ?></td>
                  <td class="text-left"><?php echo $i; ?></td>
                  <td class="text-left"><?php echo $capture_404_occurrence['request_uri']; ?></td>
				  <td class="text-left"><?php echo $capture_404_occurrence['occurrence']; ?></td>	
               </tr>
                <?php } ?>
                <?php } else { ?>
                <tr>
                  <td class="text-center" colspan="8"><?php echo $text_no_results; ?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo $pagination; ?></div>
          <div class="col-sm-6 text-right"><?php echo $results; ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo $footer; ?>

