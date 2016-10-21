<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php echo code('php', '
$person->addContactInformation(
    new EmailAddress(\'max.gopey@gmail.com\')
);
$person->addContactInformation(
    new LinkedInProfileUrl(\'@max.gopey\')
);
$this->redirect(new Url(\'https://stackoverflow.com\'));
'); ?>
    </div>
</section>