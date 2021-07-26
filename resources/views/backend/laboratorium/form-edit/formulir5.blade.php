<div class="form-check">
    <input type="hidden" class="form-check-input" name="widal" value="0">
    <input type="checkbox" class="form-check-input" name="widal" value="1" {{ $serologi->widal == 1 ? 'checked':null}}>
    <label>
        WIDAL
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="hbsag" value="0">
    <input type="checkbox" class="form-check-input" name="hbsag" value="1" {{ $serologi->hbsag == 1 ? 'checked':null}}>
    <label>
        HBSAg
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="swab" value="0">
    <input type="checkbox" class="form-check-input" name="swab" value="1" {{ $rapid->swab == 1 ? 'checked':null}}>
    <label>
        PCR Swab
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="antibody" value="0">
    <input type="checkbox" class="form-check-input" name="antibody" value="1" {{ $rapid->antibody == 1 ? 'checked':null}}>
    <label>
        Rapid Antibody
    </label>
</div>
