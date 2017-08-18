<?php /* Smarty version Smarty-3.1.15, created on 2017-08-17 23:54:31
         compiled from "C:\xampp\htdocs\clipbucket\admin_area\styles\cb_2014\layout\email_tester.html" */ ?>
<?php /*%%SmartyHeaderCode:1321659961097058590-08527717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fb597d3dffa16b5e6beb8006a86580208b96951' => 
    array (
      0 => 'C:\\xampp\\htdocs\\clipbucket\\admin_area\\styles\\cb_2014\\layout\\email_tester.html',
      1 => 1502865809,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321659961097058590-08527717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'id' => 0,
    'name' => 0,
    'macros' => 0,
    '_templates' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59961097157ee7_40169170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59961097157ee7_40169170')) {function content_59961097157ee7_40169170($_smarty_tpl) {?><style>

	.cb-box .mid-roll-row {
		font-weight: 300;
		font-size: 14px;
		margin-bottom: 10px;
	}

	.cb-box textarea, .cb-box input[type=text][id=subject], #dynamic-values input {
		font-family: monospace;
	}

	.cb-box input[type=text].inline, .cb-box select.inline {
		width: 40px;
		border: none;
		text-align: center;
		border-bottom: 1px solid #ccc;
		background-color: transparent;
		border-radius: 0px !important;
		margin: 0px 4px;
	}

	.cb-box select.inline {
		border-radius: 0px;
		width: auto;
		background-color: transparent;
		border: 1px solid #ccc;
	}

	.cb-box hr {
		margin-top: 10px;
		margin-bottom: 10px;
	}

	.cb-box .row .form-group > span.text-muted {
		font-size: 11px;
		text-transform: uppercase;
	}
</style>

<div class="clearfix cb-box">
	<header class="clearfix cb-header">
		<h2>Email Tester</h2>
	</header>

	<h4>Configurations</h4>
	<div class="btn-group">
	<a href="javascript:void(0)" class="btn btn-default"><?php echo lang('Mail type');?>
: <span class="badge"><?php echo config('mail_type');?>
</span></a>
	<a href="javascript:void(0)"  class="btn btn-default"><?php echo lang('Host');?>
: <span class="badge"><?php echo config('smtp_host');?>
</span></a> 
	<a href="javascript:void(0)"  class="btn btn-default"><?php echo lang('Port');?>
: <span class="badge"><?php echo config('smtp_port');?>
</span></a> 
	<a href="javascript:void(0)"  class="btn btn-default"><?php echo lang('User');?>
: <span class="badge"><?php echo config('smtp_user');?>
</span></a> 
	<a href="javascript:void(0)"  class="btn btn-default"><?php echo lang('Password');?>
: <span class="badge"><?php echo config('smtp_pass');?>
</span></a> 
	<a href="javascript:void(0)"  class="btn btn-default"><?php echo lang('Auth');?>
: <span class="badge"><?php echo config('smtp_auth');?>
</span></a>
	</div>
	<hr />
	<form action="<?php echo queryString();?>
" method="post" id="test_email">
		<div class="form-group">
			<label for="to_name">To( Name )</label>
			<input type="text" name="to_name" id="to_name" class="form-control" />
		</div>

		<div class="form-group">
			<label for="to_email">To( Email Address )</label>
			<input type="text" name="to_email" id="to_email" class="form-control" />
		</div>

		<div class="form-group">
			<label for="from_name">From( Name )</label>
			<input type="text" name="from_name" id="from_name" class="form-control" placeholder="Default: Tune.pk" />
		</div>

		<div class="form-group">
			<label for="from_email">From( Email Address )</label>
			<input type="text" name="from_email" id="from_email" class="form-control" placeholder="Default: <?php echo @constant('SUPPORT_EMAIL');?>
" />
		</div>

		<?php if ($_smarty_tpl->tpl_vars['list']->value) {?>
		<div class="form-group">
			<label for="email_template">Email Template</label>
			<select name="email_template" id="email_template" class="form-control chosen">
				<option value="-1" selected="selected">- none -</option>
				<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['name']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</option>
				<?php } ?>
			</select>
		</div>
		<?php }?>

		<div class="form-group">
			<label for="subject">Email Subject</label>
			<input type="text" name="subject" id="subject" class="form-control" />
		</div>

		<div class="form-group">
			<label for="body">Email Body</label>
			<textarea name="body" id="body" class="form-control" cols="30" rows="10"></textarea>
		</div>

		<div class="form-group" id="dynamic-values" style="display: none">
			<h4>Dynamic Values</h4>
		</div>

		<div class="pull-right">
			<button class="btn btn-primary" type="submit" name="start_test" id="start_test">Test</button>
		</div>
	</form>
</div>

<div class="form-group clearfix" id="emaildv" style="display: none !important;">
	<input type="text" name="dvn[]" class="form-control pull-left" style="width: 49%" placeholder="macro" />
	<textarea name="dvv[]" id="" rows="2" class="form-control pull-right" style="width: 49%;" placeholder="value"></textarea>
</div>

<!-- include chosen -->


<script type="text/javascript">

	/*var __macros = <?php echo json_encode($_smarty_tpl->tpl_vars['macros']->value);?>
,
		__templates = <?php echo json_encode($_smarty_tpl->tpl_vars['_templates']->value);?>
,
		arrayUnique = function(a) {
		    return a.reduce(function(p, c) {
		        if (p.indexOf(c) < 0) p.push(c);
		        return p;
		    }, []);
		};*/
	/*$( document ).ready(function(){
		$( '.chosen' ).chosen();

		var onChange = function onChange( event ) {
			var _this = $( this ),
				subject = '',
				body = '';

			{
				if( typeof __templates[ this.value ] !== 'undefined' ) {
					subject = __templates[ this.value ][ 'subject' ];
					body = __templates[ this.value ][ 'body' ];
				}
			}

			//extract macros from body
			
			var expression = /\{([a-zA-Z0-9\_\-]*)\}/ig,
			
				bodyMacros = body.match( expression );
				subjectMacros = subject.match( expression );


			if ( bodyMacros === null ) {
				bodyMacros = [];
			}

			if ( subjectMacros === null ) {
				subjectMacros = [];
			}

			dynamicMacros = bodyMacros.concat( subjectMacros );

			console.info( subjectMacros );

			if( dynamicMacros.length === 0 ) {
				$( '#dynamic-values' ).hide().find( '.form-group' ).remove();
			}

			if ( dynamicMacros.length > 0 ) {

				dynamicMacros = arrayUnique( dynamicMacros );

				var container = $( '#dynamic-values' ),
					i;

				container.find( '.form-group' ).remove();

				for( i = 0; i < dynamicMacros.length; i++ ) {
					var clone = $( '#emaildv' ).clone(),
						_value = '';

					container.append( clone );

					var _dom = container.find( '#emaildv' );

					_dom.attr( 'id', dynamicMacros[ i ] );
					_dom.attr( 'data-index', i );
					_dom.find( 'input[name*=dvn]' ).val( dynamicMacros[ i ] ).attr({
						 'name':'dv['+i+'][name]',
						 'readonly':'readonly'
					});

					if ( typeof __macros[ dynamicMacros[ i ] ] !== 'undefined' )  {
						_value = __macros[ dynamicMacros[ i ] ];
					}

					_dom.find( 'textarea[name*=dvv]' ).val( _value ).attr( 'name', 'dv['+i+'][value]' );
					_dom.show();
				}

				$( '#dynamic-values' ).show()
			}

			$( '#subject' ).val( subject );
			$( '#body' ).val( body );
		}

		$( document ).on( 'change', '#email_template', onChange );
	});*/
</script><?php }} ?>
