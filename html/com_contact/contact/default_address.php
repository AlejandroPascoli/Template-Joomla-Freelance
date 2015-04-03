<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Marker_class: Class based on the selection of text, none, or icons
 * jicon-text, jicon-none, jicon-icon
 */
?>
<dl class="contact-address dl-horizontal" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	<?php if (($this->params->get('address_check') > 0) &&
		($this->contact->address || $this->contact->suburb  || $this->contact->state || $this->contact->country || $this->contact->postcode)) : ?>
		<?php if ($this->params->get('address_check') > 0) : ?>
			<dt>
				<span class="glyphicon glyphicon-home" >
				</span>
			</dt>
		<?php endif; ?>

		<dd>
		<?php if ($this->contact->address && $this->params->get('show_street_address')) : ?>
				<span class="contact-street" itemprop="streetAddress">
					<?php echo $this->contact->address . '<br />'; ?>
				</span>
		<?php endif; ?>
		<?php if ($this->contact->postcode && $this->params->get('show_postcode')) : ?>
				<span class="contact-postcode" itemprop="postalCode">
					<?php echo $this->contact->postcode; ?>
				</span>
		<?php endif; ?>
		<?php if ($this->contact->suburb && $this->params->get('show_suburb')) : ?>
				<span class="contact-suburb" itemprop="addressLocality">
					<?php echo $this->contact->suburb; ?>
				</span>
		<?php endif; ?>
		<?php if ($this->contact->state && $this->params->get('show_state')) : ?>
				<span class="contact-state" itemprop="addressRegion">
					<?php echo $this->contact->state; ?>
				</span>
		<?php endif; ?>
		<?php if ($this->contact->country && $this->params->get('show_country')) : ?>
			<span class="contact-country" itemprop="addressCountry">
				<br /><?php echo $this->contact->country .'<br/>'; ?>
			</span>
		<?php endif; ?>
		</dd>
	<?php endif; ?>

<?php if ($this->contact->email_to && $this->params->get('show_email')) : ?>
	<dt>
		<span class="glyphicon glyphicon-envelope" itemprop="email">
		</span>
	</dt>
	<dd>
		<span class="contact-emailto">
			<?php echo $this->contact->email_to; ?>
		</span>
	</dd>
<?php endif; ?>

<?php if ($this->contact->telephone && $this->params->get('show_telephone')) : ?>
	<dt>
		<span class="glyphicon glyphicon-earphone" >
		</span>
	</dt>
	<dd>
		<span class="contact-telephone" itemprop="telephone">
			<?php echo nl2br($this->contact->telephone); ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->fax && $this->params->get('show_fax')) : ?>
	<dt>
		<span class="glyphicon glyphicon-print">
		</span>
	</dt>
	<dd>
		<span class="contact-fax" itemprop="faxNumber">
		<?php echo nl2br($this->contact->fax); ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->mobile && $this->params->get('show_mobile')) :?>
	<dt>
		<span class="glyphicon glyphicon-phone" >
		</span>
	</dt>
	<dd>
		<span class="contact-mobile" itemprop="telephone">
			<?php echo nl2br($this->contact->mobile); ?>
		</span>
	</dd>
<?php endif; ?>
<?php if ($this->contact->webpage && $this->params->get('show_webpage')) : ?>
	<dt>
		<span class="glyphicon glyphicon-link" >
		</span>
	</dt>
	<dd>
		<span class="contact-webpage">
			<a href="<?php echo $this->contact->webpage; ?>" target="_blank" itemprop="url">
			<?php echo JStringPunycode::urlToUTF8($this->contact->webpage); ?></a>
		</span>
	</dd>
<?php endif; ?>
</dl>

