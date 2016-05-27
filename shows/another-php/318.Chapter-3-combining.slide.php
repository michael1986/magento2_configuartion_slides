<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code fs-65">
        <?php echo code('php', '
function getBobsAndAlicesWithD($users) {
    return array_reduce(
        array_filter(
            array_map(function($user) {
                return $user[\'last_name\'] . \', \' . $user[\'first_name\'];
            }, $users),
            function($name) {
                return stripos($name, \'d\') === 0;
            }
        ),
        function($result, $value) {
            $target = stripos($value, \'bob\') !== false ? \'bobs\' : \'alices\';
            $result[$target][] = $value;
            return $result;
        },
        [\'bobs\' => [], \'alices\' => []]
    );
}
        ', false) ?>
        </pre>
    </div>
</section>