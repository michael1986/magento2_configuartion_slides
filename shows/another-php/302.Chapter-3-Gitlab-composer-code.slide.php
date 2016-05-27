<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <pre class="code small">
        <?php echo code('php', '
$fetch_refs = function($project) use ($fetch_ref, $repos) {
    $datas = array();
    try {
        foreach (array_merge($repos->branches($project[\'id\']),
                             $repos->tags($project[\'id\'])) as $ref) {
            foreach ($fetch_ref($project, $ref) as $version => $data) {
                $datas[$version] = $data;
            }
        }
    } catch (RuntimeException $e) {
        // The repo has no commits — skipping it.
    }
    return $datas;
};
        ', false) ?>
        </pre>
    </div>
</section>