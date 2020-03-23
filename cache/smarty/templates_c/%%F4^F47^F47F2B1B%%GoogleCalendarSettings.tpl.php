<?php /* Smarty version 2.6.31, created on 2020-03-23 11:09:45
         compiled from D:%5Cxampp%5Chtdocs%5Cosncrm%5Cmodules%5CAdministration/GoogleCalendarSettings.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_help', 'D:\\xampp\\htdocs\\osncrm\\modules\\Administration/GoogleCalendarSettings.tpl', 77, false),)), $this); ?>

<?php echo $this->_tpl_vars['PAGE_TITLE']; ?>


<form name="gcAuthentication"
      enctype='multipart/form-data'
      method="post"
      action="index.php?module=Administration&action=GoogleCalendarSettings&do=save"
      onSubmit="return (add_checks(document.gcAuthentication) && check_form('gcAuthentication'));"
>

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
      <tr>
          <td>
              <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"
                     accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
"
                     class="button primary"
                     type="submit"
                     name="save"
                     onclick="return check_form('ConfigureSettings');"
                     value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
                     &nbsp;
              <input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"
                     onclick="document.location.href='index.php?module=Administration&action=index'"
                     class="button"
                     type="button"
                     name="cancel"
                     value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
          </td>
      </tr>
    </table>


    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    	<tr>
    		<th style="padding: 15px" align="left" scope="row" colspan="4"><h4><?php echo $this->_tpl_vars['MOD']['LBL_GOOGLE_CALENDAR_SETTINGS_TITLE']; ?>
</h4></th>
    	</tr>
    	<tr>
    		<td style="padding-left: 15px" width="25%" scope="row" valign='middle'>
    			<?php echo $this->_tpl_vars['MOD']['LBL_GOOGLE_CALENDAR_SETTINGS_JSON']; ?>
&nbsp<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['MOD']['LBL_GOOGLE_CALENDAR_SETTINGS_JSON_HELP']), $this);?>

    		</td>
    		<td style="padding-bottom: 15px" id="google_json" width="75%" align="left"  valign='middle' colspan='3'>
    			<script type='text/javascript'>
    				<?php echo '
        				var openGoogleJson = function(event) {
        					var input = event.target;
        					var reader = new FileReader();
        					var parent_td = document.getElementById(\'google_json\');
        					reader.onload = function(){
        						console.log(reader.result.substring(0, 1024));
        						var json_input = document.getElementById("google_auth_json");
        						if (json_input == null) {
        							var json_input_text = document.createElement(\'span\');
        							json_input_text.innerHTML = \'<input type="hidden" id="google_auth_json" name="google_auth_json" />\';
        							parent_td.appendChild(json_input_text);
        						}
        						document.getElementById(\'google_auth_json\').value = btoa(reader.result.substring(0, 1024));
        					};
        					reader.readAsText(input.files[0]);
        				};
    				'; ?>

    			</script>
    			JSON file is: <span style="color:<?php echo $this->_tpl_vars['GOOGLE_JSON_CONF']['color']; ?>
"><?php echo $this->_tpl_vars['GOOGLE_JSON_CONF']['status']; ?>
</span><input type="file" accept="text/plain" onchange="openGoogleJson(event)">
    		</td>
    	</tr>
        <tr>
            <td></td>
            <td><a href="https://developers.google.com/calendar/quickstart/php" target="_blank"><?php echo $this->_tpl_vars['MOD']['LBL_GOOGLE_CALENDAR_GET_API_KEY']; ?>
</a></td>
        </tr>

    </table>

    <div style="padding-top: 2px;">
        <input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
"
               accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
"
               class="button primary"
               type="submit"
               name="save"
               onclick="return check_form('ConfigureSettings');"
               value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " />
               &nbsp;
        <input title="<?php echo $this->_tpl_vars['MOD']['LBL_CANCEL_BUTTON_TITLE']; ?>
"
               onclick="document.location.href='index.php?module=Administration&action=index'"
               class="button"
               type="button"
               name="cancel"
               value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
  " />
    </div>

    <?php echo $this->_tpl_vars['JAVASCRIPT']; ?>


</form>