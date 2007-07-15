<?php /* Smarty version 2.6.16, created on 2007-07-02 11:27:57
         compiled from db:system_rssindex.html */ ?>
<h4 style="text-align:left;"><?php echo $this->_tpl_vars['lang_headlines']; ?>
</h4>
<div style='padding: 1px; text-align: left;'>
      <ul style="list-style-image:url(images/rss.gif);">
      <!-- start site loop -->
      <?php $_from = $this->_tpl_vars['feed_sites']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['site']):
?>
        <li>&nbsp;<a href="<?php echo $this->_tpl_vars['zarilia_url']; ?>
/index.php?page_type=rss&amp;id=<?php echo $this->_tpl_vars['site']['id']; ?>
"><?php echo $this->_tpl_vars['site']['name']; ?>
</a></li>
      <?php endforeach; endif; unset($_from); ?>
      <!-- end site loop -->
      </ul>
</div>

<?php echo $this->_tpl_vars['headline']; ?>