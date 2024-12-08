@extends('layouts.admin')
@section('title', __('app.edit') . ' ' . __('PkgProjets::tag.singular'))

@section('content')
    <div class="content-header">
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="nav-icon fas fa-table"></i>
                                {{ __('app.edit') }}
                            </h3>
                        </div>
                        <!-- Obtenir le formulaire -->
                        @include('PkgProjets::tag.fields')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
