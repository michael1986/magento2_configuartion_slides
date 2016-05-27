<section class="slide full-page" id="Directives-example5.2">
    <div>
        <h2>Cache manager directive</h2>
        <div class="example-source">
            <div class="fs-65" data-ng-non-bindable>
                <pre class="code no-margin">
                <?php echo code('
// app/js/modules/agile/directives/cache_manager.js
angular.module("agile.directives")
    .directive("cacheManager",
        function($templateCache, Storage, Helper, TEMPLATES_URL) {
            return {
                scope: {},
                controller: function ($scope) {
                    $scope.clear = function() {
                        $templateCache.removeAll();
                        Storage.clearAll();
                        Helper.setAlert("success", "Cache has been cleared.")
                    }
                },
                templateUrl: TEMPLATES_URL + "/cache-manager.directive.html"
            };
        });
',
                    'javascript', false);
                ?>
                </pre>
            </div>
            <div class="next fs-65" data-ng-non-bindable>
                <hr>
                <pre class="code no-margin">
                <?php echo code('
<!-- app/templates/cache-manager.directive.html -->
<div class="cache-manager pull-right">
    <button type="button" data-ng-click="clear()">Clear Cache</button>
</div>
',
                    'html', false);
                ?>
                </pre>
            </div>
        </div>
    </div>
</section>