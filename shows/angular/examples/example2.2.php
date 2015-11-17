<div class="pull-left col-1-2">
    Filter by:<br>
    <input type="text" data-ng-model="query" />
</div>
<div class="pull-left col-1-2">
    Filtered:
    <ul class="no-gap">
        <li data-ng-repeat="contact in contacts | filter:query">
            <small>{{ contact | contactInfo }}</small>
        </li>
    </ul>
</div>