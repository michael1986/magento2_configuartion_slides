<div class="pull-left col-1-3 no-gap">
    <label>Add contact:<br>
        <input type="text" data-ng-model="newContact" />
    </label>
    <button data-ng-click="addContact(newContact)">add</button>
    <div data-ng-show="displayHelp">
        <small>Format is wrong <small>(never do so)</small></small>
    </div>
</div>
<div class="pull-left col-1-3 no-gap">
    Filter by:<br>
    <input type="text" data-ng-model="query" />
</div>
<div class="pull-left col-1-3 no-gap">
    Filtered:
    <ul class="no-gap no-margin">
        <li data-ng-repeat="contact in contacts | filter:query">
            <small>{{ contact | contactInfo }}</small>
        </li>
    </ul>
</div>