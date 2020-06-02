            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input value="{{ $category->name ?? old('name') }}" type="text" name="name" id="name" class="form-control" placeholder="Name" autocomplete="off">
                <small id="nameHelp" class="form-text text-muted">Category name must include min 3 and max 25 characters.</small>
            </div>
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror

            <div class="form-group mt-5">
                <label for="parent_id">Parent Category</label>
                <select class="form-control" id="parent_id" name="parent_id">
                    <option value="">Root</option>
                @foreach($categories as $cat)
                    @if(($category->id ?? null) != $cat->id)
                    <option {{ ($category->parent_id ?? old('parent_id')) == $cat->id ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endif
                @endforeach
                </select>
                <small id="nameHelp" class="form-text text-muted">
                    Choose parent for this category. If you choose Root category will be main category.
                </small>
            </div>
            @error('parent_id')
                <p class="text-danger">{{ $message }}</p>
            @enderror