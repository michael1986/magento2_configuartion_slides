<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?php echo code('php', '
class Person {
    private $firstName, $lastName, $email, $gender;

    public function rename(NameChangingRequest $request) {
        // change first/last/... names depending on request
        // throw exception if name is not male, for instance
    }

    public function changeGender(GenderChangingRequest $request) {
        // A request which contains also the new name,
        // maybe the reason or whatever is needed.
    }
}

$person->changeGender(new GenderChangingRequest(\'M\', \'New Name\'));
', true, 'fs-80'); ?>
    </div>
</section>