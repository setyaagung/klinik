<div class="form-check">
    <input type="hidden" class="form-check-input" name="urine_rutin" value="0">
    <input type="checkbox" class="form-check-input" name="urine_rutin" value="1" {{ $urine->urine_rutin == 1 ? 'checked':null}}>
    <label>
        Urine Rutin
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="protein" value="0">
    <input type="checkbox" class="form-check-input" name="protein" value="1" {{ $urine->protein == 1 ? 'checked':null}}>
    <label>
        Protein
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="reduksi" value="0">
    <input type="checkbox" class="form-check-input" name="reduksi" value="1" {{ $urine->reduksi == 1 ? 'checked':null}}>
    <label>
        Reduksi
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="kehamilan" value="0">
    <input type="checkbox" class="form-check-input" name="kehamilan" value="1" {{ $urine->kehamilan == 1 ? 'checked':null}}>
    <label>
        Kehamilan/Gravindex
    </label>
</div>
