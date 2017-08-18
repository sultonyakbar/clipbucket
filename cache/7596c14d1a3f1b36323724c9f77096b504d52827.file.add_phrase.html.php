<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:27:35
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\add_phrase.html" */ ?>
<?php /*%%SmartyHeaderCode:1189759960a47101562-55282389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7596c14d1a3f1b36323724c9f77096b504d52827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\add_phrase.html',
      1 => 1502865808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1189759960a47101562-55282389',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang_obj' => 0,
    'language' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59960a4719e004_85694278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59960a4719e004_85694278')) {function content_59960a4719e004_85694278($_smarty_tpl) {?><div class="heading">
    <h2>Add New Phrase</h2>
</div>
<form name="form1" method="post" action="">
<fieldset class="fieldset">
    <div class="row">
  <div class="col-md-6">
    <label for="prasecode">Phrase Code</label>
        <input type="text" name="name" id="name" class="form-control">
      </div>

        <div class="col-md-6">
            <label for="language">Language</label>
            <select name="lang_code" id="lang_code" class="form-control">
                <?php if (isset($_smarty_tpl->tpl_vars['language'])) {$_smarty_tpl->tpl_vars['language'] = clone $_smarty_tpl->tpl_vars['language'];
$_smarty_tpl->tpl_vars['language']->value = $_smarty_tpl->tpl_vars['lang_obj']->value->get_langs(); $_smarty_tpl->tpl_vars['language']->nocache = null; $_smarty_tpl->tpl_vars['language']->scope = 0;
} else $_smarty_tpl->tpl_vars['language'] = new Smarty_variable($_smarty_tpl->tpl_vars['lang_obj']->value->get_langs(), null, 0);?>
                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['name'] = 'l_list';
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['language']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['l_list']['total']);
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_code'];?>
"><?php echo $_smarty_tpl->tpl_vars['language']->value[$_smarty_tpl->getVariable('smarty')->value['section']['l_list']['index']]['language_name'];?>
</option>
                <?php endfor; endif; ?>
            </select>
        </div>
        </div>

    <div class="form-group">
        <label for="phrasetext">Phrase Text</label>
        <textarea name="text" class="form-control" id="text" cols="45" rows="5"></textarea>
        </div>

    </fieldset>
    <div class="form-group">
        <input type="submit" name="add_phrase" id="add_phrase" value="Add Phrase" class="btn btn-primary btn-sm">
        </div>

<p class="alert alert-info">To display this text in your template , simple add this where you want to display your text <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_code'];?>
</p>
</form><?php }} ?>
