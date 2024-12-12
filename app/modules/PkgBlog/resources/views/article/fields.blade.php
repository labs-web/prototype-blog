{{-- Ce fichier est maintenu par ESSARRAJ Fouad --}}  

<form action="{{ $item->id ? route('articles.update', $item->id) : route('articles.store') }}" method="POST">
    @csrf

    @if ($item->id)
        @method('PUT')
    @endif

    <div class="card-body">
        
        <div class="form-group">
            <label for="title">
                {{ ucfirst(__('PkgBlog::article.title')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input
                name="title"
                type="input"
                class="form-control"
                id="title"
                placeholder="{{ __('Enter PkgBlog::article.title') }}"
                value="{{ $item ? $item->title : old('title') }}">
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="slug">
                {{ ucfirst(__('PkgBlog::article.slug')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input
                name="slug"
                type="input"
                class="form-control"
                id="slug"
                placeholder="{{ __('Enter PkgBlog::article.slug') }}"
                value="{{ $item ? $item->slug : old('slug') }}">
            @error('slug')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="content">
                {{ ucfirst(__('PkgBlog::article.content')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input
                name="content"
                type="input"
                class="form-control"
                id="content"
                placeholder="{{ __('Enter PkgBlog::article.content') }}"
                value="{{ $item ? $item->content : old('content') }}">
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        

        
        <div class="form-group">
            <label for="category_id">
                {{ ucfirst(__('PkgBlog::article.category_id')) }}
                <span class="text-danger">*</span>
            </label>
            <select id="category_id" name="category_id" class="form-control">
                <option value="">Sélectionnez une option</option>
            </select>
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="user_id">
                {{ ucfirst(__('PkgBlog::article.user_id')) }}
                <span class="text-danger">*</span>
            </label>
            <select id="user_id" name="user_id" class="form-control">
                <option value="">Sélectionnez une option</option>
            </select>
            @error('user_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <div class="card-footer">
        <a href="{{ route('articles.index') }}" class="btn btn-default">{{ __('Core::msg.cancel') }}</a>
        <button type="submit" class="btn btn-info ml-2">{{ $item->id ? __('Core::msg.edit') : __('Core::msg.add') }}</button>
    </div>
</form>

<script>
    window.dynamicSelectManyToOne = [
        
        {
            fieldId: 'category_id',
            fetchUrl: "{{ route('categories.all') }}",
            selectedValue: {{ $item ? $item.category_id : 'null' }},
        },
        
        {
            fieldId: 'user_id',
            fetchUrl: "{{ route('users.all') }}",
            selectedValue: {{ $item ? $item.user_id : 'null' }},
        },
        
    ];
</script>
