<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <br/>
        <?php echo code('php', '
class Person {
    private $firstName, $lastName, $gender, $email;
    // __constructor()
    // getters
    // setters
}

$person = new Person(\'Sheldon\', \'Cooper\', \'M\', \'shelly@gmail.com\');
render($person);
', true, 'fs-80'); ?>
    </div>
</section>