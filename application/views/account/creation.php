<div id="layout-middle">
<div class="wrapper">
<div id="content">
<div id="page-header">
<p class="privacy-message"><b><?php echo lang('privacy:message'); ?></p>
</div>
<form action="<?php echo base_url(); ?>/account/creation/tos.html" method="get" class="country-select">
<div class="input-row input-row-select">
<span class="input-left">
<label for="country">
	<span class="label-text">
		<?php echo lang('country')?>
	</span>
	<span class="input-required"></span>
</label>
</span><!--
--><span class="input-right">
<span class="input-select input-select-small">
<select name="country" id="country" class="small border-5 glow-shadow-2" tabindex="1">
<?php foreach ($country as $account_item): ?>
<option value="<?php echo $account_item['iso3'] ?>"><?php echo $account_item['printable_name'] ?></option>
<?php endforeach ?>
</select>
<span class="inline-message " id="country-message"> </span>
</span>
<button class="ui-button button1" type="submit" id="country-submit" tabindex="1"><span class="button-left"><span class="button-right">Cambiar país</span></span></button>
</span>
</div>
<div class="input-row input-row-note" id="country-warning" style="display: none">
<div class="input-note border-5 glow-shadow">
<div id="countryGlobal" class="input-note-content">
<p class="caption">Si cambias el país, aparecerán campos de texto diferentes sobre la creación de la cuenta y la dirección postal que quizás no concuerden con tu situación actual. ¿Deseas continuar?</p>
<p>
<a class="ui-button button1" href="tos.html"
tabindex="1"><span class="button-left"><span class="button-right">Cambiar país</span></span></a>
<a class="ui-cancel "
href="tos.html"
tabindex="1">
<span>
Cancelar </span>
</a>
</p>
</div>
<div id="countryCHINA" class="input-note-content">
<p class="caption">You are on the Taiwanese regional Battle.net website. Only account holders who have a Taiwanese World of Warcraft account should create a Battle.net account here. If you have a Chinese World of Warcraft account, go to Battle.net China instead.</p>
<p>
<a class="ui-button button1" href="https://tw.battle.net/account/creation/tos.html?style=LOBBY&amp;theme&amp;country=CHINA"
id="stayTaiwan" tabindex="1"><span class="button-left"><span class="button-right">YES, I HAVE A TAIWANESE WORLD OF WARCRAFT ACCOUNT</span></span></a><br />
<a class="ui-button button1" href="http://www.battlenet.com.cn/account/creation/tos.html"
id="gotoChina" tabindex="1"><span class="button-left"><span class="button-right">GO TO BATTLE.NET IN CHINA</span></span></a>
<a class="ui-cancel "
href="tos.html"
tabindex="1">
<span>
Cancelar </span>
</a>
</p>
</div>
<div class="input-note-arrow"></div>
</div>
</div>
</form>
<script type="text/javascript">
//<![CDATA[
(function() {
var countrySubmit = document.getElementById('country-submit');
countrySubmit.style.display = 'none';
})();
//]]>
</script>
<div id="page-content">
<form action="https://us.battle.net/account/creation/tos.html" method="post" id="creation">
<div class="input-hidden">
<div class="input-hidden">
<input type="hidden" id="csrftoken" name="csrftoken" value="014078ac-7ebf-4dbf-987a-7ebedd51673c" />
</div>
<input type="hidden" name="country" value="USA" />
<input type="hidden" name="ret" value="" />
</div>
<div class="form-blockable" id="country-change">
<div class="input-row input-row-select">
<span class="input-left">
<label for="dobMonth">
<span class="label-text">
<?php echo lang('date:of:birth'); ?>
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-select input-select-extra-extra-small">
	<select name="dobMonth" id="dobMonth" class="extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
		<option value="" selected="selected"><?php echo lang('month'); ?></option>
		<?php echo lang('month:print');?>
	</select>
	<span class="inline-message no-text-clear" id="dobMonth-message"> </span>
</span>
<span class="input-select input-select-extra-extra-extra-small">
<select name="dobDay" id="dobDay" class="extra-extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected"><?php echo lang('day'); ?></option>
	<?php
	for($day=1;$day<=31;$day++){
	echo'<option value="'.$day.'">'.$day.'</option>';
	}
	 ?>
</select>
<span class="inline-message no-text-clear" id="dobDay-message"> </span>
</span>
<span class="input-select input-select-extra-extra-extra-small">
<select name="dobYear" id="dobYear" class="extra-extra-extra-small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected"><?php echo lang('year'); ?></option>
	<?php
	for($year=2014;$year>=1904;$year--){
	echo'<option value="'.$year.'">'.$year.'</option>';
	}
	 ?>
