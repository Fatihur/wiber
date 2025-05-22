@php $editing = isset($produk) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="himpunan_id" label="Himpunan" required>
            @php $selected = old('himpunan_id', ($editing ? $produk->himpunan_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Himpunan</option>
            @foreach($himpunans as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="judul"
            label="Judul"
            :value="old('judul', ($editing ? $produk->judul : ''))"
            maxlength="255"
            placeholder="Judul"
            required
        />
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="kategori_id" label="Kategori" required>
            @php $selected = old('kategori_id', ($editing ? $produk->kategori_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Kategori</option>
            @foreach($kategoris as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div x-data="imageViewer('{{ $editing && $produk->gambar ? \Storage::url($produk->gambar) : '' }}')">
            <x-inputs.partials.label name="gambar" label="Gambar" /><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img :src="imageUrl" class="object-cover rounded border border-gray-200" style="width: 100px; height: 100px;" />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div class="border rounded border-gray-200 bg-gray-100" style="width: 100px; height: 100px;"></div>
            </template>

            <div class="mt-2">
                <input type="file" name="gambar" id="gambar" @change="fileChosen" />
            </div>

            @error('gambar') @include('components.inputs.partials.error') @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="deskripsi"
            label="Deskripsi"
            maxlength="255"
            placeholder="Deskripsi"
            class="summernote"
            required
        >{{ old('deskripsi', ($editing ? $produk->deskripsi : '')) }}</x-inputs.textarea>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="harga"
            label="Harga"
            :value="old('harga', ($editing ? $produk->harga : ''))"
            placeholder="Harga"
            required
        />
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="status" label="Status">
            @php $selected = old('status', ($editing ? $produk->status : 'aktif')) @endphp
            <option value="aktif" {{ $selected == 'aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="nonaktif" {{ $selected == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </x-inputs.select>
    </x-inputs.group>
</div>

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    });
</script>
