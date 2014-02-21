<div class="row">
    <h3><?php echo $this->lang->line('label_customer_history') . ' ' . $customer_detail[0]->firstname .' ' . $customer_detail[0]->middlename .' '. $customer_detail[0]->lastname; ?></h3>
    <hr>
</div>

<div class="row">
    <?php echo @$table; ?>
</div>