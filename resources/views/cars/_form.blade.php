<div class="row">
    <div class="col-md-12">

        <div class="form-group row">
            <label for="model" class="col-md-3 col-form-label">Model</label>
            <div class="col-md-9">
                <input type="text" name="model" id="model" class="form-control  @error ('model') is-invalid @enderror">
                @error('model')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="year" class="col-md-3 col-form-label">Year</label>
            <div class="col-md-9">
            <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror">
            @error('year')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-3 col-form-label">Email</label>
            <div class="col-md-9">
            <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>
        </div> 

        <div class="form-group row">
            <label for="company_id" class="col-md-3 col-form-label">Manufacturer</label>
            <div class="col-md-9">
                <select name="company_id" id="company_id" class="form-control @error('company_id') is-invalid @enderror">
                @foreach($manufacturers as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
                </select>
                @error('company_id')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <hr>

        <div class="form-group row mb-0">
            <div class="col-md-9 offset-md-3">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('cars.index') }}" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </div>
    </div>
</div>