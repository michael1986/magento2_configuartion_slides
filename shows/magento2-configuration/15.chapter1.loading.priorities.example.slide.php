<section class="slide" id="<?= getSlideId(__FILE__) ?>">
    <div>
        <p class="title">Example</p>
        
        <p>
            <span class="directory">di.xml</span> loaded from the first place 
            <span class="directory">&ltbase dir&gt/app/etc/</span>
            <br><br>            
            is merged with<br>
            <span class="directory">&ltbase dir&gtapp/code/Test/ModuleA/etc/di.xml</span>
            <br><br>
            which is also merged with<br>
            <span class="directory">&ltbase dir&gtapp/code/Test/ModuleA/etc/frontend/di.xml</span>
        </p>
    </div>
</section>