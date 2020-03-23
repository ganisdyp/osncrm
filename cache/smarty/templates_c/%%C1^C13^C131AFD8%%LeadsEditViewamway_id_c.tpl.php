<?php /* Smarty version 2.6.31, created on 2020-03-23 11:08:26
         compiled from cache/include/InlineEditing/LeadsEditViewamway_id_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['amway_id_c']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['amway_id_c']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['amway_id_c']['value']); ?>
<?php endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['amway_id_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['amway_id_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >