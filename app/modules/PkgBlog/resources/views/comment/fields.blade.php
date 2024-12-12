{{-- Ce fichier est maintenu par ESSARRAJ Fouad --}}  

<form action="{{ $item->id ? route('comments.update', $item->id) : route('comments.store') }}" method="POST">
    @csrf

    @if ($item->id)
        @method('PUT')
    @endif

    <div class="card-body">
        
        <div class="form-group">
            <label for="content">
                {{ ucfirst(__('PkgBlog::comment.content')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input name="content" type="input" class="form-control" id="content" placeholder="Entrez {{__('PkgBlog::comment.content')}}"
                value="{{ $item ? $item->content : old('content') }}">
            @error('content')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="user_id">
                {{ ucfirst(__('PkgBlog::comment.user_id')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input name="user_id" type="input" class="form-control" id="user_id" placeholder="Entrez {{__('PkgBlog::comment.user_id')}}"
                value="{{ $item ? $item->user_id : old('user_id') }}">
            @error('user_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="article_id">
                {{ ucfirst(__('PkgBlog::comment.article_id')) }}
                
                    <span class="text-danger">*</span>
                
            </label>
            <input name="article_id" type="input" class="form-control" id="article_id" placeholder="Entrez {{__('PkgBlog::comment.article_id')}}"
                value="{{ $item ? $item->article_id : old('article_id') }}">
            @error('article_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

    <div class="card-footer">
        <a href="{{ route('comments.index') }}" class="btn btn-default">{{ __('Core::msg.cancel') }}</a>
        <button type="submit" class="btn btn-info ml-2">{{ $item->id ? __('Core::msg.edit') : __('Core::msg.add') }}</button>
    </div>
</form>
