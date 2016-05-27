<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
$users = [
    [\'first_name\' => \'Max\', \'last_name\' => \'Gopey\', \'company\' => \'CGI\'],
    [\'first_name\' => \'Bob\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
    [\'first_name\' => \'Alice\', \'last_name\' => \'Doe\', \'company\' => \'Google\'],
];

$byCompany = array_reduce($users, function($result, $user) {
    @$result[$user[\'company\']][] = $user[\'first_name\'] . \' \' . $user[\'last_name\'];
    return $result;
}, []);
print_r($byCompany);
        ', false) ?>
        </pre>
        <pre class="code fs-65">
        <?php echo code('php', '
Array (
    [CGI] => Array (
        [0] => Max Gopey
    )
    [Google] => Array (
        [0] => Bob Doe
        [1] => Alice Doe
    )
)
        ', false) ?>
        </pre>
    </div>
</section>