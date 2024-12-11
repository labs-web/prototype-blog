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
            <input name="title" type="input" class="form-control" id="title" placeholder="Entrez {{__('PkgBlog::article.title')}}"
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
            <input name="slug" type="input" class="form-control" id="slug" placeholder="Entrez {{__('PkgBlog::article.slug')}}"
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
            <input name="content" type="input" class="form-control" id="content" placeholder="Entrez {{__('PkgBlog::article.content')}}"
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
            <input name="category_id" type="input" class="form-control" id="category_id" placeholder="Entrez {{__('PkgBlog::article.category_id')}}"
                value="{{ $item ? $item->category_id : old('category_id') }}">
            @error('category_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="user_id">
                {{ ucfirst(__('PkgBlog::article.user_id')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input name="user_id" type="input" class="form-control" id="user_id" placeholder="Entrez {{__('PkgBlog::article.user_id')}}"
                value="{{ $item ? $item->user_id : old('user_id') }}">
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
