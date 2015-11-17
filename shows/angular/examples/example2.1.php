<div class="pull-left col-1-2">
    <label>Add contact:<br>
        <input type="text" data-ng-model="newContact" />
    </label>
    <button data-ng-click="addContact(newContact)">add</button>
    <div data-ng-show="displayHelp">
        <small>Format is wrong <small>(never write such messages)</small></small>
    </div>
</div>
<div class="pull-left col-1-2">
    All contacts:<br>
    <p class="no-gap no-margin">
        <small>{{ contacts | json }}</small>
    </p>
</div>