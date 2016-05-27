<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$startsWith = function ($string, $substing) {
    return stripos($string, $substing) === 0;
};
$contains = function($string, $substing) {
    return stripos($string, $substing) !== false;
};
$getFullName = function ($firstName, $lastName) {
    return $lastName . \', \' . $firstName;
};

$startsWithD = f\rpartial($startsWith, \'d\');
$isBob = f\rpartial($contains, \'bob\');

$getFullNameFromUser = function ($user) use ($getFullName) {
    return $getFullName($user[\'first_name\'], $user[\'last_name\']);
};
$getStackKey = function($name) use ($isBob) {
    return $isBob($name) ? \'bobs\' : \'alices\';
};
$putToCorrectStack = function($stacks, $value) use ($getStackKey) {
    $stacks[$getStackKey($value)][] = $value;
    return $stacks;
};
        ', false) ?>
        </pre>
    </div>
</section>