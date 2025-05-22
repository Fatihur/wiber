@php $editing = isset($himpunan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="himpunan"
            label="Himpunan"
            :value="old('himpunan', ($editing ? $himpunan->himpunan : ''))"
            maxlength="255"
            placeholder="Himpunan"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="wa"
            label="Wa"
            :value="old('wa', ($editing ? $himpunan->wa : ''))"
            maxlength="255"
            placeholder="Contoh : 628775865523"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
