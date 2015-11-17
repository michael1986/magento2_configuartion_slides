<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <?=code('php', '
class Person {
    public $name = \'Bob\';
}
(function() {
    echo $this->name;
})->call(new Person);
// Bob
        ') ?>
    </div>
</section>