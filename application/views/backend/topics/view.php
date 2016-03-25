<!--View Page-->
<div class="row">
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group col-xs-12">
                <label>Topic</label>
                <p class="text-muted well well-sm" style="margin-top: 10px;">
                    <?php echo (isset($topic)) ? $topic->title : ''; ?>
                </p>
            </div>
            <div class="form-group col-xs-12">
                <label>Description</label>
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    <?php echo (isset($topic)) ? $topic->description : ''; ?>
                </p>
            </div>
        </div>
    </div>
</div>
<!--View Page-->