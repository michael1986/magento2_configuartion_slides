<section class="slide full-page" id="Directives-example5.2">
    <div>
        <h2>Cache manager directive</h2>
        <div class="example-source">
            <div class="fs-65" data-ng-non-bindable>
                <?php echo code('
// app/js/modules/agile/directives/cache_manager.js
angular.module("agile.directives")
    .directive("cacheManager", [
        "$templateCache", "localStorageService", "Helper", "TEMPLATES_URL",
        function($templateCache, Storage, Helper, TEMPLATES_URL) {

            function controller($scope) {
                $scope.clear = function() {
                    $templateCache.removeAll();
                    Storage.clearAll();
                    Helper.setAlert("success", "Cache has been cleared.")
                }
            }

            return {
                scope: {},
                controller: ["$scope", controller],
                templateUrl: TEMPLATES_URL + "/cache-manager.directive.html"
            };
        }]);
',
                    'javascript');
                ?>
            </div>
        </div>
    </div>
</section>