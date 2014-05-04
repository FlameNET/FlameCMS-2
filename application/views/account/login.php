<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/local-common/css/common.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/_themes/bam/css/master.css"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/local-common/css/locale/es-es.html"/>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>assets/css/_themes/bam/css/_lang/es-es.css"/>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/local-common/js/third-party.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/local-common/js/common/core.js"></script>
<script type="text/javascript">
			var targetOrigin = "http://eu.battle.net/";
			function updateParent(action, key, value) {
				var obj = { action: action };
				if (key) obj[key] = value;
				parent.postMessage(JSON.stringify(obj), targetOrigin);
				return false;
			}
			function checkDefaultValue(input, isPass) {
				if (input.value == input.title)
					input.value = "";
				if (isPass)
					input.type = "password";
			}
		</script>
</head>
<body>
<div id="embedded-login">
	<h1>Battle.net</h1>
	<form action="#" method="post">
		<a id="embedded-close" href="javascript:;" onclick="updateParent('close')"></a>
		<div>
			<p>
				<label for="accountName" class="label"><?php echo lang('account:Name'); ?></label>
				<input id="accountName" value="" name="accountName" maxlength="320" type="text" tabindex="1" class="input"/>
			</p>
			<p>
				<label for="password" class="label"><?php echo lang('account:Password'); ?></label>
				<input id="password" name="password" maxlength="16" type="password" tabindex="2" autocomplete="off" class="input"/>
			</p>
			<p>
				<span id="remember-me">
				<label for="persistLogin">
				<input type="checkbox" checked="checked" name="persistLogin" id="persistLogin"/>
				<?php echo lang('remember:Me'); ?> </label>
				</span>
				<input type="hidden" name="app" value="com-sc2"/>
				<button class="ui-button button1" type="submit" data-text="<?php echo lang('log:In:pro'); ?>">
					<span class="button-left">
						<span class="button-right"><?php echo lang('log:In'); ?></span>
					</span>
				</button>
			</p>
		</div>
		<ul id="help-links">
			<li class="icon-pass"><?php echo lang('icon:pass'); ?></li>
			<li class="icon-secure"><?php echo lang('icon:secure'); ?></li>
			<li class="icon-signup"><?php echo lang('icon:signup'); ?></li>
		</ul>
		<script type="text/javascript">
			$(function() {
				$("#help-links a").click(function() {
					updateParent('redirect', 'url', this.href);
					return false;
				});
				$('#accountName').focus();
				updateParent('onload', 'height', $(document).height());
			});
			function reLoadCaptcha(target) {
				target.src = '../captchad41d.jpg?' + new Date().getTime();
			}
		</script>
	</form>
</div>
</body>
</html>