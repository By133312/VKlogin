<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<?php
	if(isset($this->message)){
		$this->display('message');
	}
?>
<script>
function showbox(){
	document.getElementById('addition_form').style.display='block';
	return false;
}
</script>

<form action="<?php echo JRoute::_( 'index.php?option=com_vklogin' ); ?>" method="post" id="josForm" name="josForm" class="form-validate">

<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
<div class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>"><?php echo $this->escape($this->params->get('page_title')); ?></div>
<?php endif; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="contentpane">
<tr>
	<td width="30%" height="40">
		<label id="namemsg" for="name">
			<?php echo JText::_( 'Name' ); ?>:
		</label>
	</td>
  	<td>
  		<input type="text" name="name" id="name" size="40" value="<?php echo $this->escape($this->user->get( 'name' ));?>" class="inputbox required" maxlength="50" /> *
  	</td>
</tr>
<tr>
	<td height="40">
		<label id="usernamemsg" for="username">
			<?php echo JText::_( 'User name' ); ?>:
		</label>
	</td>
	<td>
		<input type="text" id="username" name="username" size="40" value="<?php echo $this->escape($this->user->get( 'username' ));?>" class="inputbox required validate-username" maxlength="25" /> *
	</td>
</tr>
<tr>
	<td height="40">
		<label id="emailmsg" for="email">
			<?php echo JText::_( 'Email' ); ?>:
		</label>
	</td>
	<td>
		<input type="text" id="email" name="email" size="40" value="<?php echo $this->escape($this->user->get( 'email' ));?>" class="inputbox required validate-email" maxlength="100" /> *
	</td>
</tr>
</table>
	<button class="button validate" type="submit"><?php echo JText::_('Register'); ?></button>
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
<a href="#" onclick="return showbox()"><?php echo JText::_('I\'m already registred');?></a>
<div id="addition_form" style="display:none;">
<form action="<?php echo JRoute::_( 'index.php?option=com_vklogin' ); ?>" method="post" class="form-validate">
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="contentpane">
<tr>
	<td width="30%" height="40">
		<label id="usermsg" for="user">
			<?php echo JText::_( 'Site User Name' ); ?>:
		</label>
	</td>
  	<td>
  		<input type="text" name="username" id="user" size="40" value="" class="inputbox required" maxlength="50" /> *
  	</td>
</tr>
<tr>
	<td width="30%" height="40">
		<label id="passwordmsg" for="password">
			<?php echo JText::_( 'Site Password' ); ?>:
		</label>
	</td>
  	<td>
  		<input type="password" id="password" name="password" size="40" value="" class="inputbox required" maxlength="50" /> *
  	</td>
</tr>
</table>
<button class="button validate" type="submit"><?php echo JText::_('Merge'); ?></button>
<input type="hidden" name="task" value="connect"/>
</form>
</div>
