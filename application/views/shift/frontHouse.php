
<div class="row">
  <div class="col-md-12">
      <h3>Front of The House</h3>
      <hr>
  </div>
</div>
   <div class="card-group h-100">
    <?php foreach($all_shift as $shift): ?>
    <div class="shift-card card rounded-0" data-id="<?= $shift->id ?>">
        <div class="card-header">
            <h2 class="d-inline-block m-0"><?= $shift->shift_type ?></h2>
            <p class="d-inline-block text-muted m-0"><?= $shift->start_time . ' - ' . $shift->end_time ?></p>
        </div>
        <div id="shift-<?= $shift->id ?>" class="card-body shift-table" ondrop="drop(event)" ondragover="allowDrop(event)">
            <?php foreach($all_employee as $employee): ?>
            <?php if($employee->shift_id == $shift->id && $employee->house=="front"): ?>
                <div id="user-<?= $employee->users_id ?>" class="card my-2 custom-card" draggable="true" ondragstart="drag(event)" data-id="<?= $employee->users_id ?>" data-house="front">
                    <div class="card-body">
                        <div class="card-text"><?= $employee->first_name . ' ' . $employee->last_name ?></div>
                    </div>
                </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach ?>
</div>

<div id="shiftDock" class="position-fixed mx-auto card card-body w-75" style="overflow-y: auto;">
    <div id="shiftDockColumn" class="shift-table card-columns h-100 w-100" data-id="null" ondrop="drop(event)" ondragover="allowDrop(event)">
        <?php foreach($employee_nosched as $employee): ?>
        <?php if($employee->shift_id==0 || $employee->shift_id==null): ?>
            <div id="user-<?= $employee->id ?>" class="card my-2 custom-card" draggable="true" ondragstart="drag(event)" data-id="<?= $employee->users_id ?>" data-house="front">
                <div class="card-body">
                    <div class="card-text"><?= $employee->first_name . ' ' . $employee->last_name ?></div>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>