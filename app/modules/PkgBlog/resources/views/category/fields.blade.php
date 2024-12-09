{{-- Ce fichier est maintenu par ESSARRAJ Fouad --}}  

<form action="{{ $item->id ? route('categories.update', $item->id) : route('categories.store') }}" method="POST">
    @csrf

    @if ($item->id)
        @method('PUT')
    @endif

    <div class="card-body">
        
        <div class="form-group">
            <label for="name">
                {{ ucfirst(__('PkgBlog::category.name')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input name="name" type="input" class="form-control" id="name" placeholder="Entrez {{__('PkgBlog::category.name')}}"
                value="{{ $item ? $item->name : old('name') }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">
                {{ ucfirst(__('PkgBlog::category.description')) }}
                
            </label>
            <input name="description" type="input" class="form-control" id="description" placeholder="Entrez {{__('PkgBlog::category.description')}}"
                value="{{ $item ? $item->description : old('description') }}">
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <div class="card-footer">
        <a href="{{ route('categories.index') }}" class="btn btn-default">{{ __('Core::app.cancel') }}</a>
        <button type="submit" class="btn btn-info ml-2">{{ $item->id ? __('Core::app.edit') : __('Core::app.add') }}</button>
    </div>
</form>
