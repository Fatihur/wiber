@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('himpunans.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.himpunans.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.himpunans.inputs.himpunan')</h5>
                    <span>{{ $himpunan->himpunan ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.himpunans.inputs.wa')</h5>
                    <span>{{ $himpunan->wa ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('himpunans.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Himpunan::class)
                <a href="{{ route('himpunans.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
