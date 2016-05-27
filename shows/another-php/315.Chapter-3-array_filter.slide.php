<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$users = [
    [\'first_name\' => \'Max\', \'last_name\' => \'Gopey\', \'company\' => \'CGI\'],
    [\'first_name\' => \'Bob\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
    [\'first_name\' => \'Alice\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
];

$CgiUsers = array_filter($users, function($user) {
    return $user[\'company\'] === \'CGI\';
});
print_r($CgiUsers);
        ', false) ?>
        </pre>
        <pre class="code fs-65">
        <?php echo code('php', '
Array (
    [0] => Array (
        [first_name] => Max
        [last_name] => Gopey
        [company] => CGI
    )
)
        ', false) ?>
        </pre>
    </div>
</section>