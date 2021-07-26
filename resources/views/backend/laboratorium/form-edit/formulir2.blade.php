<div class="form-check">
    <input type="hidden" class="form-check-input" name="hemoglobin" value="0">
    <input type="checkbox" class="form-check-input" name="hemoglobin" value="1" {{ $hematologi->hemoglobin == 1 ? 'checked':null}}>
    <label>
        Hemoglobin
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="hematrokit" value="0">
    <input type="checkbox" class="form-check-input" name="hematrokit" value="1" {{ $hematologi->hematrokit == 1 ? 'checked':null}}>
    <label>
        Hematrokit
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="lekosit" value="0">
    <input type="checkbox" class="form-check-input" name="lekosit" value="1" {{ $hematologi->lekosit == 1 ? 'checked':null}}>
    <label>
        Lekosit
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="trombosit" value="0">
    <input type="checkbox" class="form-check-input" name="trombosit" value="1" {{ $hematologi->trombosit == 1 ? 'checked':null}}>
    <label>
        Trombosit
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="eritrosit" value="0">
    <input type="checkbox" class="form-check-input" name="eritrosit" value="1" {{ $hematologi->eritrosit == 1 ? 'checked':null}}>
    <label>
        Eritrosit
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="led" value="0">
    <input type="checkbox" class="form-check-input" name="led" value="1" {{ $hematologi->led == 1 ? 'checked':null}}>
    <label>
        LED
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="hitung_jenis_lekosit" value="0">
    <input type="checkbox" class="form-check-input" name="hitung_jenis_lekosit" value="1" {{ $hematologi->hitung_jenis_lekosit == 1 ? 'checked':null}}>
    <label>
        Hitung Jenis Lekosit
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="golongan_darah" value="0">
    <input type="checkbox" class="form-check-input" name="golongan_darah" value="1" {{ $hematologi->golongan_darah == 1 ? 'checked':null}}>
    <label>
        Golongan Darah
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="hematologi_rutin" value="0">
    <input type="checkbox" class="form-check-input" name="hematologi_rutin" value="1" {{ $hematologi->hematologi_rutin == 1 ? 'checked':null}}>
    <label>
        Hematologi Rutin (HB,HT, LEKO, TROMBO)
    </label>
</div>
<div class="form-check">
    <input type="hidden" class="form-check-input" name="hematologi_lengkap" value="0">
    <input type="checkbox" class="form-check-input" name="hematologi_lengkap" value="1" {{ $hematologi->hematologi_lengkap == 1 ? 'checked':null}}>
    <label>
        Hematologi Lengkap (HB,HT,LEKO,TROMBO,RI,DIFF,LED)
    </label>
</div>
