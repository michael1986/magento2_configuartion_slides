<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-80">
        <?php echo code('php', '
$users = [
    [\'id\' => 123, \'first_name\' => \'Max\', \'last_name\' => \'Gopey\'],
    [\'id\' => 456, \'first_name\' => \'Bob\', \'last_name\' => \'Doe\'],
    [\'id\' => 789, \'first_name\' => \'Alice\', \'last_name\' => \'Doe\'],
];
$fullNames = array_map(function($user) {
    return $user[\'first_name\'] . \' \' . $user[\'last_name\'];
}, $users);
print_r($fullNames);
        ', false) ?>
        </pre>
        <pre class="code fs-80">
        <?php echo code('php', '
Array
(
    [0] => Max Gopey
    [1] => Bob Doe
    [2] => Alice Doe
)
        ', false) ?>
        </pre>
    </div>
</section>