</select>
<span class="inline-message no-text-clear" id="dobYear-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="firstname">
<span class="label-text">
<?php echo lang('name'); ?>:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="text" name="firstname" value="" id="firstname" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="32" tabindex="1" required="required" placeholder="<?php echo lang('name'); ?>" />
<span class="inline-message " id="firstname-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="text" name="lastname" value="" id="lastname" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="32" tabindex="1" required="required" placeholder="<?php echo lang('last:name'); ?>" />
<span class="inline-message " id="lastname-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="emailAddress">
<span class="label-text">
Dirección e-mail:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="email" name="emailAddress" value="" id="emailAddress" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="320" tabindex="1" required="required" placeholder="Dirección e-mail" />
<span class="inline-message " id="emailAddress-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="email" name="emailAddressConfirmation" value="" id="emailAddressConfirmation" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="320" tabindex="1" required="required" placeholder="Vuelve a escribir tu dirección e-mail" />
<span class="inline-message " id="emailAddressConfirmation-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-text">
<span class="input-left">
<label for="password">
<span class="label-text">
Contraseña:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-text input-text-small">
<input type="password" id="password" name="password" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="Contraseña" />
<span class="inline-message " id="password-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="password" id="rePassword" name="rePassword" value="" class="small border-5 glow-shadow-2" autocomplete="off" onpaste="return false;" maxlength="16" tabindex="1" required="required" placeholder="Vuelve a escribir tu contrsaeña" />
<span class="inline-message " id="rePassword-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-note" id="password-strength" style="display: none">
<div class="input-note border-5 glow-shadow">
<div class="input-note-left">
<p class="caption">Por razones de seguridad, te recomendamos que escojas una contraseña única que no estés utilizando ya para otras cuentas en Internet.</p>
</div>
<div class="input-note-right border-5">
<div class="password-strength">
<span class="password-result">
Seguridad de contraseña:
<strong id="password-result"></strong>
</span>
<span class="password-rating"><span class="rating rating-default" id="password-rating"></span></span>
</div>
<ul class="password-level" id="password-level">
<li id="password-level-0">
<span class="icon-16"></span>
<span class="icon-16-label">Tu contraseña debe tener entre 8 y 16 caracteres.</span>
</li>
<li id="password-level-1">
<span class="icon-16"></span>
<span class="icon-16-label">Tu contraseña solo debe tener caracteres alfabéticos (A–Z), caracteres numéricos (0–9), y puntuación.</span>
</li>
<li id="password-level-2">
<span class="icon-16"></span>
<span class="icon-16-label">Tu contraseña debe tener al menos un carácter alfabético y uno numérico.</span>
</li>
<li id="password-level-3">
<span class="icon-16"></span>
<span class="icon-16-label">No puedes usar el nombre de cuenta como contraseña.</span>
</li>
<li id="password-level-4">
<span class="icon-16"></span>
<span class="icon-16-label">No coinciden las contraseñas.</span>
</li>
</ul>
</div>
<div class="clear"></div>
<div class="input-note-arrow"></div>
</div>
</div>
<div class="input-row input-row-select">
<span class="input-left">
<label for="question1">
<span class="label-text">
Pregunta y respuesta secreta:
</span>
<span class="input-required">*</span>
</label>
</span><!--
--><span class="input-right">
<span class="input-select input-select-small">
<select name="question1" id="question1" class="small border-5 glow-shadow-2" tabindex="1" required="required">
<option value="" selected="selected">Selecciona una pregunta</option>
<option value="11">¿Cuál era tu apodo de la infancia?</option>
<option value="12">¿Cuál era el apellido de tu primer jefe?</option>
<option value="13">¿Cómo se llamaba el chico o la chica con quien tuviste tu segundo beso?</option>
<option value="14">¿Cómo se llamaba tu segunda mascota?</option>
<option value="15">¿Quién era tu héroe de la infancia?</option>
<option value="16">¿Cuál era el apellido de tu profesor favorito?</option>
<option value="17">De niño/a, ¿qué querías ser de mayor?</option>
<option value="18">Si pudieras cambiar de nombre, ¿cuál sería?</option>
</select>
<span class="inline-message no-text-clear" id="question1-message"> </span>
</span>
<span class="input-text input-text-small">
<input type="text" name="answer1" value="" id="answer1" class="small border-5 glow-shadow-2" autocomplete="off" maxlength="100" tabindex="1" required="required" placeholder="Respuesta" />
<span class="inline-message no-text-clear" id="answer1-message"> </span>
</span>
</span>
</div>
<div class="input-row input-row-note question-info" id="question-info" style="display: none;">
<span id="question1-message" class="inline-message no-text-clear">Esta información se utilizará para asegurar la seguridad de tu cuenta, como por ejemplo al reiniciar la contraseña.</span>
</div>
<div class="input-row input-row-checkbox input-row-important">
<span class="input-left">
<span class="title-text">
</span>
<span class="input-required"></span>
</span><!--
--><span class="input-right">
<label for="agreedToToU">
<input type="checkbox" name="agreedToToU" value="true" id="agreedToToU" tabindex="1" required="required" />
<span class="label-text">
Al marcar la casilla, aceptas las <a href="http://us.blizzard.com/es-es/company/about/termsofuse.html" onclick="window.open(this.href); return false;">Condiciones de Uso</a> aplicables a tu país de residencia, y en caso de ser menor de 18 años, reconoces y confirmas que tus padres o tutores legales han revisado y aceptado también las Condiciones de Uso en tu nombre.<span class="input-required">*</span>
</span>
</label>
</span>
</div>
<div class="input-row input-row-checkbox input-row-disclaimer">
<span class="input-left">
<span class="title-text">
</span>
<span class="input-required"></span>
</span><!--
--><span class="input-right">
<label for="blizzardNewsletter">
<input type="checkbox" name="blizzardNewsletter" value="true" id="blizzardNewsletter" tabindex="1" checked="checked" />
<span class="label-text">
Regístrate para recibir noticias y ofertas especiales de Blizzard Entertainment.<span class="input-required"></span>
</span>
</label>
</span>
</div>
<div class="submit-row">
<div class="input-left"> </div>
<div class="input-right">
<button class="ui-button button1" type="submit" id="creation-submit" tabindex="1"><span class="button-left"><span class="button-right">Crear una cuenta gratis</span></span></button>
<a class="ui-cancel "
href="http://us.battle.net/"
tabindex="1">
<span>
Cancelar </span>
</a>
</div>
</div>
<div class="form-block" id="country-change-overlay" style="display: none"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var FormMsg = {
'headerSingular': 'Se ha producido un error.',
'headerMultiple': 'Se han producido los siguientes errores:',
'fieldInvalid': 'Un campo ha sido cumplimentado de forma incorrecta o está en blanco.',
'fieldMissing': 'Este campo es obligatorio.',
'fieldsMissing': 'Por favor, rellena todos los campos obligatorios.',
'emailInfo': 'Este será el nombre de usuario empleado para iniciar sesión.',
'emailMissing': 'Por favor, introduce una dirección de correo electrónico válido.',
'emailInvalid': 'No es una dirección de e-mail válida.',
'emailMismatch': 'Deben coincidir las direcciones de e-mail.',
'passwordInvalid': 'La contraseña no cumple las directrices.',
'passwordMismatch': 'Deben coincidir las contraseñas.',
'tosDisagree': 'Debes aceptar los Términos de Uso para continuar.'
, 'emailError1': 'No es una dirección de e-mail válida.'
, 'emailError2': 'Deben coincidir las direcciones de e-mail.'
, 'passwordError1': 'La contraseña no cumple las directrices.'
, 'passwordError2': 'Deben coincidir las contraseñas.'
, 'passwordStrength0': 'Demasiado corta'
, 'passwordStrength1': 'Débil'
, 'passwordStrength2': 'Aceptable'
, 'passwordStrength3': 'Fuerte'
, 'errorsHeader': 'Se han producido los siguientes errores:'
, 'errorHeader': 'Se ha producido un error.'
, 'errorReq': 'Este campo es obligatorio.'
, 'errorMismatch': 'Un campo ha sido cumplimentado de forma incorrecta o está en blanco.'
, 'errorEmail': 'Por favor, escribe una dirección de correo electrónico válida.'
, 'errorPlease': 'Por favor, rellena todos los campos obligatorios.'
, 'errorTerms': 'Debes aceptar los Términos de Uso para continuar.'
, 'selectCountry': 'Debes seleccionar un país de residencia.'
};
//]]>
</script>
</form>
</div>
<script type="text/javascript">
//<![CDATA[
$(function() {
var inputs = new Inputs('#creation');
var creation = new Creation('#creation');
});
//]]>
</script>
<!--[if IE 6]> <script type="text/javascript" src="/account/static/local-common/js/third-party/DD_belatedPNG.js?v58"></script>
<script type="text/javascript">
//<![CDATA[
DD_belatedPNG.fix('.icon-32');
DD_belatedPNG.fix('.icon-64');
DD_belatedPNG.fix('.input-note-arrow');
//]]>
</script>
<![endif]-->
<script type="text/javascript">
//<![CDATA[
$(function() {
creation = new Creation('#creation');
analytics = new Analytics();
});
//]]>
</script>
</div>
</div>
</div>