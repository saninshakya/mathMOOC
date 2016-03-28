<!--View button render this page.--> 
<div class="row">
    <div class="col-xs-6">
        <label>Name</label>
        <div class="text-muted well well-sm" style="margin-top: 10px;">
            <?php echo (isset($activity)) ? $activity->activity_name : ''; ?>
        </div>
        <label>Description</label>
        <div class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            <?php echo (isset($activity)) ? $activity->description : ''; ?>
        </div>
        <label>Category</label>
        <div class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            <?php echo (isset($activity)) ? $activity->topic->title : ''; ?>
        </div>
        <label>Status</label>
        <div class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            <?php echo (isset($activity)) ? _status($activity->active) : ''; ?>
        </div>
    </div>
</div>